<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;
use DateTime;
use App\Models\Contract;
use Illuminate\Bus\Batchable;

class Migration implements ShouldQueue
{
  use Dispatchable;
  use Batchable;
  use InteractsWithQueue;
  use Queueable;
  use SerializesModels;

  private $clients;
  public $failOnTimeout = false;
  public $timeout = 120000;
  /**
   * Create a new job instance.
   *
   * @return void
   */
  public function __construct($clients)
  {
    $this->clients = $clients;
  }

  /**
   * Execute the job.
   *
   * @return void
   */
  public function handle()
  {
    try {
      DB::beginTransaction();
      $contracts = $this->clients;
      foreach ($contracts as $ctr) {
        $contract = Contract::where('code', $ctr->contrato)->first();
        $contract->plan =  $ctr->Plan;
        $contract->save();
      }
      DB::commit();
    } catch (Exception $e) {
      DB::rollback();
      Log::error($e);
    }
  }
  public function validateDate($date, $format = 'Y-m-d')
  {
    $d = DateTime::createFromFormat($format, $date);
    // The Y ( 4 digits year ) returns TRUE for any integer with any number of digits so changing the comparison from == to === fixes the issue.
    return $d && $d->format($format) === $date;
  }
}

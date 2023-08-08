<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Jobs\ProcessDb;
use App\Jobs\Migration;
use Illuminate\Bus\Batch;
use Illuminate\Support\Facades\Bus;

class PreviSeeder extends Seeder
{
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run()
  {
    try {
      $contractIds = DB::select(DB::raw("select code from contracts"));
      $arr = '';
      foreach ($contractIds as $ctr) {
        $arr .= "'" . $ctr->code . "'" . ',';
      }
      $arr = substr_replace($arr, "", -1);
      $contracts = DB::connection('previsoft')->select(DB::raw("select  planesconvenio.Plan from clientes left join planesconvenio on planesconvenio.id = clientes.codplan where clientes.contrato in (
                $arr
            )"));

      $data = array_chunk($contracts, 1000);
      $batch = Bus::batch([])->dispatch();
      foreach ($data as $value) {
        $batch->add(new Migration($value));
      }
      $this->command->info('Hecha la migracion');
    } catch (\Throwable $th) {
      DB::rollback();
      throw $th;
    }
  }
}

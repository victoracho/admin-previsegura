<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\Account;
use App\Models\Contract;
use App\Models\ContractLink;
use Carbon\Carbon;
use App\Models\User;
use App\Models\ContractAssistance;
use Hashids\Hashids;
use Illuminate\Bus\Batchable;
use Illuminate\Support\Str;


class ProcessCsv implements ShouldQueue
{
    use Dispatchable, Batchable, InteractsWithQueue, Queueable, SerializesModels;

    public $clientData;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($clientData)
    {
        $this->clientData = $clientData;

    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {   
        $user = null;
        $contractLink = null;
        foreach ($this->clientData as $client) {
            // $contract = Contract::where('number_account', $client['numero_cuenta'])->get();
            // if($contract->count()){
                // $user = User::where('email', $client['email'])->get();
                // if(!$user->count()){
                    // }
                    $user = new User;
                    $user->firstnames = $client['nombres'];
                    $user->lastnames = $client['apellidos'];
                    $user->doc = $client['documento'];
                    $user->address = $client['direccion'];
                    $user->email = Str::random(10);
                    $user->phone_number = Str::random(10);
                    $user->save();
                    $user->refresh();

                // $account = Account::where('number_account', $client['numero_cuenta'])->get();
                // if(!$account->count()){
                    $account = new Account;
                    $account->user_id = $user->id;
                    // $numberAccount = new Hashids('assistant-account', 20);
                    $account->number_account = '123456';
                    
                    $account->save();
    
                    $contract = new Contract;
                    $contract->user_id = $user->id;
                    $contract->account_id = $account->id;
                    $contract->save();
                // }

                $assistances = explode(",", $client['asistencias']);
                
                foreach($assistances as $assistance){
                    $contractAssistance = new ContractAssistance;
                    $contractAssistance->contract_id = $contract->id;
                    $contractAssistance->assistance_id = $assistance;
                    $contractAssistance->save(); 
                }

                $token = new Hashids('assistant-contract', 20);
                $token = $token->encode($contract->id);
                $contractLink = new ContractLink;
                $newDateTime = Carbon::now()->addDays(5);
                $contractLink->expires_at = $newDateTime;
                $contractLink->contract = $contract->id;
                $contractLink->token = $token;
                $contractLink->save();
                $contractLink->refresh();
                $link = 'previsegura.com/directDebit?contractLink='.$contractLink;
            // }    
        }
        $token = new Hashids('assistant-contract', 20);
        $part = $token->decode($contractLink->token);
        $part = $part[0];
        $link = 'previsegura.com/directDebit?='.$part;

        $user->sendCreatedUser($link);
    }



}

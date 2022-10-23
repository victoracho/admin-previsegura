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
use App\Models\User;
use App\Models\ContractAssistance;
use Hashids\Hashids;
use Illuminate\Bus\Batchable;


use Exception;

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
        foreach ($this->clientData as $client) {
            $contract = Contract::where('number_account', $client['numero_cuenta'])->first();
            if(!$contract){
                $user = User::where('email', $client['email'])->first();
                if(!$user){
                    $user = new User;
                    $user->firstnames = $client['nombres'];
                    $user->lastnames = $client['apellidos'];
                    $user->doc = $client['documento'];
                    // $user->address = $client['direccion'];
                    $user->email = $client['email'];
                    // $user->phone_number = $client['telefono'];
                    $user->save();
                    $user->refresh();
                }

                $account = Account::where('number_account', $client['numero_cuenta'])->first();
                if(!$account){
                    $account = new Account;
                    $account->user_id = $user->id;
                    // $numberAccount = new Hashids('assistant-account', 20);
                    $account->number_account = '123456';
                    
                    $account->save();
                    $account->refresh();
    
                    $contract = new Contract;
                    $contract->user_id = $user->id;
                    $contract->account_id = $account->id;
                    $contract->save();
                    $contract->refresh();
                }

                $assistances = explode(",", $client['asistencias']);
                
                foreach($assistances as $assistance){
                    $contractAssistance = new ContractAssistance;
                    $contractAssistance->contract_id = $contract->id;
                    $contractAssistance->assistance_id = $assistance;
                    $contractAssistance->save(); 
                }
            
                

            }

        }
    }
}

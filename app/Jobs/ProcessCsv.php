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
use App\Models\Beneficiary;
use App\Models\ContractAssistance;
use Hashids\Hashids;
use Illuminate\Bus\Batchable;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class ProcessCsv implements ShouldQueue
{
    use Dispatchable, Batchable, InteractsWithQueue, Queueable, SerializesModels;

    public $clientData;
    public $fileType;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($clientData, $fileType)
    {
        $this->clientData = $clientData;
        $this->fileType = $fileType;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {   
        try{
        DB::beginTransaction();
        $user = null;
        $contractLink = null;
        if($this->fileType == 'contracts'){
            foreach ($this->clientData as $client) {
                $user = new User;
                $user->firstnames = $client['nombres'];
                $user->lastnames = $client['apellidos'];
                $user->doc = $client['documento'];
                $user->doc_type = $client['tipo_documento'];                    
                // $user->address = $client['direccion'];
                $user->email = $client['email'];
                if($client['email_mod']){
                    $user->email = $client['email_mod'];
                }

                $user->phone_number = $client['codigo_area_uno'].$client['numero_telefono_uno'];
                if($client['codigo_area_uno_mod']){
                    $user->phone_number = $client['codigo_area_uno_mod'].$client['numero_telefono_uno_mod'];
                }
                
                $user->cellphone = $client['codigo_celular'].$client['numero_celular'];
                if($client['codigo_celular_mod']){
                    $user->cellphone = $client['codigo_celular_mod'].$client['numero_celular_mod'];
                }
                $user->save();
                $user->refresh();
                    
                $account = Account::where('number_account', $client['numero_cuenta'])->first();
                if(!$account){
                    $account = new Account;
                    $account->user_id = $user->id;
                    $numberAccount = new Hashids('assistant-account', 20);
                    $account->number_account = $numberAccount->encode($client['numero_cuenta']);
                    $account->save();
                }
                $contract = new Contract;
                $contract->user_id = $user->id;
                $contract->registration_date = $client['fecha_registro'].$client['hora_registro'];
                $contract->account_id = $account->id;
                $contract->save();
                if(isset($client['asistencias'])){
                    $assistances = explode(",", $client['asistencias']);
                    foreach($assistances as $assistance){
                        $contractAssistance = new ContractAssistance;
                        $contractAssistance->contract_id = $contract->id;
                        $contractAssistance->assistance_id = $assistance;
                        $contractAssistance->save(); 
                    }
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
                // $link = 'previsegura.com/directDebit?contractLink='.$contractLink;
                // $user->sendCreatedUser($link);
                
            }
        }
        if($this->fileType == 'beneficiaries'){
            foreach ($this->clientData as $client) {     
                $user = new User;
                $user->firstnames = $client['firstnames'];
                $user->lastnames = $client['lastnames'];
                $user->email = $client['firstnames'].'@gmail.com';
                $user->cellphone = '1234567';
                $user->save();
            }
        }
        $token = new Hashids('assistant-contract', 20);
        $part = $token->decode($contractLink->token);
        $part = $part[0];
        $link = 'previsegura.com/directDebit?='.$part;
        $user = User::where('email', $client['email'])->first();
        $user->sendCreatedUser($link);
        DB::commit();
        } catch(Exception $e){
            DB::rollback();
            Log::error($e);
        }
    }



}

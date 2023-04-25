<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;
use App\Models\City;
use App\Models\CountryState;
use App\Models\User;
use App\Models\Profile;
use App\Models\Payment;
use App\Models\FamilyMember;
use App\Models\ContractAssistance;
use App\Models\Contract;
use App\Models\Assistance;

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

            $contracts = DB::connection('previsoft')->select(DB::raw("SELECT * FROM clientes limit 100"));
            $users = [];
            foreach ($contracts as $contract) {
                $user = User::where('doc', $contract->CI)->first();
                if (!$user) {
                    $user = new User;
                    $user->email = $contract->Email;
                    $user->doc = $contract->CI;
                    $user->password = bcrypt($contract->CI);
                    $user->save();
                    $user->refresh();
                    $user->sendCreatedUser();
                    $this->command->info('usuario con id' . $user->id . 'creado');
                }
                $users[] = $user;

                $profile = new Profile;
                $profile->user_id = $user->id;
                $profile->doc = $user->doc;
                $profile->email = $user->email;
                $profile->country_id = 242;
                $profile->firstnames = $contract->Nombres;
                $profile->lastnames = $contract->PApellido . ' ' . $contract->SApellido;
                $profile->birthdate = $contract->FNacimiento;
                $profile->address = $contract->Direccion1;
                $profile->secondary_address = $contract->Direccion2;
                $profile->main_phone = $contract->Telefono1;
                $profile->optional_phone = $contract->Telefono2;
                $profile->mobile_phone = $contract->Movil;
                $profile->rif = $contract->Rif;
                $profile->dependency =  $contract->Empresa;
                $profile->civil_status = $contract->edocivil;
                $profile->gender = $contract->SEXO == 'M' ? 1 : ($contract->SEXO == 'F' ? 0 : null);
                $city = City::where('name', 'like', '%' . $contract->Ciudad . '%')->first();
                $profile->city_id = $city ? $city->id : null;
                $state = CountryState::where('name', 'like', '%' . $contract->Estado . '%')->first();
                $profile->state_id = $state ? $state->id : null;
                $profile->save();
                $this->command->info('perfil con id' . $profile->id . 'creado');

                $contr = new Contract;
                $contr->status = $contract->Estatus;
                $contr->status_date = $contract->FModificado;
                $contr->registration_date = $contract->Emision;
                $contr->covenant = $contract->Convenio;
                $contr->code = $contract->Contrato;
                $contr->plan = $contract->codplan;
                // $contr->retirement_date;
                // $contr->assistance_id = 4;
                $contr->bank = $contract->Banco;
                $contr->emission = $contract->Emision;
                $contr->expire_date = $this->validateDate($contract->Vencimiento) ? $contract->Vencimiento : null;
                $contr->fee_quantity = $contract->Cuotas;
                $contr->modality = $contract->Frecuencia;
                $contr->payment_type = $contract->EstiloPago;
                $contr->sales = $contract->Venta;
                $contr->user_id = $user->id;
                $contr->save();
                $this->command->info('contrato con id' . $contr->id . 'creado');


                $familyMembers = DB::connection('previsoft')->select(DB::raw("SELECT * FROM familiares where Contrato = '$contr->code'"));
                if (count($familyMembers) > 0) {
                    foreach ($familyMembers as $family) {
                        $profile = new Profile;
                        $profile->firstnames = $family->NombreF;
                        $profile->doc = $family->CIF;
                        $profile->gender = $family->SexoF == 'M' ? 1 : ($family->SexoF == 'F' ? 0 : null);
                        // $profile->gender = 0;
                        $profile->birthdate = $family->NacimientoF;
                        $profile->save();

                        $familyMember = new FamilyMember();
                        $familyMember->bond = $family->Parentesco;
                        $familyMember->user_id = $user->id;
                        $familyMember->profile_id = $profile->id;
                        $familyMember->save();
                        $this->command->info('family con id' . $familyMember->id . 'creado');

                        $contractAssistance = new ContractAssistance();
                        $contractAssistance->inscription = $family->InscripcionF;
                        $contractAssistance->contract_id = $contr->id;
                        // $contractAssistance->assistance_id = 4;
                        $contractAssistance->additional_amount =  $family->MAdicionalF;
                        $contractAssistance->coverage_date = $family->FCoberturaF;
                        $contractAssistance->family_member_id = $familyMember->id;
                        $contractAssistance->profile_id = $profile->id;
                        $contractAssistance->save();
                        $this->command->info('contract assistance con id' . $contractAssistance->id . 'creado');
                    }
                }

                if (count($familyMembers) == 0) {
                    $contractAssistance = new ContractAssistance();
                    $contractAssistance->inscription = $contract->Inscripcion;
                    $contractAssistance->contract_id = $contr->id;
                    $contractAssistance->assistance_id = 4;
                    $contractAssistance->additional_amount =  $contract->MAdicional;
                    // $contractAssistance->coverage_date = $contract->FCoberturaF;
                    // $contractAssistance->family_member_id = $familyMember->id;
                    $contractAssistance->profile_id = $profile->id;
                    $contractAssistance->save();
                    $this->command->info('contract assistance con id' . $contractAssistance->id . 'creado');
                }

                $payments = DB::connection('previsoft')->select(DB::raw("SELECT * FROM pagos where Contrato = '$contr->code'"));
                if (count($payments) > 0) {
                    foreach ($payments as $payment) {
                        $pago = new Payment();
                        $pago->amount = $payment->SubTotal;
                        $pago->expire_date = $payment->VencimientoC;
                        // $payment->status = 'PAGADO';
                        $pago->iva = $payment->Iva;
                        $pago->payment_date = $payment->Cancelacion;
                        $pago->from = $payment->Desde;
                        $pago->to = $payment->Hasta;
                        $pago->payment_number = $payment->IdCuota;
                        $pago->contract_id = $contr->id;
                        $pago->save();
                        $this->command->info('pago con id' . $contractAssistance->id . 'creado');
                    }
                }
                DB::commit();
            }
            $this->command->info('creados los usuarios y contratos');
        } catch (\Throwable $th) {
            DB::rollback();
            throw $th;
        }
    }
    public function sendBulkMail(Request $request)
    {
        $details = [
            'subject' => 'Weekly Notification'
        ];

        // send all mail in the queue.
        $job = (new AppJobsSendBulkQueueEmail($details))
            ->delay(
                now()
                    ->addSeconds(2)
            );

        dispatch($job);

        echo "Bulk mail send successfully in the background...";
    }
    public function validateDate($date, $format = 'Y-m-d')
    {
        $d = DateTime::createFromFormat($format, $date);
        // The Y ( 4 digits year ) returns TRUE for any integer with any number of digits so changing the comparison from == to === fixes the issue.
        return $d && $d->format($format) === $date;
    }
}

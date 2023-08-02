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
use App\Models\City;
use App\Models\CountryState;
use App\Models\User;
use App\Models\Role;
use App\Models\Profile;
use App\Models\Payment;
use App\Models\FamilyMember;
use App\Models\ContractAssistance;
use App\Models\Contract;
use Illuminate\Bus\Batchable;

class ProcessDb implements ShouldQueue
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
            foreach ($contracts as $contract) {
                $user = User::where('doc', $contract->CI)->first();
                if (!$user) {
                    $role = Role::where('slug', 'role-user')->get();
                    $user = new User();
                    $user->email = $contract->Email;
                    if ($user->email == '' || $user->email == '0' || $user->email == 'NOPOSEE@GMAIL.COM') {
                        $user->email = null;
                    }
                    if (!filter_var($user->email, FILTER_VALIDATE_EMAIL)) {
                        $user->email = null;
                    }
                    $user->doc = $contract->CI;
                    if ($user->doc == '0') {
                        $user->doc = null;
                    }
                    if ($user->doc == '') {
                        $user->doc = null;
                    }
                    $user->password = bcrypt($contract->CI);
                    $user->save();
                    $user->refresh();
                    $user->roles()->attach($role);
                    $user->save();
                    // $user->sendCreatedUser();
                }

                $profile = new Profile();
                $profile->user_id = $user->id;
                $profile->doc = $user->doc;
                if ($user->doc == '' || $user->doc == '0') {
                    $profile->doc = null;
                }
                $profile->email = $user->email;
                if ($user->email == '' || $user->email == '0' || $user->email == 'NOPOSEE@GMAIL.COM') {
                    $profile->email = null;
                }
                if (!filter_var($user->email, FILTER_VALIDATE_EMAIL)) {
                    $profile->email = null;
                }
                $profile->country_id = 242;
                $profile->firstnames = $contract->Nombres;
                $profile->lastnames = $contract->PApellido . ' ' . $contract->SApellido;
                $profile->birthdate = $contract->FNacimiento;
                $profile->address = $contract->Direccion1 == '' ? null : $contract->Direccion1;
                $profile->secondary_address = $contract->Direccion2 == '' ? null : $contract->Direccion2;
                $profile->main_phone = $contract->Telefono1;
                if ($contract->Telefono1 == '' || $contract->Telefono1 == '0000-') {
                    $profile->main_phone = null;
                }
                $profile->work_phone = $contract->Telefono2;
                if ($contract->Telefono2 == '' || $contract->Telefono2 == '0000-') {
                    $profile->work_phone = null;
                }
                $profile->mobile_phone = $contract->Movil;
                if ($contract->Movil == '' || $contract->Movil == '0000-') {
                    $profile->mobile_phone = null;
                }
                $profile->rif = $contract->Rif;
                if ($contract->Rif == '' || $contract->Rif == '0000-') {
                    $profile->rif = null;
                }

                $profile->dependency =  $contract->Empresa;
                $profile->civil_status = $contract->edocivil;
                $profile->gender = $contract->SEXO == 'M' ? 1 : ($contract->SEXO == 'F' ? 0 : null);
                $city = City::where('name', 'like', '%' . $contract->Ciudad . '%')->first();
                $profile->city_id = $city ? $city->id : null;
                $state = CountryState::where('name', 'like', '%' . $contract->Estado . '%')->first();
                $profile->state_id = $state ? $state->id : null;
                $profile->save();

                $contr = Contract::where('code', $contract->Contrato)->first();
                if ($contr) {
                    Profile::where('id', $contr->profile_id)->delete();
                    $contractAssistances = ContractAssistance::where('contract_id', $contr->id)->get();
                    foreach ($contractAssistances as $asis) {
                        FamilyMember::where('id', $asis->family_member_id)->delete();
                        Profile::where('id', $asis->profile_id)->delete();
                    }
                    ContractAssistance::where('contract_id', $contr->id)->delete();
                    Payment::where('contract_id', $contr->id)->delete();
                    $contr->delete();
                }
                $contr = new Contract();
                $contr->status = $contract->Estatus;
                $contr->status_date = $contract->FModificado;
                $contr->registration_date = $contract->Inscripcion;
                $contr->covenant = $contract->Convenio;
                $contr->coffin = $contract->Ataud;
                $contr->funerary = $contract->Funeraria;
                $contr->pit = $contract->Fosa;
                $contr->code = $contract->Contrato;
                $contr->plan = $contract->Producto;
                $contr->coverage_date = $contract->FEspera;
                $contr->initial_payment = $contract->PagoInicial;
                switch ($contract->asistencia) {
                    case 'FUNERARIO':
                        $contr->assistance_id = 1;
                        break;
                    case 'MASCOTAS':
                        $contr->assistance_id = 8;
                        break;
                    case 'MEDICO':
                        $contr->assistance_id = 4;
                        break;
                    case 'BENEFICIO DE VIDA':
                        $contr->assistance_id = 2;
                        break;
                    case 'ODONTOLOGIA':
                        $contr->assistance_id = 5;
                        break;
                    default:
                        $contr->assistance_id = 4;
                        break;
                }
                // $contr->assistance_id = 4;
                $contr->bank_id = 1;
                $contr->bank = $contract->Banco;
                $contr->emission = $contract->Emision;
                $contr->expire_date = $this->validateDate($contract->Vencimiento) ? $contract->Vencimiento : null;
                $contr->fee_quantity = $contract->Cuotas;
                $contr->modality = $contract->Frecuencia;
                $contr->payment_type = $contract->EstiloPago;
                $contr->sales = $contract->Venta;
                $contr->user_id = $user->id;
                $contr->save();
                $contr->refresh();

                $familyMembers = DB::connection('previsoft')->select(DB::raw("SELECT * FROM familiares where Contrato = '$contr->code'"));
                if (count($familyMembers) > 0) {
                    foreach ($familyMembers as $family) {
                        $profile = new Profile();
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

                        $contractAssistance = new ContractAssistance();
                        $contractAssistance->inscription = $family->InscripcionF;
                        $contractAssistance->contract_id = $contr->id;
                        $contractAssistance->assistance_id = 4;
                        $contractAssistance->additional_amount =  $family->MAdicionalF;
                        $contractAssistance->coverage_date = $family->FCoberturaF;
                        $contractAssistance->family_member_id = $familyMember->id;
                        $contractAssistance->profile_id = $profile->id;
                        $contractAssistance->save();
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
                }

                $payments = DB::connection('previsoft')->select(DB::raw("SELECT * FROM pagos where Contrato = '$contr->code'"));
                if (count($payments) > 0) {
                    foreach ($payments as $payment) {
                        $pago = new Payment();
                        $pago->amount = $payment->SubTotal;
                        $pago->expire_date = $payment->VencimientoC;
                        $pago->total_calculated = $payment->TotalC;
                        // $payment->status = 'PAGADO';
                        $pago->iva = $payment->Iva;
                        $pago->payment_date = $payment->Cancelacion;
                        $pago->from = $payment->Desde;
                        $pago->to = $payment->Hasta;
                        $pago->payment_number = $payment->IdCuota;
                        $pago->contract_id = $contr->id;
                        $pago->save();
                    }
                }
                DB::commit();
            }
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

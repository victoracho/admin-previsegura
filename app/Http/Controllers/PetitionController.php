<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use DateTime;
use Illuminate\Http\Request;
use App\Models\Petition;
use App\Models\Plan;
use App\Models\City;
use App\Models\CountryState;
use App\Models\User;
use App\Models\Profile;
use App\Models\Payment;
use App\Models\FamilyMember;
use App\Models\ContractAssistance;
use App\Models\Contract;
use App\Models\Assistance;
use App\Models\AssistancePetition;
use Inertia\Inertia;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class PetitionController extends Controller
{
    public function index()
    {
        try {
            $petitions = Petition::with(['user', 'plan'])->orderBy('created_at', 'DESC')->get();
            $petitions = $petitions->map(function ($petition) {
                $obj = (object)[];
                $obj->id = $petition->id;
                $obj->doc = null;
                $obj->email = null;
                $obj->phone_number = null;
                $obj->names = null;
                $obj->date = null;
                $obj->plan = null;
                $obj->assistances = 'Ver';
                $user = Profile::where('user_id', $petition->user->id)->first();
                if ($user) {
                    $names = $user->firstnames . ' ' . $user->lastnames;
                    $obj->doc = $user->doc;
                    $obj->email = $user->email;
                    $obj->phone_number = $user->main_phone;
                    $obj->names = $names;
                    $obj->date = Carbon::parse($petition->created_at);
                    $obj->date = $obj->date->format('d m Y');
                    $obj->assistances = 'Ver';
                    $plan = clone $petition->plan;
                    $obj->plan = $plan->name;
                }
                return $obj;
            });
            $plans = Plan::all();
            $assistances = Assistance::all();
            $plans = $plans->map(function ($plan) {
                return $plan->name;
            });

            return Inertia::render('Petition/Index', [
                'petitions' => $petitions,
                'plans' => $plans,
                'assistances' => $assistances
            ]);
        } catch (\Throwable $th) {
            DB::rollback();
            throw $th;
        }
    }

    public function getAssistances(Request $request)
    {
        try {
            $petition = Petition::find($request->id);
            $assistances = Assistance::all();
            $data['assistances'] = $petition->assistances;
            $arr = [];
            foreach ($data['assistances'] as $assistance) {
                $arr[] = strval($assistance->id);
            }
            $data['arr'] = $arr;

            return response()->json([
                'success' => 'true',
                'error' => 'null',
                'data' => $arr,
            ], 200);
        } catch (\Throwable $th) {
            DB::rollback();
            throw $th;
        }
    }
    public function test(Request $request)
    {

        try {

            $contracts = DB::connection('previsoft')->select(DB::raw("SELECT * FROM clientes limit 100"));
            dd($contracts);
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

                        $contractAssistance = new ContractAssistance();
                        $contractAssistance->inscription = $family->InscripcionF;
                        $contractAssistance->contract_id = $contr->id;
                        // $contractAssistance->assistance_id = 4;
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
                        $payment = new Payment();
                        $payment->amount = $payment->SubTotal;
                        $payment->expire_date = $payment->VencimientoC;
                        // $payment->status = 'PAGADO';
                        $payment->iva = $payment->Iva;
                        $payment->payment_date = $payment->Cancelacion;
                        $payment->from = $payment->Desde;
                        $payment->to = $payment->Hasta;
                        $payment->payment_number = $payment->IdCuota;
                        $payment->contract_id = $contr->id;
                        $payment->save();
                    }
                }
                DB::commit();
            }
            echo 'creados los contratos y usuarios';

            foreach ($users as $user) {
                $user->sendCreatedMail();
            }

            echo 'enviados los correos';
        } catch (\Throwable $th) {
            DB::rollback();
            throw $th;
        }
    }
    public function validateDate($date, $format = 'Y-m-d')
    {
        $d = DateTime::createFromFormat($format, $date);
        // The Y ( 4 digits year ) returns TRUE for any integer with any number of digits so changing the comparison from == to === fixes the issue.
        return $d && $d->format($format) === $date;
    }
    public function deletePetition(Request $request)
    {
        try {
            $id = $request->id;
            $petition = Petition::find($id);
            if ($petition) {
                $petition->delete();
            }
            return response()->json([
                'success' => 'true',
                'error' => 'null',
            ], 200);
        } catch (\Throwable $th) {
            DB::rollback();
            throw $th;
        }
    }


    public function getInfo(Request $request)
    {
        try {
            $petition = Petition::find($request->id);
            $assistances = Assistance::all();
            $data['assistances'] = $petition->assistances;
            $arr = [];
            foreach ($data['assistances'] as $assistance) {
                $arr[] = strval($assistance->id);
            }
            $data['arr'] = $arr;
            $assistances = $assistances->map(function ($assistance) use ($arr) {
                $obj = (object)[];
                $obj->value = $assistance->id;
                $obj->label = $assistance->name;
                return $obj;
            });
            $data['assistances'] = $assistances;
            $data['user'] = Profile::where('user_id', $petition->user->id)->first();
            $data['plan'] = $petition->plan;
            return response()->json([
                'success' => 'true',
                'error' => 'null',
                'data' => $data
            ], 200);
        } catch (\Throwable $th) {
            DB::rollback();
            throw $th;
        }
    }


    public function sendAssistances(Request $request)
    {
        try {
            $petition = Petition::find($request->id);
            $assistances = $petition->assistancePetitions;
            foreach ($assistances as $assistance) {
                $assistance->delete();
            }
            $assistances = $request->assistances;
            if ($request->assisFuneraria) {
                $assis = new AssistancePetition;
                $assis->petition_id = $request->id;
                $assis->assistance_id = 1;
                $assis->save();
            }

            if ($request->assisFinanciera) {
                $assis = new AssistancePetition;
                $assis->petition_id = $request->id;
                $assis->assistance_id = 2;
                $assis->save();
            }

            if ($request->assisMedica) {
                $assis = new AssistancePetition;
                $assis->petition_id = $request->id;
                $assis->assistance_id = 3;
                $assis->save();
            }

            if ($request->assisCitas) {
                $assis = new AssistancePetition;
                $assis->petition_id = $request->id;
                $assis->assistance_id = 4;
                $assis->save();
            }


            if ($request->assisOdontologica) {
                $assis = new AssistancePetition;
                $assis->petition_id = $request->id;
                $assis->assistance_id = 5;
                $assis->save();
            }


            if ($request->assisHospitalizacion) {
                $assis = new AssistancePetition;
                $assis->petition_id = $request->id;
                $assis->assistance_id = 6;
                $assis->save();
            }


            if ($request->assisEnfermedad) {
                $assis = new AssistancePetition;
                $assis->petition_id = $request->id;
                $assis->assistance_id = 7;
                $assis->save();
            }

            if ($request->assisMascotas) {
                $assis = new AssistancePetition;
                $assis->petition_id = $request->id;
                $assis->assistance_id = 8;
                $assis->save();
            }

            if ($request->user) {
                $user = Profile::where('user_id', $petition->user->id)->first();
                $user->firstnames = $request->user['firstnames'];
                $user->lastnames = $request->user['lastnames'];
                $user->email = $request->user['email'];
                $user->user_type = $request->user['type'];
                $user->main_phone = $request->user['phone_number'];
                $user->save();
            }

            if ($request->plan) {
                $plan = $request->plan;
                if ($plan == 'Individual') {
                    $plan = 1;
                }

                if ($plan == 'Corporativo') {
                    $plan = 2;
                }

                if ($plan == 'Grupal') {
                    $plan = 3;
                }

                if ($plan == 'Banca Asistencia') {
                    $plan = 4;
                }
                $petition->plan_id = $plan;
                $petition->save();
            }


            return response()->json([
                'success' => 'true',
                'error' => 'null'
            ], 200);
        } catch (\Throwable $th) {
            DB::rollback();
            throw $th;
        }
    }

    public function savePetition(Request $request)
    {
        try {
            DB::beginTransaction();

            // $request->validate([
            //     'firstnames' => 'required|min:3|max:150',
            //     'lastnames' => 'required|min:3|max:150',
            //     'email' => 'required|email|max:255|regex:/(.*)@myemail\.com/i|unique:users',
            //     'phone_number' => 'required|numeric|min:10',
            //     'user_type' => 'required',
            //     'doc' => 'required',
            //     'plan' => 'required'
            // ]);

            $user = User::where('email', $request->email)->first();
            if (!$user) :
                $user = new User;
                $user->email = $request->email;
                $user->doc = $request->identification;
                $user->save();
                $user->refresh();

                $profile = new Profile;
                $profile->firstnames = $request->firstnames;
                $profile->lastnames = $request->lastnames;
                $profile->user_id = $user->id;
                $profile->doc = $request->identification;
                $profile->email = $request->email;
                $profile->main_phone = $request->phone_number;
                $profile->user_type = $request->client == 1 ? 'nuevo' : 'viejo';
                $profile->save();
            endif;

            $petition = new Petition;
            $petition->user_id = $user->id;
            $petition->plan_id = $request->plan_id;
            $petition->save();
            $petition->refresh();

            $assistances = $request->assistances;
            foreach ($assistances as $assistance) {
                $assistancePetition = new AssistancePetition;
                $assistancePetition->petition_id = $petition->id;
                $assistancePetition->assistance_id = $assistance;
                $assistancePetition->save();
            }
            DB::commit();
            // $petition->sendCreatedMail();
            return response()->json([
                'success' => 'true',
                'error' => 'null'
            ], 200);
        } catch (\Throwable $th) {
            DB::rollback();
            throw $th;
        }
    }

    public function getLandingPageData()
    {
        try {
            $assistances = Assistance::all();
            $assistances = $assistances->map(function ($assistance) {
                $obj = (object)[];
                $obj->id = $assistance->id;
                $obj->name = $assistance->name;
                return $obj;
            });

            $plans = Plan::all();
            $plans = $plans->map(function ($plan) {
                $obj = (object)[];
                $obj->id = $plan->id;
                $obj->name = $plan->name;
                return $obj;
            });
            $data = [];
            $data['plans'] = $plans;
            $data['assistances'] = $assistances;
            return response()->json([
                'success' => 'true',
                'error' => 'null',
                'data' => $data
            ], 200);
        } catch (\Throwable $th) {
            DB::rollback();
            throw $th;
        }
    }
}

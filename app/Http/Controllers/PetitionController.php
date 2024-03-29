<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Petition;
use App\Models\Plan;
use App\Models\User;
use App\Models\Profile;
use App\Models\Assistance;
use App\Models\AssistancePetition;
use Inertia\Inertia;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Bus;
use App\Jobs\ProcessDb;

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
            $contracts = DB::connection('previsoft')->select(DB::raw("SELECT * FROM clientes where Estatus in  ('ACTIVO', 'SUSPENDIDO') limit 4000"));
            $data = array_chunk($contracts, 1000);
            $batch = Bus::batch([])->dispatch();
            foreach ($data as $value) {
                $batch->add(new ProcessDb($value));
            }
        } catch (\Throwable $th) {
            DB::rollback();
            throw $th;
        }
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

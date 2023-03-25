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

class PetitionController extends Controller
{
    public function index()
    {
        try {
            $petitions = Petition::with(['user', 'plan', 'assistancePetitions'])->orderBy('created_at', 'DESC')->get();
            $petitions = $petitions->map(function ($petition) {
                $obj = (object)[];
                $obj->id = $petition->id;
                $user = Profile::where('id', $petition->user->id)->first();
                $obj->user = $user->email;
                $names = $user->firstnames . ' ' . $user->lastnames;
                $obj->doc = $user->doc;
                $obj->phone_number = $user->main_phone;
                $obj->names = $names;
                $obj->date = Carbon::parse($petition->created_at);
                $obj->date = $obj->date->format('d m Y');
                $obj->assistances = 'Ver';
                $plan = clone $petition->plan;
                $obj->plan = $plan->name;
                return $obj;
            });
            $plans = Plan::all();
            $plans = $plans->map(function ($plan) {
                return $plan->name;
            });

            return Inertia::render('Petition/Index', [
                'petitions' => $petitions,
                'plans' => $plans
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
            $assistances = $petition->assistancePetitions;
            $arr = [];
            foreach ($assistances as $assistance) {
                $arr[] = $assistance->assistance;
            }

            return response()->json([
                'success' => 'true',
                'error' => 'null',
                'data' => $arr
            ], 200);
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
            $assistances = $petition->assistancePetitions;
            $arr = [];
            foreach ($assistances as $assistance) {
                $arr[] = $assistance->assistance;
            }
            $data = [];
            $data['assistances'] = $arr;
            $data['user'] = Profile::where('id', $petition->user->id)->first();
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
            $arr = [];
            foreach ($assistances as $assistance) {
                $assistance->delete();
            }
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
                $user = Profile::where('id', $petition->user->id)->first();
                $user->firstnames = $request->user['firstnames'];
                $user->lastnames = $request->user['lastnames'];
                $user->email = $request->user['email'];
                $user->doc = $request->user['doc'];
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
                $profile = new Profile;
                $profile->firstnames = $request->firstnames;
                $profile->lastnames = $request->lastnames;
                $profile->doc = $request->doc;
                $profile->email = $request->email;
                $profile->main_phone = $request->phone_number;
                $profile->save();

                $user = new User;
                $user->email = $request->email;
                $user->doc = $request->doc;
                $user->save();
                $user->refresh();
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
            $petition->sendCreatedMail();
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

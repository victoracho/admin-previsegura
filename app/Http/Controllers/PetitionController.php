<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Petition;
use App\Models\Plan;
use App\Models\User;
use App\Models\Assistance;
use App\Models\AssistancePetition;
use Inertia\Inertia;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class PetitionController extends Controller
{
    public function index (){
        try {
            $petitions = Petition::with(['user','plan'])->orderBy('created_at', 'DESC')->get();
            $petitions = $petitions->map(function($petition){
                $obj = (object)[];
                $obj->id = $petition->id;
                $user = clone $petition->user;
                $obj->user = $user->email;
                $obj->date = Carbon::parse($petition->created_at); 
                $obj->date = $obj->date->format('d m Y');
                $obj->assistances = 'Ver';
                $plan = clone $petition->plan;
                $obj->plan = $plan->name;
                return $obj;
            });

            return Inertia::render('Petition/Index', [
                'petitions' => $petitions
            ]);

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
            //     'email'=>'required|email|max:255|regex:/(.*)@myemail\.com/i|unique:users',
            //     'phone_number' => 'required|numeric|min:10',
            //     'client' => 'required',
            //     'plan' => 'required'
            // ]);

            $user = User::where('email', $request->email)->first();
            if(!$user){
                $user = new User;
                $user->firstnames = $request->firstnames;
                $user->lastnames = $request->lastnames;
                $user->phone_number = $request->phone_number;
                $user->email = $request->email;
                $user->save();
                $user->refresh();
            }

            $petition = new Petition;
            $petition->user_id = $user->id;
            $petition->plan_id = $request->plan_id;
            $petition->save();
            $petition->refresh();

            $assistances = $request->assistances;
            foreach($assistances as $assistance){
                $assistancePetition = new AssistancePetition;
                $assistancePetition->petition_id = $petition->id;
                $assistancePetition->assistance_id = $assistance;
                $assistancePetition->save();
            }
            DB::commit();
            return response()->json([
                'success' => 'true',
                'error' => 'null'
            ], 200);
        } catch (\Throwable $th) {
            DB::rollback();
            throw $th;
        }
    }

    public function getLandingPageData(){
        try {
            $assistances = Assistance::all();
            $assistances = $assistances->map(function($assistance){
                $obj = (object)[];
                $obj->id = $assistance->id;
                $obj->name = $assistance->name;
                return $obj;
            });

            $plans = Plan::all();
            $plans = $plans->map(function($plan){
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

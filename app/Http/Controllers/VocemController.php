<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;   
use Illuminate\Http\Request;
use App\Jobs\ProcessCsv;
use App\Models\Assistance;
use App\Models\Contract;
use App\Models\User;
use App\Models\JobBatch;
use App\Models\ContractAssistances;
use App\Models\ContractLink;
use Inertia\Inertia;
use Exception;
use Log;
use Illuminate\Bus\Batch;
use Illuminate\Support\Facades\Bus;
use Illuminate\Support\Facades\Auth;
use Hashids\Hashids;

class VocemController extends Controller
{
   public function uploadView(Request $request){

      return Inertia::render('Vocem/Upload', [
         'error' => 'false',
         'success'=> 'true'
     ]);   
   }
   public function index(Request $request){
      if (!Auth::check()) {
         // The user is logged in...
         return redirect()->route('vocem.login');
     }
   }

   public function login(Request $request){
      return 'hola';
   }

   public function uploadCsv(Request $request){
      try{
         // if($request->has('csv')){
            // $filename = $request->csvFile->getClientOriginalName();
            // $fileUploads = public_path('uploads').'/'.$filename;
               $path = public_path('uploads');
            // if(!file_exists($fileUploads)){
            //    $request->csvFile->move(public_path('uploads'), $filename);
            // }

            $file = $path.'/clients.csv';
            $header = null;
            $data = array();
            $records = array_map(function($v){return str_getcsv($v, ";");}, file($file));
            $newRecords = [];
            foreach($records as $index => $record){
               $newRecords[$index] = array_map(function($v){ return utf8_encode(str_replace(' ', '', $v));}, $record);
            }

            if (str_contains($file, 'beneficiarios')) { 
               $header = [
                  'fecha_generacion',
                  'tipo_documento',
                  'documento',
                  'apellidos',
                  'nombres',
                  'codigo_area_uno',
                  'numero_telefono_uno',
                  'codigo_area_dos',
                  'numero_telefono_dos',
                  'codigo_celular',
                  'numero_celular',
                  'email',
                  'codigo_area_uno_mod',
                  'numero_telefono_uno_mod',
                  'codigo_area_dos_mod',
                  'numero_telefono_dos_mod',
                  'codigo_celular_dos_mod',
                  'numero_celular_dos_mod',
                  'email_mod',
                  'fecha_registro',
                  'hora_registro'
               ];   
            }
            $header = [
               "fecha_generacion",
               "correlativo",
               "codigo_cliente",
               "codigo_banco",
               "tipo_servicio",
               "tipo_documento",
               "documento",
               "apellidos",
               "nombres",
               "tipo_cuenta",
               "numero_cuenta",
               "codigo_area_uno",
               "numero_telefono_uno",
               "codigo_area_dos",
               "numero_telefono_dos",
               "codigo_celular",
               "numero_celular",
               "email",
               "codigo_area_uno_mod",
               "numero_telefono_uno_mod",
               "codigo_area_dos_mod",
               "numero_telefono_dos_mod",
               "codigo_celular_mod",
               "numero_celular_mod",
               "email_mod",
               "frecuencia",
               "estatus_venta_contacto",
               "motivo",
               "fecha_registro",
               "hora_registro",
               "sinnombre_uno",
               "sinnombre_dos",
               "sinnombre_tres"
            ];  
       
            foreach ($newRecords as $record) {

               $data[] = $record;
            }
            // $header = explode(",", $header[0]);
            $clientData = [];
            $data = array_chunk($data, 100);
            $batch = Bus::batch([])->dispatch();
            foreach ($data as $index => $dataCsv) {
               foreach($dataCsv as $csv){
                  $clientData[$index][] = array_combine($header, $csv);
               }

               $batch->add(new ProcessCsv($clientData[$index]));
               //ProcessCsv::dispatch($clientData[$index]);
            }
            //every time we process a batch
            session()->put('lastBatchId', $batch->id);
            return response()->json($batch->id);
         // }
      } catch(Exception $e){
         Log::error($e);
      }
   }

   public function uploadProgress(Request $request){
      try{
         $id = session('lastBatchId');
         if($request->id){
            $id = $request->id;
         }
         
         $percentage = 0;
         $batch = JobBatch::where('id', $id)->get();
         if($batch->count()){
            $percentage = $batch;
         }

         if($request->progress){
            return response()->json($percentage);
         }

         return Inertia::render('Vocem/UploadProgress', [
            'percentage' => $percentage,
            'id' => $id
         ]);   

      } catch(Exception $e){
         Log::error($e);
      }
   }



   public function validateLink(Request $request){
      try{
         if($request->id){
            $id = $request->id;
            $assistances = Assistance::all();
            $contractLink = ContractLink::where('token', $request->id)->first();
            if($contractLink && !$contractLink->expired){               
               $token = new Hashids('assistant-contract', 20);
               $part = $token->decode($id);
               $part = $part[0];
               $contract = Contract::find($part);
               $assistances = $assistances->map(function ($assistance) {
                   $obj = (object)[];
                   $obj->id = $assistance->id;
                   $obj->name = $assistance->name;
                   return $obj;
               });
               
               $user = $contract->user;
               $account = $contract->account;
               $assistances = [];
               foreach($contract->assistances as $assistance){
                  $assistances[] = $assistance->assistance;
               }

               $obj = (object)[];
               $obj->firstnames = $user->firstnames;
               $obj->lastnames = $user->lastnames;
               $obj->email = $user->email;
               $obj->address = $user->address;
               $obj->phone_number = $user->phone_number;
               $obj->doc = $user->doc;
               $obj->account_number = $account->number_account;
               $obj->assistances = $assistances;
             
   
               return response()
                  ->json([
                     'error' => false,
                     'user' => $obj,
                  ], 
               200);
            }
         }
         return response()->json(['error' => true], 401);
      } catch(Exception $e){
         Log::error($e);
      }
   }


   public function batchProgress(Request $request){
      try{
         $id = $request->id ? $request->id : session('lastBatchId');
         $percentage = 0;
         $batch = JobBatch::where('id', $id)->first();
         return response()->json($batch);

      } catch(Exception $e){
         Log::error($e);
      }
   }
 }

<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;   
use Illuminate\Http\Request;
use App\Jobs\ProcessCsv;
use App\Models\JobBatch;
use Inertia\Inertia;
use Exception;
use Log;
use Illuminate\Bus\Batch;
use Illuminate\Support\Facades\Bus;

class VocemController extends Controller
{
   public function uploadView(Request $request){

      return Inertia::render('Vocem/Upload', [
         'error' => 'false',
         'success'=> 'true'
     ]);   
   }
   public function uploadCsv(Request $request){
      try{
         // if($request->has('csv')){
            // $filename = $request->csvFile->getClientOriginalName();
            // $fileUploads = public_path('uploads').'/'.$filename;

            // if(!file_exists($fileUploads)){
            //    $request->csvFile->move(public_path('uploads'), $filename);
            // }
            $file = public_path('uploads').'/clients.csv';

            $header = null;
            $data = array();
            $records = array_map('str_getcsv', file($file));
            foreach ($records as $record) {
               if(!$header){
                  $header = $record;
               } else {
                  $data[] = $record; 
               }
            }
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
         //}
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

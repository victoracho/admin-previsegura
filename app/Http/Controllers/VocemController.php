<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Exception;
use Log;

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
            $file = public_path('uploads').'/test.csv';

            $header = null;
            $data = array();
            $records = array_map('str_getcsv', file($file));
            dd($records);

         //    return response()->json([
         //       'success' => 'false',
         //       'error' => 'true',
         //       'data' => $data
         //   ], 401);      
         // }

         $csv = $request->csv;
      } catch(Exception $e){
         Log::error($e);
      }
   }

   public function uploadProgress(Request $request){
      return Inertia::render('Vocem/Upload', [
         'error' => 'false',
         'success'=> 'true'
     ]);   
   }
 }

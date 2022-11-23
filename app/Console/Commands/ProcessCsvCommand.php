<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Jobs\ProcessCsv;
use App\Models\JobBatch;
use Illuminate\Bus\Batch;
use Illuminate\Support\Facades\Bus;
use Illuminate\Support\Facades\Auth;
use App\Mail\CreatedUser;
use Illuminate\Support\Facades\Log;
use App\Models\Upload;
use Carbon\Carbon;
use File;
use Storage;
class ProcessCsvCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'process:csv';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'process contracts csv';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle() {
      try{
        // if($request->has('csv')){

        //    $rules = [
        //       'file' => 'required|file|max:500000|mimes:csv',
        //    ];
        //   $messages = [
        //       'uploaded' => 'El csv debe pesar hasta 500mb.',
        //       'mimes' => 'El archivo debe ser de tipo  CSV',
        //   ];
        //   $validator = Validator::make($extraDataForm->all(), $rules, $messages);
        //   if($validator->fails()){
        //       return response()->json($validator->errors(),400);
        //   }
        //    $size = $request->csv->getSize();
        //    $filename = $request->csv->getClientOriginalName();
        //    $file = public_path('csv').'/'.$filename;
        //    if(!file_exists($file)){
        //       $request->csv->move(public_path('csv'), $filename);
        //    }
          
          $filename = 'contracts.csv';
          $file = public_path('uploads').'/contracts.csv';
          $header = null;
          $data = array();
          $fileType = 'contracts';
          $records = array_map(function($v){return str_getcsv($v, ";");}, file($file));
          $newRecords = [];
          foreach($records as $index => $record){
              $newRecords[$index] = explode(',', $record[0]); 
              $newRecords[$index]=array_map('rtrim', $newRecords[$index]);
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

          if (str_contains($file, 'beneficiaries')) { 
              $fileType = 'beneficiaries';
              $header = [
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                'lastnames',
                'firstnames',
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                '',
              ];   
          }
          foreach ($newRecords as $record) {
              $data[] = $record;
          }
          // $header = explode(",", $header[0]);
          $clientData = [];
          $data = array_chunk($data, 300);
          $batch = Bus::batch([])->dispatch();
          foreach ($data as $index => $dataCsv) {
              foreach($dataCsv as $csv){
                $clientData[$index][] = array_combine($header, $csv);
              }

              $batch->add(new ProcessCsv($clientData[$index], $fileType));
              //ProcessCsv::dispatch($clientData[$index]);
          }
          // $size = '123455';
          // $upload->user_id = 1;
          // $upload->name = $file;
          // $upload->batch_id = $batch->id;
          // $upload->save();
          $upload = new Upload;
          // $upload->user_id = 1;
          $upload->batch_id = $batch->id;
          $upload->name = $file;
          $upload->size = filesize($file);
          $upload->save();
          File::move($file, public_path('olds').'/'.$filename);
          session()->put('lastBatchId', $batch->id);
          return response()->json($batch->id);
        // }
    } catch(Exception $e){
        Log::error($e);
    }

  }
}

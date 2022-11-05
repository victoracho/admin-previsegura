<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Jobs\ProcessCsv;
use App\Models\JobBatch;
use Illuminate\Bus\Batch;
use Illuminate\Support\Facades\Bus;
use Illuminate\Support\Facades\Auth;

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
    public function handle()
    {
      return 0;
      //   $fileNames = [];
      //   $path = public_path('csv');
      //   $files = \File::allFiles($path);
    
      //   foreach($files as $file) {
      //       array_push($fileNames, pathinfo($file)['filename']);
      //   }
        
      //   foreach($fileNames as $file){
      //       $filepath = $path.'/'.$file;
      //       $header = null;
      //       $data = array();
      //       $records = array_map('str_getcsv', file($filepath));
      //       if (str_contains($filename, 'beneficiarios')) { 
      //          $header = [
      //             'fecha_generacion',
      //             'tipo_documento',
      //             'documento',
      //             'apellidos',
      //             'nombres',
      //             'codigo_area_uno',
      //             'numero_telefono_uno',
      //             'codigo_area_dos',
      //             'numero_telefono_dos',
      //             'codigo_celular',
      //             'numero_celular',
      //             'email',
      //             'codigo_area_uno_mod',
      //             'numero_telefono_uno_mod',
      //             'email_mod',
      //             'fecha_registro',
      //             'hora_registro'
      //          ];   
      //       }
    
      //       $header = [
      //          'fecha_generacion',
      //          'tipo_documento',
      //          'documento',
      //          'apellidos',
      //          'nombres',
      //          'codigo_area_uno',
      //          'numero_telefono_uno',
      //          'codigo_area_dos',
      //          'numero_telefono_dos',
      //          'codigo_celular',
      //          'numero_celular',
      //          'email',
      //          'codigo_area_uno_mod',
      //          'numero_telefono_uno_mod',
      //          'email_mod',
      //          'fecha_registro',
      //          'hora_registro'
      //       ];
               
      //       foreach ($records as $record) {
      //          $data[] = $record;
      //       }
      //       $clientData = [];
      //       $data = array_chunk($data, 100);
      //       $batch = Bus::batch([])->dispatch();
      //       foreach ($data as $index => $dataCsv) {
      //          foreach($dataCsv as $csv){
      //             $clientData[$index][] = array_combine($header, $csv);
      //          }
      //          $batch->add(new ProcessCsv($clientData[$index]));
      //          //ProcessCsv::dispatch($clientData[$index]);
      //       }
      //       dd($clientData);
      //       //every time we process a batch
      //       return 0;

        //}

    }
}

<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Plan;
use App\Models\Assistance;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $plan = new Plan;
        $plan->name = 'Individual';
        $plan->save();

        $plan = new Plan;
        $plan->name = 'Corporativo';
        $plan->save();

        $plan = new Plan;
        $plan->name = 'Grupal';
        $plan->save();

        $plan = new Plan;
        $plan->name = 'Banca Asistencia';
        $plan->save();

        $assistance = new Assistance;
        $assistance->name = 'Asistencia funeraria nacional e internacional';
        $assistance->description = 'Asistencia funeraria nacional e internacional';
        $assistance->save();

        $assistance = new Assistance;
        $assistance->name = 'Asistencia financiera en duelo';
        $assistance->description = 'Asistencia financiera en duelo';
        $assistance->save();

        $assistance = new Assistance;
        $assistance->name = 'Asistencia médica telefónica y domiciliaria';
        $assistance->description = 'Asistencia médica telefónica y domiciliaria';
        $assistance->save();


        $assistance = new Assistance;
        $assistance->name = 'Combo citas médicas';
        $assistance->description = 'Combo citas médicas';
        $assistance->save();


        $assistance = new Assistance;
        $assistance->name = 'Asistencia odontológica';
        $assistance->description = 'Asistencia odontológica';
        $assistance->save();


        $assistance = new Assistance;
        $assistance->name = 'Asistencia financiera en hospitalización';
        $assistance->description = 'Asistencia financiera en hospitalización';
        $assistance->save();


        $assistance = new Assistance;
        $assistance->name = 'Asistencia financiera en enfermedad grave';
        $assistance->description = 'Asistencia financiera en enfermedad grave';
        $assistance->save();

    }
}

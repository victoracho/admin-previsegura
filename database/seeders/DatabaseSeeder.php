<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Plan;
use App\Models\Assistance;
use App\Models\User;
use App\Models\Role;
use App\Models\Profile;
use App\Models\Payment;
use App\Models\Contract;
use App\Models\Bank;
use App\Models\FamilyMember;


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

        $bank = new Bank;
        $bank->name = 'BPCARI-PREV';
        $bank->description = 'BPCARI-PREV';
        $bank->save();

        $role = new Role;
        $role->slug = 'role-user';
        $role->name = 'Rol de usuario';
        $role->save();

        $role = new Role;
        $role->slug = 'role-admin';
        $role->name = 'Rol de admin';
        $role->save();

        $role = Role::where('slug', 'role-admin')->get();
        $user = new User;
        $user->doc = '24203490';
        $user->email = 'victoracho.box@gmail.com';
        $user->password = bcrypt('8726231');
        $user->save();
        $user->refresh();
        $user->roles()->attach($role);
        $user->save();

        $profile = new Profile();
        $profile->firstnames = 'victor manuel';
        $profile->lastnames = 'Gonzalez Pereira';
        $profile->doc = '24203490';
        $profile->user_id = $user->id;
        $profile->save();


        $user = new User();
        $user->email = 'danielcuomo14@gmail.com';
        $user->password = bcrypt('123456789');
        $user->doc = '202020202';
        $user->save();
        $user->refresh();
        $user->roles()->attach($role);
        $user->save();

        $profile = new Profile();
        $profile->firstnames = 'Daniel';
        $profile->lastnames = 'Cuomo';
        $profile->doc = '20202020';
        $profile->user_id = $user->id;
        $profile->save();

        $role = Role::where('slug', 'role-admin')->get();
        $user = new User();
        $user->email = 'pedro@gmail.com';
        $user->password = bcrypt('123456789');
        $user->doc = '12050603';
        $user->save();
        $user->refresh();
        $user->roles()->attach($role);
        $user->save();

        $profile = new Profile();
        $profile->firstnames = 'Pedro';
        $profile->lastnames = 'Marchan';
        $profile->doc = '12050603';
        $profile->user_id = $user->id;
        $profile->save();

        $contract = new Contract();
        $contract->status = 'ACTIVO';
        $contract->status_date = '25/01/1992';
        $contract->retirement_date = '25/01/2022';
        $contract->covenant = 'INDUSTRIAS EL PLANETA C.A.';
        $contract->plan = 'AMD1';
        $contract->bank_id = $bank->id;
        $contract->emission = '28/03/2022';
        $contract->expire_date = '28/03/2022';
        $contract->modality = 'MENSUAL';
        $contract->fee_quantity = '12';
        $contract->payment_type = 'MI SALUD';
        $contract->sales = 'NUEVA';

        $profile = new Profile();
        $profile->firstnames = 'Luisa Helena';
        $profile->lastnames = 'Fraga Pena';
        $profile->birthdate = '11/02/1973';
        $profile->gender = 0;
        $profile->save();

        $familyMember = new FamilyMember();
        $familyMember->deceased = 0;
        $familyMember->bond = 'CONYUGE';
        $familyMember->inscription = '25/03/2021';
        $familyMember->coverage_date = '25/03/2023';
        $familyMember->user_id = $user->id;
        $familyMember->profile_id = $profile->id;
        $familyMember->contract_id = $contract->id;
        $familyMember->save();

        $profile = new Profile();
        $profile->firstnames = 'Jose Manuel';
        $profile->lastnames = 'Diaz Pena';
        $profile->birthdate = '12/10/1988';
        $profile->gender = 1;
        $profile->save();

        $familyMember = new FamilyMember();
        $familyMember->deceased = 0;
        $familyMember->bond = 'HIJO';
        $familyMember->inscription = '25/03/2021';
        $familyMember->coverage_date = '25/03/2023';
        $familyMember->user_id = $user->id;
        $familyMember->profile_id = $profile->id;
        $familyMember->contract_id = $contract->id;
        $familyMember->save();

        $profile = new Profile();
        $profile->firstnames = 'Jose Ramon';
        $profile->lastnames = 'Diaz Rojas';
        $profile->birthdate = '12/05/2003';
        $profile->gender = 1;
        $profile->save();

        $familyMember = new FamilyMember();
        $familyMember->deceased = 0;
        $familyMember->bond = 'NIETO';
        $familyMember->inscription = '25/03/2021';
        $familyMember->coverage_date = '25/03/2023';
        $familyMember->user_id = $user->id;
        $familyMember->profile_id = $profile->id;
        $familyMember->contract_id = $contract->id;
        $familyMember->save();

        $profile = new Profile();
        $profile->firstnames = 'Firulais';
        $profile->lastnames = 'Pena';
        $profile->birthdate = '12/02/2017';
        $profile->gender = 1;
        $profile->save();

        $familyMember = new FamilyMember();
        $familyMember->deceased = 0;
        $familyMember->bond = 'MASCOTA';
        $familyMember->inscription = '25/03/2021';
        $familyMember->coverage_date = '25/03/2023';
        $familyMember->user_id = $user->id;
        $familyMember->profile_id = $profile->id;
        $familyMember->contract_id = $contract->id;
        $familyMember->save();

        $profile = new Profile();
        $profile->firstnames = 'Maria Daniela';
        $profile->lastnames = 'Diaz Pena';
        $profile->birthdate = '25/02/1998';
        $profile->gender = 0;
        $profile->save();

        $familyMember = new FamilyMember();
        $familyMember->deceased = 0;
        $familyMember->bond = 'HIJO';
        $familyMember->inscription = '25/03/2021';
        $familyMember->coverage_date = '25/03/2023';
        $familyMember->user_id = $user->id;
        $familyMember->profile_id = $profile->id;
        $familyMember->contract_id = $contract->id;
        $familyMember->save();

        $profile = new Profile();
        $profile->firstnames = 'Ana Carolina';
        $profile->lastnames = 'Diaz Rojas';
        $profile->birthdate = '11/02/2007';
        $profile->gender = 0;
        $profile->save();

        $familyMember = new FamilyMember();
        $familyMember->deceased = 0;
        $familyMember->bond = 'NIETO';
        $familyMember->inscription = '25/03/2021';
        $familyMember->coverage_date = '25/03/2023';
        $familyMember->user_id = $user->id;
        $familyMember->profile_id = $profile->id;
        $familyMember->contract_id = $contract->id;
        $familyMember->save();

        // $user = new User;
        // $user->firstnames = 'Daniel';
        // $user->lastnames = 'Sanchez';
        // $user->email = 'dakemz95@gmail.com';
        // $user->password = '$2y$10$qhElAxx7DwTTUUBRnBvHGuwSA54YqIxJo2ToxWROV52a85hxz6Lp6';
        // $user->cellphone = '12345678';
        // $user->save();
    }
}

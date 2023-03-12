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
use App\Models\ContractAssistance;

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

        $assistance = new Assistance;
        $assistance->name = 'Asistencia financiera en enfermedad grave';
        $assistance->description = 'Asistencia Mascotas en el Cielo';
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
        $contract->status_date = date('d-m-y h:i:s', strtotime('25-01-2023'));
        $contract->registration_date = date('d-m-y h:i:s', strtotime('25-01-2023'));
        $contract->retirement_date = date('d-m-y h:i:s', strtotime('25-01-2023'));
        $contract->covenant = 'INDUSTRIAS EL PLANETA C.A.';
        $contract->code = '20230301';
        $contract->plan = 'AMD1';
        $contract->bank_id = $bank->id;
        $contract->emission = date('d-m-y h:i:s', strtotime('28-03-2021'));
        $contract->expire_date = date('d-m-y h:i:s', strtotime('25-01-2023'));
        $contract->modality = 'MENSUAL';
        $contract->fee_quantity = '12';
        $contract->payment_type = 'MI SALUD';
        $contract->sales = 'NUEVA';
        $contract->user_id = $user->id;
        $contract->save();

        $profile = new Profile();
        $profile->firstnames = 'Luisa Helena';
        $profile->lastnames = 'Fraga Pena';
        $profile->birthdate = date('d-m-y h:i:s', strtotime('11/02/1972'));
        $profile->gender = 0;
        $profile->save();

        $familyMember = new FamilyMember();
        $familyMember->bond = 'CONYUGE';
        $familyMember->user_id = $user->id;
        $familyMember->profile_id = $profile->id;
        $familyMember->save();

        $contractAssistance = new ContractAssistance();
        $contractAssistance->coverage_date = date('d-m-y h:i:s', strtotime('25-01-2023'));
        $contractAssistance->inscription = date('d-m-y h:i:s', strtotime('25-01-2021'));
        $contractAssistance->contract_id = $contract->id;
        $contractAssistance->assistance_id = 4;
        $contractAssistance->profile_id = $profile->id;
        $contractAssistance->family_member_id = $familyMember->id;
        $contractAssistance->save();

        $profile = new Profile();
        $profile->firstnames = 'Jose Manuel';
        $profile->lastnames = 'Diaz Pena';
        $profile->birthdate = date('d-m-y h:i:s', strtotime('25/01/2022'));
        $profile->gender = 1;
        $profile->save();

        $familyMember = new FamilyMember();
        $familyMember->bond = 'HIJO';
        $familyMember->user_id = $user->id;
        $familyMember->profile_id = $profile->id;
        $familyMember->save();

        $contractAssistance = new ContractAssistance();
        $contractAssistance->inscription = date('d-m-y h:i:s', strtotime('25-01-2022'));
        $contractAssistance->contract_id = $contract->id;
        $contractAssistance->assistance_id = 4;
        $contractAssistance->coverage_date = date('d-m-y h:i:s', strtotime('25-01-2023'));
        $contractAssistance->family_member_id = $familyMember->id;
        $contractAssistance->profile_id = $profile->id;
        $contractAssistance->save();

        $profile = new Profile();
        $profile->firstnames = 'Jose Ramon';
        $profile->lastnames = 'Diaz Rojas';
        $profile->birthdate = date('d-m-y h:i:s', strtotime('04-05-2002'));
        $profile->gender = 1;
        $profile->save();

        $familyMember = new FamilyMember();
        $familyMember->bond = 'NIETO';
        $familyMember->user_id = $user->id;
        $familyMember->profile_id = $profile->id;
        $familyMember->save();

        $contractAssistance = new ContractAssistance();
        $contractAssistance->inscription = date('d-m-y h:i:s', strtotime('25-01-2021'));
        $contractAssistance->contract_id = $contract->id;
        $contractAssistance->assistance_id = 4;
        $contractAssistance->coverage_date = date('d-m-y h:i:s', strtotime('25-01-2023'));
        $contractAssistance->family_member_id = $familyMember->id;
        $contractAssistance->profile_id = $familyMember->id;
        $contractAssistance->save();


        $profile = new Profile();
        $profile->firstnames = 'Firulais';
        $profile->lastnames = 'Pena';
        $profile->birthdate = date('d-m-y h:i:s', strtotime('12-02-2017'));
        $profile->gender = 1;
        $profile->save();

        $familyMember = new FamilyMember();
        $familyMember->bond = 'MASCOTA';
        $familyMember->user_id = $user->id;
        $familyMember->profile_id = $profile->id;
        $familyMember->save();

        $contractAssistance = new ContractAssistance();
        $contractAssistance->coverage_date = date('d-m-y h:i:s', strtotime('25-01-2023'));
        $contractAssistance->inscription = date('d-m-y h:i:s', strtotime('25-01-2022'));
        $contractAssistance->contract_id = $contract->id;
        $contractAssistance->assistance_id = 8;
        $contractAssistance->coverage_date = date('d-m-y h:i:s', strtotime('25-01-2023'));
        $contractAssistance->family_member_id = $familyMember->id;
        $contractAssistance->profile_id = $profile->id;
        $contractAssistance->save();

        $profile = new Profile();
        $profile->firstnames = 'Maria Daniela';
        $profile->lastnames = 'Diaz Pena';
        $profile->birthdate = date('d-m-y h:i:s', strtotime('25-02-1998'));
        $profile->gender = 0;
        $profile->save();

        $familyMember = new FamilyMember();
        $familyMember->bond = 'HIJO';
        $familyMember->user_id = $user->id;
        $familyMember->profile_id = $profile->id;
        $familyMember->save();

        $contractAssistance = new ContractAssistance();
        $contractAssistance->contract_id = $contract->id;
        $contractAssistance->inscription = date('d-m-y h:i:s', strtotime('25-01-2022'));
        $contractAssistance->assistance_id = 4;
        $contractAssistance->coverage_date = date('d-m-y h:i:s', strtotime('25-01-2023'));
        $contractAssistance->family_member_id = $familyMember->id;
        $contractAssistance->profile_id = $familyMember->id;
        $contractAssistance->save();

        $profile = new Profile();
        $profile->firstnames = 'Ana Carolina';
        $profile->lastnames = 'Diaz Rojas';
        $profile->birthdate = date('d-m-y h:i:s', strtotime('12-12-2017'));
        $profile->gender = 0;
        $profile->save();

        $familyMember = new FamilyMember();
        $familyMember->bond = 'NIETO';
        $familyMember->user_id = $user->id;
        $familyMember->profile_id = $profile->id;
        $familyMember->save();

        $contractAssistance = new ContractAssistance();
        $contractAssistance->contract_id = $contract->id;
        $contractAssistance->assistance_id = 4;
        $contractAssistance->coverage_date = date('d-m-y h:i:s', strtotime('25-01-2023'));
        $contractAssistance->inscription = date('d-m-y h:i:s', strtotime('25-01-2022'));
        $contractAssistance->family_member_id = $familyMember->id;
        $contractAssistance->profile_id = $familyMember->id;
        $contractAssistance->save();


        $payment = new Payment();
        $payment->amount = '28,13';
        $payment->expire_date = date('d-m-y h:i:s', strtotime('31-03-2022'));
        $payment->status = 'PAGADO';
        $payment->iva = '4,5';
        $payment->payment_date = date('d-m-y h:i:s', strtotime('15-03-2022'));
        $payment->from = date('d-m-y h:i:s', strtotime('01-03-2022'));
        $payment->to = date('d-m-y h:i:s', strtotime('31-03-2022'));
        $payment->payment_number = '00002';
        $payment->contract_id = $contract->id;
        $payment->save();

        $payment = new Payment();
        $payment->amount = '28,13';
        $payment->expire_date = date('d-m-y h:i:s', strtotime('31-04-2022'));
        $payment->status = 'VENCIDO';
        $payment->iva = '4,5';
        $payment->from = date('d-m-y h:i:s', strtotime('01-04-2022'));
        $payment->to = date('d-m-y h:i:s', strtotime('31-04-2022'));
        $payment->contract_id = $contract->id;
        $payment->payment_number = '00003';
        $payment->save();

        $payment = new Payment();
        $payment->amount = '28,13';
        $payment->expire_date = date('d-m-y h:i:s', strtotime('31-03-2022'));
        $payment->status = 'PAGADO';
        $payment->payment_date = date('d-m-y h:i:s', strtotime('15-03-2022'));
        $payment->from = date('d-m-y h:i:s', strtotime('01-03-2022'));
        $payment->contract_id = $contract->id;
        $payment->to = date('d-m-y h:i:s', strtotime('31-03-2022'));
        $payment->payment_number = '00004';
        $payment->save();

        $contract = new Contract();
        $contract->status = 'ACTIVO';
        $contract->status_date = date('d-m-y h:i:s', strtotime('25-01-2023'));
        $contract->registration_date = date('d-m-y h:i:s', strtotime('25-01-2023'));
        $contract->retirement_date = date('d-m-y h:i:s', strtotime('25-01-2023'));
        $contract->covenant = 'INDUSTRIAS EL PLANETA C.A.';
        $lastContract = Contract::latest()->first();
        $contract->code = date('y') . date('m') . '0' . $lastContract->id + 1;
        $contract->plan = 'AMD1';
        $contract->bank_id = $bank->id;
        $contract->emission = date('d-m-y h:i:s', strtotime('28-03-2021'));
        $contract->expire_date = date('d-m-y h:i:s', strtotime('25-01-2023'));
        $contract->modality = 'MENSUAL';
        $contract->fee_quantity = '12';
        $contract->payment_type = 'MI SALUD';
        $contract->sales = 'NUEVA';
        $contract->user_id = $user->id;
        $contract->save();

        $profile = new Profile();
        $profile->firstnames = 'Maria Helena';
        $profile->lastnames = 'Luna Torres';
        $profile->birthdate = date('d-m-y h:i:s', strtotime('11/02/1962'));
        $profile->gender = 0;
        $profile->save();

        $familyMember = new FamilyMember();
        $familyMember->bond = 'MADRE';
        $familyMember->user_id = $user->id;
        $familyMember->profile_id = $profile->id;
        $familyMember->save();

        $contractAssistance = new ContractAssistance();
        $contractAssistance->coverage_date = date('d-m-y h:i:s', strtotime('25-01-2023'));
        $contractAssistance->inscription = date('d-m-y h:i:s', strtotime('25-01-2021'));
        $contractAssistance->contract_id = $contract->id;
        $contractAssistance->assistance_id = 4;
        $contractAssistance->profile_id = $profile->id;
        $contractAssistance->family_member_id = $familyMember->id;
        $contractAssistance->save();

        $payment = new Payment();
        $payment->amount = '28,13';
        $payment->expire_date = date('d-m-y h:i:s', strtotime('31-03-2022'));
        $payment->status = 'PAGADO';
        $payment->payment_date = date('d-m-y h:i:s', strtotime('15-03-2022'));
        $payment->from = date('d-m-y h:i:s', strtotime('01-03-2022'));
        $payment->contract_id = $contract->id;
        $payment->to = date('d-m-y h:i:s', strtotime('31-03-2022'));
        $payment->payment_number = '00004';
        $payment->save();

        $profile = new Profile();
        $profile->firstnames = 'Emiliano Jose';
        $profile->lastnames = 'Marchan Diaz';
        $profile->birthdate = date('d-m-y h:i:s', strtotime('11/06/1933'));
        $profile->gender = 0;
        $profile->save();

        $familyMember = new FamilyMember();
        $familyMember->bond = 'PADRE';
        $familyMember->user_id = $user->id;
        $familyMember->profile_id = $profile->id;
        $familyMember->save();

        $contractAssistance = new ContractAssistance();
        $contractAssistance->coverage_date = date('d-m-y h:i:s', strtotime('25-01-2023'));
        $contractAssistance->inscription = date('d-m-y h:i:s', strtotime('25-01-2021'));
        $contractAssistance->contract_id = $contract->id;
        $contractAssistance->assistance_id = 4;
        $contractAssistance->profile_id = $profile->id;
        $contractAssistance->family_member_id = $familyMember->id;
        $contractAssistance->save();

        $payment = new Payment();
        $payment->amount = '28,13';
        $payment->expire_date = date('d-m-y h:i:s', strtotime('31-03-2022'));
        $payment->status = 'PAGADO';
        $payment->payment_date = date('d-m-y h:i:s', strtotime('15-03-2022'));
        $payment->from = date('d-m-y h:i:s', strtotime('01-03-2022'));
        $payment->contract_id = $contract->id;
        $payment->to = date('d-m-y h:i:s', strtotime('31-03-2022'));
        $payment->payment_number = '00004';
        $payment->save();
    }
}

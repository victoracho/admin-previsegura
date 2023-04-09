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
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(CountriesTableSeeder::class);
        // $this->call(RolesSeeder::class);
        // $this->call(PermissionsSeeder::class);
        // $this->call(RolesPermissionsSeeder::class);

        // $plan = new Plan;
        // $plan->name = 'Individual';
        // $plan->save();
        //
        // $plan = new Plan;
        // $plan->name = 'Corporativo';
        // $plan->save();
        //
        // $plan = new Plan;
        // $plan->name = 'Grupal';
        // $plan->save();
        //
        // $plan = new Plan;
        // $plan->name = 'Banca Asistencia';
        // $plan->save();
        //
        // $assistance = new Assistance;
        // $assistance->name = 'Asistencia funeraria nacional e internacional';
        // $assistance->description = 'Asistencia funeraria nacional e internacional';
        // $assistance->save();
        //
        // $assistance = new Assistance;
        // $assistance->name = 'Asistencia financiera en duelo';
        // $assistance->description = 'Asistencia financiera en duelo';
        // $assistance->save();
        //
        // $assistance = new Assistance;
        // $assistance->name = 'Asistencia médica telefónica y domiciliaria';
        // $assistance->description = 'Asistencia médica telefónica y domiciliaria';
        // $assistance->save();
        //
        //
        // $assistance = new Assistance;
        // $assistance->name = 'Combo citas médicas';
        // $assistance->description = 'Combo citas médicas';
        // $assistance->save();
        //
        //
        // $assistance = new Assistance;
        // $assistance->name = 'Asistencia odontológica';
        // $assistance->description = 'Asistencia odontológica';
        // $assistance->save();
        //
        //
        // $assistance = new Assistance;
        // $assistance->name = 'Asistencia financiera en hospitalización';
        // $assistance->description = 'Asistencia financiera en hospitalización';
        // $assistance->save();
        //
        //
        // $assistance = new Assistance;
        // $assistance->name = 'Asistencia financiera en enfermedad grave';
        // $assistance->description = 'Asistencia financiera en enfermedad grave';
        // $assistance->save();
        //
        // $assistance = new Assistance;
        // $assistance->name = 'Asistencia Mascotas en el Cielo';
        // $assistance->description = 'Asistencia Mascotas en el Cielo';
        // $assistance->save();
        //
        // $bank = new Bank;
        // $bank->name = 'BPCARI-PREV';
        // $bank->description = 'BPCARI-PREV';
        // $bank->save();
        //
        // $role = new Role;
        // $role->slug = 'role-admin';
        // $role->name = 'Rol de admin';
        // $role->save();
        //
        // $role = new Role;
        // $role->slug = 'role-user';
        // $role->name = 'Rol de usuario';
        // $role->save();

        $bank = Bank::first();

        $role = role::where('slug', 'role-admin')->get();
        // $user = new user;
        // $user->doc = '24203490';
        // $user->email = 'victoracho.box@gmail.com';
        // $user->password = bcrypt('8726231');
        // $user->save();
        // $user->refresh();
        // $user->roles()->attach($role);
        // $user->save();
        //
        // $profile = new profile();
        // $profile->firstnames = 'victor manuel';
        // $profile->lastnames = 'gonzalez pereira';
        // $profile->doc = '24203490';
        // $profile->user_id = $user->id;
        // $profile->save();


        $user = new user();
        $user->email = 'danielcuomo14@gmail.com';
        $user->password = bcrypt('123456789');
        $user->doc = '202020202';
        $user->save();
        $user->refresh();
        $user->roles()->attach($role);
        $user->save();

        $profile = new profile();
        $profile->firstnames = 'daniel';
        $profile->lastnames = 'cuomo';
        $profile->doc = '20202020';
        $profile->user_id = $user->id;
        $profile->save();

        $role = role::where('slug', 'role-user')->get();
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
        $profile->gender = 1;
        $profile->doc = '12050603';
        $profile->email = 'pedro@gmail.com';
        $dt = Carbon::create(1965, 02, 30, 0);
        $profile->birthdate = $dt->toDateTimeString();
        $profile->main_phone = '02124534544';
        $profile->country_id = 242;
        $profile->state_id = 2199;
        $profile->city_id = 1;
        $profile->mobile_phone = '04142345044';
        $profile->work_phone = '02125602343';
        $profile->optional_phone = '0412334234';
        $profile->address = 'Animas a platanal, edif El dorado, piso 3 apto 32';
        $profile->dependency =  'PREVISEGURA, C.A.';
        $profile->user_id = $user->id;
        $profile->save();

        $contract = new Contract();
        $contract->status = 'ACTIVO';
        $dt = Carbon::create(2023, 03, 29, 0);
        $contract->status_date = $dt->toDateTimeString();
        $dt = Carbon::create(2023, 03, 29, 0);
        $contract->registration_date = $dt->toDateTimeString();
        $dt = Carbon::create(2023, 03, 29, 0);
        $contract->retirement_date = $dt->toDateTimeString();
        $dt = Carbon::create(2023, 03, 29, 0);
        $contract->coverage_date = $dt->toDateTimeString();
        $contract->covenant = 'SEGUROS NUEVO MUNDO S.A';
        $contract->code = '20230301';
        $contract->plan = 'PREMIUM MM (JUN17)';
        $contract->bank_id = $bank->id;
        $contract->assistance_id = 4;
        $dt = Carbon::create(2023, 03, 29, 0);
        $contract->emission = $dt->toDateTimeString();
        $dt = Carbon::create(2025, 03, 29, 0);
        $contract->expire_date = $dt->toDateTimeString();
        $contract->modality = 'MENSUAL';
        $contract->fee_quantity = '4';
        $contract->payment_type = 'MI SALUD';
        $contract->sales = 'NUEVA';
        $contract->user_id = $user->id;
        $contract->save();

        $profile = new Profile();
        $profile->firstnames = 'Luisa Helena';
        $profile->lastnames = 'Fraga Peña';
        $dt = Carbon::create(1972, 02, 25, 0);
        $profile->birthdate = $dt->toDateTimeString();
        $profile->country_id = 242;
        $profile->state_id = 2199;
        $profile->city_id = 1;
        $profile->gender = 0;
        $profile->save();

        $familyMember = new FamilyMember();
        $familyMember->bond = 'CONYUGE';
        $familyMember->user_id = $user->id;
        $familyMember->profile_id = $profile->id;
        $familyMember->save();

        $contractAssistance = new ContractAssistance();
        $dt = Carbon::create(2023, 03, 29, 0);
        $contractAssistance->coverage_date = $dt->toDateTimeString();

        $contractAssistance->inscription = $dt->toDateTimeString();
        $contractAssistance->contract_id = $contract->id;
        $contractAssistance->additional_amount =  0.00;
        $contractAssistance->assistance_id = 4;
        $contractAssistance->profile_id = $profile->id;
        $contractAssistance->additional_amount =  0.00;
        $contractAssistance->family_member_id = $familyMember->id;
        $contractAssistance->save();

        $profile = new Profile();
        $profile->firstnames = 'Jose Manuel';
        $profile->lastnames = 'Diaz Peña';
        $dt = Carbon::create(1989, 01, 25, 0);
        $profile->birthdate = $dt->toDateTimeString();
        $profile->country_id = 242;
        $profile->state_id = 2199;
        $profile->city_id = 1;
        $profile->gender = 1;
        $profile->save();


        $familyMember = new FamilyMember();
        $familyMember->bond = 'HIJO';
        $familyMember->user_id = $user->id;
        $familyMember->profile_id = $profile->id;
        $familyMember->save();

        $contractAssistance = new ContractAssistance();
        $dt = Carbon::create(2023, 03, 29, 0);
        $contractAssistance->inscription = $dt->toDateTimeString();
        $contractAssistance->contract_id = $contract->id;
        $contractAssistance->assistance_id = 4;
        $contractAssistance->additional_amount =  0.00;
        $dt = Carbon::create(2023, 03, 29, 0);
        $contractAssistance->coverage_date = $dt->toDateTimeString();
        $contractAssistance->family_member_id = $familyMember->id;
        $contractAssistance->profile_id = $profile->id;
        $contractAssistance->save();

        $profile = new Profile();
        $profile->firstnames = 'Jose Ramon';
        $profile->lastnames = 'Diaz Rojas';
        $dt = Carbon::create(2021, 03, 30, 0);
        $profile->birthdate = $dt->toDateTimeString();
        $profile->country_id = 242;
        $profile->state_id = 2199;
        $profile->city_id = 1;
        $profile->gender = 1;
        $profile->save();

        $familyMember = new FamilyMember();
        $familyMember->bond = 'NIETO';
        $familyMember->user_id = $user->id;
        $familyMember->profile_id = $profile->id;
        $familyMember->save();

        $contractAssistance = new ContractAssistance();
        $dt = Carbon::create(2023, 03, 29, 0);
        $contractAssistance->inscription = $dt->toDateTimeString();
        $contractAssistance->contract_id = $contract->id;
        $contractAssistance->assistance_id = 4;
        $contractAssistance->additional_amount = 0.00;
        $dt = Carbon::create(2023, 03, 29, 0);
        $contractAssistance->coverage_date = $dt->toDateTimeString();
        $contractAssistance->family_member_id = $familyMember->id;
        $contractAssistance->profile_id = $profile->id;
        $contractAssistance->save();


        $profile = new Profile();
        $profile->firstnames = 'Maria Daniela';
        $profile->lastnames = 'Diaz Peña';
        $dt = Carbon::create(1998, 04, 10, 0);
        $profile->birthdate = $dt->toDateTimeString();
        $profile->country_id = 242;
        $profile->state_id = 2199;
        $profile->city_id = 1;
        $profile->gender = 0;
        $profile->save();

        $familyMember = new FamilyMember();
        $familyMember->bond = 'HIJA';
        $familyMember->user_id = $user->id;
        $familyMember->profile_id = $profile->id;
        $familyMember->save();

        $contractAssistance = new ContractAssistance();
        $dt = Carbon::create(2023, 03, 29, 0);
        $contractAssistance->coverage_date = $dt->toDateTimeString();
        $dt = Carbon::create(2023, 03, 29, 0);
        $contractAssistance->inscription = $dt->toDateTimeString();
        $contractAssistance->contract_id = $contract->id;
        $contractAssistance->assistance_id = 4;
        $dt = Carbon::create(2023, 03, 29, 0);
        $contractAssistance->coverage_date = $dt->toDateTimeString();
        $contractAssistance->additional_amount =  0.00;
        $contractAssistance->family_member_id = $familyMember->id;
        $contractAssistance->profile_id = $profile->id;
        $contractAssistance->save();

        $profile = new Profile();
        $profile->firstnames = 'Ana Carolina';
        $profile->lastnames = 'Diaz Rojas';
        $dt = Carbon::create(2017, 12, 12, 0);
        $profile->birthdate = $dt->toDateTimeString();
        $profile->country_id = 242;
        $profile->state_id = 2199;
        $profile->city_id = 1;
        $profile->gender = 0;
        $profile->save();

        $familyMember = new FamilyMember();
        $familyMember->bond = 'NIETA';
        $familyMember->user_id = $user->id;
        $familyMember->profile_id = $profile->id;
        $familyMember->save();

        $contractAssistance = new ContractAssistance();
        $dt = Carbon::create(2023, 03, 29, 0);
        $contractAssistance->coverage_date = $dt->toDateTimeString();
        $dt = Carbon::create(2023, 03, 29, 0);
        $contractAssistance->inscription = $dt->toDateTimeString();
        $contractAssistance->contract_id = $contract->id;
        $contractAssistance->assistance_id = 4;
        $dt = Carbon::create(2023, 03, 29, 0);
        $contractAssistance->coverage_date = $dt->toDateTimeString();
        $contractAssistance->additional_amount =  0.00;
        $contractAssistance->family_member_id = $familyMember->id;
        $contractAssistance->profile_id = $profile->id;
        $contractAssistance->save();

        $payment = new Payment();
        $payment->amount = '28,13';
        $dt = Carbon::create(2023, 01, 30, 0);
        $payment->expire_date = $dt->toDateTimeString();
        $payment->status = 'PAGADO';
        $payment->iva = 4.5;
        $dt = Carbon::create(2023, 01, 30, 0);
        $payment->payment_date = $dt->toDateTimeString();
        $dt = Carbon::create(2023, 01, 25, 0);
        $payment->from = $dt->toDateTimeString();
        $dt = Carbon::create(2023, 02, 30, 0);
        $payment->to = $dt->toDateTimeString();
        $payment->payment_number = '00002';
        $payment->contract_id = $contract->id;
        $payment->save();

        $payment = new Payment();
        $payment->amount = 28.13;
        $dt = Carbon::create(2023, 04, 30, 0);
        $payment->expire_date = $dt->toDateTimeString();
        $payment->status = 'VENCIDO';
        $payment->iva = 4.5;
        $dt = Carbon::create(2023, 03, 10, 0);
        $payment->from = $dt->toDateTimeString();
        $dt = Carbon::create(2023, 04, 30, 0);
        $payment->to = $dt->toDateTimeString();
        // $dt = Carbon::create(2023, 05, 01, 0);
        // $payment->payment_date = $dt->toDateTimeString();
        $payment->contract_id = $contract->id;
        // $payment->payment_number = '00003';
        $payment->save();

        $payment = new Payment();
        $payment->iva = 4.5;
        $payment->amount = '28,13';
        $dt = Carbon::create(2023, 05, 30, 0);
        $payment->expire_date = $dt->toDateTimeString();
        $payment->status = 'POR PAGAR';
        // $dt = Carbon::create(2023, 01, 25, 0);
        // $payment->payment_date = $dt->toDateTimeString();
        $dt = Carbon::create(2023, 05, 30, 0);
        $payment->from = $dt->toDateTimeString();
        $payment->contract_id = $contract->id;
        $dt = Carbon::create(2023, 06, 10, 0);
        $payment->to = $dt->toDateTimeString();
        // $payment->payment_number = '00004';
        $payment->save();

        $contract = new Contract();
        $contract->status = 'ACTIVO';
        $dt = Carbon::create(2023, 03, 30, 0);
        $contract->status_date = $dt->toDateTimeString();
        $dt = Carbon::create(2023, 03, 30, 0);
        $contract->registration_date = $dt->toDateTimeString();
        $dt = Carbon::create(2023, 03, 30, 0);
        $contract->retirement_date = $dt->toDateTimeString();
        $dt = Carbon::create(2025, 03, 30, 0);
        $contract->coverage_date = $dt->toDateTimeString();
        $contract->covenant = 'INDUSTRIAS EL PLANETA C.A.';
        $lastContract = Contract::latest()->first();
        $contract->code = '20230302';
        $contract->plan = 'AMD1';
        $contract->bank_id = $bank->id;
        $contract->assistance_id = 4;
        $dt = Carbon::create(2023, 03, 30, 0);
        $contract->emission = $dt->toDateTimeString();
        $dt = Carbon::create(2025, 03, 30, 0);
        $contract->expire_date = $dt->toDateTimeString();
        $contract->modality = 'ANUAL';
        $contract->fee_quantity = '1';
        $contract->payment_type = 'MI SALUD';
        $contract->sales = 'NUEVA';
        $contract->user_id = $user->id;
        $contract->save();

        $profile = new Profile();
        $profile->firstnames = 'Maria Helena';
        $profile->lastnames = 'Luna Torres';
        $dt = Carbon::create(1935, 02, 11, 0);
        $profile->birthdate = $dt->toDateTimeString();
        $profile->country_id = 242;
        $profile->state_id = 2199;
        $profile->city_id = 1;
        $profile->gender = 0;
        $profile->save();

        $familyMember = new FamilyMember();
        $familyMember->bond = 'MADRE';
        $familyMember->user_id = $user->id;
        $familyMember->profile_id = $profile->id;
        $familyMember->save();

        $contractAssistance = new ContractAssistance();
        $dt = Carbon::create(2023, 03, 30, 0);
        $contractAssistance->coverage_date = $dt->toDateTimeString();
        $dt = Carbon::create(2023, 03, 30, 0);
        $contractAssistance->inscription = $dt->toDateTimeString();
        $contractAssistance->contract_id = $contract->id;
        $contractAssistance->assistance_id = 4;
        $contractAssistance->additional_amount =  0.00;
        $contractAssistance->profile_id = $profile->id;
        $contractAssistance->family_member_id = $familyMember->id;
        $contractAssistance->save();

        $payment = new Payment();
        $payment->iva = 4.5;
        $payment->amount = 28.13;
        $dt = Carbon::create(2023, 05, 30, 0);
        $payment->expire_date = $dt->toDateTimeString();
        $payment->status = 'PAGADO';
        $dt = Carbon::create(2023, 04, 10, 0);
        $payment->payment_date = $dt->toDateTimeString();
        $dt = Carbon::create(2023, 04, 01, 0);
        $payment->from = $dt->toDateTimeString();
        $payment->contract_id = $contract->id;
        $dt = Carbon::create(2023, 05, 30, 0);
        $payment->to = $dt->toDateTimeString();
        $payment->payment_number = '00005';
        $payment->save();

        $profile = new Profile();
        $profile->firstnames = 'Emiliano Jose';
        $profile->lastnames = 'Marchan Diaz';
        $dt = Carbon::create(1932, 06, 11, 0);
        $profile->birthdate = $dt->toDateTimeString();
        $profile->country_id = 242;
        $profile->state_id = 2199;
        $profile->city_id = 1;
        $profile->gender = 1;
        $profile->save();

        $familyMember = new FamilyMember();
        $familyMember->bond = 'PADRE';
        $familyMember->user_id = $user->id;
        $familyMember->profile_id = $profile->id;
        $familyMember->save();

        $contractAssistance = new ContractAssistance();
        $dt = Carbon::create(2023, 03, 30, 0);
        $contractAssistance->coverage_date = $dt->toDateTimeString();
        $dt = Carbon::create(2023, 03, 30, 0);
        $contractAssistance->inscription = $dt->toDateTimeString();
        $contractAssistance->contract_id = $contract->id;
        $contractAssistance->assistance_id = 4;
        $contractAssistance->additional_amount =  0.00;
        $contractAssistance->profile_id = $profile->id;
        $contractAssistance->family_member_id = $familyMember->id;
        $contractAssistance->save();

        $contract = new Contract();
        $contract->status = 'ACTIVO';
        $dt = Carbon::create(2023, 06, 01, 0);
        $contract->status_date = $dt->toDateTimeString();
        $dt = Carbon::create(2023, 06, 01, 0);
        $contract->registration_date = $dt->toDateTimeString();
        $dt = Carbon::create(2023, 06, 01, 0);
        $contract->retirement_date = $dt->toDateTimeString();
        $dt = Carbon::create(2023, 06, 01, 0);
        $contract->coverage_date = $dt->toDateTimeString();
        $contract->covenant = 'CONSORCIO 20 POR CIENTO, C.A..';
        $lastContract = Contract::latest()->first();
        $contract->code = '20230303';
        $contract->plan = 'PLAN MEDIO';
        $contract->bank_id = $bank->id;
        $contract->assistance_id = 8;
        $dt = Carbon::create(2023, 03, 30, 0);
        $contract->emission = $dt->toDateTimeString();
        $dt = Carbon::create(2025, 03, 30, 0);
        $contract->expire_date = $dt->toDateTimeString();
        $contract->modality = 'MENSUAL';
        $contract->fee_quantity = '2';
        $contract->payment_type = 'MI SALUD';
        $contract->sales = 'NUEVA';
        $contract->user_id = $user->id;
        $contract->save();

        $profile = new Profile();
        $profile->firstnames = 'Firulais';
        $dt = Carbon::create(2022, 01, 25, 0);
        $profile->birthdate = $dt->toDateTimeString();
        $profile->gender = 1;
        $profile->save();

        $familyMember = new FamilyMember();
        $familyMember->bond = 'MASCOTA';
        $familyMember->user_id = $user->id;
        $familyMember->profile_id = $profile->id;
        $familyMember->save();


        $contractAssistance = new ContractAssistance();
        $dt = Carbon::create(2023, 03, 30, 0);
        $contractAssistance->coverage_date = $dt->toDateTimeString();
        $dt = Carbon::create(2023, 03, 30, 0);
        $contractAssistance->inscription = $dt->toDateTimeString();
        $contractAssistance->contract_id = $contract->id;
        $contractAssistance->assistance_id = 8;
        $dt = Carbon::create(2023, 03, 30, 0);
        $contractAssistance->coverage_date = $dt->toDateTimeString();
        $contractAssistance->additional_amount =  0.00;
        $contractAssistance->family_member_id = $familyMember->id;
        $contractAssistance->profile_id = $profile->id;
        $contractAssistance->save();

        $profile = new Profile();
        $profile->firstnames = 'Michu';
        $dt = Carbon::create(2022, 01, 25, 0);
        $profile->birthdate = $dt->toDateTimeString();
        $profile->country_id = 242;
        $profile->state_id = 2199;
        $profile->city_id = 1;
        $profile->gender = 0;
        $profile->save();

        $familyMember = new FamilyMember();
        $familyMember->bond = 'MASCOTA';
        $familyMember->user_id = $user->id;
        $familyMember->profile_id = $profile->id;
        $familyMember->save();

        $contractAssistance = new ContractAssistance();
        $dt = Carbon::create(2023, 03, 30, 0);
        $contractAssistance->coverage_date = $dt->toDateTimeString();
        $dt = Carbon::create(2023, 03, 30, 0);
        $contractAssistance->inscription = $dt->toDateTimeString();
        $contractAssistance->contract_id = $contract->id;
        $contractAssistance->assistance_id = 8;
        $dt = Carbon::create(2023, 03, 30, 0);
        $contractAssistance->coverage_date = $dt->toDateTimeString();
        $contractAssistance->additional_amount =  0.00;
        $contractAssistance->family_member_id = $familyMember->id;
        $contractAssistance->profile_id = $profile->id;
        $contractAssistance->save();

        $payment = new Payment();
        $payment->iva = 4.5;
        $payment->amount = 28.13;
        $dt = Carbon::create(2023, 04, 30, 0);
        $payment->expire_date = $dt->toDateTimeString();
        $payment->status = 'PAGADO';
        $dt = Carbon::create(2023, 03, 10, 0);
        $payment->payment_date = $dt->toDateTimeString();
        $dt = Carbon::create(2023, 03, 8, 0);
        $payment->from = $dt->toDateTimeString();
        $payment->contract_id = $contract->id;
        $dt = Carbon::create(2023, 04, 30, 0);
        $payment->to = $dt->toDateTimeString();
        $payment->payment_number = '00007';
        $payment->save();

        $payment = new Payment();
        $payment->iva = 4.5;
        $payment->amount = 28.13;
        $dt = Carbon::create(2023, 05, 30, 0);
        $payment->expire_date = $dt->toDateTimeString();
        $payment->status = 'POR PAGAR';
        // $dt = Carbon::create(2023, 05, 10, 0);
        // $payment->payment_date = $dt->toDateTimeString();
        $dt = Carbon::create(2023, 05, 01, 0);
        $payment->from = $dt->toDateTimeString();
        $payment->contract_id = $contract->id;
        $dt = Carbon::create(2023, 05, 30, 0);
        $payment->to = $dt->toDateTimeString();
        // $payment->payment_number = '00008';
        $payment->save();

        $contract = new Contract();
        $contract->status = 'ACTIVO';
        $dt = Carbon::create(2023, 04, 01, 0);
        $contract->status_date = $dt->toDateTimeString();
        $dt = Carbon::create(2023, 04, 01, 0);
        $contract->registration_date = $dt->toDateTimeString();
        $dt = Carbon::create(2023, 04, 01, 0);
        $contract->retirement_date = $dt->toDateTimeString();
        $dt = Carbon::create(2023, 04, 01, 0);
        $contract->coverage_date = $dt->toDateTimeString();
        $contract->covenant = 'EMISORA 88.1 FM (INTERCAMBIO).';
        $lastContract = Contract::latest()->first();
        $contract->code = '20230304';
        $contract->plan = 'AMD1';
        $contract->bank_id = $bank->id;
        $contract->assistance_id = 6;
        $dt = Carbon::create(2023, 04, 01, 0);
        $contract->emission = $dt->toDateTimeString();
        $dt = Carbon::create(2025, 04, 01, 0);
        $contract->expire_date = $dt->toDateTimeString();
        $contract->modality = 'MENSUAL';
        $contract->fee_quantity = '2';
        $contract->payment_type = 'MI SALUD';
        $contract->sales = 'NUEVA';
        $contract->user_id = $user->id;
        $contract->save();

        $profile = new Profile();
        $profile->firstnames = 'Maria Helena';
        $profile->lastnames = 'Marchan';
        $dt = Carbon::create(1960, 06, 12, 0);
        $profile->birthdate = $dt->toDateTimeString();
        $profile->country_id = 242;
        $profile->state_id = 2199;
        $profile->city_id = 1;
        $profile->gender = 0;
        $profile->save();


        $familyMember = new FamilyMember();
        $familyMember->bond = 'HERMANA';
        $familyMember->user_id = $user->id;
        $familyMember->profile_id = $profile->id;
        $familyMember->save();


        $contractAssistance = new ContractAssistance();
        $dt = Carbon::create(2023, 04, 01, 0);
        $contractAssistance->coverage_date = $dt->toDateTimeString();
        $dt = Carbon::create(2023, 04, 01, 0);
        $contractAssistance->inscription = $dt->toDateTimeString();
        $contractAssistance->contract_id = $contract->id;
        $contractAssistance->assistance_id = 8;
        $dt = Carbon::create(2023, 04, 01, 0);
        $contractAssistance->coverage_date = $dt->toDateTimeString();
        $contractAssistance->additional_amount =  100;
        $contractAssistance->family_member_id = $familyMember->id;
        $contractAssistance->profile_id = $profile->id;
        $contractAssistance->save();

        $payment = new Payment();
        $payment->iva = 4.5;
        $payment->amount = 100;
        $dt = Carbon::create(2023, 04, 30, 0);
        $payment->expire_date = $dt->toDateTimeString();
        $payment->status = 'PAGADO';
        $dt = Carbon::create(2023, 04, 05, 0);
        $payment->payment_date = $dt->toDateTimeString();
        $dt = Carbon::create(2023, 04, 01, 0);
        $payment->from = $dt->toDateTimeString();
        $payment->contract_id = $contract->id;
        $dt = Carbon::create(2023, 04, 30, 0);
        $payment->to = $dt->toDateTimeString();
        $payment->payment_number = '00008';
        $payment->save();

        $payment = new Payment();
        $payment->iva = 4.5;
        $payment->amount = 100;
        $dt = Carbon::create(2023, 05, 30, 0);
        $payment->expire_date = $dt->toDateTimeString();
        $payment->status = 'PAGADO';
        $dt = Carbon::create(2023, 05, 04, 0);
        $payment->payment_date = $dt->toDateTimeString();
        $dt = Carbon::create(2023, 05, 01, 0);
        $payment->from = $dt->toDateTimeString();
        $payment->contract_id = $contract->id;
        $dt = Carbon::create(2023, 05, 30, 0);
        $payment->to = $dt->toDateTimeString();
        $payment->payment_number = '00009';
        $payment->save();
    }
}

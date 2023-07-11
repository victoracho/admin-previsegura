<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Profile;

class EmailSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        try {
            $users = User::all();
            foreach ($users as $user) {
                $user->password = bcrypt($user->doc);
                $user->save();
            }
            $this->command->info('usuarios notificados');
        } catch (\Throwable $th) {
            DB::rollback();
            throw $th;
        }
    }
}

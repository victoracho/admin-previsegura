<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Role;
use App\Models\Permission;


class RolesSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    // rol de super admin
    $permissions = Permission::get();
    $role = new Role();
    $role->slug = 'role-superAdmin';
    $role->name = 'Rol super admin';
    $role->save();
    $role->permissions()->attach($permissions);

    $permissions = Permission::get();
    $role = new Role();
    $role->slug = 'role-user';
    $role->name = 'Rol de usuario';
    $role->save();
    $role->permissions()->attach($permissions);
  }
}

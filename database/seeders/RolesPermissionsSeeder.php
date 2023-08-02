<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesPermissionsSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {

    //super admin
    DB::table('roles_permissions')->insert(
      ['role_id' => 1, 'permission_id' => 1]
    );

    //super admin
    DB::table('roles_permissions')->insert(
      ['role_id' => 1, 'permission_id' => 2]
    );

    //super admin
    DB::table('roles_permissions')->insert(
      ['role_id' => 1, 'permission_id' => 3]
    );

    //super admin
    DB::table('roles_permissions')->insert(
      ['role_id' => 1, 'permission_id' => 4]
    );

    //super admin
    DB::table('roles_permissions')->insert(
      ['role_id' => 1, 'permission_id' => 5]
    );
    //super admin
    DB::table('roles_permissions')->insert(
      ['role_id' => 1, 'permission_id' => 6]
    );
    //super admin
    DB::table('roles_permissions')->insert(
      ['role_id' => 1, 'permission_id' => 7]
    );
    //super admin
    DB::table('roles_permissions')->insert(
      ['role_id' => 1, 'permission_id' => 8]
    );
    //super admin
    DB::table('roles_permissions')->insert(
      ['role_id' => 1, 'permission_id' => 9]
    );
    //super admin
    DB::table('roles_permissions')->insert(
      ['role_id' => 1, 'permission_id' => 10]
    );

    // user 
    DB::table('roles_permissions')->insert(
      ['role_id' => 2, 'permission_id' => 7]
    );
    // user 
    DB::table('roles_permissions')->insert(
      ['role_id' => 2, 'permission_id' => 4]
    );
    // user 
    DB::table('roles_permissions')->insert(
      ['role_id' => 2, 'permission_id' => 3]
    );
    // user 
    DB::table('roles_permissions')->insert(
      ['role_id' => 2, 'permission_id' => 2]
    );
  }
}

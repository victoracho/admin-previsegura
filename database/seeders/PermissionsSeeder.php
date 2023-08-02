<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Permission;

class PermissionsSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $permission = new Permission();
    $permission->slug = 'create-user';
    $permission->name = 'crear usuario';
    $permission->save();

    $permission = new Permission();
    $permission->slug = 'list-users';
    $permission->name = 'listar usuarios';
    $permission->save();

    $permission = new Permission();
    $permission->slug = 'delete-user';
    $permission->name = 'eliminar usuario';
    $permission->save();


    $permission = new Permission();
    $permission->slug = 'update-user';
    $permission->name = 'actualizar usuario';
    $permission->save();

    $permission = new Permission();
    $permission->slug = 'remove-user';
    $permission->name = 'eliminar definitivamente usuario';
    $permission->save();

    $permission = new Permission();
    $permission->slug = 'create-assistance';
    $permission->name = 'crear asistencia';
    $permission->save();

    $permission = new Permission();
    $permission->slug = 'edit-assistance';
    $permission->name = 'editar asistencia';
    $permission->save();

    $permission = new Permission();
    $permission->slug = 'delete-assistance';
    $permission->name = 'eliminar asistencia';
    $permission->save();


    $permission = new Permission();
    $permission->slug = 'list-assistance';
    $permission->name = 'listar asistencia';
    $permission->save();

    $permission = new Permission();
    $permission->slug = 'remove-assistance';
    $permission->name = 'eliminar definitivamente asistencia';
    $permission->save();
  }
}

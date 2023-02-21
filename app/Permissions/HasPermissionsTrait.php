<?php

namespace App\Permissions;

use App\Models\Permission;
use App\Models\Role;

trait HasPermissionsTrait
{

  public function givePermissionsTo(...$permissions)
  {

    $permissions = $this->getAllPermissions($permissions);
    dd($permissions);
    if ($permissions === null) {
      return $this;
    }
    $this->permissions()->saveMany($permissions);
    return $this;
  }

  public function withdrawPermissionsTo(...$permissions)
  {

    $permissions = $this->getAllPermissions($permissions);
    $this->permissions()->detach($permissions);
    return $this;
  }

  public function refreshPermissions(...$permissions)
  {

    $this->permissions()->detach();
    return $this->givePermissionsTo($permissions);
  }

  public function hasPermissionTo($permission)
  {

    return $this->hasPermissionThroughRole($permission) || $this->hasPermission($permission);
  }

  public function hasPermissionThroughRole($permission)
  {

    foreach ($permission->roles as $role) {
      if ($this->roles->contains($role)) {
        return true;
      }
    }
    return false;
  }

  public function hasRole(...$roles)
  {

    foreach ($roles as $role) {
      if ($this->roles->contains('slug', $role)) {
        return true;
      }
    }
    return false;
  }

  public function roles()
  {

    return $this->belongsToMany(Role::class, 'user_roles');
  }

  public function firstRoleName()
  {

    $rol = $this->roles()->first();
    return $rol->name;
  }

  public function firstRole()
  {

    $rol = $this->roles()->first();
    return $rol;
  }


  public function permissions()
  {

    return $this->belongsToMany(Permission::class, 'users_permissions');
  }
  protected function hasPermission($permission)
  {

    return (bool) $this->permissions->where('slug', $permission->slug)->count();
  }

  protected function getAllPermissions()
  {

    return Permission::whereIn('slug', $permissions)->get();
  }
  public function allPermissions()
  {

    $roles = $this->roles;
    $arr = [];
    foreach ($roles as $role) {
      $perm =  $role->permissions->toArray();
      $arr = array_merge($arr, $perm);
    }
    $arr = collect($arr)->unique('id');

    $talents = [];
    $clients = [];
    $posreq = [];
    $testimony = [];
    $config = [];

    foreach ($arr as $ar) {
      if (str_contains($ar['slug'], 'talent-')) {
        $talents[] = $ar['id'];
      }
      if (str_contains($ar['slug'], 'client-')) {
        $clients[] = $ar['id'];
      }
      if (str_contains($ar['slug'], 'posreq-')) {
        $posreq[] = $ar['id'];
      }
      if (str_contains($ar['slug'], 'testimony-')) {
        $testimony[] = $ar['id'];
      }
      if (str_contains($ar['slug'], 'config-')) {
        $config[] = $ar['id'];
      }
    }


    return [
      'talents' => $talents,
      'clients' => $clients,
      'posreq' => $posreq,
      'testimony' => $testimony,
      'config' => $config
    ];
  }
}

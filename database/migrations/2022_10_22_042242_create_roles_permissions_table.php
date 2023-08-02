<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesPermissionsTable extends Migration

{
  public function up()
  {
    Schema::create('roles_permissions', function (Blueprint $table) {

      $table->id();
      $table->foreignId('role_id')->unsigned();
      $table->foreignId('permission_id')->unsigned();
      //FOREIGN KEY
      $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
      $table->foreign('permission_id')->references('id')->on('permissions')->onDelete('cascade');
      //PRIMARY KEYS
      $table->unique(['role_id', 'permission_id']);
    });
  }

  public function down()
  {
    Schema::dropIfExists('roles_permissions');
  }
}

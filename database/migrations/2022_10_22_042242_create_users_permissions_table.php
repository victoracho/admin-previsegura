<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersPermissionsTable extends Migration

{
  public function up()
  {
    Schema::create('users_permissions', function (Blueprint $table) {
      $table->id();
      $table->foreignId('user_id')->unsigned();
      $table->foreignId('permission_id')->unsigned();
      $table->unique(['user_id', 'permission_id']);

      //FOREIGN KEY
      $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
      $table->foreign('permission_id')->references('id')->on('permissions')->onDelete('cascade');

      //PRIMARY KEYS
    });
  }

  public function down()
  {
    Schema::dropIfExists('users_permissions');
  }
}

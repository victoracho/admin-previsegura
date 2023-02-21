<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersRolesTable extends Migration

{
  public function up()
  {
    Schema::create('user_roles', function (Blueprint $table) {
      $table->id();
      $table->foreignId('user_id')->unsigned();
      $table->foreignId('role_id')->unsigned();
      $table->unique(['user_id', 'role_id']);
      $table->timestamps();
      //FOREIGN KEY
      $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
      $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');

      //PRIMARY KEYS
    });
  }

  public function down()
  {
    Schema::dropIfExists('user_roles');
  }
}

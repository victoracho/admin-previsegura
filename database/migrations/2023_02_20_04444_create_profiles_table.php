<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('profiles', function (Blueprint $table) {
      $table->id();
      $table->foreignId('state_id')->unsigned()->nullable();
      $table->string('firstnames', 100)->nullable();
      $table->string('lastnames', 100)->nullable();
      $table->string('main_phone', 100)->nullable();
      $table->string('mobile_phone', 100)->nullable();
      $table->string('optional_phone', 100)->nullable();
      $table->string('work_phone', 100)->nullable();

      $table->text('address')->nullable();
      $table->string('doc', 100)->nullable();
      $table->string('dependency', 100)->nullable();

      $table->string('gender', 1)->nullable();
      $table->date('birthdate')->nullable();

      $table->foreignId('country_id')->unsigned()->nullable();
      $table->foreignId('doc_type_id')->unsigned()->nullable();
      $table->foreignId('contract_id')->unsigned()->nullable();
      $table->foreignId('user_id')->unsigned()->nullable();

      $table->string('email');

      $table->string('password')->nullable();
      // $table->foreign('doc_type_id')->references('id')->on('doc_type')->onDelete('set null');
      $table->foreign('country_id')->references('id')->on('countries')->onDelete('set null');
      $table->foreign('contract_id')->references('id')->on('contracts')->onDelete('set null');
      $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');

      $table->foreign('state_id')->references('id')->on('country_states')->onDelete('set null');
      $table->unique(['doc']);
      $table->unique(['email']);
      $table->unique(['mobile_phone']);
      $table->unique(['work_phone']);
      $table->unique(['main_phone']);
      $table->unique(['optional_phone']);

      $table->foreignId('current_team_id')->nullable();
      $table->string('profile_photo_path', 2048)->nullable();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('users');
  }
};

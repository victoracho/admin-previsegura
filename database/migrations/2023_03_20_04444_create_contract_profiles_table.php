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
    Schema::create('contract_profiles', function (Blueprint $table) {
      $table->id();
      $table->foreignId('contract_id')->unsigned()->notNullable();
      $table->foreignId('profile_id')->unsigned()->notNullable();
      $table->timestamps();

      $table->foreign('contract_id')->references('id')->on('contracts')->onDelete('cascade');
      $table->foreign('profile_id')->references('id')->on('profiles')->onDelete('cascade');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('contract_profiles');
  }
};

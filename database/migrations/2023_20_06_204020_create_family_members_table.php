<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFamilyMembersTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('family_members', function (Blueprint $table) {
      $table->id();
      $table->foreignId('user_id')->unsigned()->nullable();
      $table->foreignId('profile_id')->unsigned()->nullable();
      $table->string('bond', 100)->nullable();
      $table->date('coverage_date')->nullable();
      $table->string('additional_amount', 100)->nullable();
      $table->boolean('deceased')->default(0)->nullable();
      $table->boolean('deceased_date')->default(0)->nullable();

      $table->timestamps();

      $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
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
    Schema::dropIfExists('assistances_petitions');
  }
}

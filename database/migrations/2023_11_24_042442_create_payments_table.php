<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('payments', function (Blueprint $table) {
      $table->id();
      $table->foreignId('contract_id')->unsigned()->nullable();
      $table->string('amount', 100)->nullable();
      $table->string('iva', 100)->nullable();
      $table->date('expire_date')->nullable();
      $table->date('payment_date')->nullable();
      $table->date('from')->nullable();
      $table->date('to')->nullable();

      $table->string('additional_amount', 100)->nullable();
      $table->string('status')->default('PENDIENTE')->nullable();
      $table->string('payment_number', 100)->nullable();

      $table->timestamps();
      $table->foreign('contract_id')->references('id')->on('contracts')->onDelete('set null');
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

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
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->unsigned()->notNullable();
            $table->foreignId('account_id')->unsigned()->notNullable();
            $table->foreignId('bank_id')->unsigned()->notNullable();

            $table->boolean('direct_debit_acceptance')->default(0);
            $table->string('status', 100)->nullable();
            $table->date('status_date')->nullable();
            $table->date('retirement_date')->nullable();
            $table->date('coverage_date')->nullable();
            $table->date('expires')->nullable();
            $table->string('convenant', 100)->nullable();
            $table->string('plan', 100)->nullable();
            $table->string('payment_type', 100)->nullable();
            $table->string('modality', 100)->nullable();
            $table->string('fee_quantity', 100)->nullable();

            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('account_id')->references('id')->on('accounts')->onDelete('cascade');
            $table->foreign('bank_id')->references('id')->on('banks')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contracts');
    }
};

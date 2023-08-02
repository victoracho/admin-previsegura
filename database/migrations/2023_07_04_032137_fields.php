<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::table('', function (Blueprint $table) {
        //     $table->string('civil_status', 100)->nullable();
        // });
        // Schema::table('contracts', function (Blueprint $table) {
        //     $table->string('bank', 100)->nullable();
        // });
        //
        Schema::table('payments', function (Blueprint $table) {
            $table->string('total_calculated', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('payments', function (Blueprint $table) {
        });
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('contract_assistances', function (Blueprint $table) {
            $table->foreignId('profile_id')->unsigned()->notNullable();
            $table->foreignId('family_member_id')->unsigned()->nullable();
            $table->date('coverage_date')->nullable();
            $table->date('inscription')->nullable();
            $table->float('additional_amount')->nullable();
            $table->foreign('profile_id')->references('id')->on('profiles')->onDelete('cascade');
            $table->foreign('family_member_id')->references('id')->on('family_members')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
        });
    }
};

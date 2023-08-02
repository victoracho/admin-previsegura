<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssistancePetitions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assistance_petitions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('petition_id')->unsigned()->nullable();
            $table->foreignId('assistance_id')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('petition_id')->references('id')->on('petitions')->onDelete('cascade');
            $table->foreign('assistance_id')->references('id')->on('assistances')->onDelete('cascade');
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

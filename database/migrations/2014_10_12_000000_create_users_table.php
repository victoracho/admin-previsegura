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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('state_id')->unsigned()->nullable();
            $table->string('firstnames', 100)->nullable();
            $table->string('lastnames', 100)->nullable();
            $table->string('phone_number', 100)->nullable();
            $table->string('doc', 100)->nullable();
            $table->string('gender', 1)->nullable();
            $table->date('birthdate')->nullable();
            $table->foreignId('country_id')->unsigned()->nullable();
            $table->foreignId('doc_type_id')->unsigned()->nullable();       
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            
            $table->string('password')->nullable();
            $table->rememberToken();
            $table->foreign('doc_type_id')->references('id')->on('countries')->onDelete('set null');
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('set null');
            $table->foreign('state_id')->references('id')->on('country_states')->onDelete('set null');
            $table->unique(['doc', 'phone_number']);
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

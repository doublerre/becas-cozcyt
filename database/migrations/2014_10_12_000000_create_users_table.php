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
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('curp')->unique();
            $table->string('name');
            $table->string('rfc');
            $table->string('estado');
            $table->string('municipio');
            $table->string('institucion');
            $table->string('carrera');
            $table->string('ap_paterno');
            $table->string('ap_materno');
            $table->integer('edad');
            $table->string('g_etnico');
            $table->string('colonia');
            $table->string('calle');
            $table->integer('numero');
            $table->integer('codigo_postal');
            $table->integer('tel_cel');
            $table->integer('tel_fijo');
            $table->integer('grado');
            $table->double('promedio');
            $table->rememberToken();
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

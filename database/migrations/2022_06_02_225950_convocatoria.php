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
        Schema::create('convocatoria', function(Blueprint $table){
            $table->id();
            $table->string('periodo');
            $table->string('nombre');
            $table->string('imagen');
            $table->longText('descripcion');
            $table->longText('requisitos');
            $table->longText('tipo');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            
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
        //
    }
};

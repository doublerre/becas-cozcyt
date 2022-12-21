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
        Schema::create('estudios', function (Blueprint $table) {
            $table->id();
            $table->string('ocupacion');
            $table->string('trabajas')->nullable();
            $table->string('telefono_trabajo')->nullable();
            $table->string('horario_trabajo')->nullable();
            $table->string('sueldo_mensual')->nullable();
            $table->string('vives_con');
            $table->string('tiempo_viviendo');
            $table->string('personas_viviendo');
            $table->string('status_casa');
            $table->string('material_piso');
            $table->string('cantidad_recamaras');
            $table->string('cantidad_banos');
            $table->string('tiene_sala');
            $table->string('tiene_cocina_independiente');
            $table->string('servicios_cuenta');
            $table->string('electrodomesticos_en_casa');
            $table->string('seguro_medico');
            $table->string('numero_autos');
            $table->string('transporte_utilizado');
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
        Schema::dropIfExists('estudios');
    }
};

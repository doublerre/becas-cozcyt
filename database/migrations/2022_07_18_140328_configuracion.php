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
        //  
        Schema::create('tags', function (Blueprint $table){
            $table->increments('id');
            $table->string('color_navbar');
            $table->string('color_header');
            $table->string('color_body');
            $table->string('color_texto');
            $table->string('imagen_login');
            $table->string('imagen_navbar');
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

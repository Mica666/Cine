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
        Schema::create('entradas', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('combos_id');
            $table->foreign('combos_id')->references('id')->on('combos');

            $table->unsignedBigInteger('beneficios_id');
            $table->foreign('beneficios_id')->references('id')->on('beneficios');

            $table->unsignedBigInteger('peliculas_id');
            $table->foreign('peliculas_id')->references('id')->on('peliculas');

            $table->unsignedBigInteger('horarios_id');
            $table->foreign('horarios_id')->references('id')->on('horarios');
            
            $table->unsignedBigInteger('butacas_id');
            $table->foreign('butacas_id')->references('id')->on('butacas');
            
            $table->unsignedBigInteger('users_id');
            $table->foreign('users_id')->references('id')->on('users');
            
            $table->unsignedBigInteger('tipos_id');
            $table->foreign('tipos_id')->references('id')->on('tipos');


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
        Schema::dropIfExists('entradas');
    }
};

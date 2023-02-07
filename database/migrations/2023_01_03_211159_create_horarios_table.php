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
        Schema::create('horarios', function (Blueprint $table) {
            $table->id();
            $table->time('hora');
            $table->date('fecha');
            
            $table->unsignedBigInteger('peliculas_id');
            $table->foreign('peliculas_id')->references('id')->on('peliculas');
            $table->timestamps();
            
            $table->unsignedBigInteger('salas_id');
            $table->foreign('salas_id')->references('id')->on('salas'); 
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('horarios');
    }
};

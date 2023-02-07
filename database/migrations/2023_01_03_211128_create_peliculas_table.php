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
        Schema::create('peliculas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('slug');
            $table->longtext('sinopsis');
            $table->text('director');
            $table->longtext('reparto');
            $table->time('duracion');
            $table->longtext('trailer_url');
            $table->timestamps();
           
            $table->unsignedBigInteger('generos_id');
            $table->foreign('generos_id')->references('id')->on('generos');

            $table->unsignedBigInteger('clasificacions_id');
            $table->foreign('clasificacions_id')->references('id')->on('clasificacions');
            
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peliculas');
    }
};

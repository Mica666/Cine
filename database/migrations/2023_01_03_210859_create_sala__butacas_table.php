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
        Schema::create('sala__butacas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('salas_id');
            $table->foreign('salas_id')->references('id')->on('salas')->onDelete('cascade');

            $table->unsignedBigInteger('butacas_id');
            $table->foreign('butacas_id')->references('id')->on('butacas')->onDelete('cascade');
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
        Schema::dropIfExists('sala__butacas');
    }
};

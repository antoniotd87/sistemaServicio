<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeguimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seguimientos', function (Blueprint $table) {
            $table->id();
            $table->string('SEG_status', 45)->nullable();
            $table->foreignId('SEG_EST_id')->references('id')->on('estudiantes');
            $table->foreignId('SEG_ENT_id')->references('id')->on('entidads');
            $table->foreignId('SEG_FCH_id')->references('id')->on('fechas');
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
        Schema::dropIfExists('seguimientos');
    }
}


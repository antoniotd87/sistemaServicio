<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntidadReceptorasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entidad_receptoras', function (Blueprint $table) {
            $table->id();
            $table->string('ENR_nombre', 50)->nullable();
            $table->string('ENR_domicilio', 150)->nullable();
            $table->string('ENR_municipio', 100)->nullable();
            $table->string('ENR_telefono', 10)->nullable();
            $table->string('ENR_correo', 50)->nullable();
            $table->string('ENR_programaParticipa', 50)->nullable();
            $table->string('ENR_sector', 50)->nullable();
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
        Schema::dropIfExists('entidad_receptoras');
    }
}

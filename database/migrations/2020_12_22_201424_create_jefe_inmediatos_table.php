<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJefeInmediatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jefe_inmediatos', function (Blueprint $table) {
            $table->id();
            $table->string('JEI_nombre', 45)->nullable();
            $table->string('JEI_apellifoPaterno', 45)->nullable();
            $table->string('JEI_apellidoMaterno', 45)->nullable();
            $table->string('JEI_cargo', 45)->nullable();
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
        Schema::dropIfExists('jefe_inmediatos');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->increments('EST_id');
            $table->string('EST_numeroCuenta', 10)->unique();
            $table->string('EST_registroEstatalSS', 45);
            $table->string('EST_apellidoPaterno', 45);
            $table->string('EST_apellidoMaterno', 45);
            $table->string('EST_nombre', 45);
            $table->string('EST_correo', 45);
            $table->string('EST_edad', 45);
            $table->string('EST_sexo', 45);
            $table->string('EST_carrera', 45);
            $table->string('EST_promedio', 45);
            $table->string('EST_porcentajeCreditos', 45);
            $table->date('EST_fechaNacimiento');
            $table->string('EST_domicilio', 45);
            $table->string('EST_rfc', 45);
            $table->string('EST_curp', 45);
            $table->string('EST_telefono', 45);
            $table->string('EST_codigoPostal', 45);
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
        Schema::dropIfExists('estudiantes');
    }
}

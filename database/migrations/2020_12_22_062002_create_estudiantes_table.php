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
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users');
            $table->string('EST_numeroCuenta', 10)->unique()->nullable();
            $table->string('EST_registroEstatalSS', 45)->nullable();
            $table->string('EST_apellidoPaterno', 45)->nullable();
            $table->string('EST_apellidoMaterno', 45)->nullable();
            $table->string('EST_nombre', 45)->nullable();
            $table->string('EST_correo', 45)->nullable();
            $table->string('EST_edad', 45)->nullable();
            $table->string('EST_sexo', 45)->nullable();
            $table->string('EST_carrera', 45)->nullable();
            $table->string('EST_promedio', 45)->nullable();
            $table->string('EST_porcentajeCreditos', 45)->nullable();
            $table->string('EST_grupo', 45)->nullable();
            $table->string('EST_semestre', 45)->nullable();
            $table->date('EST_fechaNacimiento')->nullable();
            $table->string('EST_domicilio', 45)->nullable();
            $table->string('EST_rfc', 45)->nullable();
            $table->string('EST_curp', 45)->nullable();
            $table->string('EST_telefono', 45)->nullable();
            $table->string('EST_codigoPostal', 45)->nullable();
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

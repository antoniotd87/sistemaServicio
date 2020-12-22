<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdministradorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administradors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users');
            $table->string('UA_numeroSP', 15)->unique()->nullable();
            $table->string('UA_nombre', 45)->nullable();
            $table->string('UA_apellidoPaterno', 45)->nullable();
            $table->string('UA_apellidoMaterno', 45)->nullable();
            $table->string('UA_correo', 45)->nullable();
            $table->string('UA_rol', 45)->nullable();
            $table->string('UA_cargo', 45)->nullable();
            $table->date('UA_fechaContratacion')->nullable();
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
        Schema::dropIfExists('administradors');
    }
}

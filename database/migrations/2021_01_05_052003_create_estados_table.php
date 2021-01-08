<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estados', function (Blueprint $table) {
            $table->id();
            //Relacion con la tabla seguimiento
            $table->foreignId('seguimiento_id')->nullable()->references('id')->on('seguimientos');
            //Estado del servicio social (Inscrito, baja, liberado, por concluir)
            $table->string('STA_estado')->nullable();
            //Motivo de baja o conclusiones respectivamente, tamvien puede estar vacio
            $table->text('STA_observacion')->nullable();
            //Fecha de registro
            $table->date('STA_inicio')->nullable();
            //Fecha de liberacion o baja
            $table->date('STA_fin')->nullable();
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
        Schema::dropIfExists('estados');
    }
}

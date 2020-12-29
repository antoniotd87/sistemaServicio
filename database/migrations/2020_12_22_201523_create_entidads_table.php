<?php
 
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntidadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entidads', function (Blueprint $table) {
            $table->id(); 
            $table->foreignId('ENT_ENR_id')->references('id')->on('entidad_receptoras');
            $table->foreignId('ENT_ARA_id')->references('id')->on('areas');
            $table->foreignId('ENT_JEI_id')->references('id')->on('jefe_inmediatos');
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
        Schema::dropIfExists('entidads');
    }
}

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
            $table->foreignId('entidad_receptora_id')->nullable()->references('id')->on('entidad_receptoras');
            $table->foreignId('area_id')->nullable()->references('id')->on('areas');
            $table->foreignId('jefe_inmediato_id')->nullable()->references('id')->on('jefe_inmediatos');
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

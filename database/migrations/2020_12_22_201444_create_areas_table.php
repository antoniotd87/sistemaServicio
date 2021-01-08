<?php 

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAreasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('areas', function (Blueprint $table) {
            $table->id();
            $table->string('ARA_nombre', 45)->nullable();
            $table->string('ARA_nombreResponsable', 45)->nullable();
            $table->string('ARA_apellidoPaterno', 45)->nullable();
            $table->string('ARA_apellidoMaterno', 45)->nullable();
            $table->string('ARA_cargo', 45)->nullable();
            $table->string('ARA_correo', 45)->nullable();
            $table->string('ARA_telefono', 10)->nullable();
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
        Schema::dropIfExists('areas');
    }
}

<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCentroReciclajesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('centro_reciclajes', function (Blueprint $table) {
            $table->id(); // Esto crea una columna 'id' como clave primaria
            $table->string('nombre'); // Columna para el nombre del centro de reciclaje
            $table->string('ubicacion'); // Columna para la ubicación del centro
            $table->text('materiales_aceptados'); // Columna para los materiales aceptados
            $table->timestamps(); // Esto crea las columnas 'created_at' y 'updated_at'
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('centro_reciclajes');
    }
}

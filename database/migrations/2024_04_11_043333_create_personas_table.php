<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->integer('tipoDocumento');
            $table->string('numeroDocumento', 25);
            $table->string('estado', 25);
            $table->string('condicion', 45);
            $table->string('direccion');
            $table->string('ubigeo', 10);
            $table->string('viaTipo', 25);
            $table->string('viaNombre', 100);
            $table->string('zonaCodigo', 25);
            $table->string('zonaTipo', 25);
            $table->integer('numero');
            $table->string('interior', 10);
            $table->string('lote', 10);
            $table->string('dpto', 10);
            $table->string('manzana', 10);
            $table->string('kilometro', 10);
            $table->string('distrito', 45);
            $table->string('provincia', 45);
            $table->string('departamento', 45);
            $table->string('nombres', 75);
            $table->string('apellidoPaterno', 75);
            $table->string('apellidoMaterno', 75);
            $table->date('fechaNacimiento');
            $table->string('sexo', 1);
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
        Schema::dropIfExists('personas');
    }
}

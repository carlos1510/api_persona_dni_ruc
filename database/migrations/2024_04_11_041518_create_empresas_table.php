<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->string('razonSocial')->nullable();
            $table->integer('tipoDocumento')->nullable();
            $table->string('numeroDocumento', 25)->nullable();
            $table->string('estado', 25)->nullable();
            $table->string('condicion', 75)->nullable();
            $table->string('direccion')->nullable();
            $table->string('ubigeo', 10)->nullable();
            $table->string('viaTipo', 25)->nullable();
            $table->string('viaNombre', 45)->nullable();
            $table->string('zonaCodigo', 25)->nullable();
            $table->string('zonaTipo', 25)->nullable();
            $table->integer('numero')->nullable();
            $table->string('interior', 10)->nullable();
            $table->string('lote', 10)->nullable();
            $table->string('dpto', 10)->nullable();
            $table->string('manzana', 10)->nullable();
            $table->string('kilometro', 10)->nullable();
            $table->string('distrito', 45)->nullable();
            $table->string('provincia', 45)->nullable();
            $table->string('departamento', 45)->nullable();
            $table->string('EsAgenteRetencion', 45)->nullable();
            $table->string('tipo', 45)->nullable();
            $table->string('actividadEconomica')->nullable();
            $table->integer('numeroTrabajadores')->nullable();
            $table->string('tipoFacturacion', 45)->nullable();
            $table->string('tipoContabilidad', 45)->nullable();
            $table->string('comercioExterior', 75)->nullable();
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
        Schema::dropIfExists('empresas');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableIngresos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingresos', function (Blueprint $table) {
            $table->increments('idingreso');
            $table->unsignedInteger('idpersona');
            $table->string('tipo_comprobante');
            $table->string('serie_comprobante');
            $table->string('num_comprobante');
            $table->DATETIME('fecha_hora');
            $table->DECIMAL('impuesto');
            $table->string('estado');
            $table->timestamps();
  /*          $table->INDEX('fk_ingreso_persona_idx')->or('idproveedor')->CONSTRAINT('fk_ingreso_persona');*/
            $table->foreign('idpersona')->references('idpersona')->on('personas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ingresos');
    }
}

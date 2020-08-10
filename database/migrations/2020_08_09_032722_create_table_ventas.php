<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableVentas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
      {
        Schema::create('ventas', function (Blueprint $table) {
            $table->increments('idventa');
            $table->unsignedInteger('idpersona');
            $table->string('tipo_comprobante');
            $table->string('serie_comprobante');
            $table->string('num_comprobante');
            $table->DATETIME('fecha_hora');
            $table->DATETIME('total_venta');
            $table->string('estado');
            $table->DECIMAL('impuesto');
            $table->timestamps();
  /*          $table->INDEX('fk_ingreso_persona_idx')->or('idproveedor')->CONSTRAINT('fk_ingreso_persona');*/
            $table->foreign('idpersona')->references('idpersona')->on('personas');

         //   $table->foreign('idarticulo')->references('idarticulo')->on('articulos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ventas');
    }
}
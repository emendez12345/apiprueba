<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableDetalleIngresos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_ingresos', function (Blueprint $table) {
            $table->increments('iddetalle_ingreso');
            $table->unsignedInteger('idingreso');
            $table->unsignedInteger('idarticulo');
            $table->unsignedInteger('cantidad');
            $table->DECIMAL('precio_compra');
            $table->DECIMAL('precio_venta');
            $table->DECIMAL('impuesto');
            $table->timestamps();
  /*          $table->INDEX('fk_ingreso_persona_idx')->or('idproveedor')->CONSTRAINT('fk_ingreso_persona');*/
            $table->foreign('idingreso')->references('idingreso')->on('ingresos');
            $table->foreign('idarticulo')->references('idarticulo')->on('articulos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_ingresos');
    }
}

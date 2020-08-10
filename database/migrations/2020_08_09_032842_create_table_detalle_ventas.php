<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableDetalleVentas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
      {
        Schema::create('detalle_ventas', function (Blueprint $table) {
            $table->increments('iddetalle_venta');
            $table->unsignedInteger('idventa');
            $table->unsignedInteger('idarticulo');
            $table->unsignedInteger('cantidad');
            $table->DECIMAL('precio_venta');
            $table->DECIMAL('descuento');
            $table->timestamps();
  /*          $table->INDEX('fk_ingreso_persona_idx')->or('idproveedor')->CONSTRAINT('fk_ingreso_persona');*/
            $table->foreign('idarticulo')->references('idarticulo')->on('articulos');
            $table->foreign('idventa')->references('idventa')->on('ventas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_ventas');
    }
}
/*CREATE TABLE IF NOT EXISTS `dbventaslaravel2`.`detalle_venta` (
  `iddetalle_venta` INT NOT NULL AUTO_INCREMENT,
  `idventa` INT NOT NULL,
  `idarticulo` INT NOT NULL,
  `cantidad` INT NOT NULL,
  `precio_venta` DECIMAL(11,2) NOT NULL,
  `descuento` DECIMAL(11,2) NOT NULL,
  PRIMARY KEY (`iddetalle_venta`),
  INDEX `fk_detalle_venta_articulo_idx` (`idarticulo` ASC),
  CONSTRAINT `fk_detalle_venta_articulo`
    FOREIGN KEY (`idarticulo`)
    REFERENCES `dbventaslaravel2`.`articulo` (`idarticulo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_detalle_venta`
    FOREIGN KEY (`iddetalle_venta`)
    REFERENCES `dbventaslaravel2`.`venta` (`idventa`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;*/
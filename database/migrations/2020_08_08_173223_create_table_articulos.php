<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableArticulos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulos', function (Blueprint $table) {
            
            $table->increments('idarticulo');
            $table->unsignedInteger('idcategoria');
            $table->string('codigo');
            $table->string('nombre');
            $table->integer('stock');
            $table->string('descripcion');
            $table->string('imagen');
            $table->boolean('estado');
            $table->timestamps();
            $table->foreign('idcategoria')->references('idcategoria')->on('categorias');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articulos');
    }
}

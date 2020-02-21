<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('descripcion', 100);
            $table->float('pvp' );
            $table->integer('numExistencias');
            $table->string('imagen');
            $table->enum('subclase', array('ofertas','componentes', 'ordenadores','telefonia','fotografia', 'perifericos', 'televisores', 'tablets', 'consolas', 'impresoras'));

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('producto');
    }
}

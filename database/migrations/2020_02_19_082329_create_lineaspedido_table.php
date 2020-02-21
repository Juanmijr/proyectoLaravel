<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLineaspedidoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lineasPedido', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_pedido');
            $table->unsignedBigInteger('id_producto');
            $table->integer('unidades');
            $table->timestamps();


//RELACIONES

            $table->foreign('id_pedido')->references('id')->on('pedido');
            $table->foreign('id_producto')->references('id')->on('producto');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lineaspedido');
    }
}

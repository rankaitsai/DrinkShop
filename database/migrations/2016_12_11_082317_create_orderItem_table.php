<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_item', function (Blueprint $table) {
            $table->integer('orderId')->unsigned();
            $table->foreign('orderId')->references('Id')->on('order_list')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('drinkId')->unsigned();
            $table->foreign('drinkId')->references('Id')->on('drink')->onDelete('cascade')->onUpdate('cascade');
            $table->primary(['orderId','drinkId']);
            $table->integer('quantity');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_item');
    }
}

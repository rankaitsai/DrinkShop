<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShoppingCartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shopping_cart', function (Blueprint $table) {
            $table->integer('memberId')->unsigned();
            $table->foreign('memberId')->references('id')->on('member')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('drinkId')->unsigned();
            $table->foreign('drinkId')->references('id')->on('drink')->onDelete('cascade')->onUpdate('cascade');
            $table->primary(['memberId','drinkId']);
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
        Schema::dropIfExists('shopping_cart');
    }
}

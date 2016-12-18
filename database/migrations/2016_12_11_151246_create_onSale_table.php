<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOnSaleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('on_sale', function (Blueprint $table) {
            $table->integer('DrinkId')->unsigned();
            $table->foreign('DrinkId')->references('Id')->on('drink')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('DiscountId')->unsigned();
            $table->foreign('DiscountId')->references('DiscountId')->on('discount')->onDelete('cascade')->onUpdate('cascade');
            $table->primary(['DrinkId','DiscountId']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('on_sale');
    }
}

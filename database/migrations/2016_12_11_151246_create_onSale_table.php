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
            $table->integer('drinkId')->unsigned();
            $table->foreign('drinkId')->references('Id')->on('drink')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('discountId')->unsigned();
            $table->foreign('discountId')->references('DiscountId')->on('discount')->onDelete('cascade')->onUpdate('cascade');
            $table->primary(['drinkId','discountId']);
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

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRebateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rebate', function (Blueprint $table) {
            $table->integer('DiscountId')->unsigned();
            $table->foreign('DiscountId')->references('DiscountId')->on('discount')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('OrderListId')->unsigned();
            $table->foreign('OrderListId')->references('Id')->on('order_list')->onDelete('cascade')->onUpdate('cascade');
            $table->primary(['DiscountId','OrderListId']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rebate');
    }
}

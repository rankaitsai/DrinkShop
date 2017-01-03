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
            $table->integer('discountId')->unsigned();
            $table->foreign('discountId')->references('discountId')->on('discount')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('orderListId')->unsigned();
            $table->foreign('orderListId')->references('id')->on('order_list')->onDelete('cascade')->onUpdate('cascade');
            $table->primary(['discountId','orderListId']);
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

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_list', function (Blueprint $table) {
            $table->increments('Id');
            $table->integer('MemberId')->unsigned();
            $table->foreign('MemberId')->references('Id')->on('member')->onDelete('cascade')->onUpdate('cascade');
            $table->string('DrinkName',10);
            $table->integer('DrinkPrice');
            $table->datetime('Date');
            $table->string('State');
            $table->integer('Cost');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_list');
    }
}

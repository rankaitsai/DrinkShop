<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDrinkInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drink_info', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('drinkId')->unsigned();
            $table->foreign('drinkId')->references('Id')->on('drink')->onDelete('cascade')->onUpdate('cascade');
            $table->string('sugar');
            $table->string('temperature');
            $table->string('addition')->nullable(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('drink_info');
    }
}

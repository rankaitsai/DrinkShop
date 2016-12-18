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
            $table->increments('Id');
            $table->integer('DrinkId')->unsigned();
            $table->foreign('DrinkId')->references('Id')->on('drink')->onDelete('cascade')->onUpdate('cascade');
            $table->string('Sugar',2);
            $table->string('Temperature',2);
            $table->string('Addition',5)->nullable(true);
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

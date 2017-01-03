<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTraceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trace', function (Blueprint $table) {
            $table->integer('memberId')->unsigned();
            $table->foreign('memberId')->references('id')->on('member')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('drinkId')->unsigned();
            $table->foreign('drinkId')->references('id')->on('drink')->onDelete('cascade')->onUpdate('cascade');
            $table->primary(['memberId','drinkId']);
            $table->datetime('date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trace');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoryExploreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('history_explore', function (Blueprint $table) {
            $table->integer('memberId')->unsigned();
            $table->foreign('memberId')->references('Id')->on('member')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('drinkId')->unsigned();
            $table->foreign('drinkId')->references('Id')->on('drink')->onDelete('cascade')->onUpdate('cascade');
            $table->primary(['memberId','drinkId']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('history_explore');
    }
}

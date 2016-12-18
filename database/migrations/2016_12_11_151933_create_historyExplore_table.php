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
            $table->integer('MemberId')->unsigned();
            $table->foreign('MemberId')->references('Id')->on('member')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('DrinkId')->unsigned();
            $table->foreign('DrinkId')->references('Id')->on('drink')->onDelete('cascade')->onUpdate('cascade');
            $table->primary(['MemberId','DrinkId']);
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

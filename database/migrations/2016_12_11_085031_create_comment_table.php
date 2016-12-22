<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment', function (Blueprint $table) {
            $table->integer('memberId')->unsigned();
            $table->foreign('memberId')->references('Id')->on('member')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('drinkId')->unsigned();
            $table->foreign('drinkId')->references('Id')->on('drink')->onDelete('cascade')->onUpdate('cascade');
            $table->primary(['memberId','drinkId']);
            $table->datetime('date');
            $table->integer('stars');
            $table->string('description')->nullable(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comment');
    }
}

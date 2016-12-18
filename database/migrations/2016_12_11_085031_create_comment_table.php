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
            $table->integer('MemberId')->unsigned();
            $table->foreign('MemberId')->references('Id')->on('member')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('DrinkId')->unsigned();
            $table->foreign('DrinkId')->references('Id')->on('drink')->onDelete('cascade')->onUpdate('cascade');
            $table->primary(['MemberId','DrinkId']);
            $table->datetime('Date');
            $table->integer('Stars');
            $table->string('Description')->nullable(true);
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

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member', function (Blueprint $table) {
            $table->increments('Id');
            $table->string('Name',15);
            $table->string('Account',30)->unique();
            $table->string('Password',30);
            $table->binary('Photo')->nullable(true);
            $table->string('Sex',1)->nullable(true);
            $table->string('Phone',10);
            $table->string('Email',25);
            $table->string('Address',30);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('member');
    }
}

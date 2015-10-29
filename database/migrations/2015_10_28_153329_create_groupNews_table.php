<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groupNews', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('groupID');
            $table->foreign('groupID')->references('id')->on('groups')->onDelete('cascade');
            $table->string('userName');
            $table->text('content');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('groupNews');
    }
}

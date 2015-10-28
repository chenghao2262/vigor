<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChatRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chatRecords', function (Blueprint $table) {
            $table->increments('chatId');
            $table->integer('groupID');
            $table->foreign('groupID')->references('groupID')->on('friends')->onDelete('cascade');
            $table->string('fromName');
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
        Schema::drop('chatRecords');
    }
}

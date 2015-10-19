<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSportRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sportRecords', function (Blueprint $table) {
            $table->increments('sportRed');
            $table->string('userID');
            $table->foreign('userID')->references('userID')->on('users')->onDelete('cascade');
            $table->date('date');
            $table->string('steps_detail');
            $table->string('distance_detail');
            $table->string('floorLevels_detail');
            $table->string('calories_detail');
            $table->integer('steps');
            $table->integer('distance');
            $table->integer('floorLevels');
            $table->integer('calories');
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
        Schema::drop('sportRecords');
    }
}

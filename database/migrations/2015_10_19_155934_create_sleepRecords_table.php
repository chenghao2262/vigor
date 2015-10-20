<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSleepRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sleepRecords', function (Blueprint $table) {
            $table->increments('sleepRid');
            $table->date('date');
            $table->integer('total_minutes');
            $table->integer('deep_minutes');
            $table->integer('light_minutes');
            $table->string('detail');
            $table->string('userName');
            $table->foreign('userName')->references('name')->on('users')->onDelete('cascade');
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
        Schema::drop('sleepRecords');
    }
}

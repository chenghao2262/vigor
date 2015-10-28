<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAvailableTimeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('availableTime', function (Blueprint $table) {
            $table->increments('ATimeID');
            $table->string('expertName');
            $table->foreign('expertName')->references('name')->on('experts')->onDelete('cascade');
            $table->date('date');
            $table->integer('segment');
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
        Schema::drop('availableTime');
    }
}

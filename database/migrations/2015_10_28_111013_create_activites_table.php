<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->increments('activityID');
            $table->string('name');
            $table->text('describe');
            $table->string('location');
            $table->string('founderName');
            $table->date('start');
            $table->date('end');
            $table->string('portrait')->nullable();
            $table->foreign('founderName')->references('name')->on('users')->onDelete('cascade');
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
        Schema::drop('activities');
    }
}

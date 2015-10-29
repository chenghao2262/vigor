<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWatchTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('watch', function (Blueprint $table) {
            $table->increments('id');
            $table->string('watcherName')->index();
            $table->foreign('watcherName')->references('name')->on('users')->onDelete('cascade');
            $table->string('expertName')->index();
            $table->foreign('expertName')->references('name')->on('experts')->onDelete('cascade');
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
        Schema::drop('watch');
    }
}

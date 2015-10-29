<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuggestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suggestions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('watcherName')->index();
            $table->foreign('watcherName')->references('name')->on('users')->onDelete('cascade');
            $table->string('expertName')->index();
            $table->foreign('expertName')->references('name')->on('experts')->onDelete('cascade');
            $table->string('titile');
            $table->text('content');
            $table->date('date');
            $table->integer('status');
            $table->integer('type');
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
        Schema::drop('suggestions');
    }
}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('watcherName')->index();
            $table->foreign('watcherName')->references('name')->on('users')->onDelete('cascade');
            $table->string('expertName')->index();
            $table->foreign('expertName')->references('name')->on('experts')->onDelete('cascade');
            $table->integer('startSegment');
            $table->integer('endSegment');
            $table->integer('payment');
            $table->integer('status');
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
        Schema::drop('orders');
    }
}

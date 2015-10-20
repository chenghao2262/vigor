<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHealthRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('healthRecords', function (Blueprint $table) {
            $table->increments('healthRid');
            $table->integer('height');
            $table->float('weight');
            $table->date('date');
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
        Schema::drop('healthRecords');
    }
}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivityUserPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activity_user', function (Blueprint $table) {
            $table->integer('activity_id')->unsigned()->index();
            $table->foreign('activity_id')->references('activityID')->on('activities')->onDelete('cascade');
            $table->string('userName')->index();
            $table->foreign('userName')->references('name')->on('users')->onDelete('cascade');
            $table->primary(['activity_id', 'userName']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('activity_user');
    }
}

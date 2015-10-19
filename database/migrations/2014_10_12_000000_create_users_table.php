<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->string('name')->primary();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('portrait')->nullable();
            $table->boolean('gender')->nullable();
            $table->string("describe")->nullable();
            $table->date("birthday")->nullable();
            $table->integer("height")->nullable();
            $table->float("weight")->nullable();
            $table->enum("type",array('ordinary','doctor','coach'))->nullable();
            $table->integer("goal")->nullable();
            $table->integer("credits")->default(0);
            $table->rememberToken();
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
        Schema::drop('users');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUgscoreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uscore', function (Blueprint $table) {
            $table->id();

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');

            $table->integer('uscore')->unsigned();

            $table->timestamp('utime');
        });

        Schema::create('gscore', function (Blueprint $table) {
            $table->id();

            $table->integer('group_gid')->unsigned();
            $table->foreign('group_gid')->references('gid')->on('groups');

            $table->integer('gscore')->unsigned();

            $table->timestamp('gtime');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gscore');
        Schema::dropIfExists('uscore');
    }
}

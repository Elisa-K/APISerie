<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersSeriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_series', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('serie_id');
	        $table->foreign('user_id')->references('id')->on('users')->onDelete('restrict')->onUpdate('restrict');
	        $table->foreign('serie_id')->references('id')->on('series')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('users_series');
    }
}

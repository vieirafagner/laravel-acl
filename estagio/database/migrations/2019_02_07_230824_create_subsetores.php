<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubsetores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subsetores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->integer('setor_id')->unsigned();
            $table->foreign('setor_id')->references('id')->on('setors')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('keys', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('carga_h');
            $table->integer('subsetor_id')->unsigned();
            $table->integer('setor_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->foreign('subsetor_id')->references('id')->on('subsetores')->onDelete('cascade');
            $table->foreign('setor_id')->references('id')->on('setors')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('keys');
        Schema::dropIfExists('subsetores');
    }
}

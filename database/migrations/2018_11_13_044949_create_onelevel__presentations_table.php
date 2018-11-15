<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOnelevelPresentationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('onelevel__presentations', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->increments('Id');
            $table->integer('gauging');
            $table->integer('quantity');//cantidad reservada hasta ese momento
            $table->date('Date');
            $table->integer('Id_Pre')->unsigned()->nullable();
            $table->foreign('Id_Pre')->references('Id_Pre')->on('presentations');
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
        Schema::dropIfExists('onelevel__presentations');
    }
}

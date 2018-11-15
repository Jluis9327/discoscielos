<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->increments('Id_Re');
            $table->dateTime('Date');
            $table->unsignedInteger('Id_Est');
            $table->unsignedInteger('Id_U');
            $table->unsignedInteger('Id_Cli');
            //$table->unsignedInteger('Id_Pre');
            $table->double('total');//total a pagar
            $table->foreign('Id_Est')->references('Id_Est')->on('states');
            $table->foreign('Id_U')->references('id')->on('users');
            $table->foreign('Id_Cli')->references('id')->on('users');
            //$table->foreign('Id_Pre')->references('Id_Pre')->on('presentations');
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
        Schema::dropIfExists('reservations');
    }
}

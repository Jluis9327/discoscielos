<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTwolevelBoxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('twolevel__boxes', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->unsignedInteger('Id_Bo');
            $table->unsignedInteger('Id_Re');
            $table->primary(['Id_Bo','Id_Re']);
            $table->foreign('Id_Bo')->references('Id_Bo')->on('boxes');
            $table->foreign('Id_Re')->references('Id_Re')->on('reservations');
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
        Schema::dropIfExists('twolevel__boxes');
    }
}

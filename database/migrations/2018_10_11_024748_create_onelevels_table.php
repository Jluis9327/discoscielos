<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOnelevelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('onelevels', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->unsignedInteger('Id_Re');
            $table->unsignedInteger('quantity');
            $table->double('total');//total a pagar
            $table->primary('Id_Re');
            $table->foreign('Id_Re')->references('Id_Re')->on('reservations');
            $table->unsignedInteger('Id_Pre');
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
        Schema::dropIfExists('onelevels');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoxPresentationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('box__presentations', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->unsignedInteger('Id_Bo');
            $table->unsignedInteger('Id_Pre');
            $table->primary(['Id_Bo','Id_Pre']);
            $table->foreign('Id_Bo')->references('Id_Bo')->on('boxes');
            $table->foreign('Id_Pre')->references('Id_Pre')->on('presentations');
            $table->integer('Id_Est')->unsigned()->nullable();
            $table->foreign('Id_Est')->references('Id_Est')->on('states');
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
        Schema::dropIfExists('box__presentations');
    }
}

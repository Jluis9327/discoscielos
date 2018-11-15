<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrivilegeUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('privilege__users', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->unsignedInteger('Id_U');
            $table->unsignedInteger('Id_Pri');
            $table->primary(['Id_U','Id_Pri']);
            $table->foreign('Id_U')->references('id')->on('users');
            $table->foreign('Id_Pri')->references('Id_Pri')->on('privileges');
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
        Schema::dropIfExists('privilege__users');
    }
}

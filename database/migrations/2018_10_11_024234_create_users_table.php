<?php

use Illuminate\Support\Facades\Schema;
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
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('DNI')->unique();
            $table->string('name');
            $table->string('surname');
            $table->integer('phone')->unique()->nullable();
            $table->string('email');
            $table->string('password')->nullable();
            $table->integer('Id_Rol')->unsigned()->nullable();
            $table->foreign('Id_Rol')->references('Id_Rol')->on('roles');
            $table->integer('Id_Est')->unsigned()->nullable();
            $table->foreign('Id_Est')->references('Id_Est')->on('states');
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
        Schema::dropIfExists('users');
    }
}

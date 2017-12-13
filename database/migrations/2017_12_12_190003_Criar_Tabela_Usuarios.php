<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id_usuario');
            $table->string('nome');
            $table->string('email')->unique();
            $table->string('usuario')->unique();
            $table->string('password');
            $table->integer('id_grupo')->unsigned();
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::table('usuarios', function (Blueprint $table) {
            $table->foreign('id_grupo')->references('id_grupo')->on('grupos');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('usuarios');
    }
}

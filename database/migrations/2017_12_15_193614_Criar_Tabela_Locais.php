<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaLocais extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('locais', function (Blueprint $table){
            $table->increments('id_local');
            $table->string('nome');
            $table->string('descricao');
            $table->integer('nsala')->unique();
            $table->integer('lotacao');
            $table->integer('id_equipamento')->unsigned();
            $table->timestamps();

        });

        Schema::table('locais', function (Blueprint $table){
            $table->foreign('id_equipamento')->references('id_equipamento')->on('equipamentos');
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
        Schema::dropIfExists('locais');
    }
}

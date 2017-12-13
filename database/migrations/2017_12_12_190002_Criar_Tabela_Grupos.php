<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaGrupos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::Create('grupos', function (Blueprint $table){
            $table->increments('id_grupo');
            $table->string('nome')->unique();
            $table->string('descricao');
            $table->integer('id_permissao')->unsigned();
            $table->timestamps();
        });

        Schema::table('grupos', function (Blueprint $table) {
            $table->foreign('id_permissao')->references('id_permissao')->on('permissoes');

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
        Schema::dropIfExists('grupos');
    }
}

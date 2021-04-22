<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formacaos', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('idcandidato')->unsigned();
            $table->foreign('idcandidato')->references('id')->on('candidatos');
            $table->integer('idtitulo')->unsigned();
            $table->foreign('idtitulo')->references('id')->on('titulos');
            $table->integer('idnivel')->unsigned();
            $table->foreign('idnivel')->references('id')->on('nivels');
            $table->integer('idinstituicao')->unsigned();
            $table->foreign('idinstituicao')->references('id')->on('instituicaos');
            $table->string('curso')->nullable();
            $table->date('dataInicio')->nullable();
            $table->date('dataFim')->nullable();

            $table->integer('periodo')->nullable();
            $table->float('cr', 8, 2)->nullable();
          	$table->string('uf', 2)->nullable();
            $table->string('situacaoAtual',255)->nullable();
            $table->string('cidade',255)->nullable();
            $table->string('pais',255)->nullable();

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
      DB::statement('SET FOREIGN_KEY_CHECKS = 0');
      Schema::dropIfExists('formacaos');
      DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}

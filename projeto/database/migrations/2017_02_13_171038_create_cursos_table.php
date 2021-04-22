<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {


            $table->increments('id');
            $table->engine = 'InnoDB';
            $table->unsignedInteger('idcandidato');
            $table->foreign('idcandidato')->references('id')->on('candidatos');
            $table->unsignedInteger('idinstituicao');
            $table->foreign('idinstituicao')->references('id')->on('instituicaos');
            $table->unsignedInteger('idTipoCurso');
            $table->foreign('idTipoCurso')->references('id')->on('tipo_cursos');
            $table->string('nome',255)->nullable();
            $table->integer('duracao')->nullable();
            $table->date('realizacao')->nullable();
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
      Schema::dropIfExists('cursos');
      DB::statement('SET FOREIGN_KEY_CHECKS = 1');

    }
}

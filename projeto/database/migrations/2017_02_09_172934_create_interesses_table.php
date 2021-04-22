<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInteressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interesses', function (Blueprint $table) {
            $table->increments('id');

            $table->engine = 'InnoDB';
            $table->unsignedInteger('idcandidato');
            $table->foreign('idcandidato')->references('id')->on('candidatos');
            $table->unsignedInteger('idGrupoDeTrabalho');
            $table->foreign('idGrupoDeTrabalho')->references('id')->on('grupo_de_trabalhos');

            $table->string('nome',255)->nullable();
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
        Schema::dropIfExists('interesses');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}

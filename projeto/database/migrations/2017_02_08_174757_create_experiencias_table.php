<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExperienciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiencias', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('idcandidato')->unsigned();
            $table->foreign('idcandidato')->references('id')->on('candidatos');
            $table->char('nomeEmpresa', 255)->nullable();
            $table->date('dataInicio')->nullable();
            $table->date('dataFim')->nullable();
            $table->char('funcao', 255)->nullable();
            $table->text('descricao')->nullable();
            $table->float('salario', 8, 2)->nullable();
            $table->text('beneficios')->nullable();

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
      Schema::dropIfExists('experiencias');
      DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}

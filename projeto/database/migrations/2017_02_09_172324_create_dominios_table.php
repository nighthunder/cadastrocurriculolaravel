<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDominiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dominios', function (Blueprint $table) {
            $table->increments('id');

            $table->engine = 'InnoDB';
            $table->unsignedInteger('idcandidato');
            $table->foreign('idcandidato')->references('id')->on('candidatos');
            $table->unsignedInteger('idTecnologia');
            $table->foreign('idTecnologia')->references('id')->on('tecnologias');

            $table->string('nivelDominio')->nullable();
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
        Schema::dropIfExists('dominios');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}

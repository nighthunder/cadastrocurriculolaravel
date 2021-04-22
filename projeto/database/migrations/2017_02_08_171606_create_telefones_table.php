<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTelefonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('telefones', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('idcandidato')->unsigned();
            $table->foreign('idcandidato')->references('id')->on('candidatos');
            $table->integer('codigoArea')->nullable();
            $table->char('numeroTelefone',9)->nullable();
            $table->string('tipoTelefone', 15)->nullable();

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
      Schema::dropIfExists('telefones');
      DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}

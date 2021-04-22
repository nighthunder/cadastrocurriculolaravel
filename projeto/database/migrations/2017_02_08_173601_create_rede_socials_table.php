<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRedeSocialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rede_socials', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('idcandidato')->unsigned();
            $table->foreign('idcandidato')->references('id')->on('candidatos');
            $table->char('urlPerfil',255)->nullable();
            $table->char('nomeRedeSocial',255)->nullable();

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
      Schema::dropIfExists('rede_socials');
      DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}

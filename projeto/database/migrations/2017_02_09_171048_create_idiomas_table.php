<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIdiomasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('idiomas', function (Blueprint $table) {
            $table->increments('id');

            $table->engine = 'InnoDB';
            $table->unsignedInteger('idcandidato');
            $table->foreign('idcandidato')->references('id')->on('candidatos');
            $table->unsignedInteger('idLingua');
            $table->foreign('idLingua')->references('id')->on('linguas');
            $table->string('nivel',2)->nullable();
            $table->integer('duracao')->nullable();
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
      Schema::dropIfExists('idiomas');
      DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}

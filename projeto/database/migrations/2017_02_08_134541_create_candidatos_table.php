<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidatos', function (Blueprint $table) {
            $table->increments('id');

            $table->char('nomeCompleto', 255)->nullable();
            $table->char('email', 255)->nullable();
            $table->char('endereco', 255)->nullable();
            $table->char('bairro', 255)->nullable();
            $table->char('cidade', 255)->nullable();
            $table->char('uf', 2)->nullable();
            $table->char('cep', 8)->nullable();
            $table->date('dataNascimento')->nullable();
            $table->char('estadoCivil', 1)->nullable();
            $table->char('sexo', 1)->nullable();
            $table->char('rg', 24)->nullable();
            $table->char('cpf', 11)->nullable();
            $table->float('salarioPretendido', 8, 2)->nullable();
            $table->text('informacoesAdicionais')->nullable();
            $table->boolean('enviado')->nullable();
            $table->boolean('jaFoiExcluido')->nullable();

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
        Schema::dropIfExists('candidatos');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nome',45);
            $table->string('cpf',45)->nullable();
            $table->string('rg',45)->nullable();
            $table->string('data_nascimento',45)->nullable();
            $table->string('logradouro',45)->nullable();
            $table->string('numero',45)->nullable();
            $table->string('bairro',45)->nullable();
            $table->string('cidade',45)->nullable();
            $table->char('uf',2)->nullable();
            $table->string('cep',45)->nullable();
            $table->string('complemento',45)->nullable();
            $table->string('telefone',45)->nullable();
            $table->string('email',45)->nullable();
            $table->boolean('ativo')->default('1');            
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
        Schema::dropIfExists('clientes');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('descricao', '255');
            $table->string('nome', '45');
            $table->string('grupo', '45');
            $table->string('subgrupo', '45');
            $table->integer('preco_custo');
            $table->integer('preco_venda');
            $table->integer('quantidade');
            $table->integer('quantidade_minima');
            $table->string('unidade');
            $table->string('marca');
            $table->string('fornecedor');
            $table->string('observacao', '255')->nullable();
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
        Schema::dropIfExists('produtos');
    }

}

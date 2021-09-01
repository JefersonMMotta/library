<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{

    use HasFactory;

    protected $fillable = [
        "nome",
        "descricao",
        "preco_venda",
        "preco_custo",
        "marca",
        "grupo",
        "subgrupo",
        "quantidade",
        "quantidade_minima",
        "unidade",
        "fornecedor",
        "observacao"
    ];

}

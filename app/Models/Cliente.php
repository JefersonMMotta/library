<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{

    use HasFactory;

    protected $fillable = [
        "nome",
        "cpf",
        "rg",
        "data_nascimento",
        "logradouro",
        "numero",
        "bairro",
        "cidade",
        "uf",
        "cep",
        "complemento",
        "telefone",
        "email",
        "ativo"
    ];
    
    public function veiculos()
    {
      return  $this->hasMany(Veiculo::class); 
    }

}

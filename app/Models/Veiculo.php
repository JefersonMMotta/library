<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{

    use HasFactory;

    protected $fillable = [
        "marca",
        "modelo",
        "cor",
        "placa",
        "ano",
        "kilometragem",
        "cliente_id"
    ];
    
    public function cliente()
    {
        return $this->belongsTo(App\Models\Cliente::class);
    }

}

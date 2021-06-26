<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orcamento extends Model
{
    use HasFactory;
    
    protected $fillable  = ['descricao_orcamento', 'valores_orcamento', 'data_criacao', 'data_alteracao'];
    public $timestamps = false;

    // Orcamento pertence a Departamento, Centrocusto, Contacontabil

    public function departamento()
    {
        return $this->belongsTo(Departamento::class);
    }

    public function centroCusto()
    {
        return $this->belongsTo(Centrocusto::class);
    }

    public function contaContabil()
    {
        return $this->belongsTo(Contacontabil::class);
    }
}
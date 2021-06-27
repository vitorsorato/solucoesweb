<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orcamento extends Model
{
    use HasFactory;
    
    const PRODUCAO = 1;
    const ADMINISTRATIVO = 1;
    const TRANSPORTE = 1;
    const ARMAZEM = 1;
    public static $listCentroDeCustos = [
        self::PRODUCAO => PRODUCAO;
    ]

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
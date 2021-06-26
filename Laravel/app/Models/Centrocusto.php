<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Centrocusto extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['nome_centrocusto', 'descricao_centrocusto'];

    // Explicita a relação com o Departamento, pois Centrocusto pertence a um Departamento
    public function departamento() {
        return $this->belongsTo(Departamento::class);
    }
    
    // 1 Centro de custo têm vários Conta Contabil
    public function contaContabil() {
        return $this->hasMany(Contacontabil::class);
    }
    
    // 1 Centrocusto têm vários Orcamento
    public function orcamento() {
        return $this->hasMany(Orcamento::class);
    }
}
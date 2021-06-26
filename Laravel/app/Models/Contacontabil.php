<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacontabil extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['nome_contacontabil', 'valor_contacontabil', 'data_contacontabil'];

    // Explicita a relação com o Centro custo, pois Contacontabil pertence a um Centro de custo
    public function centroCusto() {
        return $this->belongsTo(Centrocusto::class);
    }

    // 1 Contacontabil têm vários Orcamento
    public function orcamento() {
        return $this->hasMany(Orcamento::class);
    }
 
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['nome_departamento', 'descricao_departamento'];

    // 1 Departamento tem vários centro de custo
    public function centroCusto() {
        return $this->hasMany(Centrocusto::class);
    }

    // 1 Departamento têm vários Orcamento
    public function orcamento() {
        return $this->hasMany(Orcamento::class);
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orcamento extends Model
{
    use HasFactory;
    
    const PRODUCAO = 1;
    const ADMINISTRATIVO = 2;
    const TRANSPORTE = 3;
    const ARMAZEM = 4;
    
    public static $listCentroCusto = [
        self::PRODUCAO => 'Produção',
        self::ADMINISTRATIVO => 'Administrativo',
        self::TRANSPORTE => 'Transporte',
        self::ARMAZEM => 'Armazem',
    ];

    const JANEIRO = 1;
    const FEVEREIRO = 2;
    const MARCO = 3;
    const ABRIL = 4;
    const MAIO = 5;
    const JUNHO = 6;
    const JULHO = 7;
    const AGOSTO = 8;
    const SETEMBRO = 9;
    const OUTUBRO = 10;
    const NOVEMBRO = 10;
    const DEZEMBRO = 12;
    
    public static $listDataPeriodo = [
        self::JANEIRO => 'JANEIRO/21',
        self::FEVEREIRO => 'FEVEREIRO/21',
        self::MARCO => 'MARCO/21',
        self::ABRIL => 'ABRIL/21',
        self::MAIO => 'MAIO/21',
        self::JUNHO => 'JUNHO/21',
        self::JULHO => 'JULHO/21',
        self::AGOSTO => 'AGOSTO/21',
        self::SETEMBRO => 'SETEMBRO/21',
        self::OUTUBRO => 'OUTUBRO/21',
        self::NOVEMBRO => 'NOVEMBRO/21',
        self::DEZEMBRO => 'DEZEMBRO/21',
    ];

    protected $fillable  = ['centrocusto', 'dataperiodo', 'materiaprima','despesaconservacao', 'despesasveiculos', 'despesastaxas'];
    
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    const SEXO_MASCULINO = 1;
    const SEXO_FEMININO = 2;

    public static $listPessoaSexo = [
        self::SEXO_MASCULINO => 'MASCULINO',
        self::SEXO_FEMININO  => 'FEMININO'
    ];

    use HasFactory;
    protected $fillable = ['name', 'age', 'email', 'pessoasexo'];

   
}

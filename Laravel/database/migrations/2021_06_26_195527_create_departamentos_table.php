<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartamentosTable extends Migration
{

    public function up()
    {
        Schema::create('departamentos', function (Blueprint $table) {
            $table->id();
            $table->string('nome_departamento');
            $table->string('descricao_departamento');
        });
    }

    public function down()
    {
        Schema::dropIfExists('departamentos');
    }
}

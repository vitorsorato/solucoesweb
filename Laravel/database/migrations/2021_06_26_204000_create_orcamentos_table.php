<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrcamentosTable extends Migration
{
    public function up()
    {
        Schema::create('orcamentos', function (Blueprint $table) {
            $table->id();
            $table->string('descricao_orcamento');
            $table->integer('valores_orcamento');
            $table->date('data_criacao');
            $table->date('data_alteracao');

            // FK's
            
            $table->unsignedBigInteger('departamento_id');
            $table->foreign('departamento_id')->references('id')->on('departamentos');
            
            $table->unsignedBigInteger('centrocusto_id');
            $table->foreign('centrocusto_id')->references('id')->on('centrocustos');

            $table->unsignedBigInteger('contacontabil_id');
            $table->foreign('contacontabil_id')->references('id')->on('contacontabils');
        });
    }

    public function down()
    {
        Schema::dropIfExists('orcamentos');
    }
}

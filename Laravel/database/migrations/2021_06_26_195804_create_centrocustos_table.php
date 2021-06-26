<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCentrocustosTable extends Migration
{
    public function up()
    {
        Schema::create('centrocustos', function (Blueprint $table) {
            $table->id();
            $table->string('nome_centrocusto');
            $table->string('descricao_centrocusto');

            // FK
            $table->unsignedBigInteger('departamento_id');
            $table->foreign('departamento_id')->references('id')->on('departamentos');
        });
    }

    public function down()
    {
        Schema::dropIfExists('centrocustos');
    }
}
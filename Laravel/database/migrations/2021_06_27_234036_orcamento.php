<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Orcamento extends Migration
{

    public function up()
    {
        Schema::create('orcamento', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('centrocusto');
            $table->integer('dataperiodo');
            $table->float('materiaprima');
            $table->float('despesaconservacao');
            $table->float('despesasveiculos');
            $table->float('despesastaxas');
        });
    }

    public function down()
    {
        Schema::dropIfExists('orcamento');
    }
}

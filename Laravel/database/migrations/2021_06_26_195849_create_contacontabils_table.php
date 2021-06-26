<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContacontabilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacontabils', function (Blueprint $table) {
            $table->id();
            $table->string('nome_contacontabil');
            $table->string('valor_contacontabil');
            $table->date('data_contacontabil');

            // FK
            $table->unsignedBigInteger('centrocusto_id');
            $table->foreign('centrocusto_id')->references('id')->on('centrocustos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacontabils');
    }
}

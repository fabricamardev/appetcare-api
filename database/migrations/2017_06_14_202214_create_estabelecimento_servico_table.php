<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstabelecimentoServicoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estabelecimento_servico', function (Blueprint $table) {
            $table->integer('estabelecimento_id')->unsigned()->nullable();
            $table->foreign('estabelecimento_id')->references('id')->on('estabelecimentos');

            $table->integer('servico_id')->unsigned()->nullable();
            $table->foreign('servico_id')->references('id')->on('servicos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

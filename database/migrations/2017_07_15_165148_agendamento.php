<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Agendamento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agendamento', function(Blueprint $table) {
            $table->increments('id');
            $table->string('turno');
            $table->date('data');
            $table->string('horario');
            $table->integer('servico_id')->unsigned();
            $table->integer('estabelecimento_id')->unsigned();
            
            $table->foreign('servico_id')->references('id')->on('servicos');
            $table->foreign('estabelecimento_id')->references('id')->on('estabelecimentos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agendamento');
    }
}

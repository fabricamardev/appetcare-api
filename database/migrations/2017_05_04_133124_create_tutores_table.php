<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTutoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutores', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('endereco_id')->unsigned();
            
            $table->foreign('endereco_id')->
            references('id')->
            on('enderecos');

            $table->string('nome');
            $table->string('email');
            $table->string('telefone');
            $table->string('cpf')->unique();    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tutores');
    }
}

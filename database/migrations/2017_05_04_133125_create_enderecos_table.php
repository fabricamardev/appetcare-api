<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnderecosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enderecos', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('tutor_id')->unsigned();
            
            $table->foreign('tutor_id')->
            references('id')->
            on('tutores');

            $table->string('logradouro');
            $table->string('numero');
            $table->string('cep');                
            $table->string('bairro');
            $table->string('cidade');
            $table->string('uf');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enderecos');
    }
}

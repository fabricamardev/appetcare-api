<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Funcionamento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('funcionamento', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('de_manha')->unsigned();
            $table->integer('ate_manha')->unsigned();
            $table->integer('de_tarde')->unsigned();
            $table->integer('ate_tarde')->unsigned();
            $table->integer('estabelecimento_id')->unsigned();

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
        Schema::dropIfExists('funcionamento');
    }
}

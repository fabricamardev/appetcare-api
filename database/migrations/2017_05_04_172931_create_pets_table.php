<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tutor_id')->unsigned();
            $table->integer('raca_id')->unsigned();
            
            $table->foreign('tutor_id')->
            references('id')->
            on('tutores');
            
            $table->string('nome');
            $table->dateTime('data_nascimento');
            
            $table->foreign('raca_id')->
            references('id')->
            on('racas');

            $table->text('obs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pets');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UsoMedicamento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uso_medicamento', function(Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('tipo');
            $table->string('marca');
            $table->timestamp('data_uso');
            $table->string('peso');
            $table->double('dose', 5, 2)->unsigned()->nullable();

            $table->integer('pet_id')->unsigned();
            $table->foreign('pet_id')->references('id')->on('pets');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('uso_medicamento');
    }
}

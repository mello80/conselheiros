<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DecisoesEstrategicas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('decisoes_estrategicas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nrdecisao');
            $table->integer('ano');
            $table->string('assunto');
            $table->date('datainicio');
            $table->date('datalimite');
            $table->string('textodecisao');
            $table->enum('responsavelatendimento',['GECOM','GETEC']);
            $table->enum('decisaoemitida', ["Teste1, Teste2"]);
            $table->date('datareuniao');
            $table->string('nrreuniao');
            $table->string('linkdecisao');
            $table->string('status');
            $table->string('historico');
            $table->timestamps();
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

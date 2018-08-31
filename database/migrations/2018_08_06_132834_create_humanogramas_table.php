<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHumanogramasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('humanogramas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('cargo');
            $table->enum('conselheiro_fbb',['Conselheiro Curador', 'Conselheiro Fiscal']);
            $table->string('secretaria');
            $table->integer('telefone_secretaria');
            $table->integer('telefone');
            $table->integer('celular');
            $table->string('email');
            $table->string('foto');

            


            
            

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
        Schema::dropIfExists('humanogramas');
    }
}

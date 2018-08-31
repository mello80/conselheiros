<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdicionaCampoTabelaHumanograma extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('humanogramas', function (Blueprint $table)
        {
            $table->string('desccurriculo');
            $table->string('nome_banco');
            $table->integer('codigo_banco');
            $table->integer('agencia_banco');
            $table->integer('conta_banco');
            $table->string('comite_investimento');
            $table->string('nome_secretaria');
            $table->date('aniversario')->default('2018-01-01');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('humanogramas', function (Blueprint $table)
        {
            $table->dropColumn('desccurriculo');
            $table->dropColumn('nome_banco');
            $table->dropColumn('codigo_banco');
            $table->dropColumn('agencia_banco');
            $table->dropColumn('conta_banco');
            $table->dropColumn('comite_investimento');
            $table->dropColumn('nome_secretaria');
            $table->dropColumn('aniversario');


        });
    }
}

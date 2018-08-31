<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdicionaCampoHumanograma extends Migration
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
            $table->string('endereco');
            $table->string('cidade');
            $table->string('estado');
            $table->string('cep');
            


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
            $table->dropColumn('endereco');
            $table->dropColumn('cidade');
            $table->dropColumn('estado');
            $table->dropColumn('cep');
           


        });
    }
}

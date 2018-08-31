<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdicionaRelacionamentoFbbconselheiroHumanograma extends Migration
{
    
    public function up()
    {
        Schema::table('humanogramas', function (Blueprint $table)
        {
            $table->integer('fbb_conselheiro_id')->default(1);
        });
    }

   
    public function down()
    {
         Schema::table('humanogramas', function (Blueprint $table) 
        {
            $table->dropColumn('fbb_conselheiro_id');
        });
        
    }
}

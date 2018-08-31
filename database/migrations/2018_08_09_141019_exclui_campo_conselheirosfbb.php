<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ExcluiCampoConselheirosfbb extends Migration
{
    
    public function up()
    {
        
        Schema::table('humanogramas', function (Blueprint $table) {
            $table->dropColumn('conselheiro_fbb');
});
    }

   
    public function down()
    {
        //
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Alterarnomecolunatabeladownload extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('downloads', function (Blueprint $table) {
             $table->renameColumn('caminho', 'arquivo');
             $table->renameColumn('usuario', 'login');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('downloads', function (Blueprint $table) {
            //
        });
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class reuniao extends Model
{
    
    protected $table = 'reunioes';

    protected $fillable = [

    	'finalidade',
    	'data',
    	'grupo',
        'arquivar',
    	'created_at',
    	'update_at'
    ];

        
    public function topico(){

        //pode ter vários registros
        return $this->hasMany(topico::class, 'conselho_id');

    }

    public function download(){

        //pode ter vários registros
        return $this->hasMany(download::class, 'conselho_id');

    }

}

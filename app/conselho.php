<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class conselho extends Model
{
    protected $fillable = [

    	'finalidade',
    	'data',
    	'grupo',
    	'created_at',
    	'update_at'
    ];

        
    public function topico(){

        //pode ter vários registros
        return $this->hasMany(topico::class, 'conselho_id');

    }

}

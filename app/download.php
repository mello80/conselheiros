<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class download extends Model
{
    protected $fillable = [
    	
    	'login',
    	'arquivo',
        'topico',
    	'conselho_id',
        'nome'
    	    	
	];


	public function reuniao() {

		return $this->belongsTo(reuniao::class, 'conselho_id');
	}



}

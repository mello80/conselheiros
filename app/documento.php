<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class documento extends Model
{
    protected $fillable = [
    	'documentos',
    	'topico_id',
    	'nomedocumento'
    	
	];


	public function topico() {

		return $this->belongsTo(topico::class, 'topico_id');
	}
}

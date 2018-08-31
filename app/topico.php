<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class topico extends Model
{
    
	protected $fillable = [
    	'categoria',
    	'ordenacao',
    	'titulo',
        'conselho_id',
        'documentos'

	];

    public function conselho(){
    	//pertence a tabela conselho 
        return $this->belongsTo(conselho::class, 'conselho_id');

    }

    public function documento(){

        return $this->hasMany(documento::class, 'topico_id');
    }
}

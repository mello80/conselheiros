<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fbbConselheiro extends Model
{
    
	  //realiza o relacionamento com a tabela humanograma
    public function humanograma(){
    	//tem varios 
        return $this->hasMany('App\humanograma');

    }
}

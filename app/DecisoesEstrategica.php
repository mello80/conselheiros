<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class decisoesestrategica extends Model
{
    protected $fillable = [
    	'decisaonr',
    	'ano',
    	'assunto',
    	'datainicio',
    	'datalimite',
    	'textodecisao',
    	'responsavelatendimento',
    	'decisaoemitida',
        'datareuniao',
        'reuniaonr',
        'linkdecisao',
        'status',
        'historico'

    ];
}

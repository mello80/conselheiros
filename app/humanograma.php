<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class humanograma extends Model
{
    protected $fillable = [
    	'nome',
    	'cargo',
    	'fbb_conselheiro_id',
    	'telefone_secretaria',
    	'telefone',
    	'celular',
    	'email',
    	'foto',
        'desccurriculo',
        'nome_banco',
        'codigo_banco',
        'agencia_banco',
        'conta_banco',
        'comite_investimento',
        'nome_secretaria',
        'aniversario',
        'endereco',
        'cidade',
        'estado',
        'cep'

    ];
    //realiza o relacionamento com a tabela fbbconselheiros

    public function fbbConselheiro(){

        //belong pertence a tabela fbbconselheiro
        return $this->belongsTo('App\fbbConselheiro');

    }
}

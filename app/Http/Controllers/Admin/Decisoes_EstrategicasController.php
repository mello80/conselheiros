<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\decisoesestrategica;

class Decisoes_EstrategicasController extends Controller
{
    public function index(){

    	$registros = decisoesestrategica::all();
    	return view("admin.decisoes_estrategicas.index", compact("registros"));
    }

    public function adicionar(){

    	return view("admin.decisoes_estrategicas.adicionar");
    }

    public function salvar(Request $req){

    	$dados = $req->all();
    	

    	if ($req->hasfile('linkdecisao')) {
			
			$imagem = $req->file('linkdecisao');
			$num = rand(1111,9999);
			$dir = "img/decisao_estrategica/linkdecisao";
			$ext = $imagem->guessClientExtension();
			$nomeimagem = "arquivo_" . $num . "." . $ext;
			$imagem->move($dir,$nomeimagem);
			$dados['linkdecisao'] = $dir . "/" . $nomeimagem;
			
		}


		decisoesestrategica::create($dados);

    	return redirect()->route('admin.decisoes_estrategicas');
    }
}

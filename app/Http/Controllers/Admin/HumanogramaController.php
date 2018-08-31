<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\humanograma;
use App\fbbConselheiro;

class HumanogramaController extends Controller
{
    public function index(){

	    $registros = humanograma::all();
	    return view("admin.humanograma.index", compact("registros"));
	    

	}

	public function adicionar()
	{

		return view("admin.humanograma.adicionar")->with('fbb_conselheiros', fbbConselheiro::all());

	}

	public function salvar(Request $req)
	{
	    //public function salvar()
	    //{
		//Grava os dados no BD tb!!!
		//humanograma::create(Request::all())
		
		$dados = $req->all();

		/** Verificar se existe arquivo e cria o diretório e salva o arquivo */
		if ($req->hasfile('foto')) {
			
			$imagem = $req->file('foto');
			$num = rand(1111,9999);
			$dir = "img/humanograma";
			$ext = $imagem->guessClientExtension();
			$nomeimagem = "imagem_" . $num . "." . $ext;
			$imagem->move($dir,$nomeimagem);
			$dados['foto'] = $dir . "/" . $nomeimagem;
			
		}

		/** Grava os Dados no Banco */
		humanograma::create($dados);

		return redirect()->route('admin.humanograma');
	}

	public function editar($id)
	{

		$registro = humanograma::find($id);
		
		return view('admin.humanograma.editar', compact('registro'))->with('fbb_conselheiros', fbbConselheiro::all());

		
	}

	public function atualizar(Request $req, $id){


		$dados = $req->all();

		/** Verificar se existe arquivo e cria o diretório e salva o arquivo */
		if ($req->hasfile('foto')) {
			
			$imagem = $req->file('foto');
			$num = rand(1111,9999);
			$dir = "img/humanograma";
			$ext = $imagem->guessClientExtension();
			$nomeimagem = "imagem_" . $num . "." . $ext;
			$imagem->move($dir,$nomeimagem);
			$dados['foto'] = $dir . "/" . $nomeimagem;
			
		}

		/** atualiza os Dados no Banco */

		humanograma::find($id)->update($dados);

		return redirect()->route('admin.humanograma');


	}

	public function deletar($id)
	{

		
		humanograma::find($id)->delete();
		return redirect()->route('admin.humanograma');
		
		


	}

}

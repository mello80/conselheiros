<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\conselho;
use App\topico;
use App\documento;
use DB;


class ConselhoUsuarioController extends Controller
{
    
    public function index()
    {
    	$registros = conselho::where('grupo','Conselho Curador')->orderBy('data', 'desc')->paginate(5);
    	//$registros = conselho::orderBy('data','desc')->paginate(5);
    	return view("conselho", compact("registros"));
    }

    public function visualizarPauta($id)
    {
    	$reuniao = conselho::find($id);
		
    	//$topicos = conselho::find($id)->topico;
    	$topicos = topico::where('conselho_id',($id))->orderBy('ordenacao')->get();

    	return view("visualizar-pauta", compact("reuniao", "topicos"))->with('documentos', documento::all());
    }

    public function pesquisar(Request $req)
    {

        $texto = $req->texto;
        
        $registros = conselho::where('finalidade', 'like', "%{$texto}%")->orwhere('data', 'like', "%$texto%")->get();

        return view("pesquisar", compact("registros"));

    }
}


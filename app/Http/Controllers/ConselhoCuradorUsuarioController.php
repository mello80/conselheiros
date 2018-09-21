<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\reuniao;
use App\topico;
use App\documento;
use App\download;
use App\User;
use DB;
use Carbon\Carbon;
use URL;
use Response;
use Auth;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class ConselhoCuradorUsuarioController extends Controller
{
    
   
    private $paginate = 5;

    public function index()
    {
        
        $user = Auth::user();
        $roles = $user->getRoleNames(); 
               
        
        $registros = reuniao::where('grupo', 'Conselho Curador')->orderBy('data', 'desc')->first();
        $id = $registros->id;
        $reuniao = reuniao::find($id);
        $topicos = topico::where('conselho_id',($id))->orderBy('ordenacao')->get();
        return view("user.conselho-curador.index", compact("reuniao", "topicos", "roles"))->with('documentos', documento::all());
    }

    public function pautasAnteriores()
    {
    	$registros = reuniao::where([
            ['grupo','Conselho Curador'],
            ['arquivar', 'nao'],
        ])
        ->orderBy('data', 'desc')
        ->paginate($this->paginate);
    	return view("user.conselho-curador.pautas-anteriores", compact("registros"));
    }

    public function visualizarPauta($id)
    {
    	
        $reuniao = reuniao::find($id);
		
    	//$topicos = conselho::find($id)->topico;
    	$topicos = topico::where('conselho_id',($id))->orderBy('ordenacao')->get();

    	return view("user.conselho-curador.visualizar-pauta", compact("reuniao", "topicos"))->with('documentos', documento::all());
    }

    public function pesquisar(Request $req)
    {

        $texto = $req->texto;

        /*$teste = session()->put('textosalvo', '$texto');

        $data = Carbon::createFromFormat('d/m/Y', $texto)->toDateString();
        
        $registros = conselho::where('data', 'like', "%{$data}%")->get();*/

         $registros = DB::table('topicos')
            ->join('reunioes', 'reunioes.id', '=', 'conselho_id')
            ->where([
                ['titulo', 'like',"%{$texto}%"],
                ['grupo', 'Conselho Curador'],
                ['arquivar', 'nao'],
            ])
            ->get(); 

        return view("user.conselho-curador.pesquisar", compact("registros"));

    }


    public function download($id)
    {

        $arquivo = documento::find($id);
        $topico = $arquivo->topico;
        $topico_id = $topico->conselho_id;
        $conselho = reuniao::find($topico_id);
        $caminho = $arquivo->documentos;
        $dados['topico'] = $topico->titulo;
        $dados['nome'] = Auth::user()->name;
        $dados['login'] = Auth::user()->email;
        $dados['arquivo'] = $arquivo->nomedocumento;
        $dados['conselho_id'] = $conselho->id;

        download::create($dados);
        return response()->download($caminho);
    }
}


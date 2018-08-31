<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\conselho;
use App\topico;
use App\documento;
use DB;
use Carbon\Carbon;



class ConselhoController extends Controller
{
    
	
     public function pesquisar(Request $req)
    {

        $texto = $req->texto;
        $teste = Carbon::createFromFormat('d-m-Y', 'data');
        dd($teste);
        $registros = conselho::where('finalidade', 'like', "%{$texto}%")
        ->orwhere(Carbon::createFromFormat('d-m-Y', 'data'), 'like', "%$texto%")->get();

        return view("admin.conselho-curador.pesquisar", compact("registros"));

    }

    public function index()
    {
    	$registros = DB::table('conselhos')->where('grupo','Conselho Curador')->orderBy('data', 'desc')->paginate(6);
    	//$registros = conselho::orderBy('data','desc')->paginate(5);
    	return view("admin.conselho-curador.index", compact("registros"));
    }


    public function adicionar()
    {
    	return view("admin.conselho-curador.adicionar");
    }


    public function salvar(Request $req)
    {
    	$dados = $req->all();
    	conselho::create($dados);
	   	return redirect()->route('admin.conselho-curador')->with('message', 'Finalidade adicionada com sucesso');
    }

    public function editar($id)
	{
		$registro = conselho::find($id);
		return view('admin.conselho-curador.editar', compact('registro'));
	}

     public function deletar($id)
    {
       	conselho::find($id)->delete();
       	return redirect()->route('admin.conselho-curador')->with('message', 'Finalidade excluída com sucesso'); 
    }


    public function atualizar(Request $req, $id)
    {
		$dados = $req->all();
		conselho::find($id)->update($dados);

		return redirect()->route('admin.conselho-curador')->with('message', 'Finalidade atualizada com sucesso');    
	}



    public function visualizarTopicos($id)
    {
    	$reuniao = conselho::find($id);
    	
    	//$topicos = conselho::find($id)->topico;
    	$topicos = DB::table('topicos')->where('conselho_id',($id))->orderBy('ordenacao')->get();

    	return view("admin.conselho-curador.visualizartopicos", compact("reuniao", "topicos"));
    }


    public function adicionarTopicos($id)
	{
		
		$registro = conselho::find($id);
		return view("admin.conselho-curador.adicionar-topicos", compact("registro"));
	}

    public function salvarTopicos(Request $req){

     	$dados = $req->all();
     	
     	topico::create($dados);
     	return redirect()->route('admin.conselho-curador')->with('message', 'Tópico adicionado com sucesso');

    }


    public function adicionarDocumentos($id)
	{
		$registro = topico::find($id);
		return view("admin.conselho-curador.adicionar-documentos", compact("registro"));
	}

	public function salvarDocumentos(Request $req){

    	$dados = $req->all();
    	$id_conselho = $dados['conselho_id'];
    	
     	
       	if ($req->hasfile('documentos')) {

     		foreach ($req->documentos as $documento) {
     			
     			$num = rand(1111,9999);
                $extensao = $documento->getClientOriginalExtension();
                $nomearquivo = "documento_" . $num . "." . $extensao;
                //$documento->getClientOriginalName();
     			$diretorio = "arquivo/conselho-curador";
     			$documento->move($diretorio,$nomearquivo);
     			$dados['documentos'] = $diretorio . "/" . $nomearquivo;
                $dados['nomedocumento'] = $dados['nomedoarquivo'];
     			documento::create($dados);
     		}
     	
     	}

     	return redirect()->route('admin.conselho-curador.visualizartopicos', $id_conselho)->with('message', 'Documento adicionado com sucesso');
    }


    public function visualizarDocumentos($id)
    {
    	$topico = topico::find($id);
        $documentos = DB::table('documentos')->where('topico_id', $id)->orderBy('created_at', 'desc')->get();
    	//$documentos = $topico->documento;
    	return view("admin.conselho-curador.visualizar-documentos", compact("topico", "documentos"));

	}

    public function deletarDocumentos($id)
    {

       	$id_topico = documento::find($id)->topico['id'];
    	$documento = documento::find($id);
        $caminho = $documento['documentos'];
        unlink($caminho);
        documento::find($id)->delete();
       	return redirect()->route('admin.conselho-curador.visualizar-documentos', $id_topico)->with('message', 'Documento excluído com sucesso');
    }

    public function editarTopicos($id)
	{

		$registro = topico::find($id);
		return view('admin.conselho-curador.editar-topicos', compact('registro'));	
	}


	public function atualizarTopicos(Request $req, $id)
	{
		$id_conselho = topico::find($id)->conselho;

		$dados = $req->all();
		topico::find($id)->update($dados);
		return redirect()->route('admin.conselho-curador.visualizartopicos', $id_conselho)->with('message', 'Tópico atualizado com sucesso');    ;
	}

	 public function deletarTopicos($id)
    {

       	$id_conselho = topico::find($id)->conselho['id'];
       	
    	topico::find($id)->delete();
       	return redirect()->route('admin.conselho-curador.visualizartopicos', $id_conselho)->with('message', 'Tópico excluído com sucesso'); 
    }
}

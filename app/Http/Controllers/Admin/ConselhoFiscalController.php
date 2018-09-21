<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\reuniao;
use App\topico;
use App\documento;
use App\download;
use DB;
use Carbon\Carbon;



class ConselhoFiscalController extends Controller
{
    
	public function __construct()
    {
        $this->middleware('auth');
    }

    private $paginate = 5;

    public function pesquisar(Request $req)
    {

       
        $texto = $req->texto;
        
        /*$data = Carbon::createFromFormat('d/m/Y', $texto)->toDateString();
        $registros = conselho::where('data', 'like', "%{$data}%")->get(); */
        //$registros = topico::where('titulo', 'like', "%{$texto}%")->get(); 

        $registros = DB::table('topicos')
            ->select('topicos.id','finalidade', 'titulo', 'topicos.created_at', 'conselho_id')
            ->join('reunioes', 'reunioes.id', '=', 'conselho_id')
            ->where([
                ['titulo', 'like',"%{$texto}%"],
                ['grupo', 'Conselho Fiscal'],
            ])
            ->get(); 
        
        return view("admin.conselho-fiscal.pesquisar", compact("registros"));

    }

    public function index()
    {
    	
        $registros = reuniao::where('grupo','Conselho Fiscal')->orderBy('data', 'desc')->paginate($this->paginate);
    	//$registros = conselho::orderBy('data','desc')->paginate(5);
    	return view("admin.conselho-fiscal.index", compact("registros"));
    }


    public function adicionar()
    {
    	return view("admin.conselho-fiscal.adicionar");
    }


    public function salvar(Request $req)
    {
    	
        $dados = $req->all();
        $data = $dados['data'];
        $dados['data'] = Carbon::createFromFormat('d/m/Y', $data)->toDateString();
        reuniao::create($dados);
	   	return redirect()->route('admin.conselho-fiscal')->with('message', 'Finalidade adicionada com sucesso');
    }

    public function editar($id)
	{
		$registro = reuniao::find($id);
		return view('admin.conselho-fiscal.editar', compact('registro'));
	}

     public function deletar($id)
    {
       	reuniao::find($id)->delete();
       	return redirect()->route('admin.conselho-fiscal')->with('message', 'Finalidade excluída com sucesso'); 
    }


    public function atualizar(Request $req, $id)
    {
		$dados = $req->all();
        $data = $dados['data'];
        $dados['data'] = Carbon::createFromFormat('d/m/Y', $data)->toDateString();
        reuniao::find($id)->update($dados);
        return redirect()->route('admin.conselho-curador')->with('message', 'Reunião atualizada com sucesso'); 
	}



    public function visualizarTopicos($id)
    {
    	$reuniao = reuniao::find($id);
    	
    	//$topicos = conselho::find($id)->topico;
    	$topicos = DB::table('topicos')->where('conselho_id',($id))->orderBy('ordenacao')->get();

    	return view("admin.conselho-fiscal.visualizartopicos", compact("reuniao", "topicos"));
    }


    public function adicionarTopicos($id)
	{
		
		$registro = reuniao::find($id);
		return view("admin.conselho-fiscal.adicionar-topicos", compact("registro"));
	}

    public function salvarTopicos(Request $req){

     	$dados = $req->all();
     	
     	topico::create($dados);
     	return redirect()->route('admin.conselho-fiscal')->with('message', 'Tópico adicionado com sucesso');

    }


    public function adicionarDocumentos($id)
	{
		$registro = topico::find($id);
		return view("admin.conselho-fiscal.adicionar-documentos", compact("registro"));
	}

	public function salvarDocumentos(Request $req){

    	$dados = $req->all();
    	$id_conselho = $dados['conselho_id'];
    	
     	
       	if ($req->hasfile('documentos')) {

     		foreach ($req->documentos as $documento) {
     			
     			//$num = rand(1111,9999);
                $nomearquivo = $documento->getClientOriginalName();

                //$extensao = $documento->getClientOriginalExtension();
                //$nomearquivo = "documento_" . $num . "." . $extensao;
                
     			$diretorio = "arquivo/conselho-fiscal";
     			$documento->move($diretorio,$nomearquivo);
     			$dados['documentos'] = $diretorio . "/" . $nomearquivo;
                $dados['nomedocumento'] = $dados['nomedoarquivo'];
     			documento::create($dados);
     		}
     	
     	}
        
     	return redirect()->route('admin.conselho-fiscal.visualizartopicos', $id_conselho)->with('message', 'Documento adicionado com sucesso');
    }


    public function visualizarDocumentos($id)
    {
    	$topico = topico::find($id);
        $documentos = DB::table('documentos')->where('topico_id', $id)->orderBy('created_at', 'desc')->get();
    	//$documentos = $topico->documento;
    	return view("admin.conselho-fiscal.visualizar-documentos", compact("topico", "documentos"));

	}

    public function deletarDocumentos($id)
    {

       	$id_topico = documento::find($id)->topico['id'];
    	$documento = documento::find($id);
        $caminho = $documento['documentos'];
        unlink($caminho);
        documento::find($id)->delete();
       	return redirect()->route('admin.conselho-fiscal.visualizar-documentos', $id_topico)->with('message', 'Documento excluído com sucesso');
    }


    public function logDocumentos($id)
    {
        
        $reuniao = reuniao::find($id)->finalidade;
        $registros = download::where('conselho_id', $id)->orderBy('created_at', 'desc')->paginate($this->paginate);
        
        return view('admin.conselho-fiscal.log-documentos', compact('registros', 'reuniao'));

    }

    public function editarTopicos($id)
	{

		$registro = topico::find($id);
		return view('admin.conselho-fiscal.editar-topicos', compact('registro'));	
	}


	public function atualizarTopicos(Request $req, $id)
	{
		$id_conselho = topico::find($id)->conselho_id;
		$dados = $req->all();
		topico::find($id)->update($dados);
		return redirect()->route('admin.conselho-fiscal.visualizartopicos', $id_conselho)->with('message', 'Tópico atualizado com sucesso');    ;
	}

	 public function deletarTopicos($id)
    {

       	$id_conselho = topico::find($id);
        $id_conselho = $id_conselho->conselho_id;
       	topico::find($id)->delete();
       	return redirect()->route('admin.conselho-fiscal.visualizartopicos', $id_conselho)->with('message', 'Tópico excluído com sucesso'); 
    }
}

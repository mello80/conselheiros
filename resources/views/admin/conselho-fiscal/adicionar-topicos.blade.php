@extends ("layout_padrao.layout_padrao")

@section ("titulo", "Conselho Curador")

@section('conteudo')
<div class="container topoConteudo">
	
	<h2 class="text-center mb-5 text-muted">Adicionar Tópicos</h2>
	
    	
        <form action="{{route('admin.conselho-fiscal.salvar-topicos')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            @include("admin.conselho-curador._form_topicos")
        
            <button type="submit" class="btn btn-primary">Salvar</button>
       
        </form>
    
</div>

@endsection
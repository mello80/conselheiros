@extends ("layout_padrao.layout_padrao")

@section ("titulo", "Conselho Curador")

@section('conteudo')
<div class="container topoConteudo">
	<h2 class="text-center mb-5 text-muted">Adicionar Documentos</h2>
    	
        <form action="{{route('admin.conselho-fiscal.salvar-documentos')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            @include("admin.conselho-fiscal._form_documentos")
        
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
            
</div>

@endsection
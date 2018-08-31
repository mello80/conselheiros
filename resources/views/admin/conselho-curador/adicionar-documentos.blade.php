@extends ("layout_padrao.layout_padrao")

@section ("titulo", "Conselho Curador")

@section('conteudo')
<div class="container" style="margin-top: 50px;">
	<h2 class="text-center">Adicionar Documentos</h2>
    	
        <form action="{{route('admin.conselho-curador.salvar-documentos')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            @include("admin.conselho-curador._form_documentos")
        
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
            
</div>

@endsection
@extends ("layout_padrao.layout_padrao")

@section ("titulo", "Conselho Curador")

@section('conteudo')
<div class="container" style="margin-top: 50px;">
	
				
				
    <h2 class="text-center">Adicionar Tópicos</h2>
    	
        <form action="{{route('admin.conselho-curador.salvar-topicos')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            @include("admin.conselho-curador._form_topicos")
        
            <button type="submit" class="btn btn-primary">Salvar</button>
        
        </form>
            
</div>

@endsection
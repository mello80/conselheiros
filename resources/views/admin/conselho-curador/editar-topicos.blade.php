@extends ("layout_padrao.layout_padrao")

@section ("titulo", "Conselho Curador")

@section('conteudo')
<div class="container topoConteudo">
	<h3 class="text-center mb-5 text-muted">Editar Tópico</h3>
	
		<form action="{{route('admin.conselho-curador.atualizar-topicos', $registro->id)}}" method="post" enctype="multipart/form-data">
			{{csrf_field()}}
			<input type="hidden" name="_method" value="put">
			@include("admin.conselho-curador._form_editar-topicos")
		
			<button type="submit" class="btn btn-primary">Atualizar</button>
		</form>

	
	</div>
	
</div>

@endsection
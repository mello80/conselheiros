@extends ("layout_padrao.layout_padrao")

@section ("titulo", "Conselho Curador")

@section('conteudo')
<div class="container topoConteudo">
	<h2 class="text-center mb-5 text-muted">Editar Reunião</h2>
	
		<form action="{{route('admin.conselho-curador.atualizar', $registro->id)}}" method="post" enctype="multipart/form-data">
			{{csrf_field()}}
			<input type="hidden" name="_method" value="put">
			@include("admin.conselho-curador._form_editar-pauta")
		
			<button type="submit" class="btn btn-primary">Atualizar</button>
		</form>

	
	</div>
	
</div>

@endsection
@extends ("layout_padrao.layout_padrao")

@section ("titulo", "Humanograma")

@section('conteudo')
<div class="container" style="margin-top: 50px;">
	<h3 class="text-center">Editar Conselheiros</h3>
	<div class="row">
		<form action="{{route('admin.humanograma.atualizar', $registro->id)}}" method="post" enctype="multipart/form-data">
			{{csrf_field()}}
			<input type="hidden" name="_method" value="put">
			@include("admin.humanograma._form_editar")
		
			<button type="submit" class="btn btn-primary">Atualizar</button>
		</form>

	
	</div>
	
</div>

@endsection
@extends ("layout_padrao.layout_padrao")

@section ("titulo", "Humanograma")

@section('conteudo')
<div class="container" style="margin-top: 50px;">
	<h3 class="text-center">Adicionar Conselheiros</h3>
	
		<form action="{{route('admin.humanograma.salvar')}}" method="post" enctype="multipart/form-data">
			{{csrf_field()}}
			@include("admin.humanograma._form")
		
			<button type="submit" class="btn btn-primary">Salvar</button>
		</form>
			
</div>

@endsection
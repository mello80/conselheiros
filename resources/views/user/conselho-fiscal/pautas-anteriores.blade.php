@extends ("layout_padrao.layout_padrao")

@section ("titulo", "Conselho Curador")

@section ("conteudo")

<div class="container mt-5">
	<h2 class="text-center mb-5">Conselho Curador</h2>
	<div class="row">
		<div class="col-sm-12">
			<form action="{{route('user.conselho-fiscal.pesquisar')}}"  class="form-inline my-2 my-lg-0 btn_pesquisar" method="POST">
				{{csrf_field()}}
				<input name="texto" class="form-control mr-sm-2 " type="search" placeholder="Pesquisa por tópico" aria-label="Pesquisar">
				<button class="btn btn-outline-primary my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
			</form>
		</div>
	</div>
	<div class="row">

		<table class="table table-hover table-responsive-sm" >
			<thead>
				<tr>
					<th>Reunião</th>
					<th>Data</th>
					<th>Ação</th>
				</tr>
			</thead>
			<tbody>
				
				@foreach($registros as $registro)

				<tr>
					
					<td>{{$registro->finalidade}}</td>
					<td>{{date('d/m/Y', strtotime($registro->data))}}</td>
					<td>
						
						<a class="btn btn-secondary" title="Visualizar" href="{{route('user.conselho-fiscal.visualizar-pauta', $registro->id)}}"><i class="fas fa-search"></i></a>
						
						
					</td>
				</tr>
				@endforeach

				
			</tbody>
		</table>
	<div class="mx-auto">
	{{ $registros->links('vendor.pagination.bootstrap-4') }}
	</div>
	
	</div>
	
</div>




@endsection

@extends ("layout_padrao.layout_padrao")

@section ("titulo", "Conselho Curador")

@section ("conteudo")

<div class="container" style="margin-top: 50px">
	<h2 class="text-center" style="margin-bottom: 50px">Conselho Curador</h2>
	<div class="row">
		<div class="col-sm-12">
			<form action="{{route('pesquisar')}}"  class="form-inline my-2 my-lg-0 btn_pesquisar" method="POST">
				{{csrf_field()}}
				<input name="texto" class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
				<button class="btn btn-outline-primary my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
			</form>
		</div>
	</div>
	<div class="row">

		<table class="table table-hover" >
			<thead>
				<tr>
					<th>Pauta</th>
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
						
						<a class="btn btn-secondary" title="Visualizar" href="{{route('visualizar-pauta', $registro->id)}}"><i class="fas fa-search"></i></a>
						
						
					</td>
				</tr>
				@endforeach

				
			</tbody>
		</table>
	{{$registros->links('vendor.pagination.bootstrap-4')}}
	
	</div>
	
</div>




@endsection

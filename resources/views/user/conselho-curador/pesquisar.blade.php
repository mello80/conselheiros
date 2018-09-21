@extends ("layout_padrao.layout_padrao")

@section ("titulo", "Conselho Curador")

@section ("conteudo")

<div class="container topoConteudo">
	<h2 class="text-center mb-5 text-muted">Conselho Curador</h2>
	
	<div class="row">

		<table class="table table-hover" >
			<thead>
				<tr>
					<th>Reunião</th>
					<th>Tópico</th>
					<th>Data da Publicação</th>
					<th>Ação</th>
				</tr>
			</thead>
			<tbody>
				@if (count($registros)>0)
				@foreach($registros as $registro)
				
				<tr>
					<td>{{$registro->finalidade}}</td>
					<td>{{$registro->titulo}}</td>
					<td>{{date('d/m/Y', strtotime($registro->created_at))}}</td>
					<td>
						<a class="btn btn-secondary" title="Visualizar" href="{{route('user.conselho-curador.visualizar-pauta', $registro->id)}}"><i class="fas fa-search"></i></a>

					</td>
				</tr>
				@endforeach
				@else
				<tr>
					
					<td>Nenhum registro encontrado</td>
					
				</tr>
				@endif
			</tbody>
		</table>
	<a class="btn btn-primary" title="Voltar" href="{{  route('user.conselho-curador.pautas-anteriores') }}"><i class="fas fa-arrow-circle-left"></i> Voltar</a>
	{{-- $registros->links('vendor.pagination.bootstrap-4') --}}
	
	</div>
	
</div>

@endsection

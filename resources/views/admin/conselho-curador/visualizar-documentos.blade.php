@extends ("layout_padrao.layout_padrao")

@section ("titulo", "Conselho Curador")

@section ("conteudo")

<div class="container" style="margin-top: 50px">
	<h2 class="text-center" style="margin-bottom: 50px">Documentos</h2>

	
		
		<div class="card bg-light mb-3">
			<div class="card-header text-center">
				<h4>{{$topico->titulo}}</h4>
			</div>
		</div>	
		@if(session()->has('message'))
		<div class="mensagem">
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				{{ session()->get('message') }}
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
		</div>
		@endif
		
		<table class="table table-hover" >
			<thead>
				<tr>
					
					<th>Documentos</th>
					<th>Data da publicação</th>
					<th>Ação</th>
				</tr>
			</thead>
			<tbody>
				@foreach($documentos as $documento)
				<tr>
					@if(isset($documento->documentos))
					<td><a href="{{asset($documento->documentos)}}" target="_blank">{{$documento->nomedocumento}}</a></td>
					@else
					<td></td>
					@endif
					<td>{{date('d/m/Y', strtotime($documento->created_at))}}</td>
					<td>
						
						<a class="btn btn-danger" title="Deletar" href="{{route('admin.conselho-curador.deletar-documentos', $documento->id)}}"><i class="fas fa-trash-alt"></i></a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		<a class="btn btn-primary" title="Voltar" href="{{ route('admin.conselho-curador.visualizartopicos', $topico->conselho_id) }}"><i class="fas fa-arrow-circle-left"></i> Voltar</a>
	

</div>

@endsection

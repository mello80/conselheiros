@extends ("layout_padrao.layout_padrao")

@section ("titulo", "Conselho Fiscal")

@section ("conteudo")

<div class="container topoConteudo">
	
	<h2 class="text-center text-muted" style="margin-bottom: 50px">Conselho Fiscal</h2>
	
	<div class="row">
		
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

					<th>Pauta</th>
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
						<a class="btn btn-success" title="Editar pauta" href="{{route('admin.conselho-fiscal.editar-topicos', $registro->id)}}"><i class="fas fa-edit"></i></a>
						<a class="btn btn-danger" title="Deletar pauta" href="{{route('admin.conselho-fiscal.deletar-topicos', $registro->id)}}"><i class="fas fa-trash-alt"></i></a>
						<a class="btn btn-primary" title="Adicionar documentos" href="{{route('admin.conselho-fiscal.adicionar-documentos', $registro->id)}}"><i class="fas fa-plus-circle"></i></a>
						<a class="btn btn-secondary" title="Visualizar documentos" href="{{route('admin.conselho-fiscal.visualizar-documentos', $registro->id)}}"><i class="fas fa-search"></i></a>
						<!--<a class="btn btn-secondary" title="Log de acesso" href="{{route('admin.conselho-fiscal.visualizartopicos', $registro->id)}}"><i class="fas fa-file-alt"></i></a> -->
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
	<a class="btn btn-primary" title="Voltar" href="{{route('admin.conselho-fiscal')}}"><i class="fas fa-arrow-circle-left"></i> Voltar</a>
	{{--$registros->links('vendor.pagination.bootstrap-4')--}}
	</div>
	
</div>

@endsection

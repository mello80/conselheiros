@extends ("layout_padrao.layout_padrao")

@section ("titulo", "Conselho Curador")

@section ("conteudo")

<div class="container topoConteudo">
	<h2 class="text-center mb-5 text-muted">Tópicos</h2>

	
		
		<div class="card bg-light mb-3">
			<div class="card-header text-center">
				<h5>{{$reuniao->finalidade}}</h5>
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
		<div class="table-responsive">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>Nome</th>
					<th>Categoria</th>
					<th>Data da publicação</th>
					<th>Ação</th>
				</tr>
			</thead>
			<tbody>
				@if (count($topicos)>0)
				@foreach($topicos as $topico)

				<tr>
					
					<td>{{$topico->ordenacao}}</td>
					<td>{{$topico->titulo}}</td>
					<td>{{$topico->categoria}}</td>
					<td>{{date('d/m/Y', strtotime($topico->created_at))}}</td>
					<td>
						
						<a class="btn btn-success" title="Editar tópico" href="{{route('admin.conselho-fiscal.editar-topicos', $topico->id)}}"><i class="fas fa-edit"></i></a>
						<a class="btn btn-danger" title="Deletar tópico" href="{{route('admin.conselho-fiscal.deletar-topicos', $topico->id)}}"><i class="fas fa-trash-alt"></i></a>
						<a class="btn btn-primary" title="Adicionar documentos" href="{{route('admin.conselho-fiscal.adicionar-documentos', $topico->id)}}"><i class="fas fa-plus-circle"></i></a>
						<a class="btn btn-secondary" title="Visualizar documentos" href="{{route('admin.conselho-fiscal.visualizar-documentos', $topico->id)}}"><i class="fas fa-search"></i></a>
						
					</td>
									
				</tr>
							
				@endforeach
				@else
				<tr>
					
					<td>Nenhum tópico encontrado</td>

				</tr>
				@endif
				
			</tbody>

		</table>
		</div>
	{{--$topicos->links()--}}
	<a class="btn btn-primary" title="Voltar" href="{{ route('admin.conselho-fiscal') }}"><i class="fas fa-arrow-circle-left"></i> Voltar</a>
	


</div>

@endsection

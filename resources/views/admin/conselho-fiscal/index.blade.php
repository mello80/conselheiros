@extends ("layout_padrao.layout_padrao")

@section ("titulo", "Conselho Fiscal")

@section ("conteudo")

<div class="container topoConteudo" >
	
	<h2 class="text-center mb-5 text-muted">Conselho Fiscal</h2>
		
	
	<div class="row">
		<div class="col-sm-12">
			<form action="{{route('admin.conselho-fiscal.pesquisar')}}"  class="form-inline my-2 my-lg-0 btn_pesquisar" method="POST">
				{{csrf_field()}}
				<input name="texto" class="form-control mr-sm-2" type="search" placeholder="Pesquisa por tópico" aria-label="Pesquisar">
				<button class="btn btn-outline-primary my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
			</form>
		</div>
	</div>
	<div class="row mb-3">
	<a class="btn btn-primary" title="Adicionar" href="{{route('admin.conselho-fiscal.adicionar')}}"><i class="fas fa-plus-circle"></i> Adicionar reunião</a>
	</div>
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
		<div class="table-responsive">
		<table class="table table-hover" >
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
						<a class="btn btn-success" title="Editar pauta" href="{{route('admin.conselho-fiscal.editar', $registro->id)}}"><i class="fas fa-edit"></i></a>
						<a class="btn btn-danger" title="Deletar pauta" href="{{route('admin.conselho-fiscal.deletar', $registro->id)}}"><i class="fas fa-trash-alt"></i></a>
						<a class="btn btn-primary" title="Adicionar tópicos" href="{{route('admin.conselho-fiscal.adicionar-topicos', $registro->id)}}"><i class="fas fa-plus-circle"></i></a>
						<a class="btn btn-secondary" title="Visualizar tópicos" href="{{route('admin.conselho-fiscal.visualizartopicos', $registro->id)}}"><i class="fas fa-search"></i></a>
						<a class="btn btn-secondary" title="Log" href="{{route('admin.conselho-fiscal.log-documentos', $registro->id)}}"><i class="fas fa-file-alt"></i></a>
						
					</td>
				</tr>
				@endforeach

			</tbody>
		</table>
		</div>

	<div class="mx-auto">
	{{ $registros->links('vendor.pagination.bootstrap-4') }}
	</div>

	</div>
	
</div>

@endsection

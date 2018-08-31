@extends ("layout_padrao.layout_padrao")

@section ("titulo", "Conselho Curador")

@section ("conteudo")

<div class="container" style="margin-top: 50px">
	
	<h2 class="text-center" style="margin-bottom: 50px">Conselho Curador</h2>
		
	<a class="btn btn-primary" title="Adicionar" href="{{route('admin.conselho-curador.adicionar')}}"><i class="fas fa-plus-circle"></i> Adicionar finalidade</a>
	<div class="row">
		<div class="col-sm-12">
			<form action="{{route('admin.conselho-curador.pesquisar')}}"  class="form-inline my-2 my-lg-0 btn_pesquisar" method="POST">
				{{csrf_field()}}
				<input name="texto" class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
				<button class="btn btn-outline-primary my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
			</form>
		</div>
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
		<table class="table table-hover" >
			<thead>
				<tr>
					<th>Finalidade</th>
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
						<a class="btn btn-success" title="Editar pauta" href="{{route('admin.conselho-curador.editar', $registro->id)}}"><i class="fas fa-edit"></i></a>
						<a class="btn btn-danger" title="Deletar pauta" href="{{route('admin.conselho-curador.deletar', $registro->id)}}"><i class="fas fa-trash-alt"></i></a>
						<a class="btn btn-primary" title="Adicionar tópicos" href="{{route('admin.conselho-curador.adicionar-topicos', $registro->id)}}"><i class="fas fa-plus-circle"></i></a>
						<a class="btn btn-secondary" title="Visualizar tópicos" href="{{route('admin.conselho-curador.visualizartopicos', $registro->id)}}"><i class="fas fa-search"></i></a>
						<!--<a class="btn btn-secondary" title="Log de acesso" href="{{route('admin.conselho-curador.visualizartopicos', $registro->id)}}"><i class="fas fa-file-alt"></i></a> -->
					</td>
				</tr>
				@endforeach

			</tbody>
		</table>
	{{$registros->links('vendor.pagination.bootstrap-4')}}
	</div>
	
</div>

@endsection

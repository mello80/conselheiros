@extends ("layout_padrao.layout_padrao")

@section ("titulo", "Conselho Curador")

@section ("conteudo")

<div class="container topoConteudo">
	
	<h2 class="text-center mb-5 text-muted">Logs</h2>
		
	<div class="card bg-light mb-3">
			<div class="card-header text-center">
				<h5>{{$reuniao}}</h5>
			</div>
		</div>	
	<!--
	<div class="row">
		<div class="col-sm-12">
			<form action="{{route('admin.conselho-curador.pesquisar')}}"  class="form-inline my-2 my-lg-0 btn_pesquisar" method="POST">
				{{csrf_field()}}
				<input name="texto" class="form-control mr-sm-2" type="search" placeholder="Pesquisa por tópico" aria-label="Pesquisar">
				<button class="btn btn-outline-primary my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
			</form>
		</div>
	</div>
	-->
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
					<th>Nome</th>
					<th>Login</th>
					<th>Tópico</th>
					<th>Arquivo</th>
					<th>Acesso</th>
				</tr>
			</thead>
			<tbody>
				@if (count($registros)>0)
				@foreach($registros as $registro)

				<tr>
					
					<td>{{$registro->nome}}</td>
					<td>{{$registro->login}}</td>
					<td>{{$registro->topico}}</td>
					<td>{{$registro->arquivo}}</td>
					<td>{{date('d/m/Y H:i:s', strtotime($registro->created_at))}}</td>
					
				</tr>
				@endforeach
				@else
				<tr>
					<td>Nenhum registro encontrado</td>
				</tr>
				@endif
			</tbody>
		</table>
		</div>

	<div class="mx-auto">
	{{ $registros->links('vendor.pagination.bootstrap-4') }}
	</div>

	</div>
	<div class="row">
		<a class="btn btn-primary" title="Voltar" href="{{ route('admin.conselho-curador')}}"><i class="fas fa-arrow-circle-left"></i> Voltar</a>
	</div>

	
</div>

@endsection

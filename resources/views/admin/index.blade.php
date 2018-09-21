@extends ("layout_padrao.layout_padrao")

@section ("titulo", "Lista de Usuários")

@section ("conteudo")

<div class="container topoConteudo">
	
	<h2 class="text-center mb-5">Lista Usuários</h2>
		
	<div class="row">
		<div class="col-sm-12">
			<form action="{{route('admin.conselho-curador.pesquisar')}}"  class="form-inline my-2 my-lg-0 btn_pesquisar" method="POST">
				{{csrf_field()}}
				<input name="texto" class="form-control mr-sm-2" type="search" placeholder="Pesquisa por tópico" aria-label="Pesquisar">
				<button class="btn btn-outline-primary my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
			</form>
		</div>
	</div>
	<div class="row mb-3">
	<a class="btn btn-primary" title="Adicionar" href="{{route('admin.conselho-curador.adicionar')}}"><i class="fas fa-plus-circle"></i> Adicionar reunião</a>
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
					<th>Nome</th>
					<th>E-mail</th>
					<th>Data criação</th>
					<th>Papel</th>
					<th>Ação</th>
				</tr>
			</thead>
			<tbody>
				
				@foreach($users as $user)

				<tr>
					
					<td>{{$user->name}}</td>
					<td>{{$user->email}}</td>
					<td>{{ $user->created_at->format('F d, Y h:ia') }}</td>
					<td>{{  $user->roles()->pluck('name')->implode(' ') }}</td>
					<td></td>
					
					
				</tr>
				@endforeach

			</tbody>
		</table>
		</div>

	<div class="mx-auto">
	{{-- $registros->links('vendor.pagination.bootstrap-4')-- }}
	</div>

	</div>
	
</div>

@endsection

@extends ("layout_padrao.layout_padrao")

@section ("titulo", "Decisões Estratégicas")

@section ("conteudo")

<div class="container-fluid" style="margin-top: 50px">
	<h3 class="text-center" style="margin-bottom: 50px">Humanograma</h3>

	<div class="row">
		<table class="table table-hover" >
			<thead>
				<tr>
					<th>Decisão Nr.</th>
					<th>Ano</th>
					<th>Assunto</th>
					<th>Data Início</th>
					<th>Data Limite</th>
					<th>Texto da Decisão</th>
					<th>Responsável pelo Atendimento</th>
					<th>Decisão Emitida por:</th>
					<th>Status</th>


				</tr>
			</thead>
			<tbody>
				@foreach($registros as $registro)

				<tr>
					<td>{{$registro->decisaonr}}</td>
					<td>{{$registro->ano}}</td>
					<td>{{$registro->assunto}}</td>
					<td>{{$registro->datainicio}}</td>
					<td>{{$registro->datalimite}}</td>
					<td>{{$registro->textodecisao}}</td>
					<td>{{$registro->responsavelatendimento}}</td>
					<td>{{$registro->decisaoemitida}}</td>
					<td>{{$registro->status}}</td>
					<td><img width="200" src="{{asset($registro->foto)}}" alt="{{$registro->nome}}"></td>
					<td>
						<a class="btn btn-success" title="Editar" href="{{route ('admin.humanograma.editar',$registro->id)}}"><i class="fas fa-edit"></i></a></a>
						<a class="btn btn-danger" title="Excluir" href="{{route ('admin.humanograma.deletar',$registro->id)}}"><i class="fas fa-trash-alt"></i></a>
						<a class="btn btn-secondary" title="Visualizar" href="{{route ('admin.humanograma.deletar',$registro->id)}}"><i class="fas fa-search"></i>
					</td>
				</tr>

				@endforeach
			</tbody>
		</table>
	</div>

</div>


@endsection

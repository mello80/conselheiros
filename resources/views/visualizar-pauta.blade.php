@extends ("layout_padrao.layout_padrao")

@section ("titulo", "Conselho Curador")

@section ("conteudo")

<div class="container" style="margin-top: 50px">
	<h2 class="text-center" style="margin-bottom: 50px">{{$reuniao->grupo}}</h2>

	<div class="card bg-light mb-3">
		<div class="card-header text-center">
			<h4>{{$reuniao->finalidade}}</h4>
		</div>
	</div>	
	
	<div class="card bg-light mb-3">
		
		<h5 class="card-header">Para Deliberação</h5>
		<div class="card-body">
			<ul>
				@foreach ($topicos as $topico)

					@if ($topico->categoria === 'Para Deliberação')
					<hr>
						<h5 class="card-title">{{$topico->ordenacao}}. {{$topico->titulo}}</h5>

						@foreach ($documentos as $docs)
							@if ($docs->topico_id === $topico->id)
							<ul>
								<li>
									<a href="{{asset($docs->documentos)}}" target="_blank">{{$docs->nomedocumento}}</a>
								</li>
							</ul>
							
							@endif
						@endforeach
					@endif

				@endforeach

			</ul>
		</div>
	</div>

	<div class="card bg-light mb-3">
		
		<h5 class="card-header">Informes</h5>
		<div class="card-body">
			<ul>
				@foreach ($topicos as $topico)

					@if ($topico->categoria == 'Informes')
					<hr>
					<h5 class="card-title">{{$topico->ordenacao}}. {{$topico->titulo}}</h5>

						@foreach ($documentos as $docs)
							@if ($docs->topico_id == $topico->id)
							<ul>
								<li>
									<a href="{{asset($docs->documentos)}}" target="_blank">{{$docs->nomedocumento}}</a>
								</li>
							</ul>
							
							@endif
						@endforeach

					@endif

				@endforeach
			</ul>
		</div>
	</div>

	<div class="card bg-light mb-3">
		
		<h5 class="card-header">Para Conhecimento</h5>
		<div class="card-body">
			<ul>
				@foreach ($topicos as $topico)

					@if ($topico->categoria == 'Para Conhecimento')
					<hr>
					<h5 class="card-title">{{$topico->ordenacao}}. {{$topico->titulo}}</h5>

						@foreach ($documentos as $docs)
							@if ($docs->topico_id == $topico->id)
							<ul>
								<li>
									<a href="{{asset($docs->documentos)}}" target="_blank">{{$docs->nomedocumento}}</a>
								</li>
							</ul>
							
							@endif
						@endforeach
					
					@endif

				@endforeach
			</ul>
		</div>
	</div>
	<a class="btn btn-primary" title="Voltar" href="{{route('conselho-curador')}}"><i class="fas fa-arrow-circle-left"></i> Voltar</a>
</div>

@endsection

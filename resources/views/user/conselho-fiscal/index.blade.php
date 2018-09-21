@extends ("layout_padrao.layout_padrao")

@section ("titulo", "Conselho Fiscal")

@section ("conteudo")

<div class="container mt-5">
	<h2 class="text-center mb-5">{{$reuniao->grupo}}</h2>

	<div class="card bg-light mb-3">
		<div class="card-header text-center">
			<h4>{{$reuniao->finalidade}}</h4>
		</div>
	</div>	
	
				@foreach ($topicos as $topico)
						@if ($topico->categoria == 'Para Deliberação')
				       		<div class="card bg-light mb-3">
							<h5 class="card-header">{{$topico->categoria}}</h5>
							<div class="card-body">
							<ul>
				   		@break
				   		@endif
			    @endforeach

        		@foreach ($topicos as $topico)
					@if ($topico->categoria == 'Para Deliberação')
					<hr>
					<h5 class="card-title">{{$topico->ordenacao}}. {{$topico->titulo}}</h5>

						@foreach ($documentos as $docs)
							@if ($docs->topico_id == $topico->id)
							<ul>
								<li>
									<a href="{{route('user.conselho-fiscal.download', $docs->id) }}" target="_blank">{{$docs->nomedocumento}}</a>
								</li>
							</ul>
							
							@endif
						@endforeach
					
					@endif
				@endforeach


				@foreach ($topicos as $topico)
					@if ($topico->categoria == 'Para Deliberação')
				       		</ul>
							</div>
							</div>	
				   	@break
				   	@endif
			    @endforeach

				@foreach ($topicos as $topico)
						@if ($topico->categoria == 'Informes')
				       		<div class="card bg-light mb-3">
							<h5 class="card-header">{{$topico->categoria}}</h5>
							<div class="card-body">
							<ul>
				   		@break
				   		@endif
			    @endforeach

        		@foreach ($topicos as $topico)
					@if ($topico->categoria == 'Informes')
					<hr>
					<h5 class="card-title">{{$topico->ordenacao}}. {{$topico->titulo}}</h5>

						@foreach ($documentos as $docs)
							@if ($docs->topico_id == $topico->id)
							<ul>
								<li>
									<a href="{{route('user.conselho-fiscal.download', $docs->id) }}" target="_blank">{{$docs->nomedocumento}}</a>
								</li>
							</ul>
							
							@endif
						@endforeach
					
					@endif
				@endforeach

				@foreach ($topicos as $topico)
					@if ($topico->categoria == 'Informes')
				       		</ul>
							</div>
							</div>	
				   	@break
				   	@endif
			    @endforeach
				
		
	
	
				@foreach ($topicos as $topico)
					@if ($topico->categoria == 'Para Conhecimento')
		        		<div class="card bg-light mb-3">
						<h5 class="card-header">{{$topico->categoria}}</h5>
						<div class="card-body">
						<ul>
	        		@break
	        		@endif
        		@endforeach

        		@foreach ($topicos as $topico)
					@if ($topico->categoria == 'Para Conhecimento')
					<hr>
					<h5 class="card-title">{{$topico->ordenacao}}. {{$topico->titulo}}</h5>

						@foreach ($documentos as $docs)
							@if ($docs->topico_id == $topico->id)
							<ul>
								<li>
									<a href="{{route('user.conselho-fiscal.download', $docs->id) }}" target="_blank">{{$docs->nomedocumento}}</a>
								</li>
							</ul>
							
							@endif
						@endforeach
					
					@endif

				@endforeach

		@foreach ($topicos as $topico)
					@if ($topico->categoria == 'Para Conhecimento')
				       	</ul>
						</div>
						</div>	
				   	@break
				   	@endif
		@endforeach
		
	
	<a class="btn btn-primary" title="Pautas anteriores" href="{{ route('user.conselho-fiscal.pautas-anteriores')}}"><i class="fas fa-arrow-circle-left"></i> Reuniões anteriores</a>

</div>

<div class="mt-5">
</div>
@endsection

@extends ("layout_padrao.layout_padrao")

@section ("titulo", "Humanograma")

@section ("conteudo")

<!--
<div class="container">
	<h3 class="text-center">Humanograma</h3>

	<div class="row">
		<table class="table">
			<thead>
				<tr>
					<th>Id</th>
					<th>Nome</th>
					<th>Cargo</th>
					<th>Conselheiro Fbb</th>
					<th>Secretaria</th>
					<th>Telefone Secretaria</th>
					<th>Telefone</th>
					<th>Celular</th>
					<th>E-mail</th>
					<th>Foto</th>


				</tr>
			</thead>
			<tbody>
				@foreach($registros as $registro)

				<tr>
					<td>{{$registro->id}}</td>
					<td>{{$registro->nome}}</td>
					<td>{{$registro->cargo}}</td>
					<td>{{$registro->conselheiro_fbb}}</td>
					<td>{{$registro->secretaria}}</td>
					<td>{{$registro->telefone_secretaria}}</td>
					<td>{{$registro->telefone}}</td>
					<td>{{$registro->celular}}</td>
					<td>{{$registro->email}}</td>
					<td><img width="200" src="{{asset($registro->foto)}}" alt="{{$registro->nome}}"></td>
					<td>
						<a class="btn btn-primary" href="{{route ('admin.humanograma.editar',$registro->id)}}">Editar</a>
						<a class="btn btn-primary" href="{{route ('admin.humanograma.deletar',$registro->id)}}">Deletar</a>
					</td>
				</tr>

				@endforeach
			</tbody>
		</table>
	</div>

</div>
-->

		<!-- Team -->
<section id="team" class="pb-5">
    <div class="container">
        <h5 class="section-title h1">Humanograma</h5>

        <a class="btn btn-primary" style="margin-bottom: 30px" href="{{route ('admin.humanograma.adicionar')}}">Adicionar Conselheiro</a>
        
        <div class="row">
            <!-- Team member -->
            @foreach($registros as $registro)
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip1" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="{{asset($registro->foto)}}" alt="card image"></p>
                                    <h4 class="card-title">{{$registro->nome}}</h4>
                                    <p class="card-text">{{$registro->cargo}}</p>
                                    <p class="card-text">{{$registro->email}}</p>
                                    <p class="card-text">{{$registro->telefone}}</p>
                                    <p class="card-text">{{$registro->fbbConselheiro->nome}}</p>
                                    
                                        <a class="btn btn-primary" href="{{route ('admin.humanograma.editar',$registro->id)}}" title="Editar" ><i class="fas fa-edit"></i></a>
                                        <a class="btn btn-danger"  href="{{route ('admin.humanograma.deletar',$registro->id)}}" title="Excluir" ><i class="fas fa-trash-alt"></i></a>

                                    
                                    
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">{{$registro->nome}}</h4>
                                    <p class="card-text">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-google"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            @endforeach
            <!-- ./Team member -->
            
            
            

        </div>
    </div>
</section>

<!-- Team -->
	
@endsection

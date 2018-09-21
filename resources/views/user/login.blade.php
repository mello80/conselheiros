<!DOCTYPE html>
<html lang="pt-br">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<!-- Estilo CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('css/estilo.css')}}">
	<!-- Fontawesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<!-- Jquery -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

	<title>Portal dos Conselheiros</title>
</head>
<body>
	
	<div class="imagemfundo" >
		<img src="{{asset('img/home.jpg')}}" class="img-fluid" alt="Responsive image">
	</div>
	<div class="titulo">
		<h1 class="text-center"> Portal dos Conselheiros </h1>
	</div>

	<div class="container login">
		<div class="row">
			<div class="col-md-8 offset-md-2">
				<div class="card">
					<div class="card-header">
						<img src="{{asset('img/Marca-FBB-com-fio-01.png')}}" class="img-fluid rounded mx-auto d-block" alt="Responsive image">
					</div>
					<div class="card-body">
						<form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
							{{ csrf_field() }}

							<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
								<label for="email" class="col-md-4 offset-md-3 control-label">Endereço de e-mail</label>

								<div class="col-md-6 offset-md-3">
									<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

									@if ($errors->has('email'))
									<span class="help-block">
										<strong>{{ $errors->first('email') }}</strong>
									</span>
									@endif
								</div>
							</div>

							<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
								<label for="password" class="col-md-4 offset-md-3 control-label">Senha</label>

								<div class="col-md-6 offset-md-3">
									<input id="password" type="password" class="form-control" name="password" required>

									@if ($errors->has('password'))
									<span class="help-block">
										<strong>{{ $errors->first('password') }}</strong>
									</span>
									@endif
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-6 offset-md-3">
									<div class="checkbox">
										<label>
											<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : ''}}> Lembrar de mim
										</label>
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-6 offset-md-3">
									<button type="submit" class="btn btn-primary">
										Entrar
									</button>

									<a class="btn btn-link" href="{{ url('/password/reset') }}">
										Esqueceu sua senha?
									</a>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>



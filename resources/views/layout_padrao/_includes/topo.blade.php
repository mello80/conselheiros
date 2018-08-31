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

    <title>@yield("titulo")</title>
  </head>
  <body>
  	<header>
  		<nav class="navbar navbar-expand-lg navbar-light">
  			<a class="navbar-brand" href="/">
  				<img src="{{asset('/img/Marca-FBB-com-fio-01.png')}}">
  			</a>
  			
  			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
  				<span class="navbar-toggler-icon"></span>
  			</button>
  			<div class="collapse navbar-collapse" id="navbarNav">
  				<ul class="navbar-nav">
  					<li class="nav-item active">
  						<a class="nav-link" href="/">Home</a>
  					</li>
  					<!--<li class="nav-item active">
  						<a class="nav-link" href="{{route('admin.humanograma')}}">Humanograma</a>
  					</li> -->
  					<li class="nav-item active">
  						<a class="nav-link" href="{{route('admin.conselho-curador')}}">Conselho Curador</a>
  					</li>
            <li class="nav-item active">
              <a class="nav-link" href="{{route('admin.conselho-curador')}}">Conselho Fiscal</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="{{route('admin.conselho-curador')}}">Comitê de Investimentos</a>
            </li>
  					
  				</ul>
          <ul class="nav navbar-nav navbar-right">
            <!-- Authentication Links -->
            @if (!Auth::guest())
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                {{ Auth::user()->name }} <span class="caret"></span>
              </a>

              <ul class="dropdown-menu" role="menu">
                <li>
                  <a href="{{ url('/logout') }}"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  Logout
                </a>

                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
                </form>
              </li>
            </ul>
          </li>
          @endif
        </ul>
  			</div>
  		</nav>
    </header>
    
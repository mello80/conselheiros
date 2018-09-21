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
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  

  <title>@yield("titulo")</title>
</head>
<body>


<header>
 
  <nav class="navbar navbar-expand-lg navbar-light fixed-top">
   <a class="navbar-brand" href="/">
    <img src="{{asset('/img/Marca-FBB-com-fio-01.png')}}">
  </a>
  <button type="button"  class="navbar-toggler collapsed" id="menu-toggle"><span class="navbar-toggler-icon"></span>
  </button>

    
  <!--
  <ul class="navbar-nav">
  @if (!Auth::guest())
   
    <li class="dropdown" style="margin-top: 7px;margin-left: 7px;">
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
-->
  </nav>
</header>

 <!-- 
 <header>
  <div class="container">
  <nav class="navbar navbar-expand-lg navbar-light">
   <a class="navbar-brand" href="/">
    <img src="{{asset('/img/Marca-FBB-com-fio-01.png')}}">
  </a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">

  					<!--<li class="nav-item active">
  						<a class="nav-link" href="{{route('admin.humanograma')}}">Humanograma</a>
  					</li> -->
            <!--
  					<li class="nav-item active">
  						<a class="nav-link" href="{{route('admin.conselho-curador')}}">Conselho Curador</a>
  					</li>
            <li class="nav-item active">
              <a class="nav-link" href="{{route('admin.conselho-fiscal')}}">Conselho Fiscal</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Comitê de Investimentos</a>
            </li> 
          -->

          <!-- Authentication Links
          @if (!Auth::guest())
          <li class="dropdown" style="margin-top: 7px;margin-left: 7px;">
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
 
            -->
            <!--
      </ul>

    </div>
  </nav>
</div>
</header>
-->

<div id="wrapper" class="toggled">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    
                </li>
                @role('conselho-curador|admin')
                <li>
                    <a href="{{route('admin.conselho-curador')}}">Conselho Curador</a>
                </li>
                @endrole
                @role('conselho-fiscal|admin')
                <li>
                    <a href="{{route('admin.conselho-fiscal')}}">Conselho Fiscal</a>
                </li>
                @endrole
                @role('comite-investimentos|admin')
                <li>
                    <a href="#">Comitê de Investimentos</a>
                </li>
                @endrole
                
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

          
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

<div id="page-content-wrapper">
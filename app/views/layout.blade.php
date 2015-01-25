
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Koller Software</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">
    <link href="{{ asset('style.css')}}" rel="stylesheet">


	</head>

  <body>
<nav class="nav navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <span id="logo-tiba"><a class="navbar-brand" href="#">TIBA IT</a></span>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
    <!--IF the user is loged in-->      
      
      @if (Auth::check())

        <ul class = "nav navbar-nav pull-right">
          <li class = "dropdown">
            <a class = "dropdown-toggle" data-toggle ="dropdown" href="#">
              <span class = "icon icon-wh i-profile"></span>Hola {{Auth::user()->name}} <span class = "caret"></span>
            </a>
            <ul class = "dropdown-menu">
              <li><a href="{{route('logout')}}">Salir</a></li>



            </ul>

          </li>
        </ul>


        <!-- Nav tabs -->

        <ul id="myTab" class="nav navbar-nav">
        
        @if(URL::current() == URL::route('home'))
            <li class="active">
        @else
            <li>
        @endif
              <a href="{{route('home')}}">Home</a>
            </li>
        @if(URL::current() == URL::route('admin.reports.create'))  
            <li class="active">
        @else
            <li>
        @endif      
              <a href="{{route('admin.reports.create')}}">Reportes</a>
            </li>
        @if(URL::current() == URL::route('adminMaster'))
<!--         CORREGIR SELECCION DE MENU DESPLEGABLE               -->          
          <li class="active">
        @else
          <li class="dropdown">
        @endif 
            <a class = "dropdown-toggle" data-toggle ="dropdown" href="#">
              <span class = "icon icon-wh i-profile"></span>Admin<span class = "caret"></span>
            </a> 
            <ul class="dropdown-menu">
              <li><a href="{{route('admin.users.index')}}">Usuarios</a></li>
              
            
            
              <li><a href="{{route('admin.reports.index')}}">Reportes</a></li>
              
            </ul>
          </li>

      </ul>

      <!--IF user is not loged in yet, show de login form-->
      @else

      {{Form::open(['route' => 'login', 'method' => 'POST', 'role' => 'form', 'class' => 'navbar-form navbar-right'])}}
            
            @if(Session::has('login_error'))

            <span class="label label-danger">Credenciales no válidas</span>

            @endif

            <div class="form-group">
                 {{Form::text('username',null, ['class' => 'form-control', 'placeholder' => 'Usuario'])}}
            </div>
            <div class="form-group">
                {{Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password'])}}
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
      {{Form::close()}}
      @endif  
    </div><!-- /.navbar-collapse -->

  </div><!-- /.container-fluid -->
</nav>

 @yield('adminMaster')
 @yield('content')
 @yield('reports')
 @yield('users')
 @yield('formUsers')
 @yield('showUsers')
 @yield('formReport')
 @yield('showReports')
 @yield('showReport')


<div class="container">
    

    <footer>
        <p id="prueba">&copy; TIBA IT 2014</p>
    </footer>
</div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js')}}"></script>
    {{ HTML::script('assets/js/admin.js') }}
  
<script>
  $(function () {
    $('#myTab a:last').tab('show')
  });

 

</script>
 
    
  </body>
</html>


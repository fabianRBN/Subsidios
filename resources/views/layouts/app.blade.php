<html>
    <head>
        <title>App Name - @yield('title')</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
     <meta charset="utf-8">
  <title>Reveal Bootstrap Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="../assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="../assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../assets/lib/animate/animate.min.css" rel="stylesheet">
  <link href="../assets/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="../assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../assets/lib/magnific-popup/magnific-popup.css" rel="stylesheet">
  <link href="../assets/lib/ionicons/css/ionicons.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="../assets/lib/style.css" rel="stylesheet">
    
    </head>
    <body id="body">
        @section('sidebar')
  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="#body" class="scrollto">Sub<span>si</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class=""><a href="#">Inicio</a></li>
          <li class="menu-has-children"><a href="#">Clientes</a>
            <ul>
              <li><a href="{{ action('EstadoClienteController@index')}}">Catálogo de Estados </a></li>
              <li><a href="{{ action('ClientesController@index')}}">Clientes</a></li>
            </ul>
          </li>       
          <li class="menu-has-children"><a href="#">Vehículos</a>
            <ul>
              <li><a href="{{ action('VehiculoController@index')}}">Catálogo de Estados </a></li>
              <li><a href="{{action('VehiculoController@indexTipo')}}">Tipos</a></li>
              <li><a href="{{action('VehiculoController@indexVehiculo')}}">Vehículos</a></li>
            </ul>
          </li>
          <li><a href="#contact">Sucursal</a></li>
          <li><a href="#contact">Empleado</a></li>
          <li><a href="#contact">Transacciones</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->
<br>
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Administración</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	  <!-- Font Awesome -->
	  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
	  <!-- Bootstrap core CSS -->
	  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('admin/css/AdminLTE.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/dashboard.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.0/css/mdb.min.css" rel="stylesheet">
  </head>

  <body class="sidebar-mini">
    @include('components.alerts')
    <div class="wrapper">
      <header class="main-header">
        <!-- Logo -->
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="nav z-depth-1" role="navigation">
          <a href="index2.html" class="logo grey-text">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><i class="fas fa-bolt"></i></span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b class="grey-text">Devel</b><b class="cyan-text">UP</b></span>
          </a>
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle grey-text" data-toggle="offcanvas" role="button">
            <span class="sr-only">Navegación</span>
          </a>
        </nav>
      </header>

      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu black-text">
            <li class="header">
            	<span class="side-title">MENÚ</span>
            </li>
            <li class="treeview">
              <a href="#" class="black-text active">
                <i class="far fa-calendar-check cyan-text "></i>
                <span class="side-subtitle"> Gestión servicios</span>
                <i class="fas fa-angle-down pull-right grey-text"></i> 
              </a>
              <ul class="treeview-menu grey lighten-5">
                <li><a href="{{ url('/dashboard/agenda') }}" class="side-link"><i class="far fa-calendar icon"></i> Gestión de agenda</a></li>
                <li><a href="{{ url('#') }}" class="side-link"><i class="fas fa-tasks icon"></i> Gestión de OT</a></li>
                <li><a href="{{ url('#') }}" class="side-link"><i class="fas fa-history icon"></i> Historial de atención</a></li>
                <li><a href="{{ url('#') }}" class="side-link"><i class="fas fa-user"></i> Gestión de clientes</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#" class="black-text active">
                <i class="fas fa-home cyan-text"></i>
                <span class="side-subtitle"> Control de bodega</span>
                <i class="fas fa-angle-down pull-right grey-text"></i> 
              </a>
              <ul class="treeview-menu grey lighten-5">
                <li><a href="" class="side-link"><i class="fas fa-plus-circle"></i> Nuevas solicitudes</a></li>
                <li><a href="" class="side-link"><i class="fas fa-calendar-day"></i> Servicios agendados</a></li>
                <li><a href="" class="side-link"><i class="fa fa-circle-o"></i> Gestión de OT</a></li>
                <li><a href="" class="side-link"><i class="fa fa-circle-o"></i> Reagendar citas</a></li>
                <li><a href="" class="side-link"><i class="fa fa-circle-o"></i> Estadisticas</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#" class="black-text active">
                <i class="fa fa-laptop cyan-text"></i>
                <span class="side-subtitle">Personal</span>
                <i class="fas fa-angle-down pull-right grey-text"></i> 
              </a>
              <ul class="treeview-menu grey lighten-5">
                <li><a href="" class="side-link"><i class="fas fa-plus-circle"></i> Nuevas solicitudes</a></li>
                <li><a href="" class="side-link"><i class="fas fa-calendar-day"></i> Servicios agendados</a></li>
                <li><a href="" class="side-link"><i class="fa fa-circle-o"></i> Gestión de OT</a></li>
                <li><a href="" class="side-link"><i class="fa fa-circle-o"></i> Reagendar citas</a></li>
                <li><a href="" class="side-link"><i class="fa fa-circle-o"></i> Estadisticas</a></li>
              </ul>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!--Contenido-->
      <div class="main">
        <div class="content-wrapper grey lighten-3">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
              <h1 class="content-title mt-5 ml-3">@yield('titulo')</h1>
            </div>
          </div>
          @yield('contenido')
        </div>
      </div>  
      </div>
      <!--Fin-Contenido-->

    </div>
    <!-- JQuery -->
    
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.0/js/mdb.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.0/js/mdb.min.js"></script>
              
    <!-- google maps -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyClfElSCm1oarkG1XhX1Ac8vJ9tIFaYeVs"></script>
    <!-- google maps -->
    <script type="text/javascript" src="{{asset('js/scripts.js')}}" ></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="{{asset('admin/js/app.min.js')}}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
	  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.0/js/mdb.min.js"></script>
    <script>
      $('#message').modal('show');
    </script>
  </body>
</html>

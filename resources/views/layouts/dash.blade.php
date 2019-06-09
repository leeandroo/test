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
	  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('admin/css/AdminLTE.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/dashboard.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.0/css/mdb.min.css" rel="stylesheet">
    
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">

        <!-- Logo -->
        <a href="index2.html" class="logo grey lighten-4 grey-text">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><i class="fas fa-bolt"></i></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b class="grey-text">Devel</b><b class="cyan-text">UP</b></span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="nav navbar-static-top z-depth-1" role="navigation">
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
                <i class="fa fa-laptop cyan-text"></i>
                <span class="side-subtitle">CONTROL AGENDA</span>
                <i class="fas fa-angle-down pull-right grey-text"></i> 
              </a>
              <ul class="treeview-menu grey lighten-5">
                <li><a href="{{url('admin/prenda/show')}}" class="side-link"><i class="fa fa-circle-o"></i> Nuevas solicitudes</a></li>
                <li><a href="almacen/categoria" class="side-link"><i class="fa fa-circle-o"></i> Servicios agendados</a></li>
                <li><a href="almacen/categoria" class="side-link"><i class="fa fa-circle-o"></i> Gestión de OT</a></li>
                <li><a href="almacen/categoria" class="side-link"><i class="fa fa-circle-o"></i> Reagendar citas</a></li>
                <li><a href="almacen/categoria" class="side-link"><i class="fa fa-circle-o"></i> Estadisticas</a></li>
              </ul>
            </li>


          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>





       <!--Contenido-->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper grey lighten-3 ">

        <!-- Main content -->
        <section class="content">

          <div class="row">
            <div class="col-md-12">
                <div class="box-body">
                  	<div class="row">
	                  	<div class="col-md-12">
		                       @yield('contenido')
                  		</div>
                  	</div><!-- /.row -->
                </div><!-- /.box-body -->
            </div><!-- /.col -->
          </div><!-- /.row -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <!--Fin-Contenido-->
    <!-- jQuery 2.1.4 -->
    <script src="{{asset('admin/js/jQuery-2.1.4.min.js')}}"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('admin/js/app.min.js')}}"></script>

  </body>
</html>

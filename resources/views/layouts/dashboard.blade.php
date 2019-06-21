<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
	<!-- Bootstrap core CSS -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
	<!-- Material Design Bootstrap -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.0/css/mdb.min.css" rel="stylesheet">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
	<link rel="stylesheet" type="text/css" href="{{asset('css/dashboard.css')}}">
</head>
<body class="grey lighten-3">
    @include('components.alerts')
	<!-- HEADER START -->
	<header>
		<nav class="navbar navbar-expand-lg white">
			<div class="container">
				<!-- Navbar brand -->
				<a class="navbar-brand grey-text" href="#fondo"><i class="fas fa-bolt cyan-text"></i> DevelUP</a>
				<!-- Collapse button -->
				<button class="navbar-toggler ml-2 mt-2 mr-0" type="button" data-toggle="collapse" data-target="#basicExampleNav"
				aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon fas fa-bars cyan-text"></span>
				</button>
				<!-- Collapsible content -->
				<div class="collapse navbar-collapse" id="basicExampleNav">
					<ul class="navbar-nav mr-auto"></ul>
					@if(Auth::user())
						<ul class="navbar-nav">
							<li class="nav-item">
								@yield('enlaces')
							</li>
						</ul>
					@endif
				</div>
			<!-- Collapsible content -->	
			</div>
		</nav>
		<!--/.Navbar-->
	</header>	
	<!-- HEADER END -->	
    <div class="main">
		<div class="container">
			@yield('contenido')
		</div>
	</div>
	
    <!-- JQuery -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
	<!-- Bootstrap tooltips -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<!-- MDB core JavaScript -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.0/js/mdb.min.js"></script>
	

	<script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.js"></script>
	<script>

		$('#message').modal('show')
		$.datepicker.regional['es'] = {
			closeText: 'Cerrar',
			prevText: '< Ant',
			nextText: 'Sig >',
			currentText: 'Hoy',
			monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
			monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
			dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
			dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
			dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
			weekHeader: 'Sm',
			dateFormat: 'dd/mm/yy',
			firstDay: 1,
			isRTL: false,
			showMonthAfterYear: false,
			yearSuffix: ''
		};
 		$.datepicker.setDefaults($.datepicker.regional['es']);
		$(function() {
			$("#datepicker").datepicker({ minDate: 0 });
		});

		$('.timepicker').timepicker({
			timeFormat: 'h:mm p',
			defaultTime: 'now +30',
			dynamic: true,
			dropdown: true,
			scrollbar: true
		});
	</script>
</body>
</html>
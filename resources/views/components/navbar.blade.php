@extends('layouts.main')
    <!--Navbar-->
		<nav class="navbar navbar-expand-lg navbar-dark scrolling-navbar fixed-top">
			<div class="container">
				<!-- Navbar brand -->
				<a class="navbar-brand" href="#fondo"><i class="fas fa-bolt"></i></a>
				<!-- Collapse button -->
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
				aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				<!-- Collapsible content -->
				<div class="collapse navbar-collapse" id="basicExampleNav">
				<!-- Links -->
				<ul class="navbar-nav mr-auto smooth-scroll">
					<!-- <li class="nav-item active">
						<a class="nav-link" href="#" id="relawayBLK">INICIO
						<span class="sr-only">(current)</span>
						</a>
					</li> -->
					<li class="nav-item">
						<a class="nav-link" href="#caracteristicas">NOSOTROS</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#Servicios">SERVICIOS</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#contacto">CONTACTO</a>
					</li>
				</ul>
				<!-- Links -->
				<form class="form-inline">
					<div class="md-form my-0">
						<button type="button" class="btn" id="btn-sign-up">Registrarse</button>
					</div>
					<div class="md-form my-0">
						<button type="button" class="btn" id="btn-sign-in">Iniciar sesión</button>
					</div>
				</form>
				</div>
			<!-- Collapsible content -->	
			</div>
		</nav>
	<!--/.Navbar-->
	<!--MASK-->
		<div id="fondo" class="view img-fluid" alt="Responsive image">
			<div class="container-fluid full-bg-img d-flex align-items-center justify-content-center mask rgba-black-strong" >
				<div class="row d-flex justify-content-center col-md-11 col-10">
					<div class="col-md-7 text-center">
					<!--cabeza-->
					<h2 class="display-4 white-text mb-3" id="relawayBLK"><i class="fas fa-bolt"></i> SERMALET</h2>
					<!--cabeza-->
					<!--raya-->
					<hr class="hr-light">
					<!--raya-->
					<!--descripcion-->
					<h4 class="white-text my-4" id="relawayMDM">Lorem ipsum dolor sit amet consectetur adipiscing elit per sociosqu, elementum urna aliquet primis litor.</h4>
					<!--descripcion-->
				</div>
			</div>
		</div>
    <!--MASK-->
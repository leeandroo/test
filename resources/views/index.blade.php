<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Sermalet</title>

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
	<!-- Bootstrap core CSS -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
	<!-- Material Design Bootstrap -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.0/css/mdb.min.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="{{asset('css/fuentes.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/estilos.css')}}">
</head>
<body>
	<!--Main Navegation-->
	<header>

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
		
	</header>
	<!--Main Navegation-->
	<section class="container align-items-center mt-5">
			<div class="row">
				<div class="col-lg-4 col-md-12 mb-lg-0 mb-4">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title ">Contactenos</h5>
							<P class="card-text ">Comuniquese con nosotros con los siguientes medios: </P>
							<ul class="list-group list-group-flush ">
								<li class="list-group-item">
									<div class="md-v-line"><i class="fab fab fa-whatsapp mr-2 " aria-hidden="true"></i>+569 94568561<div>
								</li>
								<li class="list-group-item">
									<div class="md-v-line"><i class="fas fa-mobile-alt mr-2 " aria-hidden="true"></i>+552 123456</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-12 mb-lg-0 mb-4">
					<div class="card unique-color">
						<div class="card-body">
							<h5 class="card-title white-text">Horarios de atención</h5>
							<p class="card-text white-text">Lo atenderemos en los siguientes horarios:</p>
							<p class="card-text white-text"><i class="far fa-clock"></i> Lun-Vie, 08:30-00:00 hrs</p>
							<p class="card-text white-text"><i class="far fa-clock"></i> Sab-Dom, 10:30-21:00 hrs</p>
						</div>
					</div>
				</div>
					
				<div class="col-lg-4 col-md-12 mb-lg-0 mb-4">
					<div class="card unique-color-dark">
						<div class="card-body">
							<h5 class="card-title white-text">Redes sociales</h5>
							<p class="card-text white-text">
								Siganos en nuestras redes 
							</p>
							<p class="card-text">
								<i class="fab fa-facebook fa-lg white-text mr-md-3 mr-4"> </i>
								<i class="fab fa-twitter fa-lg white-text mr-md-3 mr-4"> </i>
								<i class="fab fa-google-plus fa-lg white-text mr-md-3 mr-4"> </i>
								<i class="fab fa-linkedin-in fa-lg white-text mr-md-3 mr-4"> </i>
								<i class="fab fa-instagram  fa-lg white-text mr-md-3 mr-4"> </i>
								<i class="fab fa-whatsapp fa-lg white-text mr-md-3 mr-4>"> </i>
							</p>
						</div>
					</div>
				</div>		
					
			</div>
	</section>

	<!--Main Layout-->
	<main class="mt-5">
		<div class="container align-items-center">
			<!--Sección caracteristicas-->
			<section id="caracteristicas" class="container text-center">
					<!-- Section heading -->
					<h2 class="mb-4" id="relawayEXB">¿Qué nos distingue del resto?</h2>
					<!-- Section description -->
					<p id="relawayMDM" class="grey-text w-responsive mx-auto mb-5">Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
					officia deserunt mollit est laborum.</p>
					<!-- Grid row -->
					<div class="row text-center wow fadeInUp">
						<div class="col-lg-4 col-md-12 mb-lg-0 mb-4">
							<div class="card card-cascade narrower">
								<div class="view view-cascade">
    								<div class="view">
										<img  class="card-img-top" src="../img/card.jpg" alt="Card image cap">
      									<div class="mask flex-center">
											<div class="text-center">
												  <p class="white-text"><i class="fas fa-business-time fa-4x"></i></p>
											</div>
										</div>
								   </div>
								  <div class="card-body card-body-cascade">
									  <h4 class="font-weight-bold card-title">Disponibilidad</h4>
									  <h5 class="pb-2 pt-1">Siempre atentos a sus solicitudes</h5>
									  <p class="card-text">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi.</p>
								  </div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-12 mb-lg-0 mb-4">
								<div class="card card-cascade narrower">
									<div class="view view-cascade">
										<div class="view">
											<img  class="card-img-top" src="../img/card.jpg" alt="Card image cap">
											  <div class="mask flex-center">
												<div class="text-center">
													  <p class="white-text"><i class="fas fa-award fa-4x"></i></p>
												</div>
											</div>
									   </div>
									  <div class="card-body card-body-cascade">
										  <h4 class="font-weight-bold card-title">Calidad</h4>
										  <h5 class="pb-2 pt-1">Siempre atentos a sus solicitudes</h5>
										  <p class="card-text">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi.</p>
									  </div>
									</div>
								</div>
						</div>
						<div class="col-lg-4 col-md-12 mb-lg-0 mb-4">
							<div class="card card-cascade narrower">
								<div class="view view-cascade">
    								<div class="view">
										<img  class="card-img-top" src="../img/card.jpg" alt="Card image cap">
      									<div class="mask flex-center">
											<div class="text-center">
												  <p class="white-text"><i class="fas fa-search fa-4x"></i></p>
											</div>
										</div>
								   </div>
								  <div class="card-body card-body-cascade">
									  <h4 class="font-weight-bold card-title">Transparencia</h4>
									  <h5 class="pb-2 pt-1">Siempre atentos a sus solicitudes</h5>
									  <p class="card-text">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi.</p>
								  </div>
								</div>
							</div>
						</div>
					</div>
			</section>
			<!--Sección caracteristicas-->			

			<hr class="my-5">

			<!--Sección Servicios-->
			<section id="Servicios" class="my-5 container">

				<!-- Section heading -->
				<h2 class="mb-4 text-center my-5" id="relawayEXB">¿Qué Ofrecemos?</h2>
		
				<!-- Grid row -->
				<div class="row wow fadeInUp">
			
				<!-- Grid column -->
				<div class="col-lg-5 mb-lg-0 mb-5 align-items-center">
					<!--Image-->
					<img src="https://1stop4all.nl/wp-content/uploads/2016/09/shutterstock_155918309.jpg" alt="Sample project image" class="img-fluid rounded z-depth-1">
				</div>
				<!-- Grid column -->
			
				<!-- Grid column -->
				<div class="col-lg-7">
			
					<!-- Grid row -->
					<div class="row mb-3">
					<div class="col-md-1 col-2">
						
						<i class="fas fa-industry fa-2x cyan-text"></i>
					</div>
					<div class="col-md-11 col-10">
						<h5 class="font-weight-bold mb-3">Electricidad industrial</h5>
						<hr class="info-color mb-4 mt-0 d-inline-block mx-auto" style="width: 60px">
						<p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing. Reprehenderit maiores nam,
						aperiam minima elit assumenda voluptate velit.</p>
					</div>
					</div>
					<!-- Grid row -->
			
					<!-- Grid row -->
					<div class="row mb-3">
					<div class="col-md-1 col-2">

						<i class="fas fa-store fa-2x red-text"></i>
					</div>
					<div class="col-md-11 col-10">
						<h5 class="font-weight-bold mb-3">Electricidad Comercial</h5>
						<hr class="info-color mb-4 mt-0 d-inline-block mx-auto" style="width: 60px">
						<p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing. Reprehenderit maiores nam,
						aperiam minima elit assumenda voluptate velit.</p>
					</div>
					</div>
					<!-- Grid row -->
			
					<!-- Grid row -->
					<div class="row">
					<div class="col-md-1 col-2">
						<i class="fas fa-home fa-2x deep-purple-text"></i>
					</div>
					<div class="col-md-11 col-10">
						<h5 class="font-weight-bold mb-3">Electricidad Residencial</h5>
						<hr class="info-color mb-4 mt-0 d-inline-block mx-auto" style="width: 60px">
						<p class="grey-text mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing. Reprehenderit maiores
						nam, aperiam minima elit assumenda voluptate velit.</p>
					</div>
					</div>
					<!-- Grid row -->
			
				</div>
				<!-- Grid column -->
			
				</div>
				<!-- Grid row -->				

			</section>
			<!--Sección Servicios-->			

			<hr class="my-5">


			<!--Sección contacto-->
			<section id="contacto" class="container">

				<!-- heading -->
					<h2 class="text-center" id="relawayEXB">Contactanos</h2>
				<!-- heading -->

				<!-- grid row -->
					<div class="container">

			<!-- Section: fORMULARIO -->
				<section class="card-formulario my-5 ">

				<!-- contenido -->
				<div class="card wow fadeInRight">
				
					<!-- Grid row -->
					<div class="row">

					<!-- Grid column imagen -->
					<div class="col-lg-5">
				
							<div class="card-body contact text-center h-100 white-text view" id="fondoFormulario">						<br>
								<br><br>
								<div class="mask flex-center rgba-black-light">
									<h3 id="relawayEXB" class="font-weight-bold text-center my- pb-2">
										<strong>AGENDA TU SERVICIO</strong>
									</h3>
								</div>
								<br><br>					
							</div>
					
					</div>
					<!-- Grid column imagen-->
				
					<!-- Grid column -->
					<div class="col-lg-7">
				
						<div class="card-body form">

				
						<!--Card content-->
						<div class="card-body px-lg-5 pt-0">
															
							<!-- Form -->
								<form class="align-items-center" style="color: #757575;" action="{{ url('agenda/cliente') }}" method="POST">

										<div>
											<h6 id="relawayEXB" class="mt-4 my-0"><i class="fa fa-user prefix"></i> Tipo de Cliente</h6>
										</div>

										<div class="form-row my-3" id="robotoLGHT">
											<div class="col">
												<div class="custom-control custom-radio custom-control-inline">
													<input type="radio" class="custom-control-input" id="empresa" name="radio1">
													<label class="custom-control-label" for="empresa">Empresa</label>
													</div>	
											</div>		
											<div class="col">
												<!-- Default inline 2-->
												<div class="custom-control custom-radio custom-control-inline">
													<input type="radio" class="custom-control-input" id="personaNatural" name="radio1">
													<label class="custom-control-label" for="personaNatural">Persona natural</label>
													</div>
											</div>											  
										</div>

										<div>
											<h6 id="relawayEXB" class="mt-4 my-0"><i class="fa fa-user prefix"></i> Informacion Cliente</h6>
										</div>

										<div class="form-row " style="height: 57px;">
											<div class="col">
												<!-- First name -->
												<div class="md-form md-outline ">
														<input id="form-sm" class="form-control " type="text">
														<label for="form-sm">Nombre</label>
													</div>
											</div>
											<div class="	col">
												<!-- Last name -->
												<div class="md-form md-outline ">
														<input id="form-sm" class="form-control " type="text">
														<label for="form-sm">Rut</label>
													</div>
											</div>
										</div>

											<div class="form-row" style="height: 57px;">
												<div class="col" >
													<!-- First name -->
													<div class="md-form md-outline">
															<input id="form-sm" class="form-control" type="text">
															<label for="form-sm">Whatsapp</label>
														</div>
												</div>
												<div class="col">
													<!-- Last name -->
													<div class="md-form md-outline">
															<input id="form-sm" class="form-control validate" type="email">
															<label for="form-sm">E-mail</label>
														</div>
												</div>
											</div>

											<div class="form-row" style="height: 57px;">
												<div class="col" >
													<!-- First name -->
													<div class="md-form md-outline ">
															<input id="form-sm" class="form-control" type="text">
															<label for="form-sm">Dirección</label>
														</div>
												</div>
											</div>

											<div>
												<h6 id="relawayEXB" class="mt-4 my-0"><i class="fas fa-toolbox prefix"></i> Detalle de servicio</h6>
											</div>

											<div class="form-row" style="height: 57px;">
													<div class="col" >
														<!-- First name -->
														<select id="robotoLGHT" class="md-form custom-select">
																<option selected disabled>Tipo servicio</option>
																<optgroup label="industrial">
																	<option value="1">Option 1</option>
																	<option value="2">Option 2</option>
																</optgroup>
																<optgroup label="Comercial">
																	<option value="3">Option 3</option>
																	<option value="4">Option 4</option>
																</optgroup>
																<optgroup label="Residencial">
																		<option value="3">Option 3</option>
																		<option value="4">Option 4</option>
																	</optgroup>
															</select>
													</div>
													<div class="col">
														<div class="md-form md-outline" id="robotoLGHT">
															<input type="date" id="fecha" class="form-control" required>
															<label for="inputMDEx">Fecha de atencion</label>
															</div>
													</div>
											</div>

													<div class="form-row">
															<div class="col" >
																<!-- First name -->
																<div class="md-form md-outline">
																		<textarea id="form75" class="md-textarea form-control" rows="3"></textarea>
																		<label for="form75">Descripción del problema o servicio</label>
																	</div>
															</div>
														</div>
														
														<div class="custom-control custom-checkbox mb-4 text-center 	 	">
																<input type="checkbox" class="custom-control-input" id="defaultContactFormCopy">
																<label class="custom-control-label grey-text" for="defaultContactFormCopy" id="relawayLight">¿Desea que nos comuniquemos a travé	s de Whatsapp?</label>
															</div>
							
										<!-- Sign up button -->
										<div class="md-form my-0 text-center" id="btnformulario">
												<button type="button" class="btn" id="relawaySB">Enviar <i class="fa fa-paper-plane ml-2"></i></button>
											</div>
							
								</form>
							<!-- Form -->

						</div>
				
						</div>
				
					</div>
					<!-- Grid column -->
				
					</div>
					<!-- Grid row -->
				
				</div>
				<!-- contenido -->
				<!-- grid row -->
				
			</section>
			<!--Sección contacto-->			
		</div>
	
	</main>
	<!--Main Layout-->


	<!--Footer-->
<!-- Footer -->
	 <footer class="page-footer font-small blue"><!--darken-3 -->

		<!-- Footer Elements -->
		<div class="container">
	  
		  <!-- Grid row-->
		  <div class="row">
	  
			<!-- Grid column -->
			<div class="col-md-12 py-5">
			  <div class="mb-5 flex-center">
	  
				<!-- Facebook -->
				<a class="fb-ic">
				  <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
				</a>
				<!-- Twitter -->
				<a class="tw-ic">
				  <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
				</a>
				<!-- Google +-->
				<a class="gplus-ic">
				  <i class="fab fa-google-plus-g fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
				</a>
				<!--Linkedin -->
				<a class="li-ic">
				  <i class="fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
				</a>
				<!--Instagram-->
				<a class="ins-ic">
				  <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
				</a>
				<!--Pinterest-->
				<a class="pin-ic">
				  <i class="fab fa-pinterest fa-lg white-text fa-2x"> </i>
				</a>
			  </div>
			</div>
			<!-- Grid column -->
	  
		  </div>
		  <!-- Grid row-->
	  
		</div>
		<!-- Footer Elements -->
	  
		<!-- Copyright -->
		<div class="footer-copyright text-center py-3">© 2018 Copyright:
		  <a href="#"> SERMALET.com</a>
		</div>
		<!-- Copyright -->
	  
	  </footer>
	  <!-- Footer -->
	<!--Footer-->


	<!-- JQuery -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<!-- Bootstrap tooltips -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<!-- MDB core JavaScript -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.0/js/mdb.min.js"></script>

	<!-- google maps -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyClfElSCm1oarkG1XhX1Ac8vJ9tIFaYeVs"></script>
	<!-- google maps -->
	<script type="text/javascript" src="{{asset('js/scripts.js')}}" ></script>
</body>
</html>
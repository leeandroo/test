@extends('layouts.main')
@section('agenda-form')
	<!-- FORM START -->
	<form class="align-items-center" style="color: #757575;" action="{{ url('agenda/cliente') }}" method="POST">
        <div class="form-group">
			<div>
	        	<h6 class="form-title mt-3">Tipo de Cliente</h6>
        	</div>						
        	<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" class="custom-control-input" id="empresa" name="radio1">
						<label class="custom-control-label box-label" for="empresa">Empresa</label>
					</div>	
				</div>		
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" class="custom-control-input" id="personaNatural" name="radio1">
						<label class="custom-control-label box-label" for="personaNatural">Persona natural</label>
					</div>
				</div>											  
			</div>
		</div>

        <div class="form-group">
			<div>
				<h6 class="form-title mt-3">Informacion Cliente</h6>
			</div>

			<div class="form-row">
				<div class="col-lg-6 col-6">
					<label for="nombre" class="mt-1 box-label">Nombre</label>
					<input id="nombre" class="form-control " type="text">
				</div>
				<div class="col-lg-6 col-6">
					<label for="apellido" class="mt-1 box-label">Apellido</label>
					<input id="apellido" class="form-control " type="text">
				</div>
				<div class="col-lg-6 col-6" >
					<label for="rut" class="mt-1 box-label">RUT</label>
					<input id="rut" class="form-control " type="text">
				</div>
				<div class="col-lg-6 col-6">
					<label for="telefono" class="mt-1 box-label">Teléfono</label>
					<input id="telefono" class="form-control " type="text">
				</div>
				<div class="col-lg-6 col-sm-12">
					<label for="direccion" class="mt-1 box-label">Dirección</label>
					<input id="direccion" class="form-control " type="text">
				</div>
				<div class="col-lg-6 col-sm-12" >
					<label for="correo" class="mt-1 box-label">Correo</label>
					<input id="correo" class="form-control " type="text">
				</div>
			</div>
		</div>

        <div class="form-group">
			<div>
				<h6 class="form-title mt-3"> Detalle de servicio</h6>
			</div>

			<div class="form-row">
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" >
					<label for="nombre" class="mt-1 box-label">Tipo de servicio</label>
					<select class="custom-select" name="servicio">
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
				<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
					<label for="fecha" class="mt-1 box-label">Fecha</label>
					<input id="fecha" class="form-control " type="date">
				</div>				
			</div>
		</div>

        <div class="custom-control custom-checkbox my-4 text-center">
			<input type="checkbox" class="custom-control-input" id="defaultContactFormCopy">
			<label class="custom-control-label grey-text w-responsive" for="defaultContactFormCopy" id="relawayLight">¿Desea que nos comuniquemos a través de Whatsapp?</label>
        </div>

        <div class="md-form my-0 text-center" id="btnformulario">
			<button type="submit" class="btn" id="relawaySB">Enviar <i class="fa fa-paper-plane ml-2"></i></button>
		</div>
	</form>
    <!-- FORM END -->
@endsection 
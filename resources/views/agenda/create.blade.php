@extends('layouts.main')
@section('agenda-form')
	<!-- FORM START -->
	<form class="align-items-center" style="color: #757575;" action="{{ url('agenda/cliente') }}" method="POST">
        <div>
	        <h6 id="relawayEXB" class="mt-4 my-0 form-title">Tipo de Cliente</h6>
        </div>
										
        <div class="form-row my-3" id="robotoLGHT">
			<div class="col">
				<div class="custom-control custom-radio custom-control-inline">
					<input type="radio" class="custom-control-input" id="empresa" name="radio1">
					<label class="custom-control-label" for="empresa">Empresa</label>
				</div>	
			</div>		
			<div class="col">
				<div class="custom-control custom-radio custom-control-inline">
					<input type="radio" class="custom-control-input" id="personaNatural" name="radio1">
					<label class="custom-control-label" for="personaNatural">Persona natural</label>
				</div>
			</div>											  
		</div>

        <div>
			<h6 id="relawayEXB" class="mt-4 my-0 form-title">Informacion Cliente</h6>
		</div>

		<div class="form-row " style="height: 57px;">
			<div class="col">
				<div class="md-form md-outline ">
					<input id="form-sm" class="form-control " type="text">
					<label for="form-sm">Nombre</label>
				</div>
			</div>
			<div class="col">
				<div class="md-form md-outline ">
					<input id="form-sm" class="form-control " type="text">
					<label for="form-sm">Rut</label>
				</div>
			</div>
		</div>

		<div class="form-row" style="height: 57px;">
			<div class="col" >
				<div class="md-form md-outline">
					<input id="form-sm" class="form-control" type="text">
					<label for="form-sm">Whatsapp</label>
				</div>
			</div>
			<div class="col">
				<div class="md-form md-outline">
					<input id="form-sm" class="form-control validate" type="email">
					<label for="form-sm">E-mail</label>
				</div>
			</div>
		</div>			

		<div class="form-row" style="height: 57px;">
			<div class="col" >
				<div class="md-form md-outline ">
					<input id="form-sm" class="form-control" type="text">
					<label for="form-sm">Dirección</label>
				</div>
			</div>
		</div>

        <div>
			<h6 id="relawayEXB" class="mt-4 my-0 form-title"> Detalle de servicio</h6>
		</div>

		<div class="form-row" style="height: 57px;">
            <div class="col" >
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
		</div>
		<div class="form-row" style="height: 57px;">
			<div class="col">
				<div class="md-form md-outline" id="robotoLGHT">
					<input type="text" id="fecha" class="form-control" required>
					<label for="dia">Día</label>
				</div>
			</div>
			<div class="col" >
				<select id="robotoLGHT" class="md-form custom-select">
					<option value="">Enero</option>
					<option value="">Febrero</option>
					<option value="">Marzo</option>
					<option value="">Abril</option>
					<option value="">Mayo</option>
					<option value="">Junio</option>
					<option value="">Julio</option>
					<option value="">Agosto</option>
					<option value="">Septiembre</option>
					<option value="">Octubre</option>
					<option value="">Noviembre</option>
					<option value="">Diciembre</option>
				</select>
			</div>
		</div>

        <div class="custom-control custom-checkbox my-4 text-center">
			<input type="checkbox" class="custom-control-input" id="defaultContactFormCopy">
			<label class="custom-control-label grey-text" for="defaultContactFormCopy" id="relawayLight">¿Desea que nos comuniquemos a través de Whatsapp?</label>
        </div>

        <div class="md-form my-0 text-center" id="btnformulario">
			<button type="submit" class="btn" id="relawaySB">Enviar <i class="fa fa-paper-plane ml-2"></i></button>
		</div>
	</form>
    <!-- FORM END -->
@endsection 
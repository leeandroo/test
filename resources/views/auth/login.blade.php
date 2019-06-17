@extends('layouts.main')
@section('titulo', 'Iniciar sesión')
@section('contenido')
    <div class="view" id="fondo">
        <div class="mask rgba-black-light d-flex justify-content-center align-items-center">
            <div class="container">
                <div class="row" id="centrar">
                    <div class="col-lg-8" id="centrar">
                        <div class="card">
                            <div class="row">
                                <div class="col-lg-7" id="centrar">
                                    <div class="container-fluid">
                                        <div class="card-body ml-3 mr-0">
                                            <form class="align-items-center" style="color: #757575;">
                                                <div class="form-row mb-3 mt-3 text-center">
                                                    <div class="col-lg-12">
                                                        <h2 class="font-weight-bold black-text"><i class="fas fa-bolt animated tada infinite "></i> BIENVENIDO</h2>	
                                                        <p class="text-center grey-text my-0" style="font-size: 15px;">
                                                            Ingresa tus credenciales para iniciar sesión.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="form-row mt-3 mb-4">
                                                    <div class="col-lg-12 mb-2" >
                                                        <label for="tipo_usuario">Tipo de usuario</label>
                                                        <select class="custom-select" name="tipo_usuario">
                                                            <option value="Cliente">Cliente</option>
                                                            <option value="Trabajador">Trabajador</option>
                                                            <option value="Administrador">Administrador</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-12" >
                                                        <label for="email">Ingresa tu correo</label>
                                                        <input name="email" class="form-control validate" type="email">
                                                    </div>
                                                    <div class="col-lg-12 mt-2" >
                                                        <label for="password">Ingresa tu password</label>
                                                        <input name="password" class="form-control validate" type="password">
                                                    </div>
                                                </div>		
                                                <!-- Sign up button -->
                                                <div class="md-form my-0 text-center" id="btnLogin">
                                                    <button type="button" class="btn">Iniciar sesión</button>
                                                </div>
											</form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5" id="centrar">
                                    <div class="card-body contact h-100 white-text" style="background-color: black;">
                                        <div class="container text-left">
                                            <h3 class="my-4 pb-2">¿NUEVO POR AQUÍ?</h3>
                                            <p  style="font-size: 15px;">
                                                Registra tu cuenta de usuario, para unirte a nuestra red de clientes, con ello podras: 
                                            </p>
                                            <li><i class="fas fa-check white-text"></i> Solicitar los servicios que necesites al momento</li>
                                            <li><i class="fas fa-check white-text"></i> Controlar cada servicio que te hemos prestado</li>
                                            <!-- Sign up button -->
                                            <div class="md-form" id="btnRegistrar">
                                                <a  class="btn" href="{{url('/')}}">Volver al inicio</a>
                                            </div>														
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
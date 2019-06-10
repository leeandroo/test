@extends('layouts.dash')
@section('titulo', 'Gestión de agenda')
@section('contenido')
<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
        <div class="card mt-4 ml-2 mr-2">
            <div class="card-body">
                <div class="container-fluid">
                    <h1 class="sub-title">Nuevas solicitudes</h1>
                    <table class="table table-borderless table-responsive-sm ">
                        <thead>
                            <tr>
                                <th class="table-title">Solicitante</th>
                                <th class="table-title">Servicio</th>
                                <th class="table-title">Fecha</th>
                                <th class="table-title">Opciones</th>
                            </tr>
                        </thead>
                        <tbody >
                            @foreach ($citas as $cita)
                                <tr>
                                    <td class="table-text">
                                        {{ $cita->cliente->nombre }} 
                                        @if($cita->cliente->apellido != 'No aplica')
                                            {{$cita->cliente->apellido}}
                                        @endif
                                    </td>
                                    <td class="table-text">{{ $cita->servicio }}</td>
                                    <td class="table-text">{{ $cita->fecha }}</td>
                                    <td class="">
                                        <button class="btn cyan white-text" id="btn-aceptar">Confirmar</button>
                                        <button class="btn danger-color white-text" id="btn-cancelar">Cancelar</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="4">{{ $citas->links('vendor.pagination.bootstrap-4') }}</td>
                            </tr>
                        </tfoot>    
                    </table>              
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card mt-4 ml-2 mr-2">
            <div class="card-body">
                <div class="container-fluid">
                    <h1 class="sub-title">Reagendar citas</h1>
                    <form action="">
                        <div class="form-group">
                            <div>
                                <h6 class="form-title mt-3">Informacion del solicitante</h6>
                            </div>

                            <div class="form-row">
                                <div class="col-lg-6 col-6">
                                    <label for="nombre" class="mt-1 box-label">Codigo de cita</label>
                                    <input name="nombre" class="form-control " type="text">
                                </div>
                                <div class="col-lg-6 col-6">
                                    <label for="apellido" class="mt-1 box-label">RUT Cliente</label>
                                    <input name="apellido" class="form-control " type="text">
                                </div>
                                <div class="col-lg-6 col-6" >
                                    <label for="rut" class="mt-1 box-label">RUT Técnico</label>
                                    <input name="rut" class="form-control " type="text">
                                </div>
                                <div class="col-lg-6 col-6">
                                    <label for="telefono" class="mt-1 box-label">Nueva fecha</label>
                                    <input name="telefono" class="form-control " type="text">
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <label for="direccion" class="mt-1 box-label">Hora de inicio</label>
                                    <input name="direccion" class="form-control " type="text">
                                </div>
                                <div class="col-lg-6 col-sm-12" >
                                    <label for="correo" class="mt-1 box-label">Lugar</label>
                                    <input name="correo" class="form-control " type="text">
                                </div>
                                
                            </div>
                        </div>
                        <div class="md-form my-0 text-center" id="btnformulario">
                            <button type="submit" class="btn cyan white-text" id="btn-aceptar">Enviar <i class="fa fa-paper-plane ml-2"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row mb-5">
    <div class="col-lg-4 col-md-8 col-sm-12 col-xs-12">
        <div class="card mt-4 ml-2 mr-2">
            <div class="card-body">
                <div class="container-fluid">
                    <h1 class="sub-title">Próxima cita</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-8 col-sm-12 col-xs-12">
        <div class="card mt-4 ml-2 mr-2">
            <div class="card-body">
                <div class="container-fluid">
                    <h1 class="sub-title">Servicios completados</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-8 col-sm-12 col-xs-12">
        <div class="card mt-4 ml-2 mr-2">
            <div class="card-body">
                <div class="container-fluid">
                    <h1 class="sub-title">Estadisticas</h1>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 
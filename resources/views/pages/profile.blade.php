@extends('layouts.dashboard')
@section('titulo', 'Bienvenido, '.Auth::user()->name)
@section('contenido')
<div class="row">
    <div class="col-lg-12 col-md-8 col-sm-12 col-xs-12">
        <div class="card mt-4 ml-2 mr-2">
            <div class="card-body">
                <div class="container-fluid">
                    <h1 class="sub-title">Citas agendadas</h1>
                    @if($citas_agendadas->count() > 0)
                        
                    @else
                        <blockquote class="blockquote bq-warning">
                            <p class="bq-title">No posee citas agendadas</p>
                            <p>
                                Despues de realizar su solicitud estas quedan pendientes de su confirmación y a que se les asigne personal, fechas y horarios.
                            </p>
                        </blockquote>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-7 col-md-6 col-sm-12 col-xs-12">
        <div class="card mt-4 ml-2 mr-2">
            <div class="card-body">
                <div class="container-fluid">
                    <h1 class="sub-title">Citas nuevas</h1>
                    @if($citas_nuevas->count() > 0)
                        <table class="table table-borderless table-responsive-sm">
                            <thead>
                                <tr>
                                    
                                    <th class="table-title">Servicio</th>
                                    <th class="table-title">Whatsapp</th>
                                    <th class="table-title">Estado</th>
                                    <th class="table-title">Opciones</th>
                                </tr>
                            </thead>
                            <tbody class="text-left">
                                @foreach ($citas_nuevas as $cita)
                                    <tr>
                                        
                                        <td class="table-text align-baseline"> {{ $cita->servicio }} </td>
                                        @if($cita->estado_whatsapp == 1)
                                            <td class="table-text align-baseline"> Si </td>
                                        @else
                                            <td class="table-text align-baseline"> No </td>
                                        @endif
                                        
                                        <td class="table-text align-baseline"> {{ $cita->estado_cita }} </td>
                                        <td class="align-baseline">
                                            <button class="btn danger-color white-text" id="btn-aceptar">Cancelar</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot class="my-0">
                                <tr>
                                    <td colspan="4">{{ $citas_nuevas->links('vendor.pagination.bootstrap-4') }}</td>
                                </tr>
                            </tfoot>    
                        </table>   
                    @else
                        <blockquote class="blockquote bq-warning">
                            <p class="bq-title">No posee citas agendadas</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores quibusdam dignissimos itaque harum illo!
                                Quidem, corporis at quae tempore nisi impedit cupiditate perferendis nesciunt, ex dolores doloremque!
                                Sit, rem, in?
                            </p>
                        </blockquote>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12">
        <div class="card mt-4 ml-2 mr-2">
            <div class="card-body">
                <div class="container-fluid">
                    <h1 class="sub-title">Agendar cita</h1>
                    <form action="{{ url('/solicitar') }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <div>
                                <h6 class="form-title mt-3">Informacion del solicitante</h6>
                            </div>

                            <div class="form-row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <label for="nombre" class="mt-1 mb-3 box-label">Tipo de servicio</label>
                                    <select class="custom-select" name="servicio">
                                        <option value="Mantención de equipos">Mantención de equipos</option>
                                        <option value="Mantención de vehículos">Mantención de vehículos</option>
                                        <option value="Equipamiento minero">Equipamiento minero</option>
                                        <option value="Instalación de alarmas">Instalación de alarmas</option>
                                        <option value="Instalación de cámaras">Instalación de cámaras</option>
                                        <option value="Cotizaciones">Cotizaciones</option>
                                        <option value="Automatización de vivienda">Automatización de vivienda</option>
                                        <option value="Otro">Otro</option>
                                    </select>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-3">
                                    <label for="name">Descripción</label>
                                    <textarea name="descripcion" class="form-control rounded-0" type="text" rows="4"></textarea>
                                    <div class="custom-control custom-checkbox my-4 text-left">
                                        <input type="checkbox" class="custom-control-input" id="estadowsp" name="estadowsp">
                                        <label class="custom-control-label grey-text w-responsive" for="estadowsp" id="relawayLight">¿Desea que nos comuniquemos a través de Whatsapp?</label>
                                    </div>
                                </div>	
                            </div>
                        </div>
                        <div class="md-for mt-5 mb-3 text-right" id="btnformulario">
                            <button type="submit" class="btn cyan white-text" id="btn-aceptar">Enviar <i class="fa fa-paper-plane ml-2"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection
@extends('layouts.dashboard')
@section('titulo', 'Bienvenido, '.Auth::user()->name)
@section('enlaces')
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">Opciones</a>
    <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
        <h5 class="dropdown-header text-center grey-text">Hola, {{Auth::user()->name}}</h5>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#"><i class="fas fa-user-circle cyan-text"></i> Mi perfil</a>
        <a class="dropdown-item" href="#"><i class="fas fa-history cyan-text"></i> Historial de atención</a>
        <a class="dropdown-item" href="#"><i class="far fa-calendar-alt cyan-text"></i> Calendario de citas</a>
        <a class="dropdown-item" href="#"><i class="fas fa-edit cyan-text"></i> Actualizar datos</a>
        <a class="dropdown-item" data-target="#modalCita" data-toggle="modal"><i class="fas fa-plus-circle cyan-text"></i> Nueva cita</a>
        <div class="dropdown-divider"></div>
        <div class="container-fluid">
            <form action="{{ route('logout') }}" method="post" class="w-auto">
                {{ csrf_field() }}
                <button type="submit" class="btn btn-block btn-sm cyan white-text text-capitalize">Cerrar sesión</button>
            </form>
        </div>
    </div>
</li>
@endsection
@section('contenido')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card mt-4">
            <div class="card-body">
                <div class="container-fluid">
                    <h1 class="sub-title">Citas agendadas</h1>
                    @if($citas_agendadas->count() > 0)
                        
                    @else
                        <blockquote class="blockquote bq-warning">
                            <p class="bq-title">No posee citas agendadas</p>
                            <p>
                                Despues de realizar su solicitud estas quedan pendientes de su confirmación y que se les asigne personal, fechas y horarios.
                            </p>
                        </blockquote>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row mb-5">
    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
        <div class="card mt-4">
            <div class="card-body">
                <div class="container-fluid">
                    
                    @if($citas_nuevas->count() > 0)
                        <h1 class="sub-title align-baseline mb-3">
                            Nuevas solicitudes
                        </h1>

                        @foreach ($citas_nuevas as $cita)
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h6 class="card-title grey-text">
                                        <b>N° de solicitud:</b> {{$cita->idcita}}
                                        <i class="fas fa-edit grey-text float-right"></i> 
                                    </h6>
                                    <p class="card-text mb-0"><b>Servicio:</b> {{$cita->servicio}}</p>
                                    @if($cita->descripcion == NULL)
                                        <p class="card-text"><b>Descripción:</b> Sin descripción</p>
                                    @else
                                        <p class="card-text"><b>Descripción:</b> {{$cita->descripcion}}</p>
                                    @endif
                                    
                                    <a href="#!" class="btn btn-sm float-center btn-danger w-30 m-0">Cancelar</a>
                                </div>
                            </div>
                            
                        @endforeach
                        @include('pages.agenda.create')
                        <div colspan="5">{{ $citas_nuevas->links('vendor.pagination.bootstrap-4') }}</div>
                        
                    @else
                        <blockquote class="blockquote bq-warning">
                            <p class="bq-title">No tiene nuevas solicitudes</p>
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
    <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
        <div class="card mt-4">
            <div class="card-body">
                <div class="container-fluid">
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
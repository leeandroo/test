@extends('layouts.dashboard')
@section('titulo', 'Gestión de Empleados')
@section('contenido')

<div class="row">
    <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
        @include('pages.empleado.search')
    </div>
</div>

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card mt-4 ml-2 mr-2">
            <div class="card-body">
                <div class="container-fluid">


                    <div class="row">
                        <h1 class="sub-title">Lista de Empleados</h1>
                        <button class="btn green white-text" id="btn-aceptar">Agregar Empleado</button>
                    </div>
                    
                    
                    
                    <table class="table table-borderless table-responsive-sm ">
                        <thead>
                            <tr>
                                <th class="table-title">Rut</th> 
                                <th class="table-title">Nombre</th>
                                <th class="table-title">Cargo</th>
                                <th class="table-title">Depto</th>
                                {{-- <th class="table-title">Valor Hora</th>
                                <th class="table-title">Tipo Empleado</th> --}}
                                <th class="table-title">Estado</th>
                                <th class="table-title">Opciones</th>
                            </tr>
                        </thead>
                        <tbody >
                                @foreach ($empleados as $empleado)
                                    <tr>
                                        <td class="table-text align-baseline">{{ $empleado->idempleado }} </td>
                                        <td class="table-text align-baseline">{{ $empleado->nombre }} </td>
                                        <td class="table-text align-baseline">{{ $empleado->cargo }} </td>
                                        <td class="table-text align-baseline">{{ $empleado->depto }} </td>
                                        {{-- <td class="table-text align-baseline">{{ $empleado->valor_hora }} </td>
                                        <td class="table-text align-baseline">{{ $empleado->tipo_empleado }} </td> --}}
                                        <td class="table-text align-baseline">{{ $empleado->estado }} </td>

                                        <td class="align-baseline">
                                            <button class="btn cyan white-text" id="btn-aceptar">Editar</button>
                                            <button class="btn red white-text" id="btn-aceptar">Eliminar</button>
                                        </td>
                                    </tr>
                                @endforeach

                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="5"></td>
                            </tr>
                        </tfoot>    
                    </table>              
                </div>
                {{ $empleados->links('vendor.pagination.bootstrap-4') }}
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
        <div class="card mt-4 ml-2 mr-2">
            <div class="card-body">
                <div class="container-fluid">
                    <h1 class="sub-title">Ingresar Nuevo Empleado</h1>
                    <form method="POST" action="{{ url('empleado/insertar') }}">
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <div>
                                <h6 class="form-title mt-3">Información del empleado</h6>
                            </div>
    
                            <div class="form-row">
                                <div class="col-lg-6 col-6">
                                    <label for="rut" class="mt-1 box-label">Rut</label>
                                    <input name="rut" class="form-control " type="text">
                                </div>
                                <div class="col-lg-6 col-6">
                                    <label for="nombre" class="mt-1 box-label">Nombre</label>
                                    <input name="nombre" class="form-control " type="text">
                                </div>
                                <div class="col-lg-6 col-6" >
                                    <label for="cargo" class="mt-1 box-label">Cargo</label>
                                    <input name="cargo" class="form-control " type="text">
                                </div>
                                <div class="col-lg-6 col-6">
                                    <label for="depto" class="mt-1 box-label">Depto</label>
                                    <input name="depto" class="form-control " type="text">
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <label for="valor_hora" class="mt-1 box-label">Valor hora</label>
                                    <input name="valor_hora" class="form-control " type="text">
                                </div>
                                <div class="col-lg-6 col-sm-12" >
                                    <label for="tipo_empleado" class="mt-1 box-label">Tipo Empleado</label>
                                    <input name="tipo_empleado" class="form-control " type="text">
                                </div>
                                <div class="col-lg-6 col-sm-12" >
                                    <label for="estado" class="mt-1 box-label">Estado</label>
                                    <input name="estado" class="form-control " type="text">
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

{{-- formulario Create Post --}}
<div id= "create" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal content">
           <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal">%times;</button>
               <h4 class="modal-title"></h4>
           </div>
            <div class="modal-body">
                <form class="form-horizontal" role="form">
                    <div class="form-group" >
                        <label class="control-label-col-sm-2" for="body">Body :</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="body" name="body" placeholder="Tu body aqui :B" required>
                            <p class="error text-center alert alert-danger hidden"></p>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
             <button class="btn btn-warning" type="submit" id="add">
                 <span class="glyphicon glyphicon-plus"></span>Guardar Post
             </button>
             <button class="btn btn-warning" type="button" data-dismiss="modal">
                    <span class="glyphicon glyphicon-remobe"></span>Cerrar
                </button>
            </div>   
        </div>
    </div>
</div>
@endsection 
@extends('layouts.dashboard')
@section('titulo', 'Gestión de Categorias')
@section('contenido')

<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">

    
    @include('pages.categoria.buscar')

    </div>
</div>

<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
        <div class="card mt-4 ml-2 mr-2">
            <div class="card-body">
                <div class="container-fluid">
                    <h1 class="sub-title">Lista de Categorias</h1>
                    <table class="table table-borderless table-responsive-sm ">
                        <thead>
                            <tr>
                                <th class="table-title">Nombre</th>
                                <!-- <th class="table-title">Categoria</th> -->
                                <th class="table-title">Descripción</th>
                                <th class="table-title">Opciones</th>
                            </tr>
                        </thead>
                        <tbody >
                                @foreach ($categorias as $categoria)
                                    <tr>
                                        <td class="table-text align-baseline">{{ $categoria->nombre }} </td>
                                        <td class="table-text align-baseline">{{ $categoria->descripcion }} </td>

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
                {{ $categorias->links('vendor.pagination.bootstrap-4') }}
            </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <div class="card mt-4 ml-2 mr-2">
            <div class="card-body">
                <div class="container-fluid">
                    <h1 class="sub-title my-4">Ingresa una Nueva Categoria</h1>
                    <form method="POST" action="{{ url('categoria/insertar') }}">
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-lg-12 col-12">
                                    <label for="nombre" class="mt-1 box-label">Nombre</label>
                                    <input name="nombre" class="form-control" type="text">
                                </div>
                                <div class="col-lg-12 col-12">
                                    <label for="nombre" class="mt-1 box-label">Descripción</label>
                                    <textarea name="descripcion" class="form-control" id="exampleFormControlTextarea1" rows="4,5"></textarea>
                                </div>                                
                            </div>
                        </div>
                        <div class="md-form my-0 text-center" id="btnformulario">
                            <button type="submit" class="btn green white-text" id="btn-aceptar">Ingresar <i class="fa fa-paper-plane ml-2"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>


@endsection 
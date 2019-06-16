@extends('layouts.dashboard')
@section('titulo', 'Gestión de Bodega')
@section('contenido')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card mt-4 ml-2 mr-2">
            <div class="card-body">
                <div class="container-fluid">
                    <h1 class="sub-title">Lista de insumos</h1>
                    <table class="table table-borderless table-responsive-sm ">
                        <thead>
                            <tr>
                                <th class="table-title">Nombre</th>
                                <th class="table-title">Categoria</th>
                                <th class="table-title">Codigo</th>
                                <th class="table-title">Cantidad</th>
                                <th class="table-title">Descripción</th>
                                <th class="table-title">Opciones</th>
                            </tr>
                        </thead>
                        <tbody >
                                @foreach ($insumos as $insumo)
                                    <tr>
                                        <td class="table-text align-baseline">{{ $insumo->nombre }} </td>
                                        <td class="table-text align-baseline">{{ $insumo->nombre_categoria }} </td>
                                        <td class="table-text align-baseline">{{ $insumo->codigo }} </td>
                                        <td class="table-text align-baseline">{{ $insumo->stock }} </td>
                                        <td class="table-text align-baseline">{{ $insumo->descripcion }} </td>
                                        <td class="align-baseline">
                                            <button class="btn cyan white-text" id="btn-aceptar">Editar</button>
                                            <button class="btn red white-text" id="btn-aceptar">Eliminar</button>
                                        </td>
                                    </tr>
                                @endforeach

                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="5">{{ $insumos->links('vendor.pagination.bootstrap-4') }}</td>
                            </tr>
                        </tfoot>    
                    </table>              
                </div>
            </div>
        </div>
</div>


@endsection 
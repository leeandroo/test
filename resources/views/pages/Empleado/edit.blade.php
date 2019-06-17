
<div class="card mt-4 ml-2 mr-2">
        <div class="card-body">
            <div class="container-fluid">
                <h1 class="sub-title">Editar Empleado</h1>
                <form method="POST" action="{{ url('dashboard/empleado/editar') }}">
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
                                <label for="servicio" class="mt-1 box-label">Estado</label>
                                <select class="custom-select" name="estado">
                                <option value="Mantención de equipos">Disponible</option>
                                <option value="Mantención de vehículos">En Servicio</option>
                                <option value="Equipamiento minero">Desvinculado</option>
                            </select>
                            </div>
                        </div>
                    </div>
                    <div class="md-form my-0 text-center" id="btnformulario">
                        <button type="submit" class="btn cyan white-text" id="btn-aceptar">Actualizar <i class="fa fa-paper-plane ml-2"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>



<div class="card mt-4 ml-2 mr-2">
    <div class="card-body">
        <div class="container-fluid">
            <h1 class="sub-title my-2">Ingresa una Nueva Categoria</h1>
            <form method="POST" action="{{ url('categoria/insertar') }}">
                {!! csrf_field() !!}
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-lg-12 col-12">
                            <label for="nombre" class="mt-1 box-label">Nombre</label>
                            <input name="nombre" class="form-control" type="text" value="{{ old('nombre') }}">
                        </div>
                        <div class="col-lg-12 col-12">
                            <label for="nombre" class="mt-1 box-label">Descripción</label>
                            <textarea name="descripcion" class="form-control" id="exampleFormControlTextarea1" rows="2">{{ old('descripcion') }}</textarea>
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
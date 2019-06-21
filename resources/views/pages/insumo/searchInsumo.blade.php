<form action="{{ url('pages/insumo') }}" autocomplete="off" method="PATCH" role="search" >

    <div class="form-group my-0 mt-2 ">
        <div class="form-row "> 

            <div class="col-lg-3 col-6 my-2">
                <select class="custom-select" name="categoria">
                    <option value="">--Selecciona una Categoria--</option>
                    @foreach ($categorias as $categoria) 
                        
                        @if ( $categoria->idcategoria == $categoriaid )
                            <option value="{{ $categoria->idcategoria }}" selected>{{ $categoria->nombre }}</option>                        
                        @else
                            <option value="{{ $categoria->idcategoria }}">{{ $categoria->nombre }}</option>                        
                        @endif  
                        
                    @endforeach
                </select>               
            </div>

            <div class="col-lg-3 col-6 my-2">            
                <input name="nombre" class="form-control " type="text" placeholder="nombre" value="{{ $nombre }}">
            </div>

            <div class="col-lg-1 col-12 my-2">            
                <button type="submit" class="btn btn-primary btn-md mt-0">Buscar</button>
            </div>

            <div class="col-lg-5 col-12 my-2">            
                <a href="{{ url('/insumo/create') }}" class="btn btn-success btn-md mt-0">Ingresar un nuevo Insumo</a>                
            </div>
        </div>
    </div>

</form>









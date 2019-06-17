<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Categoria;

class CategoriaController extends Controller
{
    public function index(Request $request)
    {

        if($request){

            $query=trim($request->get('searchText'));
            $categorias = DB::table('categoria')->where('nombre','LIKE','%'.$query.'%')->orderBy('idcategoria', 'DESC')->paginate(4);
            
            return view('pages.categoria.index', ["categorias"=>$categorias, "searchtext"=>$query]);
        }
        
    }

    public function create()
    {
        return view('pages.categoria.create');
    }




    public function store ()
    {
        $data = request()->all();
        $validator = Validator::make($data, [
            'nombre' => 'required|max:20|unique:categoria,nombre',
            'descripcion' => 'nullable|max:140'
        ]);

        if ($validator->fails()) {
            return redirect('/dashboard/categoria')
                        ->withErrors($validator)
                        ->withInput();
        }else
        {
            Categoria::create([
                'nombre' => $data['nombre'],
                'descripcion' => $data['descripcion'],
            ]);
            return back()->with('message', array('title' => '¡Categoria registrada con exito!', 'body'=>'Se ha registrado una nueva categoria'));
        }
    }

    public function show()
    {
        return view('pages.categoria.create');
    }

    
    public function edit(Categoria $categoria)
    {
        return view('pages.categoria.edit',['categoria'=> $categoria]);
    }

    public function update($idCategoria)
    {

    }
    

    
}

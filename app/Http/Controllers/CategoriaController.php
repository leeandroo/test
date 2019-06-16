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
            $categorias = DB::table('categoria')->where('nombre','LIKE','%'.$query.'%')->orderBy('idcategoria', 'DESC')->paginate(2);
            
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

        Categoria::create([
            'nombre' => $data['nombre'],
            'descripcion' => $data['descripcion'],
        ]);

        return redirect ('/dashboard/categoria');
    }

    public function show()
    {
        return view('pages.categoria.create');
    }

    

    
}

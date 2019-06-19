<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Insumo;

class InsumoController extends Controller
{

    // public function index(Request $request)
    // {

    //     if($request){

    //         $query=trim($request->get('searchText'));
    //         $categorias = DB::table('categoria')->where('nombre','LIKE','%'.$query.'%')->orderBy('idcategoria', 'DESC')->paginate(4);
            
    //         return view('pages.categoria.index', ["categorias"=>$categorias, "searchtext"=>$query]);
    //     }
        
    // }


    public function index()
    {
        
        $insumos = DB::table('insumo')
        ->where('estado', 'Disponible')
        ->join('categoria', 'insumo.idcategoria', '=', 'categoria.idcategoria')
        ->select('insumo.*','categoria.nombre as nombre_categoria')
        ->paginate(4);
        return view('pages.insumo.index', compact('insumos'));
    }

    public function show()
    {
        return view('pages.insumo.create');
    }

    public function create()
    {

    }

    public function store()
    {

    }
}

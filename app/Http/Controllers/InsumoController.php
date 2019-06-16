<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Insumo;

class InsumoController extends Controller
{
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

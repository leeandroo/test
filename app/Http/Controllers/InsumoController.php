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

        $insumos = DB::table('insumo')->where('estado', 'Disponible')->paginate(4);
        // foreach ($insumos as $insumo) {
        //     $insumo->categoria = DB::table('categoria')->where('idcategoria', $insumo->idcategoria)->get();
        // }

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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function index()
    {
        return "Lista de servicios";
    }

    public function show()
    {
        return "Detalle";
    }

    public function create()
    {
        return "Creando nueva cita";
    }

}

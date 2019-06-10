<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Cliente;
use App\Cita;

class AgendaController extends Controller
{
    public function index()
    {
        
        $citas = DB::table('cita')->where('estado_cita', 'Nueva')->paginate(4);
        foreach ($citas as $cita) {
            $cita->cliente = DB::table('cliente')->where('idcliente', $cita->idcliente)->first();
        }
        return view('agenda.index', compact('citas'));
    }

    public function show()
    {
        return view('agenda.show');
    }

    public function create()
    {
        return view("agenda.create");
    }

    public function store(){
        $estadowsp = 0;
        $data = request()->all();
        $cliente = DB::table('cliente')->where('idcliente', $data["rut"])->first();
        if($cliente){
            if($data["estadowsp"]){
                $estadowsp = 1;
            }

            $cita = Cita::create([
                'idcliente' => $data["rut"],
                'servicio'=> $data["servicio"],
    	        'fecha' => $data["fecha"],
    	        'estado_whatsapp'=> $estadowsp,
    	        'estado_cita'=> "Nueva"
            ]);
        }else{
            
            $cliente = Cliente::create([
                "idcliente" => $data["rut"],
                "nombre" => $data["nombre"],
                "apellido" => $data["apellido"],
                "telefono" => $data["telefono"],
                "correo" => $data["correo"],
                "direccion" => $data["direccion"],
                "tipo_cliente" => $data["tipo"],
            ]);

            if($data["estadowsp"]){
                $estadowsp = 1;
            }

            $cita = Cita::create([
                'idcliente' => $data["rut"],
                'servicio'=> $data["servicio"],
    	        'fecha' => $data["fecha"],
    	        'estado_whatsapp'=> $estadowsp,
    	        'estado_cita'=> "Nueva"
            ]);
        }
        return view('layouts.main');
    }
}

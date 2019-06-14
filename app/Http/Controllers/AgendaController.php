<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Cliente;
use App\Cita;

class AgendaController extends Controller
{
    public function index()
    {
        
        $citas = DB::table('cita')->where('estado_cita', 'Nueva')->paginate(4);
        $proxima_cita = DB::table('cita')->orderBy('fecha', 'asc')->first();
        $proxima_cita->cliente = DB::table('cliente')->where('idcliente', $proxima_cita->idcliente)->first();
        foreach ($citas as $cita) {
            $cita->cliente = DB::table('cliente')->where('idcliente', $cita->idcliente)->first();
        }
        return view('agenda.index', compact('citas', 'proxima_cita'));
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
        $validator = Validator::make(request()->all(), [
            'idcliente' => 'required|max:10',
            'nombre' => 'required',
            'apellido' => 'nullable',
            'telefono' => 'required|max:12',
            'correo' => 'required|max:50',
            'direccion' => 'required|max:50',
            'fecha' => 'required',
            'hora_atencion' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect('/#agenda')
                        ->withErrors($validator)
                        ->withInput();
        }
        
        registrarCita($data);
    }

    public function registrarCita($data) 
    {
        $cliente = DB::table('cliente')->where('idcliente', $data["rut"])->first();
        if($cliente){
            if($data["estadowsp"]){
                $estadowsp = 1;
            }

            $cita = Cita::create([
                'idcliente' => $data["rut"],
                'servicio'=> $data["servicio"],
                'fecha' => $data["fecha"],
                'hora_atencion' => $data["hora"],
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
                'hora_atencion' => $data["hora"],
    	        'estado_whatsapp'=> $estadowsp,
    	        'estado_cita'=> "Nueva"
            ]);
        }
        return redirect('/');
    }
}

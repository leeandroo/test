<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Cliente;
use App\Cita;

class AgendaController extends Controller
{
    public function index()
    {
        
        $citas = DB::table('cita as ct')
        ->where('ct.estado_cita', 'Nueva')
        ->join('cliente as cl', 'ct.idcliente','=','cl.idcliente')
        ->select('ct.*','cl.*')
        ->paginate(4);
        
        return view('pages.agenda.index', compact('citas'));
    }

    public function show()
    {
        return view('agenda.show');
    }

    public function create()
    {
        return view("pages.agenda.create");
    }

    public function store_old_client(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'rut' => 'required|max:10'
        ]);

        if ($validator->fails()) {
            return redirect('/agendar')
                        ->withErrors($validator)
                        ->withInput();
        }
        return redirect('/')->with('message', array('title' => '¡Solicitud registrada con exito!', 'body'=>'La confirmación de la hora y responsable será enviada a su correo'));
    }

    public function store_new_client(Request $request){
        $estadowsp = 0;
        if($request->get('estadowsp'))
        {
            $estadowsp = 1;
        }
        $validator = Validator::make($request->all(), [
            'rut' => 'required|max:10',
            'nombre' => 'required',
            'apellido' => 'nullable',
            'telefono' => 'required|max:12',
            'correo' => 'required|max:50',
            'direccion' => 'required|max:50',
        ]);

        if ($validator->fails()) {
            return redirect('/agendar')
                        ->withErrors($validator)
                        ->withInput();
        }
        
        if(DB::table('cliente')->where('idcliente', $request->get('rut'))->first()){
            
            $cita = Cita::create([
                'idcliente' => $request->get('rut'),
                'servicio'=> $request->get('servicio'),
                'estado_whatsapp' => $estadowsp,
    	        'estado_cita'=> "Nueva"
            ]);
        }else{
            
            $cliente = Cliente::create([
                "idcliente" => $request->get('rut'),
                "nombre" => $request->get('nombre'),
                "apellido" => $request->get('apellido'),
                "telefono" => $request->get('telefono'),
                "correo" => $request->get('correo'),
                "direccion" => $request->get('direccion'),
                "tipo_cliente" => $request->get('tipo'),
            ]);

            $cita = Cita::create([
                'idcliente' => $request->get('rut'),
                'servicio'=> $request->get('servicio'),
                'estado_whatsapp' => $estadowsp,
    	        'estado_cita'=> "Nueva"
            ]);
        }
        return redirect('/')->with('message', array('title' => '¡Solicitud registrada con exito!', 'body'=>'La confirmación de la hora y responsable será enviada a su correo'));
    }
}

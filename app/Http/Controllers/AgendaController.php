<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\DetalleUsuario;
use App\Cita;
use Auth;

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

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'descripcion' => 'nullable|max:150|'
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        $estadowsp = 0;
        if($request->get('estadowsp'))
        {
            $estadowsp = 1;
        }

        $cita = Cita::create([
            'iduser' => Auth::user()->iduser,
            'servicio'=> $request->get('servicio'),
            'estado_whatsapp' => $estadowsp,
            'estado_cita'=> "Nueva",
            'descripcion' => $request->get('descripcion')
        ]);
        return back()->with('message', array('title' => '¡Solicitud registrada con exito!', 'body'=>'La confirmación de la hora y responsable será enviada a su correo'));
    }

   
}

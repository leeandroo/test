<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class InterfazController extends Controller
{
    public function get_landing_page()
    {
        return view('pages.landing');
    }

    public function get_login_page()
    {
        return view('auth.login');
    }

    public function get_register_page()
    {
        return view('auth.register');
    }

    public function get_profile_page()
    {
        $citas_agendadas = DB::table('cita')
        ->where('estado_cita', '=', 'Agendada')
        ->where('iduser', Auth::user()->iduser)
        ->paginate(3);
        $citas_nuevas = DB::table('cita')
        ->where('estado_cita', '=', 'Nueva')
        ->where('iduser', Auth::user()->iduser)
        ->paginate(3);
        return view('pages.profile', compact('citas_agendadas', 'citas_nuevas'));
    }
}

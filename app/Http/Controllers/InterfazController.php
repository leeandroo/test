<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}

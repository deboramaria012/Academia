<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class administradorController extends Controller
{

    public function administrador(){
        return view('site.dashboard.administrador.administrador');
    }

}

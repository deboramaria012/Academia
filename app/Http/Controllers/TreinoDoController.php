<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TreinoDoController extends Controller
{
    public function index(){
        return view('site.treino');
    }

}


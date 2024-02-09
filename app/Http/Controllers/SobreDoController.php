<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SobreDoController extends Controller
{
    public function index(){
        return view('site.sobre');
    }

}


<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoticiasDoController extends Controller
{
    public function index(){
        return view('site.noticias');
    }
}

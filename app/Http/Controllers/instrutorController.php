<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class instrutorController extends Controller
{
    public function instrutor(){
        return view('dashboard.instrutor.instrutor');
    }

}

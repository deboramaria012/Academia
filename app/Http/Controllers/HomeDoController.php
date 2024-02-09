<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeDoController extends Controller
{
    public function index(){
        return view('site.home');
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{

    public function aluno(){
        return view('site.dashboard.aluno.aluno');
    }

}

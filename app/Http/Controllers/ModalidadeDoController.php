<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class ModalidadeDoController extends Controller
{
    public function index(){
        return view('site.modalidade');
    }

    public function musculacao(){
        return view('site.modalidade.musculacao');
    }

    public function aerobica(){
        return view('site.modalidade.aerobica');
    }

    public function yoga(){
        return view('site.modalidade.yoga');
    }

    public function pilates(){
        return view('site.modalidade.pilates');
    }

    public function treinamentofuncional(){
        return view('site.modalidade.treinamentofuncional');
    }
}


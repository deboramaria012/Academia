<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{

    public function index(){

    $idAluno = session('id');

    $aluno = Aluno::find($idAluno);

    if(!$aluno){

    abort(404,'Aluno não encontrado');

  }else{
  return view('dashboard.aluno.aluno', compact('aluno'));
  }
}
}

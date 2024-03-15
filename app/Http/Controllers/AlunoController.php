<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index()
    {
        // return view('dashboard.aluno.aluno');
          // Recuperando o ID do aluno da sessão
          $idAlunoo = session('id');

          // Buscando o aluno pelo ID no banco de dados
          $aluno = Aluno::find($idAlunoo);

          // Verificando se o aluno foi encontrado
          if ( !$aluno ) {
              // Se o aluno não for encontrado, você pode redirecionar para uma página de erro ou fazer outra ação adequada
              abort(404, 'Aluno não encontrado');
          }

          // Passando o objeto $aluno para a view
          // dd($aluno);
          return view('dashboard.aluno.index', compact('aluno'));
    }

}

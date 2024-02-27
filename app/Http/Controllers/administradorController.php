<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class administradorController extends Controller
{

    public function administrador(){
        return view('site.dashboard.administrador.administrador');
    }


  public function funcionario()
    {
         // Recuperando o ID do aluno da sessão
         $idFuncionario = session('id');

         // Buscando o aluno pelo ID no banco de dados
         $funcionario = Funcionario::find($idFuncionario);

         // Verificando se o aluno foi encontrado
         if ( !$funcionario) {
             // Se o aluno não for encontrado, você pode redirecionar para uma página de erro ou fazer outra ação adequada
             abort(404, 'Funcionario não encontrado');
         }

         // Passando o objeto $aluno para a view
         // dd($aluno);
         return view('dashboard.administrador.administrador', compact('funcionario'));
   }


    /* Funcionario */

    public function indexFunc(){


    $idFunc =session('id');
    $func= Funcionario::find($idFunc);

    $listaFunc = Funcionario::all();


    dd($listaFunc);

    return view('dashboard.administrativo.funcionario.index',compact('func','listaFunc'));


}

}



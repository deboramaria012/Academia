<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\Funcionario;
use App\Models\Usuario;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('site.login');
    }

    public function autenticar(Request $request)
    {


        $regras = [

            'email' => 'required|email',
            'password' => 'required'
        ];


        $msg = [
            'email.required' => 'O campo de email é obrigatório',
            'email.email' => 'O e-mail não é valido',
            'password.required' => 'O campo de senha é obrigatório'
        ];

        $request->validate($regras, $msg);



        $email = $request->get('email');
        $senha = $request->get('password');



        $usuario = Usuario::where('emailUsuario', $email)->first();

        if (!$usuario) {
            return back()->withErrors(['email' => 'O email informado não esta cadrastado']);
        }


        if ($usuario->senhaUsuario != $senha) {
            return back()->withErrors(['password' => 'Senha incorreta']);
        }
        // dd($usuario);

        $tipoUsuario = $usuario->tipo_usuario;
        $tipo = null;
        // dd($tipoUsuario);

        if($tipoUsuario instanceof Aluno){
            $tipo = 'aluno';

            //dd($tipoUsuario);//


            session([
                'id'    =>           $tipoUsuario->idAlunoo,
                'nome'  =>           $tipoUsuario->nomeAlunoo,
                'tipo_usuario' =>   'aluno',
                'email' =>          $tipoUsuario->emailAlunoo,

            ]);


            return redirect()->route('dashboard.aluno');


        }elseif($tipoUsuario instanceof Funcionario){

        if($tipoUsuario->tipoFuncionario == 'instrutor'){
            $tipo = 'instrutor';
            session([
                'id'    =>           $tipoUsuario->idFuncionario,
                'nome'  =>           $tipoUsuario->nomeFuncionario,
                'tipoFuncionario' => $tipoUsuario->tipoFuncionario,
                'email' =>           $tipoUsuario->emailfuncionario,

            ]);

            return redirect()->route('dashboard.instrutor');


         }elseif($tipoUsuario->tipoFuncionario == 'administrativo'){
            $tipo= 'administrativo';
            session([
                'id'    =>           $tipoUsuario->idFuncionario,
                'nome'  =>           $tipoUsuario->nomeFuncionario,
                'tipoFuncionario' => $tipoUsuario->tipoFuncionario,
                'email' =>           $tipoUsuario->emailfuncionario,


            ]);

            return redirect()->route('dashboard.administrativo');


        }
     }

        return back()->withErrors(['email' =>'Erro desconhecido de autentificação']);



    }

    }







<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\Funcionario;
use App\Models\Usuario;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class administradorController extends Controller
{

 public function administrador() {

        $idFuncionario = session('id');


        $funcionario = Funcionario::find($idFuncionario);


        if(!$funcionario){

            abort(404, 'funcionario não encontrado');
        }
        return view('site.dashboard.administrador.administrador', compact('funcionario'));
    }


    // MÉTODO INDEX DO DASHBOARD DO ADMIN

    public function index(){

        $idFunc = session('id');
        $idUser = session('idUser');

        $func = Funcionario::find($idFunc);
        $user = Usuario::find($idUser);

        if (!$func) {
            abort(404, 'Funcionário não encontrado');
        }

        return view('dashboard.administrativo.index',compact('func','user'));
    }

        // METODO -LISTAR ALUNOS

     public function indexAluno() {

        $idAlunos = session('id');

        $alunos = Aluno::find($idAlunos);


        if(!$alunos) {

            abort(404, 'Funcioanrio não encontrado');
        }

        //Retornar a lista de alunos:


        $alunos = Aluno::where('statusAlunoo', 'Ativo')->get();


        return view('dashboard.administrador.aluno.index', compact('alunos'));
     }


     public function createAluno()
     {
        $idAlunos = session('id');

        $alunos = Aluno::find($idAlunos);

        if (!$alunos) {
            abort(404, 'Funcionario não encontrado');
        }

        return view('dashboard.administrador.aluno.create', compact('alunos'));
    }


    public function cadAluno(Request $request) {

        //Validação dos dados do aluno

        $request->validate([

          'nomeAlunoo'                  =>'required|string|max:100',
          'emailAlunoo'                 =>'required|email|max:100',
          'dataNascAlunoo'              =>'required|date',
          'telefoneAlunoo'              =>'required|string|max:20',
          'enderecoAlunoo'              =>'required|string|max:255',
          'cidadeAlunoo'                =>'required|string|max:100',
          'estadoAlunoo'                =>'required|string|max:2',
          'cepAlunoo'                   =>'required|string|max:10',
          'alturaAlunoo'                =>'required|numeric|between:0,99.99',
          'pesoAlunoo'                  =>'required|numeric|between:0,999.99',
          'objetivoAlunoo'              =>'nullable|string',
          'planoAlunoo'                 =>'required|string|max:50',
          'statusAlunoo'                =>'required|string|max:20',
          'criado_em_Alunoo'            => 'required|date',
          'atualizado_em_Alunoo'        => 'required|date',

        ]);

        $alunos = new Aluno();

        //Criação de um novo objeto aluno com os dados do formulario

        $alunos->nomeAlunoo                            =$request->input('nomeAlunoo');
        $alunos->emailAlunoo                           =$request->input('emailAlunoo');
        $alunos->dataNascAlunoo                        =$request->input('dataNascAlunoo');
        $alunos->telefoneAlunoo                        =$request->input('telefoneAlunoo');
        $alunos->enderecoAlunoo                        =$request->input('enderecoAlunoo');
        $alunos->cidadeAlunoo                          =$request->input('cidadeAlunoo');
        $alunos->estadoAlunoo                          =$request->input('estadoAlunoo');
        $alunos->cepAlunoo                             =$request->input('cepAlunoo');
        $alunos->dataInscricaoAlunoo                   =$request->input('dataInscricaoAlunoo');
        $alunos->alturaAlunoo                          =$request->input('alturaAlunoo');
        $alunos->pesoAlunoo                            =$request->input('pesoAlunoo');
        $alunos->objetivoAlunoo                        =$request->input('objetivoAlunoo');
        $alunos->planoAlunoo                           =$request->input('planoAlunoo');
        $alunos->statusAlunoo                          =$request->input('statusAlunoo');
        $alunos->criado_em_Alunoo                      = $request->input('criado_em_Alunoo');
        $alunos->atualizado_em_Alunoo                  = $request->input('atualizado_em_Alunoo');

        $alunos->save();

        //Redireciona de volta com uma mensagem de sucesso

        return redirect()->route('dashboard.administrador.aluno.index')->with('success', 'Aluno cadastrado com sucesso.');


    }




    public function editAluno($id)
    {
        $idFunc = session('id');
        $func = Funcionario::find($idFunc);
        $aluno = Aluno::findOrFail($id);

        return view('dashboard.administrador.aluno.edit', compact('aluno', 'func'));
    }



    public function updateAluno(Request $request, $id){

        //Validação dos dados do Aluno


        $request->validate([

            'nomeAlunoo'                  =>'required|string|max:100',
            'emailAlunoo'                 =>'required|email|max:100',
            'dataNascAlunoo'              =>'required|date',
            'telefoneAlunoo'              =>'required|string|max:20',
            'endAlunoo'                   =>'required|string|max:255',
            'cidadeAlunoo'                =>'required|string|max:100',
            'estadoAlunoo'                =>'required|string|max:2',
            'cepAlunoo'                   =>'required|string|max:10',
            'alturaAlunoo'                =>'required|numeric|between:0,99.99',
            'pesoAlunoo'                  =>'required|numeric|between:0,999.99',
            'objetivoAlunoo'              =>'nullable|string',
            'planoAlunoo'                 =>'required|string|max:50',
            'statusAlunoo'                =>'required|string|max:20',

          ]);


          $alunos = Aluno::findOrFail($id);
          $alunos->nomeAlunoo = $request->input('nomeAlunoo');
          $alunos->emailAlunoo =$request->input('emailAlunoo');
          $alunos->objetivoAlunoo =$request->input('objetivoAlunoo');
          $alunos->save();

          return redirect()->route('dashboard.administrador.aluno.index')->with('Aluno atualizado com sucesso');



    }

    public function desativarAluno($id)
    {
        $aluno = Aluno::findOrFail($id);
        $aluno->update(['statusAluno' => 'Desativado']);

        return redirect()->route('dashboard.administrador.aluno.index')->with('success', 'Aluno desativado com sucesso.');
    }



    // ************ FUNCIONARIO

    public function indexFunc()
    {
        $idFunc = session('id');

        $func = Funcionario::find($idFunc);

        $listaFunc = Funcionario::all();

        return view('dashboard.administrador.funcionario.index', compact('func', 'listaFunc'));
    }


    // CRIAR FUNCIONARIO NOVO

    public function createfunc(Request $request) {

    $idFuncionario = session('id');

    $funcionario = Funcionario::find($idFuncionario);

    if (!$funcionario) {
        abort(404, 'Funcionario nao encontrado');
    }

    return view('dashboard.administrador.funcionario.create', compact('funcionario'));


}

        // CADASTRAR FUNCIONARIO NOVO
        public function cadFuncionario(Request $request) {

            $request->validate([
                'nomeFuncionario' => 'required|string|max:100',
                'emailFuncionario' => 'required|string|max:100',
                'dataNascFuncionario' => 'required|date',
                'telefoneFuncionario' => 'required|string|max:20',
                'enderecoFuncionario' => 'required|string|max:100',
                'cidadeFuncionario' => 'required|string|max:100',
                'estadoFuncionario' => 'required|string|max:100',
                'cepFuncionario' => 'required|string|max:10',
                'dataContratoFuncionario' => 'required|date',
                'cargoFuncionario' => 'required|string|max:50',
                'salarioFuncionario' => 'required|string|max:100',
                'tipoFuncionario' => 'required|string|max:100',
                'statusFuncionario' => 'required|string|max:20',
                'criadoEm' => 'required|date',
                'atualizadoEm' => 'required|date',

            ]);

            $funcionario = new Funcionario();

            $funcionario->nomeFuncionario = $request->input('nomeFuncionario');
            $funcionario->emailFuncionario = $request->input('emailFuncionario');
            $funcionario->dataNascFuncionario = $request->input('dataNascFuncionario');
            $funcionario->telefoneFuncionario = $request->input('telefoneFuncionario');
            $funcionario->enderecoFuncionario = $request->input('enderecoFuncionario');
            $funcionario->cidadeFuncionario = $request->input('cidadeFuncionario');
            $funcionario->estadoFuncionario = $request->input('estadoFuncionario');
            $funcionario->cepFuncionario = $request->input('cepFuncionario');
            $funcionario->dataContratoFuncionario = $request->input('dataContratoFuncionario');
            $funcionario->cargoFuncionario = $request->input('cargoFuncionario');
            $funcionario->salarioFuncionario = $request->input('salarioFuncionario');
            $funcionario->tipoFuncionario = $request->input('tipoFuncionario');
            $funcionario->statusFuncionario = $request->input('statusFuncionario');
            $funcionario->criadoEm = $request->input('criadoEm');
            $funcionario->atualizadoEm = $request->input('atualizadoEm');

            $funcionario->save();

            return redirect()->route('dashboard.administrador.funcionario.index')->with('sucess', 'funcionario cadrastado com sucesso');
        }


        // EDITAR/ATUALIZAR FUNCIONARIO

         public function editFunc($id){

         $funcionario = Funcionario::findOrFail($id);

         return view('dashboard.administrador.funcionario.edit' , compact('funcionario'));
 }


         public function updatefunc(Request $request, $id){

          $request->validate([
         'nomeFuncionario' =>  'required',
         'emailFuncionario' => 'required|email',
         'cargoFuncionario' => 'required',

     ]);


        $funcionario = Funcionario::findOrFail($id);

        $funcionario->nomeFuncionario = $request->input('nomeFuncionario');

        $funcionario->emailFuncionario = $request->input('emailFuncionario');

        $funcionario->tipoFuncionario = $request->input('tipoFuncionario');

        $funcionario->save();

         return redirect()->route('dashboard.administrador.funcionario.index')->with('success', 'Funcionário atualizado com sucesso.');
 }



       // DESATIVAR FUNCIONARIO
      public function desativaFunc($id){

    $funcionario = Funcionario::findOrFail($id);

    $funcionario->statusFuncionario = 'inativo'; // Define o status como 'inativo' para desativar o funcionário

    $funcionario->save();


    return redirect()->route('dashboard.administrador.funcionario.desativar')->with('success', 'Funcionário desativado com sucesso.');
 }


     }













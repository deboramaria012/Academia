<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\Funcionario;
use App\Models\Usuario;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class administradorController extends Controller
{

 public function administrador()
    {
        return view('site.dashboard.administrador.administrador');
    }


    public function funcionario()
    {

         $idFuncionario = session('id');


         $funcionario = Funcionario::find($idFuncionario);


        if (!$funcionario) {
            abort(404, 'Funcionario não encontrado');
        }


        return view('admin.func.index', compact('funcionario'));
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

        $idFunc = session('id');
        $func = Funcionario::find($idFunc);

        if(!$func){
            abort(404, 'Funcioanrio não encontrado');
        }

        //Retornar a lista de alunos:
        $alunos = Aluno::where('statusAluno', 'Ativo')->get();

        return view('dashboard.administrativo.aluno.index', compact('func','alunos'));
     }


     public function createAluno()
     {
         $idFunc = session('id');
         $func = Funcionario::find($idFunc);

         if (!$func) {
             abort(404, 'Funcionario não encontrado');
         }

         return view('dashboard.administrador.aluno.create', compact('func'));
     }




    public function indexFunc()
    {
        $idFunc = session('id');
        $func = Funcionario::find($idFunc);
        $listaFunc = Funcionario::all();

        return view('dashboard.administrador.funcionario.index', compact('func', 'listaFunc'));
    }


    public function cadAluno(Request $request) {

        $request->merge(['dataInscricaoAluno' => now()]);

        //Validação dos dados do aluno

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
          'fotoAlunoo'                  =>'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);


        //Obtém o ultimo ID salvo no banco de dados

        $ultimoAluno = Aluno::latest('idAlunoo')->firts();
        $ultimoID = $ultimoAluno ? $ultimoAluno->idAlunoo : 0;

        //Incrementa o ID para obter o proximo

        $proximoID = $ultimoID + 1;

        $aluno = new Aluno();

        //Criação de um novo objeto aluno com os dados do formulario

        $aluno->nomeAlunoo                            =$request->input('nomeAluno');
        $aluno->emailAlunoo                           =$request->input('emailAluno');
        $aluno->dataNascAlunoo                        =$request->input('dataNascAluno');
        $aluno->telefoneAlunoo                        =$request->input('telefoneAluno');
        $aluno->endAlunoo                             =$request->input('endAluno');
        $aluno->cidadeAlunoo                          =$request->input('cidadeAluno');
        $aluno->estadoAlunoo                          =$request->input('estadoAluno');
        $aluno->cepAlunoo                             =$request->input('cepAluno');
        $aluno->dataInscricaoAlunoo                   =$request->input('dataInscricaoAluno');
        $aluno->alturaAlunoo                          =$request->input('alturaAluno');
        $aluno->pesoAlunoo                            =$request->input('pesoAlunoo');
        $aluno->objetivoAlunoo                        =$request->input('objetivoAluno');
        $aluno->planoAlunoo                           =$request->input('planoAlunoo');
        $aluno->statusAlunoo                          =$request->input('statusAluno');



        if($request->hasFile('fotoAluno')){

            $fotoAluno = $request->file('fotoAluno');
            $nomeArquivo = $proximoID . '_' . str_replace('','_', $aluno->nomeAlunoo) . '.' . $fotoAluno->getClientOriginalExtension();
            $caminhoDestino = public_path('dash/img/aluno');

            //Move o arquivo para o destino com o nome personalizado

           $fotoAluno->move($caminhoDestino, $nomeArquivo);

           //Salva o caminho relativo da foto no banco de dados
           $aluno->$fotoAluno = 'aluno/' . $nomeArquivo;

        }

        $aluno->save();

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

        $request->merge(['dataInscricaoAluno' => now()]);

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
            'fotoAlunoo'                  =>'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
          ]);




    }

    public function desativarAluno($id)
    {
        $aluno = Aluno::findOrFail($id);
        $aluno->update(['statusAluno' => 'Desativado']);

        return redirect()->route('admin.aluno.index')->with('success', 'Aluno desativado com sucesso.');
    }
}




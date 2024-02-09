<?php

namespace App\Http\Controllers;


use App\Mail\ContatoEmail;
use App\Models\Contato;
use App\Models\new_letter;
use Illuminate\Contracts\Validation\Validator as ValidationValidator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContatoDoController extends Controller
{
    public function index(){
        return view('site.contato');
    }


    public function salvarNoBanco(Request $request){

        $dados = $request->json()->all();

        $validarDados = Validator::make($dados, [

            'nomeContato' => 'required|max:100',
            'emailContato' => 'required|email|max:100',
            'foneContato' => 'required|max:10',
            'assuntoContato' => 'required|max:100',
            'mensContato' => 'required',

        ]);


        if ($validarDados->fails()) {
        return response()->json(['errors' => $validarDados->errors()], 422);

        } else {


        $contato = Contato::create($validarDados->validated());

        // por email

        Mail::to('ascensaodev@smpsistema.com.br')->send(new ContatoEmail($contato));

        return response()->json(['sucess' => 'Email registrado com sucesso!']);


    }


    }




     //------------------
    //newsletter
    //------------------

    public function salvarEmail(Request $request1)
    {

        //dd($request1);
        $dados = $request1->json()->all();

        $validarDadosNew = Validator::make($dados, [
            'emailNews' => 'required|email|max:100'
        ]);

        if ($validarDadosNew->fails()) {
            return response()->json(['errors' => $validarDadosNew->errors()], 422);
        } else {

            new_letter::create($validarDadosNew->validated());

            return response()->json(['sucess' => 'Email salvo com sucesso!']);


        }
    }



}








    // public function salvarEmail(Request $request){

    //     $request->validate([
    //        'emailnew' =>'required|email',
    //     ]);

    //     try {
    //         Mail::to($email)->send(new NomeDoEmail());
    //     } catch (\Exception $e) {


    //     Log::error('Erro ao enviar e-mail: ' . $e->getMessage());

    //     $email = $request->input('emailnew');

    //    // Mail::to($email)->send(new NomeDoEmail());//


    //     return redirect()->back()->with('success','Inscrição na newsletter realizada com sucesso!');

    //     return redirect()->back()->with('error', 'Erro ao processar inscrição na newsletter. Por favor, tente novamente.');




    // }

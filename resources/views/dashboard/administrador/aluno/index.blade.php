@extends('layoutdash.layout')

@section('conteudo-dash')

<link rel="stylesheet" href="{{ asset ('assets/css/estilodash.css') }}">


<div class="widget pad50-65">
 <a href="{{ route('dashboard.administrador.aluno.cad') }}" class="btn btn-success btnAluno">Novo Aluno</a>
 <table class="table">
 <thead class="thead-inverse">
    <tr>

        <th>Nome</th>
        <th>Email</th>
        <th>telefone Aluno</th>
        <th>Objetivo Aluno</th>
    </tr>
 </thead>
   <tbody>
    @foreach($alunos as $aluno)

     <td>{{ $aluno->nomeAlunoo }}</td>
     <td>{{ $aluno->emailAlunoo }}</td>
     <td>{{ $aluno->telefoneAlunoo }}</td>
     <td>{{ $aluno->objetivoAlunoo}}</td>
    <td><a href="{{ route('dashboard.administrador.aluno.edit', $aluno->idAlunoo) }}"
        class="btn btn-primary">Editar</a></td>
        <td>
            <form action="{{ route('dashboard.administrador.aluno.desativar', $aluno->idAlunoo) }}" method="POST"
             style="display: inline;">
             @csrf
             @method('PUT')
             <button type="submit" onclick="return confirm ('Quer mesmo desativar o Aluno')" class="btn btn-danger">Excluir</button>
            </form>
        </td>
    </tr>
  @endforeach
   </tbody>
 </table>

</div>




@endsection

@extends('layoutdash.layout')

@section('conteudo-dash')

<link rel="stylesheet" href="{{ asset ('assets/css/estilodash.css') }}">


<div class="widget pad50-65">
 <a href="#" class="btn btn-success btnAluno">Novo Aluno</a>
 <table class="table">
 <thead class="thead-inverse">
    <tr>
        <th>Foto</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Fone</th>
        <th>Atualizar</th>
        <th>Desativar</th>
    </tr>
 </thead>
   <tbody>
    @foreach($alunos as $aluno)
    <tr class="layoutTd">
    <td><img src="{{ asset('dash/imagem/') . $aluno->fotoAluno}}"  alt="Foto do Aluno" style="width: 100px;"></td>
     <td>{{ $aluno->nomeAlunoo }}</td>
     <td>{{ $aluno->emailAlunoo }}</td>
     <td>{{ $aluno->telefoneAlunoo }}</td>
     <td>{{ $aluno->objetivoAlunoo}}</td>
    <td>{{ $aluno->planoAlunoo }}</td>
    <td><a href="{{ route('admin.aluno.edit', $aluno->idAlunoo) }}"
        class="btn btn-primary"></a></td>
        <td>
            <form action="{{ route('admin.aluno.desativar', $aluno->idAlunoo) }}" method="POST"
             style="display: inline;">
             @csrf
             @method('DELETE')
             <button type="submit" class="btn btn-danger">Excluir</button>
            </form>
        </td>
    </tr>
  @endforeach
   </tbody>
 </table>

</div>




@endsection

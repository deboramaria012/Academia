@extends('layoutdash.layout')

@section('conteudo-dash')



<!-- painel de opções -->
<div class="pg-tp">
    <i class="ion-cube"></i>
    <div class="pr-tp-inr">
     <h4>LISTA DE FUNCIONÁRIOS</h4>
     <h6>Usuario:</h6>
     <span>Nome:<strong>{{ $func->nome_funcionario }}</strong> | Cargo:
      <strong>{{ $func->cargo_funcionario }}</strong> |Tipo:
       <strong>{{ $func->tipo_funcionario}}</strong></span>
    </div>
</div>
<!-- topo da página -->


<div class="widget pad50-65">
    <a href="{{ route('admin.aluno.create') }}" class="btn btn-success btnAluno">Novo Aluno</a>
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
        @foreach($listaFunc as $func)
        <tr class="layoutTd">
        <td><img src="{{ asset('dash/imagem/') . $func->foto_funcionario}}"  alt="Foto do Aluno" style="width: 100px;"></td>
         <td>{{ $func->nomefuncionario }}</td>
         <td>{{ $func->emailfuncionario }}</td>
         <td>{{ $func->fonefuncionario }}</td>
        <td><a href="{{ route('admin.funcionario.edit', $func->idFuncionario) }}"
            class="btn btn-primary"></a></td>
            <td>
                <form action="{{ route('admin.funcionario.desativar', $func->idFuncionario) }}" method="POST"
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

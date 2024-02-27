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
    @foreach($listaFunc as $func)
    <tr class="layoutTd">
    <td><img src="{{ asset('dash/imagem/') .$func->foto_funcionario}}" alt="Foto do Aluno" style="width: 100px;"></td>
     <td>{{ $func->nome_funcionario }}</td>
     <td>{{ $func->email_funcionario }}</td>
     <td>{{ $func->fone_funcionario }}</td>
    <td><a href="{{ route('admin.func.edit', $func->if_funcionario) }}"
        class="btn btn-primary"></a></td>
        <td>
            <form action="{{ route('admin.func.desativar', $func->id_funcionario) }}" method="POST" style="display: inline;">
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

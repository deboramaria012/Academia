@extends('layoutdash.layout')

@section('conteudo-dash')

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        padding: 20px;
    }
    form {
        background-color: #fff;
        border-radius: 5px;
        padding: 20px;
        box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
        width: 93%;
        margin: auto;
    }
    form div {
        margin-bottom: 15px;
    }
    label {
        display: block;
        font-weight: bold;
    }
    input[type="text"],
    input[type="email"] {
        width: calc(100% - 10px);
        padding: 8px;
        border-radius: 5px;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }
    .invalid-feedback {
        color: #3a5f7c;
    }
    button[type="submit"] {
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        padding: 10px 20px;
        cursor: pointer;
    }
    button[type="submit"]:hover {
        background-color: #0056b3;
    }
</style>

<body>
    <h1>Editar Funcionário</h1>

    <form action="{{ route ('dashboard.administrador.aluno.update', $Aluno->idAlunoo) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="nomeAlunoo">Nome:</label>
            <input type="text" id="nomeAlunoo" name="nomeAlunoo" value="{{ old('nomeAlunoo', $Aluno->nomeAlunoo) }}" required>
            @error('nomeAlunoo')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="emailAlunoo">Email:</label>
            <input type="email" id="emailAlunoo" name="emailAlunoo" value="{{ old('emailAlunoo', $Aluno->emailAlunoo) }}">
        </div>
        <div>
            <label for="dataInscricaoAlunoo">dataInscricaoAluno:</label>
            <input type="text" id="dataInscricaoAlunoo" name="dataInscricaoAlunoo" value="{{ old('dataInscricaoAlunoo', $Aluno->dataInscricaoAlunoo) }}">
        </div>
        <div>
            <label for="statusAlunoo">Status do Aluno:</label>
            <select id="statusAlunoo" name="statusAlunoo">
                <option value="ativo" @if($Aluno->statusAlunoo == 'ativo') selected @endif>Ativo</option>
                <option value="inativo" @if($Aluno->statusAlunoo == 'inativo') selected @endif>Inativo</option>
            </select>
        </div>

        <button type="submit">Atualizar</button>
    </form>
</body>

@extends('layoutdash.layout')

@section('conteudo-dash')

<style>


/* Container style */
.painel-content {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    background-color: #f9f9f9;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

/* Form label style */
label {
    font-weight: bold;
    margin-bottom: 5px;
}

/* Input style */
input[type="text"],
input[type="email"],
input[type="tel"],
input[type="date"],
input[type="datetime-local"] {
    width: 100%;
    padding: 8px;
    margin-bottom: 15px;
    border-radius: 5px;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Error message style */
.invalid-feedback {
    color: red;
    font-size: 12px;
}

/* Submit button style */
button {
    display: block;
    width: 100%;
    padding: 10px;
    background-color: #4CAF50;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #45a049;
}


</style>

<!-- painel de opções -->
<div class="pg-tp">
    <i class="ion-cube"></i>
    <div class="pr-tp-inr">
     <h4>CADASTRO DE ALUNOS</h4>
     <h6>Usuario:</h6>
     <span>Nome:<strong>{{ $alunos->nome_funcionario }}</strong> | Cargo:
      <strong>{{ $alunos->cargo_funcionario }}</strong> |Tipo:
       <strong>{{ $alunos->tipo_funcionario}}</strong></span>
    </div>
</div>
<!-- topo da página -->
</style>

<div class="painel-content">
    <div class="filter-items">
        <div class="row grid wrap mrg20">
            <form class="form-wrp" action="{{ route('dashboard.administrador.aluno.index') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <label for="nomeAlunoo">Nome:</label>
                <input type="text" id="nomeAlunoo" name="nomeAlunoo" required maxlength="100"><br>
                @error ('nomeAlunoo')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror

                <label for="emailAlunoo">Email:</label>
                <input type="email" id="emailAlunoo" name="emailAlunoo" required maxlength="100"><br>
                @error ('emailAlunoo')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror

                <label for="dataNascAlunoo">Data de Nascimento:</label>
                <input type="date" id="dataNascAlunoo" name="dataNascAlunoo" required><br>
                @error ('dataNascAlunoo')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror

                <label for="telefoneAlunoo">Telefone:</label>
                <input type="tel" id="telefoneAlunoo" name="telefoneAlunoo" required maxlength="20"><br>
                @error ('telefoneAlunoo')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror

                <label for="enderecoAlunoo">Endereço Aluno:</label>
                <input type="text" id="enderecoAlunoo" name="enderecoAlunoo" required maxlength="100"><br>
                @error ('enderecoAlunoo')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror

                <label for="cidadeAlunoo">Cidade Aluno:</label>
                <input type="text" id="cidadeAlunoo" name="cidadeAlunoo" required maxlength="100"><br>
                @error ('cidadeAlunoo')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror

                <label for="estadoAlunoo">Estado:</label>
                <input type="text" id="estadoAlunoo" name="estadoAlunoo" required maxlength="100"><br>
                @error ('estadoAlunoo')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror

                <label for="cepAlunoo">CEP:</label>
                <input type="text" id="cepAlunoo" name="cepAlunoo" required maxlength="10"><br>
                @error ('cepAlunoo')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror

                <label for="dataInscricaoAluno">Data de Inscricao Aluno:</label>
                <input type="date" id="dataInscricaoAluno" name="dataInscricaoAluno" required><br>
                @error ('dataInscricaoAluno')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror

                <label for="alturaAlunoo">Altura Aluno:</label>
                <input type="text" id="alturaAlunoo" name="alturaAlunoo" required maxlength="50"><br>
                @error ('alturaAlunoo')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror

                <label for="pesoAlunoo">Peso Aluno:</label>
                <input type="text" id="pesoAlunoo" name="pesoAlunoo" required maxlength="100"><br>
                @error ('pesoAlunoo')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror

                <label for="objetivoAlunoo">Objetivo Aluno:</label>
                <input type="text" id="objetivoAlunoo" name="objetivoAlunoo" required maxlength="100"><br>
                @error ('objetivoAlunoo')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror

                <label for="planoAlunoo">plano:</label>
                <input type="text" id="planoAlunoo" name="planoAlunoo" required maxlength="20"><br>
                @error ('planoAlunoo')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror


                <label for="statusAlunoo">status:</label>
                <input type="text" id="statusAlunoo" name="statusAlunoo" required maxlength="20"><br>
                @error ('statusAlunoo')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror

                <label for="criado_em_Alunoo">Criado Em:</label>
                <input type="datetime-local" id="criado_em_Alunoo" name="criado_em_Alunoo" required><br>
                @error ('criado_em_Alunoo')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror

                <label for="atualizado_em_Alunoo">Atualizado Em:</label>
                <input type="datetime-local" id="atualizado_em_Alunoo" name="atualizado_em_Alunoo" required><br>
                @error ('atualizado_em_Alunoo')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror

              <div class="col-md-12 col-sm-12 col-lg-12">
             <button class="green-bg brd-rd5" type="submit">
              <i class="fa fa-paper-plane"></i>Cadastro do Aluno</button>
         </div>

</form>




@endsection

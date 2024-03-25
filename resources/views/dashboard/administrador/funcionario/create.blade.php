
@extends('layoutdash.layout')

@section('conteudo-dash')

<style>


/* Estilos para o formulário */
.form-wrp {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #f9f9f9;
}

/* Estilos para os rótulos */
.form-wrp label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

/* Estilos para as entradas de texto */
.form-wrp input[type="text"],
.form-wrp input[type="email"],
.form-wrp input[type="tel"],
.form-wrp input[type="date"],
.form-wrp input[type="datetime-local"] {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

/* Estilos para a mensagem de feedback de erro */
.form-wrp .invalid-feedback {
    color: red;
    font-size: 12px;
    margin-top: 5px;
}

/* Estilos para o botão de envio */
.form-wrp button[type="submit"] {
    background-color: #4CAF50;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 4px;
    cursor: pointer;
}

.form-wrp button[type="submit"]:hover {
    background-color: #45a049;
}


/* Estilos adicionais conforme necessário */

</style>

<!-- painel de opções -->

<!-- topo da página -->
</style>

     <h1>Cadastro De Funcionario</h1>

<div class="painel-content">
    <div class="filter-items">
        <div class="row grid wrap mrg20">
            <form class="form-wrp" action="{{ route('dashboard.administrador.funcionario.cad') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <label for="nomeFuncionario">Nome:</label>
                <input type="text" id="nomeFuncionario" name="nomeFuncionario" required maxlength="100"><br>
                @error ('nomeFuncionario')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror

                <label for="emailFuncionario">Email:</label>
                <input type="email" id="emailFuncionario" name="emailFuncionario" required maxlength="100"><br>
                @error ('emailFuncionario')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror

                <label for="dataNascFuncionario">Data de Nascimento:</label>
                <input type="date" id="dataNascFuncionario" name="dataNascFuncionario" required><br>
                @error ('dataNascFuncionario')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror

                <label for="telefoneFuncionario">Telefone:</label>
                <input type="tel" id="telefoneFuncionario" name="telefoneFuncionario" required maxlength="20"><br>
                @error ('telefoneFuncionario')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror

                <label for="enderecoFuncionario">Endereço:</label>
                <input type="text" id="enderecoFuncionario" name="enderecoFuncionario" required maxlength="100"><br>
                @error ('enderecoFuncionario')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror

                <label for="cidadeFuncionario">Cidade:</label>
                <input type="text" id="cidadeFuncionario" name="cidadeFuncionario" required maxlength="100"><br>
                @error ('cidadeFuncionario')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror

                <label for="estadoFuncionario">Estado:</label>
                <input type="text" id="estadoFuncionario" name="estadoFuncionario" required maxlength="100"><br>
                @error ('estadoFuncionario')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror

                <label for="cepFuncionario">CEP:</label>
                <input type="text" id="cepFuncionario" name="cepFuncionario" required maxlength="10"><br>
                @error ('cepFuncionario')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror

                <label for="dataContratoFuncionario">Data de Contrato:</label>
                <input type="date" id="dataContratoFuncionario" name="dataContratoFuncionario" required><br>
                @error ('dataContratoFuncionario')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror

                <label for="cargoFuncionario">Cargo:</label>
                <input type="text" id="cargoFuncionario" name="cargoFuncionario" required maxlength="50"><br>
                @error ('cargoFuncionario')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror

                <label for="salarioFuncionario">Salário:</label>
                <input type="text" id="salarioFuncionario" name="salarioFuncionario" required maxlength="100"><br>
                @error ('salarioFuncionario')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror

                <label for="tipoFuncionario">Tipo de Funcionário:</label>
                <input type="text" id="tipoFuncionario" name="tipoFuncionario" required maxlength="100"><br>
                @error ('tipoFuncionario')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror

                <label for="statusFuncionario">Status:</label>
                <input type="text" id="statusFuncionario" name="statusFuncionario" required maxlength="20"><br>
                @error ('statusFuncionario')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror

                <label for="criadoEm">Criado Em:</label>
                <input type="datetime-local" id="criadoEm" name="criadoEm" required><br>
                @error ('criadoEm')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror

                <label for="atualizadoEm">Atualizado Em:</label>
                <input type="datetime-local" id="atualizadoEm" name="atualizadoEm" required><br>
                @error ('atualizadoEm')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror

              <div class="col-md-12 col-sm-12 col-lg-12">
            <button class="green-bg brd-rd5" type="submit">
              <i class="fa fa-paper-plane"></i>Cadastro do Funcionario</button>
         </div>

</form>




@endsection






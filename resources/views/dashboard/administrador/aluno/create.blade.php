@extends('layoutdash.layout')

@section('conteudo-dash')

<style>
    /* Estilos para o formulário de cadastro de alunos */

.painel-content {
    margin: 20px;
}

.filter-items {
    background-color: #f9f9f9;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.form-wrp {
    margin-bottom: 20px;
}

.row {
    margin-bottom: 10px;
}

.brd-rd5 {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.invalid-feedback {
    display: block;
    color: red;
    margin-top: 5px;
}

/* Estilos adicionais conforme necessário */

</style>

<!-- painel de opções -->
<div class="pg-tp">
    <i class="ion-cube"></i>
    <div class="pr-tp-inr">
     <h4>CADASTRO DE ALUNOS</h4>
     <h6>Usuario:</h6>
     <span>Nome:<strong>{{ $func->nome_funcionario }}</strong> | Cargo:
      <strong>{{ $func->cargo_funcionario }}</strong> |Tipo:
       <strong>{{ $func->tipo_funcionario}}</strong></span>
    </div>
</div>
<!-- topo da página -->
</style>

<<div class="painel-content">
    <div class="filter-items">
        <div class="row grid wrap mrg20">
            <form class="form-wrp" action="{{ route('admin.aluno.index') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row mrg-20">
                    <div class="col-md-6 col-sm-6 col-lg-6">
                        <input class="brd-rd5 @error('nomeAlunoo') is-invalid @enderror" type="text" id="nomeAlunoo" name="nomeAlunoo" value="{{ old('nomeAlunoo') }}" required placeholder="Nome do Aluno">
                        @error('nomeAlunoo')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6">
                        <input class="brd-rd5 @error('emailAlunoo') is-invalid @enderror" type="email" id="emailAluno" name="emailAluno" value="{{ old('emailAlunoo') }}" required placeholder="E-mail do Aluno">
                        @error('emailAlunoo')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="row mrg-20">
                    <div class="col-md-6 col-sm-6 col-lg-6">
                        <input class="brd-rd5 @error('dataNascAluno') is-invalid @enderror" type="text" id="dataNascAlunoo" name="dataNascAlunoo" value="{{ old('dataNascAlunoo') }}" required placeholder="Data de Nascimento do Aluno">
                        @error('dataNascAlunoo')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6">
                        <input class="brd-rd5 @error('foneAlunoo') is-invalid @enderror" type="text" id="foneAlunoo" name="foneAluno" value="{{ old('foneAlunoo') }}" required placeholder="Telefone do Aluno">
                        @error('foneAlunoo')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="row mrg-20">
                    <div class="col-md-6 col-sm-6 col-lg-6">
                        <input class="brd-rd5 @error('endAlunoo') is-invalid @enderror" type="text" id="endAlunoo" name="endAlunoo" value="{{ old('endAlunoo') }}" required placeholder="Endereço do Aluno">
                        @error('endAlunoo')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6">
                        <input class="brd-rd5 @error('cidadeAlunoo') is-invalid @enderror" type="text" id="cidadeAlunoo" name="cidadeAlunoo" value="{{ old('cidadeAlunoo') }}" required placeholder="Cidade do Aluno">
                        @error('cidadeAlunoo')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="row mrg-20">
                    <div class="col-md-6 col-sm-6 col-lg-6">
                        <input class="brd-rd5 @error('estadoAlunoo') is-invalid @enderror" type="text" id="estadoAlunoo" name="estadoAlunoo" value="{{ old('estadoAlunoo') }}" required placeholder="Estado do Aluno">
                        @error('estadoAlunoo')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6">
                        <input class="brd-rd5 @error('cepAlunoo') is-invalid @enderror" type="text" id="cepAlunoo" name="cepAlunoo" value="{{ old('cepAlunoo') }}" required placeholder="CEP do Aluno">
                        @error('cepAlunoo')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="row mrg-20">
                    <div class="col-md-6 col-sm-6 col-lg-6">
                        <input class="brd-rd5 @error('dataInscricaoAluno') is-invalid @enderror" type="text" id="dataInscricaoAluno" name="dataInscricaoAluno" value="{{ old('dataInscricaoAluno') }}" required placeholder="Data de Inscrição do Aluno">
                        @error('dataInscricaoAluno')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6">
                        <input class="brd-rd5 @error('alturaAlunoo') is-invalid @enderror" type="text" id="alturaAlunoo" name="alturaAlunoo" value="{{ old('alturaAlunoo') }}" required placeholder="Altura do Aluno">
                        @error('alturaAlunoo')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="row mrg-20">
                    <div class="col-md-6 col-sm-6 col-lg-6">
                        <input class="brd-rd5 @error('pesoAlunoo') is-invalid @enderror" type="text" id="pesoAlunoo" name="pesoAlunoo" value="{{ old('pesoAlunoo') }}" required placeholder="Peso do Aluno">
                        @error('pesoAlunoo')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6">
                        <input class="brd-rd5 @error('objetivoAlunoo') is-invalid @enderror" type="text" id="objetivoAlunoo" name="objetivoAlunoo" value="{{ old('objetivoAlunoo') }}" required placeholder="Objetivo do Aluno">
                        @error('objetivoAlunoo')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="row mrg-20">
                    <div class="col-md-6 col-sm-6 col-lg-6">
                        <input class="brd-rd5 @error('planoAlunoo') is-invalid @enderror" type="text" id="planoAlunoo" name="planoAlunoo" value="{{ old('planoAlunoo') }}" required placeholder="Plano do Aluno">
                        @error('planoAlunoo')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6">
                        <input class="brd-rd5 @error('statusAlunoo') is-invalid @enderror" type="text" id="statusAlunoo" name="statusAlunoo" value="{{ old('statusAlunoo') }}" required placeholder="Status do Aluno">
                        @error('statusAlunoo')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="col-md-12 col-sm-12 col-lg-12">
                 <div class="file-upload-box">
                <strong>Carregar Foto:</strong>
                <div class="file-box" id="fotoBox">
                <div class="foto-placeholder" id="fotoPlaceholder">
                    <label for="fotoAlunoo" class="blue-bg brd-rds">
                    <img src="{{ asset('') }}" alt="Foto do Aluno">
                    </label>
                    <input type="file" id="fotoAlunoo" name="fotoAlunoo"
                     onchange="exibirFoto()" style="display:none;">
                </div>
                </div>
              </div>
                </div>

                <div id="fotoPreview" style="display: none;">
                    <img id="fotoPreviewImg" src="#" alt="Foto do Aluno">
                </div>
                @error('fotoAlunoo')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror

        </div>
    </div>
</div>
        <div class="col-md-12 col-sm-12 col-lg-12">
        <button class="green-bg brd-rd5" type="submit">
         <i class="fa fa-paper-plane"></i>Cadastro do Aluno</button>
        </div>

</form>




@endsection

@extends('layoutdash.layout')

@section('conteudo-dash')

<link rel="stylesheet" href="{{ asset ('assets/css/estilodash.css') }}">

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








@endsection

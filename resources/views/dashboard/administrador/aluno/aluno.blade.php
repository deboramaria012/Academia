@extends('layoutdash.layout')

@section('conteudo-dash')

<link rel="stylesheet" href="{{ asset ('assets/css/estilodash.css') }}">

<h1>ALUNO</h1>

<a href="{{ route('sair') }}" class="btn btn-danger">SAIR</a>


@endsection

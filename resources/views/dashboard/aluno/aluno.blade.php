@extends('layoutdash.layout')

@section('conteudo-dash')

<link rel="stylesheet" href="{{ asset ('assets/css/estilodash.css') }}">

     <nav class="main-menu">
        <h1>Fitness App</h1>
        <img class="logo" src="{{ asset('assets/logovivabem.png') }}" alt="" />
        <ul>
            <li class="nav-item active">
                <b></b>
                <b></b>
                <a href="#">
                    <i class="fa fa-house nav-icon"></i>
                    <span class="nav-text">Home</span>
                </a>
            </li>
            <li class="nav-item">
                <b></b>
                <b></b>
                <a href="#">
                    <i class="fa fa-user nav-icon"></i>
                    <span class="nav-text">Perfil</span>
                </a>
            </li>
            <li class="nav-item">
                <b></b>
                <b></b>
                <a href="#">
                    <i class="fa fa-calendar-check nav-icon"></i>
                    <span class="nav-text">Agendar</span>
                </a>
            </li>
            <li class="nav-item">
                <b></b>
                <b></b>
                <a href="#">
                    <i class="fa fa-person-running nav-icon"></i>
                    <span class="nav-text">Atividades</span>
                </a>
            </li>
            <li class="nav-item">
                <b></b>
                <b></b>
                <a href="#">
                    <i class="fa fa-sliders nav-icon"></i>
                    <span class="nav-text">Configurações</span>
                </a>
            </li>
        </ul>
    </nav>

@endsection

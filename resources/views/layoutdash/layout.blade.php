
<link rel="stylesheet" href="{{ asset('assets/css/estilodash.css') }}">


<body>
    <main>
        <nav class="main-menu">
            <img class="logo"
                src="{{ asset('https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/4cfdcb5a-0137-4457-8be1-6e7bd1f29ebb')}}"
                alt />
            @if (session('tipoFuncionario') == 'Aluno')
                <h1>Aluno<br></h1>
                <ul>
                    <li class="nav-item active">
                        <b></b>
                        <b></b>
                        <a href="#">
                            <i class="fa-solid fa-user nav-icon"></i>
                            {{-- <i class="fa fa-house "></i> --}}
                            <span class="nav-text">Perfil</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <b></b>
                        <b></b>
                        <a href="#">
                            <i class="fa fa-user nav-icon"></i>
                            <span class="nav-text">Meus treinos</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <b></b>
                        <b></b>
                        <a href="#">
                            <i class="fa fa-calendar-check nav-icon"></i>
                            <span class="nav-text">Agendamentos</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <b></b>
                        <b></b>
                        <a href="#">
                            <i class="fa fa-person-running nav-icon"></i>
                            <span class="nav-text">Pagamentos</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <b></b>
                        <b></b>
                        <a href="#">
                            <i class="fa fa-sliders nav-icon"></i>
                            <span class="nav-text">Cronograma</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <b></b>
                        <b></b>
                        <a href="#">
                            <i class="fa fa-sliders nav-icon"></i>
                            <span class="nav-text">Meus</span>
                        </a>
                    </li>

                    <li class="nav-item-gaby">
                        <b></b>
                        <b></b>
                        <a href="{{ route('sair') }}">
                            <i class="fa fa-sliders nav-icon"></i>
                            <span class="nav-text">Sair</span>

                            {{-- <a href="{{ route('sair') }}" class="btn btn-danger">SAIR</a> --}}
                        </a>
                    </li>
                </ul>
            @elseif(session('tipoFuncionario') == 'administrativo')
                <h1>administrativo<br></h1>
                <ul>
                    <li class="nav-item active">
                        <b></b>
                        <b></b>
                        <a href="#">
                            <i class="fa-solid fa-user nav-icon"></i>
                            {{-- <i class="fa fa-house "></i> --}}
                            <span class="nav-text">Perfil</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <b></b>
                        <b></b>
                        <a href="#">
                            <i class="fa fa-user nav-icon"></i>
                            <span class="nav-text">Alunos</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <b></b>
                        <b></b>
                        <a href="#">
                            <i class="fa fa-person-running nav-icon"></i>
                            <span class="nav-text">Treinos</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <b></b>
                        <b></b>
                        <a href="#">
                            <i class="fa fa-sliders nav-icon"></i>
                            <span class="nav-text">Cronograma</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <b></b>
                        <b></b>
                        <a href="#">
                            <i class="fa fa-sliders nav-icon"></i>
                            <span class="nav-text">Serviços</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <b></b>
                        <b></b>
                        <a href="#">
                            <i class="fa fa-sliders nav-icon"></i>
                            <span class="nav-text">sla</span>
                        </a>
                    </li>

                    <li class="nav-item-gaby">
                        <b></b>
                        <b></b>
                        <a href="{{ route('sair') }}">
                            <i class="fa fa-sliders nav-icon"></i>
                            <span class="nav-text">Sair</span>

                            {{-- <a href="{{ route('sair') }}" class="btn btn-danger">SAIR</a> --}}
                        </a>
                    </li>
                </ul>
            @elseif(session('tipoFuncionario') == 'instrutor')
                <h1>Funcionário<br></h1>
                <ul>
                    <li class="nav-item active">
                        <b></b>
                        <b></b>
                        <a href="#">
                            <i class="fa-solid fa-user nav-icon"></i>
                            {{-- <i class="fa fa-house "></i> --}}
                            <span class="nav-text">Perfil</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <b></b>
                        <b></b>
                        <a href="#">
                            <i class="fa fa-user nav-icon"></i>
                            <span class="nav-text">Alunos</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <b></b>
                        <b></b>
                        <a href="#">
                            <i class="fa fa-calendar-check nav-icon"></i>
                            <span class="nav-text">Funcionários</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <b></b>
                        <b></b>
                        <a href="#">
                            <i class="fa fa-person-running nav-icon"></i>
                            <span class="nav-text">Treinos</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <b></b>
                        <b></b>
                        <a href="#">
                            <i class="fa fa-sliders nav-icon"></i>
                            <span class="nav-text">Cronograma</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <b></b>
                        <b></b>
                        <a href="#">
                            <i class="fa fa-sliders nav-icon"></i>
                            <span class="nav-text">Pendências</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <b></b>
                        <b></b>
                        <a href="#">
                            <i class="fa fa-sliders nav-icon"></i>
                            <span class="nav-text">Pagamentos</span>
                        </a>
                    </li>

                    <li class="nav-item-gaby">
                        <b></b>
                        <b></b>
                        <a href="{{ route('sair') }}">
                            <i class="fa fa-sliders nav-icon"></i>
                            <span class="nav-text">Sair</span>

                            {{-- <a href="{{ route('sair') }}" class="btn btn-danger">SAIR</a> --}}
                        </a>
                    </li>
                </ul>
        </nav>
        @endif


        <h4></h4>
        

        <section class="">
            @yield('conteudo-dash')
        </section>

    </main>

</body>

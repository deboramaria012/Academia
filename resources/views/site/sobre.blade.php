@extends('layout.layout')

@section('title','sobre')

@section('conteudo')


<div class="mobile-menu-wrapper">
    <div class="mobile-menu-area text-center">
        <button class="menu-toggle"><i class="fal fa-times"></i></button>
        <div class="mobile-logo">
            <a href="index.html"><img src="{{ asset('assets/img/logoVivaBem.svg') }}" alt="logo vivabem"></a>
        </div>
        <div class="mobile-menu">
            <ul>
                <li class="menu-item-has-children">
                    <a href="#">Home</a>
                    <ul class="sub-menu">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                    </ul>
                </li>

                </li>
                <li class="menu-item-has-children">
                    <a href="#">Project</a>
                    <ul class="sub-menu">
                        <li><a href="project.html">Projects</a></li>
                        <li><a href="project-details.html">Project Details</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children">
                    <a href="#">Service</a>
                    <ul class="sub-menu">
                        <li><a href="service.html">Service</a></li>
                        <li><a href="service-details.html">Service Details</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children">
                    <a href="#">Blog</a>
                    <ul class="sub-menu">
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="blog-2.html">Blog 02</a></li>
                        <li><a href="blog-details.html">Blog Details</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ url('/contato') }}">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!--==============================
Header Area
==============================-->
<header class="nav-header header-layout2">
    <div class="header-top d-lg-block d-none">
        <div class="container-fluid">
            <div class="row justify-content-center justify-content-lg-between align-items-center gy-2">
                <div class="col-auto d-none d-lg-block">
                    <div class="header-links">
                        <ul>
                            <li><i class="far fa-envelope"></i><a href="mailto:info@gmail.com">support@gmail.com</a></li>
                            <li><i class="far fa-clock"></i>Mon - Sat: 8.00 am-7.00 pm</li>
                        </ul>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="header-links">
                        <ul>
                            <li>
                                <div class="social-links">
                                    <span class="me-3">Visite nossas páginas sociais</span>
                                    <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="https://www.pinterest.com/"><i class="fab fa-pinterest-p"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sticky-wrapper">
        <!-- Main Menu Area -->
        <div class="menu-area">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-lg-start justify-content-between">
                    <div class="col-auto">
                        <div class="header-logo">
                         <a href="index.html"><img src= "{{ asset ('assets/img/logovivabem.png') }}" alt=""></a>
                        </div>
                    </div>
                    <div class="col-auto m-lg-auto">
                        <nav class="main-menu d-none d-lg-inline-block">
                            <ul>

                                <li class="menu-item-has-children">
                                    <a href="#">Home</a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="{{ url('/') }}">Home</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{ url ('/sobre') }}">Sobre</a>
                                </li>

                                <li class="menu-item-has-children">
                                    <a href="#">Service</a>
                                    <ul class="sub-menu">
                                        <li><a href="service.html">Service</a></li>
                                        <li><a href="service-details.html">Service Details</a></li>
                                    </ul>
                                </li>

                               <li class="menu-item-has-children">
                                <a href="{{ url('/modalidade') }}">Modalidade</a>
                                <ul class="sub-menu">
                              <li><a href="{{ url('/modalidade/musculacao') }}">Musculação</a></li>

                              <li><a href="{{ url('/modalidade/aerobica') }}">Aeróbica</a></li>

                              <li><a href="{{ url('/modalidade/pilates') }}">Pilates</a></li>

                              <li><a href="{{ url('/modalidade/yoga') }}">Yoga</a></li>

                              <li><a href="{{ url('/modalidade/treinamentofuncional') }}">treinamento funcional</a></li>

                            </ul>
                          </li>

                                <li class="menu-item-has-children">
                                    <a href="{{ url('/treino')}}">Treino</a>
                                    <ul class="sub-menu">
                                     <li><a href="{{ url('/treino') }}">Treino</a></li>
                                    </ul>
                                </li>

                                <li class="menu-item-has-children">
                                    <a href="{{ url('/noticias') }}">Noticias</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ url('/noticias') }}">Noticias</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{ url('/contato') }}">Contato</a>
                                </li>
                            </ul>
                        </nav>
                        <div class="navbar-right d-inline-flex d-lg-none">
                            <button type="button" class="menu-toggle icon-btn"><i class="far fa-bars"></i></button>
                        </div>
                    </div>
                    <div class="col-auto d-xxl-block d-none">
                        <div class="navbar-right-desc">
                            <i class="fas fa-phone-volume"></i><a href="tel:+2590256215">+259 (0) 256 215</a>
                        </div>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <div class="header-button">
                            <a href="contact.html" class="btn style2 style-r0 d-xl-block d-none">
                                Get a Quote
                            </a>
                            <button type="button" class="btn style-r0 btn-border3 sideMenuToggler">
                                <i class="far fa-bars"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>




<div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcrumb-bg.png">
    <!-- bg animated image/ -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcumb-content">
                    <h1 class="breadcumb-title">Sobre Nós</h1>
                    <ul class="breadcumb-menu">
                        <li><a href="{{ url('/') }}">HOME</a></li>
                        <li class="active">Sobre Nós</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>

<!--==============================
About Area
==============================-->
<div class="space">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 order-lg-2 text-lg-end">
                <div class="about-thumb mb-5 mb-lg-0">
                    <img class="about-img-1" src="{{ asset('assets/img/imagem sobre 1.png') }}" alt="img">
                    <img class="about-img-2 jump" src="{{ asset('assets/img/imagem sobre.png') }}" alt="img">
                </div>
            </div>
            <div class="col-lg-6 order-lg-1">
                <div class="about-content-wrap">
                    <div class="title-area mb-0">
                        <span class="sub-title">MAIS SOBRE NÓS</span>
                        <h2 class="sec-title">Desbloqueie todo o seu potencial, alcance seus objetivos.</h2>
                        <p class="sec-text">Bem-vindo a academia vivabem. seu destino final para alcançar seus objetivos de condicionamento físico. Compreendemos a importância de levar um estilo de vida saudável e oferecemos instalações de fitness de alto nível para apoiá-lo em sua jornada de fitness.

                        </p>
                        <div class="about-tab-1">
                            <div class="filter-menu-active">
                                <button data-filter=".cat1" class="active" type="button">Nossa missão</button>
                                <button data-filter=".cat2" type="button">Nossa visão</button>
                                <button data-filter=".cat3" type="button">Nosso objetivo</button>
                            </div>
                            <div class="filter-active-cat1">
                                <div class="filter-item cat1">
                                    <div class="about-tab-icon">
                                        <img src="assets/img/icon/about-icon.svg" alt="img">
                                    </div>
                                    <p class="about-tab-text">Os ginásios desempenham um papel vital na promoção de um estilo de vida ativo e saudável. Eles fornecem um ambiente de apoio e motivação para os indivíduos praticarem atividades físicas regulares.
                                    </p>
                                </div>
                                <div class="filter-item cat2">
                                    <div class="about-tab-icon">
                                        <img src="assets/img/icon/about-icon.svg" alt="img">
                                    </div>
                                    <p class="about-tab-text">Os ginásios desempenham um papel vital na promoção de um estilo de vida ativo e saudável. Eles fornecem um ambiente de apoio e motivação para os indivíduos praticarem atividades físicas regulares.
                                    </p>
                                </div>
                                <div class="filter-item cat3">
                                    <div class="about-tab-icon">
                                        <img src="assets/img/icon/about-icon.svg" alt="img">
                                    </div>
                                    <p class="about-tab-text">Os ginásios desempenham um papel vital na promoção de um estilo de vida ativo e saudável. Eles fornecem um ambiente de apoio e motivação para os indivíduos praticarem atividades físicas regulares.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn-wrap mt-40">
                        <a href="about.html" class="btn">Marque uma consulta</a>
                        <div class="about-info-wrap">
                            <div class="icon"><i class="fas fa-phone-volume"></i></div>
                            <div class="details">
                                <p class="about-info-title">Preciso de ajuda?</p>
                                <a class="about-info-link" href="tel:+25825692582">(+258) 2569 2582</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--==============================
Service Area 02
==============================-->
<div class="service-area-2 space-bottom overflow-hidden">
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title">Nossos serviços</span>
            <h2 class="sec-title">Serviço que oferecemos</h2>
        </div>
    </div>
    <div class="container">
        <div class="row global-carousel service-slider-2 slider-shadow" data-slide-show="3" data-ml-slide-show="3" data-lg-slide-show="3" data-md-slide-show="2" data-sm-slide-show="1" data-xs-slide-show="1" data-dots="false">
            <div class="col-lg-4 col-md-6">
                <div class="service-card style2">
                    <div class="service-card_icon">
                        <img src="assets/img/icon/service-icon_2-1.svg" alt="img">
                    </div>
                    <div class="service-card_content">
                        <h4 class="service-card_title h5"><a href="service-details.html">Gym Fitness Class</a></h4>
                        <p class="service-card_text">Treinos de alta intensidade que alternam entre rajadas intensas de exercício e
                            curtos períodos de recuperação...</p>
                        <a href="service-details.html" class="link-btn" tabindex="0"><i class="fas fa-arrow-right"></i> consulte Mais informação</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-card style2">
                    <div class="service-card_icon">
                        <img src="assets/img/icon/service-icon_2-2.svg" alt="img">
                    </div>
                    <div class="service-card_content">
                        <h4 class="service-card_title h5"><a href="service-details.html">Power Lifting</a></h4>
                        <p class="service-card_text">Treinos de alta intensidade que alternam entre rajadas intensas de exercício e
                            curtos períodos de recuperação...</p>
                        <a href="service-details.html" class="link-btn" tabindex="0"><i class="fas fa-arrow-right"></i>consulte mais informação</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-card style2">
                    <div class="service-card_icon">
                        <img src="assets/img/icon/service-icon_2-3.svg" alt="img">
                    </div>
                    <div class="service-card_content">
                        <h4 class="service-card_title h5"><a href="service-details.html">Body Building</a></h4>
                        <p class="service-card_text">Treinos de alta intensidade que alternam entre rajadas intensas de exercício e
                            curtos períodos de recuperação...</p>
                        <a href="service-details.html" class="link-btn" tabindex="0"><i class="fas fa-arrow-right"></i> Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-card style2">
                    <div class="service-card_icon">
                        <img src="assets/img/icon/service-icon_2-1.svg" alt="img">
                    </div>
                    <div class="service-card_content">
                        <h4 class="service-card_title h5"><a href="service-details.html">Gym Fitness Class</a></h4>
                        <p class="service-card_text">Treinos de alta intensidade que alternam entre rajadas intensas de exercício e
                            curtos períodos de recuperação...</p>
                        <a href="service-details.html" class="link-btn" tabindex="0"><i class="fas fa-arrow-right"></i> Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-card style2">
                    <div class="service-card_icon">
                        <img src="assets/img/icon/service-icon_2-2.svg" alt="img">
                    </div>
                    <div class="service-card_content">
                        <h4 class="service-card_title h5"><a href="service-details.html">Power Lifting</a></h4>
                        <p class="service-card_text">Treinos de alta intensidade que alternam entre rajadas intensas de exercício e
                            curtos períodos de recuperação...</p>
                        <a href="service-details.html" class="link-btn" tabindex="0"><i class="fas fa-arrow-right"></i> Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-card style2">
                    <div class="service-card_icon">
                        <img src="assets/img/icon/service-icon_2-3.svg" alt="img">
                    </div>
                    <div class="service-card_content">
                        <h4 class="service-card_title h5"><a href="service-details.html">Body Building</a></h4>
                        <p class="service-card_text">Treinos de alta intensidade que alternam entre rajadas intensas de exercício e
                            curtos períodos de recuperação...</p>
                        <a href="service-details.html" class="link-btn" tabindex="0"><i class="fas fa-arrow-right"></i> Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--==============================
Cta Area
==============================-->
<section class="cta-area space" data-bg-src="{{ asset('assets/img/sobre.png') }}">
    <div class="container">
        <div class="row justify-content-lg-end justify-content-center">
            <div class="col-xl-6 col-lg-8 col-md-10">
                <div class="cta-wrap text-center text-lg-start">
                    <div class="title-area">
                        <span class="sub-title">Marque uma consulta</span>
                        <h2 class="sec-title text-white">Obtenha uma consultoria gratuita
                            Agora mesmo aqui!</h2>
                    </div>
                    <div class="btn-wrap mt-40">
                        <a href="about.html" class="btn style2">Make Appointment</a>
                        <div class="about-info-wrap style3">
                            <div class="icon"><i class="fas fa-phone-volume"></i></div>
                            <div class="details">
                                <p class="about-info-title text-white">Need Help?</p>
                                <a class="about-info-link" href="tel:+25825692582">(+258) 2569 2582</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--==============================
Team Area
==============================-->
<div class="team-area-1 space">
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title">Nosso treinador</span>
            <h2 class="sec-title">Conheça nossa incrível equipe</h2>
        </div>
        <div class="row global-carousel team-slider-1 slider-shadow" data-slide-show="4" data-ml-slide-show="4" data-lg-slide-show="3" data-md-slide-show="2" data-sm-slide-show="1" data-xs-slide-show="1" data-center-mode="true">
            <div class="col-lg-4 col-md-6">
                <div class="team-card">
                    <div class="team-card_img">
                        <img src="{{ asset('assets/img/treinador2.png') }}" alt="img">
                    </div>
                    <div class="team-card_content">
                        <h4 class="team-card_title"><a href="team-details.html">George Thomas</a>
                        </h4>
                        <span class="team-card_desig">CEO/Founder</span>
                        <div class="social-btn">
                            <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                            <a href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                            <a href="https://www.discord.com/"><i class="fab fa-discord"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team-card">
                    <div class="team-card_img">
                        <img src="{{ asset('assets/img/treinador3.png') }}" alt="img">
                    </div>
                    <div class="team-card_content">
                        <h4 class="team-card_title"><a href="team-details.html">Mike Johnson</a>
                        </h4>
                        <span class="team-card_desig">CEO/Founder</span>
                        <div class="social-btn">
                            <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                            <a href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                            <a href="https://www.discord.com/"><i class="fab fa-discord"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team-card">
                    <div class="team-card_img">
                        <img src="{{ asset('assets/img/treinadora.png') }}" alt="img">
                    </div>
                    <div class="team-card_content">
                        <h4 class="team-card_title"><a href="team-details.html">Amelia Harper</a>
                        </h4>
                        <span class="team-card_desig">CEO/Founder</span>
                        <div class="social-btn">
                            <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                            <a href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                            <a href="https://www.discord.com/"><i class="fab fa-discord"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team-card">
                    <div class="team-card_img">
                        <img src="{{ asset ('assets/img/treinador.png') }}" alt="img">
                    </div>
                    <div class="team-card_content">
                        <h4 class="team-card_title"><a href="team-details.html">Oliver Samuel</a>
                        </h4>
                        <span class="team-card_desig">CEO/Founder</span>
                        <div class="social-btn">
                            <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                            <a href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                            <a href="https://www.discord.com/"><i class="fab fa-discord"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team-card">
                    <div class="team-card_img">
                        <img src="{{ asset('assets/img/treinador2.png') }}" alt="img">
                    </div>
                    <div class="team-card_content">
                        <h4 class="team-card_title"><a href="team-details.html">George Thomas</a>
                        </h4>
                        <span class="team-card_desig">CEO/Founder</span>
                        <div class="social-btn">
                            <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                            <a href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                            <a href="https://www.discord.com/"><i class="fab fa-discord"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team-card">
                    <div class="team-card_img">
                        <img src="{{ asset ('assets/img/treinador3.png') }}" alt="img">
                    </div>
                    <div class="team-card_content">
                        <h4 class="team-card_title"><a href="team-details.html">Mike Johnson</a>
                        </h4>
                        <span class="team-card_desig">CEO/Founder</span>
                        <div class="social-btn">
                            <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                            <a href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                            <a href="https://www.discord.com/"><i class="fab fa-discord"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team-card">
                    <div class="team-card_img">
                        <img src="{{ asset('assets/img/treinadora.png') }}" alt="img">
                    </div>
                    <div class="team-card_content">
                        <h4 class="team-card_title"><a href="team-details.html">Amelia Harper</a>
                        </h4>
                        <span class="team-card_desig">CEO/Founder</span>
                        <div class="social-btn">
                            <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                            <a href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                            <a href="https://www.discord.com/"><i class="fab fa-discord"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team-card">
                    <div class="team-card_img">
                        <img src="{{ asset('assets/img/treinador.png') }}" alt="img">
                    </div>
                    <div class="team-card_content">
                        <h4 class="team-card_title"><a href="team-details.html">Oliver Samuel</a>
                        </h4>
                        <span class="team-card_desig">CEO/Founder</span>
                        <div class="social-btn">
                            <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                            <a href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                            <a href="https://www.discord.com/"><i class="fab fa-discord"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





@endsection



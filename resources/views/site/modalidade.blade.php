
@extends('layout.layout')

@section('title','Modalidade')

@section('conteudo')

<link rel="stylesheet" href="{{ asset ('assets/css/estilo.css') }}">



<div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcrumb-bg.png">
    <!-- bg animated image/ -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcumb-content">
                    <h1 class="breadcumb-title">Pricing Plan</h1>
                    <ul class="breadcumb-menu">
                        <li><a href="{{ url('/') }}">HOME</a></li>
                        <li class="active">PRICING PLAN</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!--==============================
Pricing plan Area
==============================-->
<div class="pricing-area">
    <div class="container">
        <div class="title-area text-center">
            <h3 class="sub-title">Planos de Preços</h3>
            <h2 class="sec-title text-white">Nosso Plano de Preço</h2>
        </div>
        <div class="row gy-4 justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="pricing-card pricing-card_active">
                    <div class="pricing-card_bg">
                        <img src="assets/img/bg/pricing-card1-bg.png" alt="img">
                    </div>
                    <div class="pricing-card_icon">
                        <img src="assets/img/icon/picing-icon_1-1.svg" alt="img">
                    </div>
                    <h3 class="pricing-card_title">Associação Básica</h3>
                    <h4 class="pricing-card_price"><span class="currency">R$</span>99<span class="duration">/mês</span></h4>
                    <p class="pricing-card_content">Acesso livre à academia durante o horário comercial, podendo usufruir de instalações e equipamentos disponíveis.</p>
                    <div class="checklist">
                        <ul>
                            <li><i class="far fa-check-circle"></i>12 treinos</li>
                            <li><i class="far fa-check-circle"></i>Ducha e armários gratuitos</li>
                            <li><i class="far fa-check-circle"></i>Tapete de yoga pessoal</li>
                            <li><i class="far fa-check-circle"></i>Estacionamento gratuito</li>
                        </ul>
                    </div>
                    <a class="btn style2" href="pricing.html">Escolher Este Plano</a>
                </div>

            </div>
            <div class="col-lg-4 col-md-6">
                <div class="pricing-card">
                    <div class="pricing-card_bg">
                        <img src="assets/img/bg/pricing-card1-bg.png" alt="img">
                    </div>
                    <div class="pricing-card_icon">
                        <img src="assets/img/icon/picing-icon_1-2.svg" alt="img">
                    </div>
                    <h3 class="pricing-card_title">Associação Gold</h3>
                    <h4 class="pricing-card_price"><span class="currency">$</span>199<span class="duration">/mês</span></h4>
                    <p class="pricing-card_content">Acesso 24/7 à academia, incluindo aulas exclusivas. Treinos personalizados e nutricionisa inclusivo.</p>
                    <div class="checklist">
                        <ul>
                            <li><i class="far fa-check-circle"></i>12 treinos</li>
                            <li><i class="far fa-check-circle"></i>Ducha e armários gratuitos</li>
                            <li><i class="far fa-check-circle"></i>Tapete de yoga pessoal</li>
                            <li><i class="far fa-check-circle"></i>Estacionamento gratuito</li>
                        </ul>
                    </div>
                    <a class="btn style2" href="pricing.html">Escolher Este Plano</a>
                </div>

            </div>
            <div class="col-lg-4 col-md-6">
                <div class="pricing-card">
                    <div class="pricing-card_bg">
                        <img src="assets/img/bg/pricing-card1-bg.png" alt="img">
                    </div>
                    <div class ="pricing-card_icon">
                        <img src="assets/img/icon/picing-icon_1-3.svg" alt="img">
                    </div>
                    <h3 class="pricing-card_title">Associação Premium</h3>
                    <h4 class="pricing-card_price"><span class="currency">$</span>249<span class="duration">/mês</span></h4>
                    <p class="pricing-card_content">Acesso ilimitado à academia a todas as aulas. Acompanhamento individual com instrutores.</p>
                    <div class="checklist">
                        <ul>
                            <li><i class="far fa-check-circle"></i>12 treinos</li>
                            <li><i class="far fa-check-circle"></i>Ducha e armários gratuitos</li>
                            <li><i class="far fa-check-circle"></i>Tapete de yoga pessoal</li>
                            <li><i class="far fa-check-circle"></i>Estacionamento gratuito</li>
                        </ul>
                    </div>
                    <a class="btn style2" href="pricing.html">Escolher Este Plano</a>
                </div>

            </div>
        </div>
    </div>
</div>



<!--==============================
Cta Area
==============================-->
<section class="cta-area space" data-bg-src="assets/img/bg/cta-bg1.png">
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
                        <a href="about.html" class="btn style2">Marque uma consulta</a>
                        <div class="about-info-wrap style3">
                            <div class="icon"><i class="fas fa-phone-volume"></i></div>
                            <div class="details">
                                <p class="about-info-title text-white">Preciso de ajuda?</p>
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
Blog Area
==============================-->
<section class="blog-area space">
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title">Postagens de blog
            </span>
            <h2 class="sec-title">Leia nossos artigos mais recentes</h2>
        </div>
        <div class="row global-carousel blog-slider" data-slide-show="3" data-lg-slide-show="2" data-md-slide-show="2" data-sm-slide-show="1" data-xs-slide-show="1" data-dots="false" data-md-dots="true">
            <div class="col-md-6 col-lg-4">
                <div class="blog-card">
                    <div class="blog-img">
                        <img src="assets/img/blog/blog_1_1.png" alt="blog image">
                    </div>
                    <div class="blog-content" data-bg-src="assets/img/blog/blog_card1_bg.png">
                        <div class="blog-meta">
                            <a href="blog.html"><i class="fal fa-calendar"></i>15 Dec 2023</a>
                            <a href="blog.html"><i class="far fa-user"></i>by Andrew</a>
                        </div>
                        <h3 class="blog-title box-title"><a href="blog-details.html"> Dicas e conselhos nutricionais para frequentadores de academia</a></h3>
                        <p class="blog-text">Essas associações especializadas são projetadas para tornar o condicionamento físico acessível e acessível para esses...</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="blog-card">
                    <div class="blog-img">
                        <img src="{{ asset('assets/img/blog/blog_1_2.png') }}" alt="blog image">
                    </div>
                    <div class="blog-content" data-bg-src="assets/img/blog/blog_card1_bg.png">
                        <div class="blog-meta">
                            <a href="blog.html"><i class="fal fa-calendar"></i>15 Dec 2023</a>
                            <a href="blog.html"><i class="far fa-user"></i>by Andrew</a>
                        </div>
                        <h3 class="blog-title box-title"><a href="blog-details.html">Uncover Your True Potential at Fitmas</a></h3>
                        <p class="blog-text">Se você estiver visitando a região ou quiser trazer um amigo para se exercitar, oferecemos passes diários e passes para convidados...   </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="blog-card">
                    <div class="blog-img">
                        <img src="{{ asset('assets/img/blog/blog_1_3.png') }}" alt="blog image">
                    </div>
                    <div class="blog-content" data-bg-src="{{ asset('assets/img/blog/blog_card1_bg.png') }}">
                        <div class="blog-meta">
                            <a href="blog.html"><i class="fal fa-calendar"></i>15 Dec 2023</a>
                            <a href="blog.html"><i class="far fa-user"></i>by Andrew</a>
                        </div>
                        <h3 class="blog-title box-title"><a href="blog-details.html">Ofereça opções com desconto para estudantes idosos</a></h3>
                        <p class="blog-text">Compreendemos a importância do condicionamento físico para toda a família. Nossa opção familiar permite múltiplas famílias...</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="blog-card">
                    <div class="blog-img">
                        <img src="{{ asset('assets/img/blog/blog_1_1.png') }}" alt="blog image">
                    </div>
                    <div class="blog-content" data-bg-src="{{ asset('assets/img/blog/blog_card1_bg.png') }}">
                        <div class="blog-meta">
                            <a href="blog.html"><i class="fal fa-calendar"></i>15 Dec 2023</a>
                            <a href="blog.html"><i class="far fa-user"></i>by Andrew</a>
                        </div>
                        <h3 class="blog-title box-title"><a href="blog-details.html">Dicas e conselhos nutricionais para frequentadores de academia</a></h3>
                        <p class="blog-text">Essas associações especializadas são projetadas para tornar o condicionamento físico acessível e acessível para esses...</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="blog-card">
                    <div class="blog-img">
                        <img src="{{ asset('assets/img/blog/blog_1_2.png') }}" alt="blog image">
                    </div>
                    <div class="blog-content" data-bg-src="{{ asset('assets/img/blog/blog_card1_bg.png') }}">
                        <div class="blog-meta">
                            <a href="blog.html"><i class="fal fa-calendar"></i>15 Dec 2023</a>
                            <a href="blog.html"><i class="far fa-user"></i>by Andrew</a>
                        </div>
                        <h3 class="blog-title box-title"><a href="blog-details.html">Uncover Your True Potential at Fitmas</a></h3>
                        <p class="blog-text">Se você estiver visitando a região ou quiser trazer um amigo para se exercitar, oferecemos passes diários e passes para convidados...</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="blog-card">
                    <div class="blog-img">
                        <img src="{{ asset('assets/img/blog/blog_1_3.png') }}" alt="blog image">
                    </div>
                    <div class="blog-content" data-bg-src="{{ asset('assets/img/blog/blog_card1_bg.png') }}">
                        <div class="blog-meta">
                            <a href="blog.html"><i class="fal fa-calendar"></i>15 Dec 2023</a>
                            <a href="blog.html"><i class="far fa-user"></i>by Andrew</a>
                        </div>
                        <h3 class="blog-title box-title"><a href="blog-details.html">Ofereça opções com desconto para estudantes idosos</a></h3>
                        <p class="blog-text">Compreendemos a importância do condicionamento físico para toda a família. Nossa opção familiar permite múltiplas famílias...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>





@endsection


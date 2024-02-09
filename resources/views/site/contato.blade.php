@extends('layout.layout')

@section('title', 'contato')

@section('conteudo')


<div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/bg/breadcrumb-bg.png') }}">
    <!-- bg animated image/ -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcumb-content">
                    <h1 class="breadcumb-title">Contato</h1>
                    <ul class="breadcumb-menu">
                        <li><a href="{{ url('/') }}">HOME</a></li>
                        <li class="active">CONTACT US</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<!--==============================
    Contact Area
==============================-->
<div class="contact-area space bg-smoke2">
    <div class="container">
        <div class="row gy-4 justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="contact-info">
                    <div class="contact-info_icon">
                        <img src="assets/img/icon/contact-icon1.svg" alt="icon">
                    </div>
                    <div class="media-body">
                        <span class="contact-info_title">Call Us 24/7</span>
                        <h6 class="contact-info_text"><a href="tel:9288006780">+584 (25) 21453</a></h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="contact-info">
                    <div class="contact-info_icon">
                        <img src="assets/img/icon/contact-icon2.svg" alt="icon">
                    </div>
                    <div class="media-body">
                        <span class="contact-info_title">Faça um orçamento</span>
                        <h6 class="contact-info_text"><a href="mailto:info@Fitmas.com">info@Fitmas.com</a></h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="contact-info">
                    <div class="contact-info_icon">
                        <img src="assets/img/icon/contact-icon3.svg" alt="icon">
                    </div>
                    <div class="media-body">
                        <span class="contact-info_title">Estação de serviço</span>
                        <h6 class="contact-info_text"><a href="tel:9288006780">25 Hilton Street</a></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="map-sec2">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3644.7310056272386!2d89.2286059153658!3d24.00527418490799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fe9b97badc6151%3A0x30b048c9fb2129bc!2s!5e0!3m2!1sen!2sbd!4v1651028958211!5m2!1sen!2sbd"
        allowfullscreen="" loading="lazy"></iframe>
</div>

<div class="container">
    <div class="contact-form-area space-bottom">
        <div class="row g-0">
            <div class="col-lg-4">
                <div class="contact-form-thumb">
                    <img src="{{ asset('assets/img/normal/contact1.png') }}" alt="img">
                </div>
            </div>
            <div class="col-lg-8 bg-smoke2">
                <div class="contact-form-wrap">
                    <div class="title-area">
                        <span class="sub-title">Contate-nos
                        </span>
                        <h2 class="sec-title">Envie-nos uma mensagem</h2>
                    </div>
                    <form action="{{ route('contato.enviar') }}" method="POST" class="contact-form" id="formContato">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" class="form-control style-white" name="nomeContato" id="nomeContato" placeholder="Nome" value="{{ old('nomeContato') }}">
                                    <i class="far fa-user"></i>
                                    <div id="nomeContatoError" class="error-mensagem"></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" class="form-control style-white" name="emailContato" id="emailContato" placeholder="Endereço de Email" value="{{ old('emailContato') }}">
                                    <i class="far fa-envelope"></i>

                                    <div id="emailcontatoerror" class="error-mensagem"></div>

                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" class="form-control style-white" name="foneContato" id="foneContato" placeholder="Endereço de Email" value="{{ old('foneContato') }}">
                                    <i class="far fa-envelope"></i>

                                    <div id="foneContatoError" class="error-mensagem"></div>

                                </div>
                            </div>

                            <div class="form-group">
                                <select name="assuntoContato" id="assuntoContato" class="form-select style-white">
                                    <option value="{{ old('assuntoContato') }}" disabled="" selected="" hidden="">Selecione o assunto</option>
                                    <option value="one">Musculação</option>
                                    <option value="two">Levantamento de força</option>
                                    <option value="three">Aula de Meditação</option>
                                    <option value="four">Aula de boxe</option>
                                </select>

                                <div id="assuntoContatoerror" class="error-mensagem"></div>
                            </div>
                            <div class="form-group">
                                <textarea placeholder="Sua Mensagem" id="mensContato" name="mensContato" class="form-control style-white">{{ old('mensContato') }}</textarea>

                            <div class="mensContatoerror" class="error-mensagem"></div>
                            </div>

                            <div class="form-btn col-12">
                                {{-- <input type="submit" value="Enviar via e-mail" class="btn"> --}}
                                <button class="btn" type="submit" >Enviar via e-mail</button>
                                <div id="contatoMensagem" class="msgContato"></div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="space-bottom">
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title">Siga nosso
            </span>
            <h2 class="sec-title">Feed do Instagram</h2>
        </div>
        <div class="row gy-4 justify-content-center">
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="portfolio-thumb">
                    <a class="popup-image icon-btn" href="{{ asset('assets/img/instagram/instafeed1.png') }}"><i
                            class="far fa-eye"></i></a>
                    <img src="{{ asset('assets/img/instagram/instafeed1.png') }}" alt="portfolio">
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="portfolio-thumb">
                    <a class="popup-image icon-btn" href="{{ asset('assets/img/instagram/instafeed2.png') }}"><i
                            class="far fa-eye"></i></a>
                    <img src="{{ asset('assets/img/instagram/instafeed2.png') }}" alt="portfolio">
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="portfolio-thumb">
                    <a class="popup-image icon-btn" href="{{ asset('assets/img/instagram/instafeed3.png') }}"><i
                            class="far fa-eye"></i></a>
                    <img src="{{ asset('assets/img/instagram/instafeed3.png') }}" alt="portfolio">
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="portfolio-thumb">
                    <a class="popup-image icon-btn" href="{{ asset('assets/img/instagram/instafeed4.png') }}"><i
                            class="far fa-eye"></i></a>
                    <img src="{{ asset('assets/img/instagram/instafeed4.png') }}" alt="portfolio">
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="portfolio-thumb">
                    <a class="popup-image icon-btn" href="{{ asset('assets/img/instagram/instafeed5.png') }}"><i
                            class="far fa-eye"></i></a>
                    <img src="{{ asset('assets/img/instagram/instafeed5.png') }}" alt="portfolio">
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="portfolio-thumb">
                    <a class="popup-image icon-btn" href="{{ asset('assets/img/instagram/instafeed6.png') }}"><i
                            class="far fa-eye"></i></a>
                    <img src="{{ asset('assets/img/instagram/instafeed6.png') }}" alt="portfolio">
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="portfolio-thumb">
                    <a class="popup-image icon-btn" href="{{ asset('assets/img/instagram/instafeed7.png') }}"><i
                            class="far fa-eye"></i></a>
                    <img src="{{ asset('assets/img/instagram/instafeed7.png') }}" alt="portfolio">
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="portfolio-thumb">
                    <a class="popup-image icon-btn" href="{{ asset('assets/img/instagram/instafeed8.png') }}"><i
                            class="far fa-eye"></i></a>
                    <img src="{{ asset('assets/img/instagram/instafeed8.png') }}" alt="portfolio">
                </div>
            </div>
        </div>
    </div>
</div>






@endsection

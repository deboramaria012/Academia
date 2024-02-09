
@extends('layout.layout')

@section('title','home')

@section('conteudo')


<!--==============================
Hero Area
==============================-->
<div class="hero-wrapper hero-2" id="hero">
    <div class="global-carousel" id="heroSlider2" data-fade="true" data-slide-show="1" data-lg-slide-show="1" data-md-slide-show="1" data-sm-slide-show="1" data-xs-slide-show="1" data-arrows="true" data-xl-arrows="true" data-ml-arrows="true">
        <div class="hero-slider" data-bg-src="{{ asset ('assets/img/hero/banner1.png') }}">
            <div class="hero-shape2-1 shape-mockup movingX" data-bottom="-100px" data-left="0">
                <img src="{{ asset('assets/img/hero/') }}" alt="img">
            </div>
            <div class="hero-shape2-2 shape-mockup jump2" data-bottom="-50px" data-right="-10%">
                <img src="{{ asset ('assets') }}" alt="img">
            </div>
            <div class="hero-shape2-3 shape-mockup jump2" data-top="-30%" data-left="-30%">
                <img src="{{ asset('assets/img/') }}" alt="img">
            </div>
            <div class="container">
                <div class="row justify-content-lg-end justify-content-center">
                    <div class="col-xl-6 col-lg-7 col-md-9">
                        <div class="hero-style2">
                            <span class="hero-subtitle fw-medium" data-ani="slideinup" data-ani-delay="0s">Grow Your</span>
                            <h1 class="hero-title text-white" data-ani="slideinup" data-ani-delay="0.1s">Strength</h1>
                            <span class="hero-subtitle fw-semibold" data-ani="slideinup" data-ani-delay="0.2s">WITH Fitmas</span>
                            <div class="btn-group" data-ani="slideinup" data-ani-delay="0.3s">
                                <a href="{{ url('/contato') }}" class="btn style-r0 style2">Marque uma consulta</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <div class="hero-slider" data-bg-src="{{ asset ('assets/img/hero/banner2.png')}}">
            <div class="hero-shape2-1 shape-mockup movingX" data-bottom="-165px" data-left="0">
                <img src="{{ asset('assets/img/hero') }}" alt="img">
            </div>
            <div class="hero-shape2-2 shape-mockup jump2" data-bottom="-50px" data-right="-10%">
                <img src="{{ asset('assets/img/hero') }}" alt="img">
            </div>
            <div class="hero-shape2-3 shape-mockup jump2" data-top="-30%" data-left="-30%">
                <img src="{{ asset('assets/img/hero') }}" alt="img">
            </div>
            <div class="container">
                <div class="row justify-content-lg-end justify-content-center">
                    <div class="col-xl-6 col-lg-7 col-md-9">
                        <div class="hero-style2">
                            <span class="hero-subtitle fw-medium" data-ani="slideinup" data-ani-delay="0s">Grow Your</span>
                            <h1 class="hero-title text-white" data-ani="slideinup" data-ani-delay="0.1s">Strength</h1>
                            <span class="hero-subtitle fw-semibold" data-ani="slideinup" data-ani-delay="0.2s">WITH Fitmas</span>
                            <div class="btn-group" data-ani="slideinup" data-ani-delay="0.3s">
                                <a href="{{ url('/contato') }}" class="btn style-r0 style2">Make Appointment</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hero-arrow">
        <button data-slick-prev="#heroSlider2" class="slick-arrow slick-prev">PREV</button>
        <button data-slick-next="#heroSlider2" class="slick-arrow slick-next">NEXT</button>
    </div>
</div>
<!--======== / Hero Section ========-->

<!--==============================
Service Area
==============================-->
<div class="service-bg2-area" data-bg-src="{{asset('assets/img/bg/service-bg2.png') }}">
    <div class="sec-shape-top">
    <img src="assets/img/bg/sec-shape-top.png" alt="img">
    </div>
    <!--==============================
    BMI Area
    ==============================-->
    <div class="bmi-area-1 space">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="title-area mb-30">
                        <span class="sub-title">TESTE SEU IMC</span>
                        <h2 class="sec-title text-white fw-semibold">INDICE DE MASSA CORPORAL</h2>
                        <p class="sec-text">O IMC é uma ferramenta amplamente utilizada para avaliar o peso corporal em relação à altura. Pode fornecer uma indicação geral se um indivíduo está dentro de uma faixa de peso saudável.</p>
                    </div>
                    <div class="bmi-table mb-lg-0 mb-40">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">IMC</th>
                                    <th scope="col">ESTADO DE PESO</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">Abaixo do peso 18.5</th>
                                    <td>Status de peso</td>
                                </tr>
                                <tr>
                                    <th scope="row">18.5 - 24.9</th>
                                    <td>Saudável</td>
                                </tr>
                                <tr>
                                    <th scope="row">25.0 - 29.9</th>
                                    <td>Sobrepeso</td>
                                </tr>
                                <tr>
                                    <th scope="row">30.0 - Acima do peso</th>
                                    <td>Obesa</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-6 align-self-end">
                    <div class="bmi-calculator-form">
                        <h4 class="form-title">RESERVE SEU LUGAR:</h4>
                        <form class="bmi-form" id="form" name="bmiCalc">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input for="weight" class="form-control style-border" placeholder="Peso/KG" type="text" name="weight">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input for="height" class="form-control style-border" placeholder="Altura(cm" type="text" name="height">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="number" class="form-control style-border" name=" idade" id="age" placeholder="Age">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control style-border" name="sex" id="sex" placeholder="Sex">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input for="bmi_result" class="form-control style-border" placeholder="Seu IMC" type="text" name="bmi">
                            </div>
                            <div class="form-group">
                                <input for="bmi_message" placeholder="This Means" class="form-control style-border" type="text" name="meaning">
                            </div>
                            <div class="btn style3">
                                <input type="button" value="Calculate BMI" onClick="calculateBMI()">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--==============================
    Service Area 01
    ==============================-->
    <div class="service-area-1 space-bottom overflow-hidden">
        <div class="container">
            <div class="title-area">
                <span class="sub-title">Nossos recursos</span>
                <h2 class="sec-title text-white fw-semibold">SERVIÇOS QUE OFERECEMOS</h2>
            </div>
        </div>
        <div class="container-fluid p-0">
            <div class="row global-carousel service-slider style2" data-slide-show="4" data-ml-slide-show="3" data-lg-slide-show="3" data-md-slide-show="2" data-sm-slide-show="1" data-xs-slide-show="1" data-dots="false">
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-card_icon">
                            <img src="{{ asset('assets/img/icon/service-icon_1-1.svg') }}" alt="img">
                        </div>
                        <div class="service-card_content">
                            <h4 class="service-card_title h5"><a href="service-details.html">Tons of Equipment</a></h4>
                            <p class="service-card_text">Lacinia montes est odio tpor volutpat rhoncus quisque sagittis</p>
                            <a href="service-details.html" class="link-btn" tabindex="0">Read More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-card_icon">
                            <img src=" {{ asset('assets/img/icon/service-icon_1-2.svg') }}" alt="img">
                        </div>
                        <div class="service-card_content">
                            <h4 class="service-card_title h5"><a href="service-details.html">Rows of Cardio</a></h4>
                            <p class="service-card_text">Lacinia montes est odio tpor volutpat rhoncus quisque sagittis</p>
                            <a href="service-details.html" class="link-btn" tabindex="0">Read More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-card_icon">
                            <img src="{{ asset('assets/img/icon/service-icon_1-3.svg') }}" alt="img">
                        </div>
                        <div class="service-card_content">
                            <h4 class="service-card_title h5"><a href="service-details.html">Heart Pumping</a></h4>
                            <p class="service-card_text">Lacinia montes est odio tpor volutpat rhoncus quisque sagittis</p>
                            <a href="service-details.html" class="link-btn" tabindex="0">Read More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-card_icon">
                            <img src="{{ asset('assets/img/icon/service-icon_1-4.svg') }}" alt="img">
                        </div>
                        <div class="service-card_content">
                            <h4 class="service-card_title h5"><a href="service-details.html">Strength Training</a></h4>
                            <p class="service-card_text">Lacinia montes est odio tpor volutpat rhoncus quisque sagittis</p>
                            <a href="service-details.html" class="link-btn" tabindex="0">Read More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-card_icon">
                            <img src="{{ asset('assets/img/icon/service-icon_1-1.svg') }}" alt="img">
                        </div>
                        <div class="service-card_content">
                            <h4 class="service-card_title h5"><a href="service-details.html">Tons of Equipment</a></h4>
                            <p class="service-card_text">Lacinia montes est odio tpor volutpat rhoncus quisque sagittis</p>
                            <a href="service-details.html" class="link-btn" tabindex="0">Read More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-card_icon">
                            <img src="{{ asset('assets/img/icon/service-icon_1-2.svg') }}" alt="img">
                        </div>
                        <div class="service-card_content">
                            <h4 class="service-card_title h5"><a href="service-details.html">Rows of Cardio</a></h4>
                            <p class="service-card_text">Lacinia montes est odio tpor volutpat rhoncus quisque sagittis</p>
                            <a href="service-details.html" class="link-btn" tabindex="0">Read More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-card_icon">
                            <img src="{{asset('assets/img/icon/service-icon_1-3.svg') }}" alt="img">
                        </div>
                        <div class="service-card_content">
                            <h4 class="service-card_title h5"><a href="service-details.html">Heart Pumping</a></h4>
                            <p class="service-card_text">Lacinia montes est odio tpor volutpat rhoncus quisque sagittis</p>
                            <a href="service-details.html" class="link-btn" tabindex="0">Read More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-card_icon">
                            <img src="{{asset('assets/img/icon/service-icon_1-4.svg') }}" alt="img">
                        </div>
                        <div class="service-card_content">
                            <h4 class="service-card_title h5"><a href="service-details.html">Strength Training</a></h4>
                            <p class="service-card_text">Lacinia montes est odio tpor volutpat rhoncus quisque sagittis</p>
                            <a href="service-details.html" class="link-btn" tabindex="0">Read More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="sec-shape2-bottom">
        <img src="{{ asset('assets/img/bg/sec-shape2-top.png') }}" alt="img">
    </div>
</div>

<!--==============================
schedule Area
==============================-->
<div class="schedule-area-1 space">
    <div class="container container2">
        <div class="title-area text-center">
            <span class="sub-title">Nossas aulas</span>
            <h2 class="sec-title fw-semibold">NOSSO CRONOGRAMA DE TREINAMENTO</h2>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="schedule-tab-1">
                    <div class="filter-menu-active mb-50 text-center">
                        <button data-filter=".cat1" class="active btn style4 style-r0" type="button">ALL EVENTS</button>
                        <button class="btn style4 style-r0" data-filter=".cat2" type="button">CARDIO</button>
                        <button class="btn style4 style-r0" data-filter=".cat3" type="button">OPEN GYM</button>
                        <button class="btn style4 style-r0" data-filter=".cat4" type="button">TOTAL BODY</button>
                        <button class="btn style4 style-r0" data-filter=".cat5" type="button">CROSSFIT</button>
                    </div>
                    <div class="filter-active-cat1">
                        <div class="filter-item cat1">
                            <div class="table-responsive">
                                <table class="schedule-table table">
                                    <thead>
                                        <tr>
                                            <th scope="col"></th>
                                            <th scope="col">MONDAY</th>
                                            <th scope="col">TUESDAY</th>
                                            <th scope="col">WEDNESDAY</th>
                                            <th scope="col">THURSDAY</th>
                                            <th scope="col">FRIDAY</th>
                                            <th scope="col">SATURDAY</th>
                                            <th scope="col">SUNDAY</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">06:00 - 07:00</th>
                                            <td>
                                                <span>Boxing Gym</span>
                                                Daniel
                                            </td>
                                            <td></td>
                                            <td>
                                                <span>Body Build</span>
                                                Daniel
                                            </td>
                                            <td>
                                                <span>CrossFit Pro</span>
                                                Daniel
                                            </td>
                                            <td></td>
                                            <td rowspan="2">
                                                <span>Cardio Box</span>
                                                Daniel
                                            </td>
                                            <td>
                                                <span>Open Gym</span>
                                                Daniel
                                            </td>
                                        </tr>

                                        <tr>
                                            <th scope="row">07:00 - 08:00</th>
                                            <td></td>
                                            <td class="active">
                                                <span>Fitness Class</span>
                                                Daniel
                                            </td>
                                            <td></td>
                                            <td rowspan="2">
                                                <span>Pro Intense
                                                    Workout</span>
                                                Daniel
                                            </td>
                                            <td>
                                                <span>Boxing Gym</span>
                                                Daniel
                                            </td>
                                            <td></td>
                                        </tr>

                                        <tr>
                                            <th scope="row">08:00 - 09:00</th>
                                            <td>
                                                <span>Pump Work</span>
                                                Daniel
                                            </td>
                                            <td rowspan="2"></td>
                                            <td>
                                                <span>Boxing Gym</span>
                                                Daniel
                                            </td>
                                            <td></td>
                                            <td>
                                                <span>Open Gym</span>
                                                Daniel
                                            </td>
                                            <td rowspan="2">
                                                <span>Boxing Gym</span>
                                                Daniel
                                            </td>
                                        </tr>

                                        <tr>
                                            <th scope="row">09:00 - 10:00</th>
                                            <td>
                                                <span>Boxing Gym</span>
                                                Daniel
                                            </td>
                                            <td></td>
                                            <td>
                                                <span>Fitness Class</span>
                                                Daniel
                                            </td>
                                            <td>
                                                <span>Yoga Class</span>
                                                Daniel
                                            </td>
                                            <td>
                                                <span>Boxing Gym</span>
                                                Daniel
                                            </td>
                                        </tr>

                                        <tr>
                                            <th scope="row">10:00 - 11:00</th>
                                            <td>
                                                <span>Body Build</span>
                                                Daniel
                                            </td>
                                            <td>
                                                <span>Pump Work</span>
                                                Daniel
                                            </td>
                                            <td>
                                                <span>Fitness Class</span>
                                                Daniel
                                            </td>
                                            <td></td>
                                            <td>
                                                <span>Open Gym</span>
                                                Daniel
                                            </td>
                                            <td></td>
                                            <td>
                                                <span>Yoga Class</span>
                                                Daniel
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="filter-item cat2">
                            <div class="table-responsive">
                                <table class="schedule-table table">
                                    <thead>
                                        <tr>
                                            <th scope="col"></th>
                                            <th scope="col">MONDAY</th>
                                            <th scope="col">TUESDAY</th>
                                            <th scope="col">WEDNESDAY</th>
                                            <th scope="col">THURSDAY</th>
                                            <th scope="col">FRIDAY</th>
                                            <th scope="col">SATURDAY</th>
                                            <th scope="col">SUNDAY</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">06:00 - 07:00</th>
                                            <td>
                                                <span>Boxing Gym</span>
                                                Daniel
                                            </td>
                                            <td></td>
                                            <td>
                                                <span>Body Build</span>
                                                Daniel
                                            </td>
                                            <td>
                                                <span>CrossFit Pro</span>
                                                Daniel
                                            </td>
                                            <td></td>
                                            <td rowspan="2">
                                                <span>Cardio Box</span>
                                                Daniel
                                            </td>
                                            <td>
                                                <span>Open Gym</span>
                                                Daniel
                                            </td>
                                        </tr>

                                        <tr>
                                            <th scope="row">07:00 - 08:00</th>
                                            <td></td>
                                            <td class="active">
                                                <span>Fitness Class</span>
                                                Daniel
                                            </td>
                                            <td></td>
                                            <td rowspan="2">
                                                <span>Pro Intense <br>
                                                    Workout</span>
                                                Daniel
                                            </td>
                                            <td>
                                                <span>Boxing Gym</span>
                                                Daniel
                                            </td>
                                            <td></td>
                                        </tr>

                                        <tr>
                                            <th scope="row">08:00 - 09:00</th>
                                            <td>
                                                <span>Pump Work</span>
                                                Daniel
                                            </td>
                                            <td rowspan="2"></td>
                                            <td>
                                                <span>Boxing Gym</span>
                                                Daniel
                                            </td>
                                            <td></td>
                                            <td>
                                                <span>Open Gym</span>
                                                Daniel
                                            </td>
                                            <td rowspan="2">
                                                <span>Boxing Gym</span>
                                                Daniel
                                            </td>
                                        </tr>

                                        <tr>
                                            <th scope="row">09:00 - 10:00</th>
                                            <td>
                                                <span>Boxing Gym</span>
                                                Daniel
                                            </td>
                                            <td></td>
                                            <td>
                                                <span>Fitness Class</span>
                                                Daniel
                                            </td>
                                            <td>
                                                <span>Yoga Class</span>
                                                Daniel
                                            </td>
                                            <td>
                                                <span>Boxing Gym</span>
                                                Daniel
                                            </td>
                                        </tr>

                                        <tr>
                                            <th scope="row">10:00 - 11:00</th>
                                            <td>
                                                <span>Body Build</span>
                                                Daniel
                                            </td>
                                            <td>
                                                <span>Pump Work</span>
                                                Daniel
                                            </td>
                                            <td>
                                                <span>Fitness Class</span>
                                                Daniel
                                            </td>
                                            <td></td>
                                            <td>
                                                <span>Open Gym</span>
                                                Daniel
                                            </td>
                                            <td></td>
                                            <td>
                                                <span>Yoga Class</span>
                                                Daniel
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="filter-item cat3">
                            <div class="table-responsive">
                                <table class="schedule-table table">
                                    <thead>
                                        <tr>
                                            <th scope="col"></th>
                                            <th scope="col">MONDAY</th>
                                            <th scope="col">TUESDAY</th>
                                            <th scope="col">WEDNESDAY</th>
                                            <th scope="col">THURSDAY</th>
                                            <th scope="col">FRIDAY</th>
                                            <th scope="col">SATURDAY</th>
                                            <th scope="col">SUNDAY</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">06:00 - 07:00</th>
                                            <td>
                                                <span>Boxing Gym</span>
                                                Daniel
                                            </td>
                                            <td></td>
                                            <td>
                                                <span>Body Build</span>
                                                Daniel
                                            </td>
                                            <td>
                                                <span>CrossFit Pro</span>
                                                Daniel
                                            </td>
                                            <td></td>
                                            <td rowspan="2">
                                                <span>Cardio Box</span>
                                                Daniel
                                            </td>
                                            <td>
                                                <span>Open Gym</span>
                                                Daniel
                                            </td>
                                        </tr>

                                        <tr>
                                            <th scope="row">07:00 - 08:00</th>
                                            <td></td>
                                            <td class="active">
                                                <span>Fitness Class</span>
                                                Daniel
                                            </td>
                                            <td></td>
                                            <td rowspan="2">
                                                <span>Pro Intense
                                                    Workout</span>
                                                Daniel
                                            </td>
                                            <td>
                                                <span>Boxing Gym</span>
                                                Daniel
                                            </td>
                                            <td></td>
                                        </tr>

                                        <tr>
                                            <th scope="row">08:00 - 09:00</th>
                                            <td>
                                                <span>Pump Work</span>
                                                Daniel
                                            </td>
                                            <td rowspan="2"></td>
                                            <td>
                                                <span>Boxing Gym</span>
                                                Daniel
                                            </td>
                                            <td></td>
                                            <td>
                                                <span>Open Gym</span>
                                                Daniel
                                            </td>
                                            <td rowspan="2">
                                                <span>Boxing Gym</span>
                                                Daniel
                                            </td>
                                        </tr>

                                        <tr>
                                            <th scope="row">09:00 - 10:00</th>
                                            <td>
                                                <span>Boxing Gym</span>
                                                Daniel
                                            </td>
                                            <td></td>
                                            <td>
                                                <span>Fitness Class</span>
                                                Daniel
                                            </td>
                                            <td>
                                                <span>Yoga Class</span>
                                                Daniel
                                            </td>
                                            <td>
                                                <span>Boxing Gym</span>
                                                Daniel
                                            </td>
                                        </tr>

                                        <tr>
                                            <th scope="row">10:00 - 11:00</th>
                                            <td>
                                                <span>Body Build</span>
                                                Daniel
                                            </td>
                                            <td>
                                                <span>Pump Work</span>
                                                Daniel
                                            </td>
                                            <td>
                                                <span>Fitness Class</span>
                                                Daniel
                                            </td>
                                            <td></td>
                                            <td>
                                                <span>Open Gym</span>
                                                Daniel
                                            </td>
                                            <td></td>
                                            <td>
                                                <span>Yoga Class</span>
                                                Daniel
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="filter-item cat4">
                            <div class="table-responsive">
                                <table class="schedule-table table">
                                    <thead>
                                        <tr>
                                            <th scope="col"></th>
                                            <th scope="col">MONDAY</th>
                                            <th scope="col">TUESDAY</th>
                                            <th scope="col">WEDNESDAY</th>
                                            <th scope="col">THURSDAY</th>
                                            <th scope="col">FRIDAY</th>
                                            <th scope="col">SATURDAY</th>
                                            <th scope="col">SUNDAY</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">06:00 - 07:00</th>
                                            <td>
                                                <span>Boxing Gym</span>
                                                Daniel
                                            </td>
                                            <td></td>
                                            <td>
                                                <span>Body Build</span>
                                                Daniel
                                            </td>
                                            <td>
                                                <span>CrossFit Pro</span>
                                                Daniel
                                            </td>
                                            <td></td>
                                            <td rowspan="2">
                                                <span>Cardio Box</span>
                                                Daniel
                                            </td>
                                            <td>
                                                <span>Open Gym</span>
                                                Daniel
                                            </td>
                                        </tr>

                                        <tr>
                                            <th scope="row">07:00 - 08:00</th>
                                            <td></td>
                                            <td class="active">
                                                <span>Fitness Class</span>
                                                Daniel
                                            </td>
                                            <td></td>
                                            <td rowspan="2">
                                                <span>Pro Intense
                                                    Workout</span>
                                                Daniel
                                            </td>
                                            <td>
                                                <span>Boxing Gym</span>
                                                Daniel
                                            </td>
                                            <td></td>
                                        </tr>

                                        <tr>
                                            <th scope="row">08:00 - 09:00</th>
                                            <td>
                                                <span>Pump Work</span>
                                                Daniel
                                            </td>
                                            <td rowspan="2"></td>
                                            <td>
                                                <span>Boxing Gym</span>
                                                Daniel
                                            </td>
                                            <td></td>
                                            <td>
                                                <span>Open Gym</span>
                                                Daniel
                                            </td>
                                            <td rowspan="2">
                                                <span>Boxing Gym</span>
                                                Daniel
                                            </td>
                                        </tr>

                                        <tr>
                                            <th scope="row">09:00 - 10:00</th>
                                            <td>
                                                <span>Boxing Gym</span>
                                                Daniel
                                            </td>
                                            <td></td>
                                            <td>
                                                <span>Fitness Class</span>
                                                Daniel
                                            </td>
                                            <td>
                                                <span>Yoga Class</span>
                                                Daniel
                                            </td>
                                            <td>
                                                <span>Boxing Gym</span>
                                                Daniel
                                            </td>
                                        </tr>

                                        <tr>
                                            <th scope="row">10:00 - 11:00</th>
                                            <td>
                                                <span>Body Build</span>
                                                Daniel
                                            </td>
                                            <td>
                                                <span>Pump Work</span>
                                                Daniel
                                            </td>
                                            <td>
                                                <span>Fitness Class</span>
                                                Daniel
                                            </td>
                                            <td></td>
                                            <td>
                                                <span>Open Gym</span>
                                                Daniel
                                            </td>
                                            <td></td>
                                            <td>
                                                <span>Yoga Class</span>
                                                Daniel
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="filter-item cat5">
                            <div class="table-responsive">
                                <table class="schedule-table table">
                                    <thead>
                                        <tr>
                                            <th scope="col"></th>
                                            <th scope="col">MONDAY</th>
                                            <th scope="col">TUESDAY</th>
                                            <th scope="col">WEDNESDAY</th>
                                            <th scope="col">THURSDAY</th>
                                            <th scope="col">FRIDAY</th>
                                            <th scope="col">SATURDAY</th>
                                            <th scope="col">SUNDAY</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">06:00 - 07:00</th>
                                            <td>
                                                <span>Boxing Gym</span>
                                                Daniel
                                            </td>
                                            <td></td>
                                            <td>
                                                <span>Body Build</span>
                                                Daniel
                                            </td>
                                            <td>
                                                <span>CrossFit Pro</span>
                                                Daniel
                                            </td>
                                            <td></td>
                                            <td rowspan="2">
                                                <span>Cardio Box</span>
                                                Daniel
                                            </td>
                                            <td>
                                                <span>Open Gym</span>
                                                Daniel
                                            </td>
                                        </tr>

                                        <tr>
                                            <th scope="row">07:00 - 08:00</th>
                                            <td></td>
                                            <td class="active">
                                                <span>Fitness Class</span>
                                                Daniel
                                            </td>
                                            <td></td>
                                            <td rowspan="2">
                                                <span>Pro Intense
                                                    Workout</span>
                                                Daniel
                                            </td>
                                            <td>
                                                <span>Boxing Gym</span>
                                                Daniel
                                            </td>
                                            <td></td>
                                        </tr>

                                        <tr>
                                            <th scope="row">08:00 - 09:00</th>
                                            <td>
                                                <span>Pump Work</span>
                                                Daniel
                                            </td>
                                            <td rowspan="2"></td>
                                            <td>
                                                <span>Boxing Gym</span>
                                                Daniel
                                            </td>
                                            <td></td>
                                            <td>
                                                <span>Open Gym</span>
                                                Daniel
                                            </td>
                                            <td rowspan="2">
                                                <span>Boxing Gym</span>
                                                Daniel
                                            </td>
                                        </tr>

                                        <tr>
                                            <th scope="row">09:00 - 10:00</th>
                                            <td>
                                                <span>Boxing Gym</span>
                                                Daniel
                                            </td>
                                            <td></td>
                                            <td>
                                                <span>Fitness Class</span>
                                                Daniel
                                            </td>
                                            <td>
                                                <span>Yoga Class</span>
                                                Daniel
                                            </td>
                                            <td>
                                                <span>Boxing Gym</span>
                                                Daniel
                                            </td>
                                        </tr>

                                        <tr>
                                            <th scope="row">10:00 - 11:00</th>
                                            <td>
                                                <span>Body Build</span>
                                                Daniel
                                            </td>
                                            <td>
                                                <span>Pump Work</span>
                                                Daniel
                                            </td>
                                            <td>
                                                <span>Fitness Class</span>
                                                Daniel
                                            </td>
                                            <td></td>
                                            <td>
                                                <span>Open Gym</span>
                                                Daniel
                                            </td>
                                            <td></td>
                                            <td>
                                                <span>Yoga Class</span>
                                                Daniel
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--==============================
Video Area
==============================-->
<div class="video-area-1">
    <div class="container">
        <div class="video-wrap">
            <a data-bg-src="{{ asset('assets/img/normal/video-bg1.png') }}" {{ asset('') }}href="https://www.youtube.com/watch?v=P7fi4hP_y80" class="play-btn popup-video">
                <i class="fa-sharp fa-solid fa-play"></i>
            </a>
        </div>
    </div>
</div>

<!--==============================
Portfolio Area
==============================-->
<div class="portfolio-area-1" data-bg-src="{{ asset ('assets/img/bg/portfolio-bg-1.png')}}">


    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title">Nosso portfólio</span>
            <h2 class="sec-title text-white fw-semibold">NOSSO PORTFÓLIO DE TRABALHO</h2>
        </div>
    </div>
    <div class="container-fluid">
        <div class="flip-gallery-area">
            <div class="flip-gallery">
                <ul class="flip-items">
                    <li>
                        <div class="gallery-card gallery-flip">
                            <div class="gallery-img">
                                <img src="{{ asset ('assets/img/portfolio/portfolio.png') }}" alt="gallery image">
                            </div>
                            <div class="gallery-content">
                                <div class="media-left">
                                    <h6 class="gallery-content_subtitle">Premier Logistics</h6>
                                    <h4 class="gallery-content_title">Cockfights Rumble Fitness Training</h4>
                                </div>
                                <a href="{{ asset ('assets/img/project/project1_1.png') }}" class="icon-btn popup-image">
                                    <i class="far fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="gallery-card gallery-flip">
                            <div class="gallery-img">
                                <img src="{{ asset('assets/img/portfolio/portfolio2.png') }}" alt="gallery image">
                            </div>
                            <div class="gallery-content">
                                <div class="media-left">
                                    <h6 class="gallery-content_subtitle">Premier Logistics</h6>
                                    <h4 class="gallery-content_title">Cockfights Rumble Fitness Training</h4>
                                </div>
                                <a href="{{ asset('assets/img/project/project1_2.png') }}" class="icon-btn popup-image">
                                    <i class="far fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="gallery-card gallery-flip">
                            <div class="gallery-img">
                                <img src="{{ asset('assets/img/portfolio/portfolio3.png') }}" alt="gallery image">
                            </div>
                            <div class="gallery-content">
                                <div class="media-left">
                                    <h6 class="gallery-content_subtitle">Premier Logistics</h6>
                                    <h4 class="gallery-content_title">Cockfights Rumble Fitness Training</h4>
                                </div>
                                <a href="{{ asset('assets/img/project/project1_3.png') }}" class="icon-btn popup-image">
                                    <i class="far fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!--==============================
wcu area
==============================-->
<div class="wcu-area-2 space">
    <div class="container container2">
        <div class="row justify-content-between">
            <div class="col-xl-6 align-self-center order-xl-2">
                <div class="wcu-thumb-wrap ms-xl-5 mb-xl-0 mb-40">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="wcu-thumb2">
                                <img src="{{ asset('assets/img/treino.png') }}" alt="img">
                            </div>
                            <div class="wcu-grid2 mt-4" data-bg-src="{{ asset('assets/img/bg/wcu_box-bg.png') }}">
                                <div class="details">
                                    <span class="wcu-grid_text"> <span class="counter-number">15000</span>+ Bem-sucedido
                                    Alunos felizes</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="wcu-grid2 mb-4 mt-sm-0 mt-4 bg-theme">
                                <div class="details">
                                    <span class="wcu-grid_text"> <span class="counter-number">25</span>+ Anos de trabalho Experiência</span>
                                </div>
                            </div>
                            <div class="wcu-thumb2">
                                <img src="{{ asset('assets/img/treino3png.png') }} " alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 order-xl-1">
                <div class="title-area">
                    <span class="sub-title">PORQUE ESCOLHER-NOS</span>
                    <h2 class="sec-title fw-semibold"> NÓS FORNECEMOS NOSSOS <br> SUPORTE DE ADEQUAÇÃO 100% CONFIÁVEL</h2>
                    <p class="sec-text">Defina seus objetivos específicos de musculação. Determine o que você deseja alcançar em termos de tamanho muscular, força e físico geral. Estabeleça metas realistas e mensuráveis ​​que orientarão seu plano de treinamento e nutrição. </p>
                    <div class="about-grid-wrap mt-40">
                        <div class="about-grid style2">
                            <div class="about-grid_icon">
                                <img src="{{ asset('assets/img/icon/wcu-icon_2-1.svg') }}" alt="img">
                            </div>
                            <div class="about-grid_content">
                                <h4 class="about-grid_title">Expert Trainer</h4>
                                <p class="about-grid_text">30 days regular shipping</p>
                            </div>
                        </div>
                        <div class="about-grid style2">
                            <div class="about-grid_icon">
                                <img src="{{ asset('assets/img/icon/wcu-icon_2-2.svg') }}" alt="img">
                            </div>
                            <div class="about-grid_content">
                                <h4 class="about-grid_title">Modern Equipment</h4>
                                <p class="about-grid_text">24 hour fast shipping</p>
                            </div>
                        </div>
                    </div>
                    <p class="sec-text">Implemente princípios de sobrecarga progressiva em seu treinamento. Aumente gradualmente o peso, as repetições ou a intensidade dos seus exercícios ao longo do tempo...</p>
                </div>
                <div class="btn-wrap mt-40">
                    <a href="about.html" class="btn style-r0">Make Appointment</a>
                    <div class="about-info-wrap style2">
                        <div class="icon"><i class="fas fa-phone"></i></div>
                        <div class="details">
                            <p class="about-info-title">Call Us 24/7</p>
                            <a class="about-info-link" href="tel:+25825692582">+236-3256.21456</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--==============================
    wcu area 02 end
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


<!--==============================
Goal Area
==============================-->
<section class="goal-area space">
    <div class="container container2">
        <div class="row">
            <div class="col-lg-6 order-lg-2">
                <div class="goal-thumb-2 mb-40 mb-lg-0">
                    <div class="img-1">
                        <img src="{{ asset('assets/img/treino.png') }}" alt="img">
                    </div>
                    <div class="img-2 jump">
                        <img src="{{ asset('assets/img/academia.png') }}" alt="img">
                    </div>
                    <div class="wcu-grid movingX">
                        <div class="icon">
                            <img src="{{ asset('assets/img/icon/wcu-icon_1-1.svg') }}" alt="img">
                        </div>
                        <div class="details">
                            <h3 class="wcu-grid_year"><span class="counter-number">25</span>+</h3>
                            <span class="wcu-grid_text">Years Experience</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-lg-1">
                <div class="title-area">
                    <span class="sub-title">Fitmas Goal
                    </span>
                    <h2 class="sec-title fw-semibold">UNLOCK YOUR FULL POTENTIAL, ACHIEVE YOUR FITNESS GOALS.</h2>
                </div>
                <div class="goal-grid-wrap">
                    <div class="about-grid style3">
                        <div class="about-grid_icon">
                            <img src="{{ asset('assets/img/icon/goal-icon_1-1.svg') }}" alt="img">
                        </div>
                        <div class="about-grid_content">
                            <h4 class="about-grid_title">Free Fitness Training</h4>
                            <p class="about-grid_text">Pedal your way to fitness in our specialized indoor cycling studio. Equipped with stationary bikes...</p>
                        </div>
                    </div>
                    <div class="about-grid style3">
                        <div class="about-grid_icon">
                            <img src="{{ asset('assets/img/icon/goal-icon_1-2.svg') }}" alt="img">
                        </div>
                        <div class="about-grid_content">
                            <h4 class="about-grid_title">Cardio and Strength</h4>
                            <p class="about-grid_text">Pedal your way to fitness in our specialized indoor cycling studio. Equipped with stationary bikes...</p>
                        </div>
                    </div>
                    <div class="btn-wrap">
                        <a class="btn style-r0" href="service-details.html">Learn More</a>
                        <a class="btn btn-border style-r0" href="service-details.html">View All Services</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--==============================
Cta Area
==============================-->
<section class="cta-area space" data-bg-src="{{ asset('assets/img/fundo.png') }}">
    <div class="container">
        <div class="row justify-content-lg-end justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-10">
                <div class="cta-wrap text-center text-lg-start">
                    <div class="title-area">
                        <span class="sub-title">MARQUE UMA CONSULTA</span>
                        <h2 class="sec-title text-white fw-semibold">OBTENHA UMA CONSULTORIA GRATUITA AGORA AQUI!</h2>
                    </div>
                    <div class="btn-wrap mt-40">
                        <a href="about.html" class="btn style2 style-r0">Marque uma consulta</a>
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

<div class="service-area-2 space overflow-hidden">
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title">Our Services</span>
            <h2 class="sec-title">Service We Provide</h2>
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
                        <p class="service-card_text">High-intensity workouts that alternate between intense bursts of exercise and
                            short recovery periods...</p>
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
                        <p class="service-card_text">High-intensity workouts that alternate between intense bursts of exercise and
                            short recovery periods...</p>
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
                        <p class="service-card_text">High-intensity workouts that alternate between intense bursts of exercise and
                            short recovery periods...</p>
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
                        <h4 class="service-card_title h5"><a href="service-details.html">Boxing Class</a></h4>
                        <p class="service-card_text">High-intensity workouts that alternate between intense bursts of exercise and
                            short recovery periods...</p>
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
                        <p class="service-card_text">High-intensity workouts that alternate between intense bursts of exercise and
                            short recovery periods...</p>
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
                        <h4 class="service-card_title h5"><a href="service-details.html">Yoga Fitness Class</a></h4>
                        <p class="service-card_text">High-intensity workouts that alternate between intense bursts of exercise and
                            short recovery periods...</p>
                        <a href="service-details.html" class="link-btn" tabindex="0"><i class="fas fa-arrow-right"></i> Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!--==============================
Pricing plan Area
==============================-->
<div class="pricing-area space">
    <div class="container">
        <div class="title-area text-center">
            <h3 class="sub-title">Pricing Plan</h3>
            <h2 class="sec-title">Our Pricing Plan</h2>
        </div>
        <div class="row gy-4 justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="pricing-card">
                    <div class="pricing-card_bg">
                        <img src="{{ asset('assets/img/bg/pricing-card1-bg.png') }}" alt="img">
                    </div>
                    <div class="pricing-card_icon">
                        <img src="{{ asset('assets/img/icon/picing-icon_1-1.svg') }}" alt="img">
                    </div>
                    <h3 class="pricing-card_title">Basic Membership</h3>
                    <h4 class="pricing-card_price"><span class="currency">$</span>19<span class="duration">/month</span>
                    </h4>
                    <p class="pricing-card_content">This category typically offers access to the gym's facilities and equipment. </p>
                    <div class="checklist">
                        <ul>
                            <li><i class="far fa-check-circle"></i>12 trainings</li>
                            <li><i class="far fa-check-circle"></i>Free shower & lockers</li>
                            <li><i class="far fa-check-circle"></i>Personal yoga mat</li>
                            <li><i class="far fa-check-circle"></i>Free parking</li>
                        </ul>
                    </div>
                    <a class="btn style2" href="pricing.html">Choose This Plan</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="pricing-card pricing-card_active">
                    <div class="pricing-card_bg">
                        <img src="{{ asset('assets/img/bg/pricing-card1-bg.png') }}" alt="img">
                    </div>
                    <div class="pricing-card_icon">
                        <img src="{{ asset('assets/img/icon/picing-icon_1-2.svg') }}" alt="img">
                    </div>
                    <h3 class="pricing-card_title">Standard Membeship</h3>
                    <h4 class="pricing-card_price"><span class="currency">$</span>39<span class="duration">/month</span>
                    </h4>
                    <p class="pricing-card_content">This category typically offers access to the gym's facilities and equipment. </p>
                    <div class="checklist">
                        <ul>
                            <li><i class="far fa-check-circle"></i>12 trainings</li>
                            <li><i class="far fa-check-circle"></i>Free shower & lockers</li>
                            <li><i class="far fa-check-circle"></i>Personal yoga mat</li>
                            <li><i class="far fa-check-circle"></i>Free parking</li>
                        </ul>
                    </div>
                    <a class="btn style2" href="pricing.html">Choose This Plan</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="pricing-card">
                    <div class="pricing-card_bg">
                        <img src="{{ asset('assets/img/bg/pricing-card1-bg.png') }}" alt="img">
                    </div>
                    <div class="pricing-card_icon">
                        <img src="{{ asset('assets/img/icon/picing-icon_1-3.svg') }}" alt="img">
                    </div>
                    <h3 class="pricing-card_title">Ultimate Membership</h3>
                    <h4 class="pricing-card_price"><span class="currency">$</span>69<span class="duration">/month</span>
                    </h4>
                    <p class="pricing-card_content">This category typically offers access to the gym's facilities and equipment. </p>
                    <div class="checklist">
                        <ul>
                            <li><i class="far fa-check-circle"></i>12 trainings</li>
                            <li><i class="far fa-check-circle"></i>Free shower & lockers</li>
                            <li><i class="far fa-check-circle"></i>Personal yoga mat</li>
                            <li><i class="far fa-check-circle"></i>Free parking</li>
                        </ul>
                    </div>
                    <a class="btn style2" href="pricing.html">Choose This Plan</a>
                </div>
            </div>
        </div>
    </div>
</div>



</body>




@endsection







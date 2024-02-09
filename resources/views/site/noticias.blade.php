@extends('layout.layout')

@section('title','noticias')

@section('conteudo')



<div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcrumb-bg.png">
    <!-- bg animated image/ -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcumb-content">
                    <h1 class="breadcumb-title">Noticias</h1>
                    <ul class="breadcumb-menu">
                        <li><a href="{{ url('/') }}">HOME</a></li>
                        <li class="active">Noticias</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>

<!--==============================
Blog Area
==============================-->
<section class="blog-area space-top space-extra-bottom">
    <div class="container">
        <div class="row">
            <div class="col-xxl-8 col-lg-7">
                <div class="blog-card style4">
                    <div class="blog-img">
                        <img src="{{ asset ('assets/img/blog/blog_s1_1.png') }}" alt="blog image">
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <a href="blog.html"><i class="far fa-clock"></i> 25 June, 2023</a>
                            <a href="blog.html"><i class="far fa-user"></i>Post by: Admin</a>
                        </div>
                        <h3 class="blog-title"><a href="blog-details.html">Blog de fitness da academia </a></h3>
                        <p>Uma academia, também conhecida como centro de fitness ou clube de saúde, é uma instalação dedicada à preparação física e academias de ginástica e normalmente oferece uma variedade</p>
                        <a href="blog-details.html" class="link-btn style2"><i class="fas fa-arrow-right"></i> CONSULTE MAIS INFORMAÇÃO</a>
                    </div>
                </div>
                <div class="blog-card style4">
                    <div class="blog-img">
                        <img src="{{ asset('assets/img/treino..png') }}" alt="blog image">
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <a href="blog.html"><i class="far fa-clock"></i> 25 June, 2023</a>
                            <a href="blog.html"><i class="far fa-user"></i>Post by: Admin</a>
                        </div>
                        <h3 class="blog-title"><a href="blog-details.html">Estratégias para maximizar seus treinos</a></h3>
                        <p>Defina metas específicas e mensuráveis para orientar seu progresso. Metas claras fornecem um propósito tangível, mantendo você focado e motivado.
                            Desenvolva um plano de treino abrangente que inclua exercícios de força, resistência cardiovascular, flexibilidade e equilíbrio. A diversidade mantém os treinos interessantes e desafia o corpo de várias maneiras.
                            Evite a estagnação incorporando variedade em sua rotina. Introduza novos exercícios e métodos de treino para desafiar diferentes grupos musculares e evitar o tédio.
                        </p>
                        <a href="blog-details.html" class="link-btn style2"><i class="fas fa-arrow-right"></i> CONSULTE MAIS INFORMAÇÃO</a>
                    </div>
                </div>
                <div class="blog-card style4">
                    <div class="blog-img">
                        <img src="{{ asset('assets/img/nutrição.png') }}" alt="blog image">
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <a href="blog.html"><i class="far fa-clock"></i> 25 June, 2023</a>
                            <a href="blog.html"><i class="far fa-user"></i>Post by: Admin</a>
                        </div>
                        <h3 class="blog-title"><a href="blog-details.html">Conselhos sobre dicas de nutrição para frequentadores de academia</a></h3>
                        <p>Beba água ao longo do dia para garantir uma hidratação adequada.
                            Cerca de 1-2 horas antes do treino, consuma de 400 a 600 ml de água.
                            Inclua carboidratos complexos (aveia, arroz integral) e proteínas magras (frango, peixe) para fornecer energia sustentada.
                            Evite refeições muito pesadas para evitar desconforto durante o exercício.</p>
                        <a href="blog-details.html" class="link-btn style2"><i class="fas fa-arrow-right"></i>CONSULTE MAIS INFORMAÇÃO</a>
                    </div>
                </div>
                <div class="pagination">
                    <ul>
                        <li><a href="blog.html">1</a></li>
                        <li><a href="blog.html">2</a></li>
                        <li><a href="blog.html">3</a></li>
                        <li><a href="blog.html"><i class="fas fa-arrow-right"></i></a></li>
                    </ul>
                </div>
            </div>

            <div class="col-xxl-4 col-lg-5">
                <aside class="sidebar-area">
                    <div class="widget widget_search">
                        <form class="search-form">
                            <input type="text" placeholder="Enter Keyword">
                            <button type="submit"><i class="far fa-search"></i></button>
                        </form>
                    </div>

                    <div class="widget">
                        <h3 class="widget_title">Postagens recentes</h3>
                        <div class="recent-post-wrap">
                            <div class="recent-post">
                                <div class="media-img">
                                    <a href="blog-details.html"><img src="{{ asset('assets/img/') }}" alt="Blog Image"></a>
                                </div>
                                <div class="media-body">
                                    <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Estratégias essenciais para maximizar seu</a></h4>
                                    <div class="recent-post-meta">
                                        <a href="blog.html">25 Jun, 2023</a>
                                    </div>
                                </div>
                            </div>
                            <div class="recent-post">
                                <div class="media-img">
                                    <a href="blog-details.html"><img src="{{ asset('assets/img/treinamento.png') }}" alt="Blog Image"></a>
                                </div>
                                <div class="media-body">
                                    <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Treinamento funcional em  sua rotina...</a></h4>
                                    <div class="recent-post-meta">
                                        <a href="blog.html">25 Jun, 2023</a>
                                    </div>
                                </div>
                            </div>
                            <div class="recent-post">
                                <div class="media-img">
                                    <a href="blog-details.html"><img src="{{ asset ('assets/img/nutrição2.png') }}" alt="Blog Image"></a>
                                </div>
                                <div class="media-body">
                                    <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Conselhos sobre dicas de nutrição para frequentadores de academia</a></h4>
                                    <div class="recent-post-meta">
                                        <a href="blog.html">25 Jun, 2023</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="widget widget_categories">
                        <h3 class="widget_title">Categories</h3>
                        <ul>
                            <li>
                                <a href="blog.html"><i class="fa-solid fa-arrow-right"></i>Treinamento de boxe</a>
                            </li>
                            <li>
                                <a href="blog.html"><i class="fa-solid fa-arrow-right"></i>Aula de musculação</a>
                            </li>
                            <li>
                                <a href="blog.html"><i class="fa-solid fa-arrow-right"></i>Aula de Meditação</a>
                            </li>
                            <li>
                                <a href="blog.html"><i class="fa-solid fa-arrow-right"></i>Treinamento de ioga mental</a>
                            </li>
                            <li>
                                <a href="blog.html"><i class="fa-solid fa-arrow-right"></i>Classe Corporal CrossFit</a>
                            </li>
                        </ul>
                    </div>

                    <div class="widget widget_gallery">
                        <h3 class="widget_title">Galleria</h3>
                        <div class="insta-feed">
                            <a href="blog.html"><img src="{{ asset('assets/img/instagram/feed1.png') }}" alt="img">
                            <i class="fab fa-instagram"></i></a>
                            <a href="blog.html"><img src="{{ asset('assets/img/instagram/feed2.png') }}" alt="img">
                            <i class="fab fa-instagram"></i></a>
                            <a href="blog.html"><img src="{{ asset('assets/img/instagram/feed3.png') }}" alt="img">
                            <i class="fab fa-instagram"></i></a>
                            <a href="blog.html"><img src="{{ asset('assets/img/instagram/feed4.png') }}" alt="img">
                            <i class="fab fa-instagram"></i></a>
                            <a href="blog.html"><img src="{{ asset('assets/img/instagram/feed5.png') }}" alt="img">
                            <i class="fab fa-instagram"></i></a>
                            <a href="blog.html"><img src="{{ asset('assets/img/instagram/feed6.png') }}" alt="img">
                                <i class="fab fa-instagram"></i></a>
                        </div>
                    </div>

                    <div class="widget widget_tag_cloud">
                        <h3 class="widget_title">Popular Tags</h3>
                        <div class="tagcloud">
                            <a href="blog.html">ADVICE</a>
                            <a href="blog.html">FIT</a>
                            <a href="blog.html">AUTHOR</a>
                            <a href="blog.html">FAMILY</a>
                            <a href="blog.html">Fitmas</a>
                            <a href="blog.html">HEALTH</a>
                            <a href="blog.html">FITNESS</a>
                            <a href="blog.html">GYM</a>
                            <a href="blog.html">JUDGE</a>
                            <a href="blog.html">SOLUTION</a>
                            <a href="blog.html">TRAINING</a>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>

<!--==============================
    Footer Area
==============================-->
<footer class="footer-wrapper footer-layout1" data-bg-src="assets/img/bg/footer-1-bg.png">
    <div class="container">
        <div class="contact-card">
            <div class="info-card">
                <div class="info-card_icon">
                    <i class="fas fa-location-dot"></i>
                </div>
                <div class="info-card_content">
                    <p class="info-card_text">Gym Location</p>
                    <a href="https://www.google.com/maps" class="info-card_link">Marina Lane Berlin</a>
                </div>
            </div>
            <div class="info-card">
                <div class="info-card_icon">
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="info-card_content">
                    <p class="info-card_text">Email Address</p>
                    <a href="mailto:health@Fitmas.com" class="info-card_link">health@Fitmas.com</a>
                </div>
            </div>
            <div class="info-card">
                <div class="info-card_icon">
                    <i class="fas fa-phone-volume"></i>
                </div>
                <div class="info-card_content">
                    <p class="info-card_text">Phone Number</p>
                    <a href="tel:+18925382145" class="info-card_link">(+189) 2538-2145</a>
                </div>
            </div>
        </div>




@endsection

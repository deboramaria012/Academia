<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> @yield('title') - Academia Viva Bem </title>
    <meta name="description" content="Fitmas - Modelo HTML de Academia e Fitness">
    <meta name="keywords" content="Fitmas - Modelo HTML de Academia e Fitness">
    <meta name="robots" content="INDEX,FOLLOW">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">


        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicons/favicon.png') }}">
        <link rel="manifest" href="{{ asset('assets/img/favicons/manifest.json') }}">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="{{ asset('assets/img/favicons/ms-icon-144x144.png') }}">
        <meta name="theme-color" content="#ffffff">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;600;700;800&family=Kumbh+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

        {{-- CSS --}}
      <link rel="stylesheet" href="{{ asset ('assets/css/style.css') }}">
      <link rel="stylesheet" href="{{ asset ('assets/css/bootstrap.min.css') }}">
      <link rel="stylesheet" href="{{ asset ('assets/css/jquery.flipster.min.css') }}">
      <link rel="stylesheet" href="{{ asset ('assets/css/slick.min.css') }}">
      <link rel="stylesheet" href="{{ asset ('assets/css/magnific-popup.min.css') }}">
      <link rel="stylesheet" href="{{ asset ('assets/css/fontawesome.min.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/nice-select.min.css') }}">

    </head>

<body>

       {{-- <div class="preloader">
        <div class="preloader-inner">
            <span class="loader"></span>
        </div>
    </div> --}}

    <div class="popup-search-box">
        <button class="searchClose"><i class="fal fa-times"></i></button>
        <form action="#">
            <input type="text" placeholder="Search Here..">
            <button type="submit"><i class="fal fa-search"></i></button>
        </form>
    </div>
    <div class="sidemenu-wrapper">
        <div class="sidemenu-content">
            <button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
            <div class="widget footer-widget">
                <div class="widget-about">
                    <div class="footer-logo">
                        <a href="index.html"><img src="{{ asset('assets/img/logoVivaBem.svg') }}" alt="VivaBem"></a>
                    </div>
                    <p class="about-text">Uma academia, também conhecida como centro de fitness ou clube de saúde, é uma instalação dedicada à preparação física e academias de ginástica e normalmente oferece uma variedade</p>
                    <div class="social-btn">
                        <a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a>
                        <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                        <a href="https://pinterest.com/"><i class="fab fa-pinterest-p"></i></a>
                        <a href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="widget widget_nav_menu footer-widget">
                <h3 class="widget_title">Quick Links</h3>
                <ul class="menu">
                    <li><a href="{{ url('/sobre') }}">Sobre</a></li>
                    <li><a href="project-details.html">Our Mission</a></li>
                    <li><a href="team.html">Meet The Teams</a></li>
                    <li><a href="project.html">Our Projects</a></li>
                    <li><a href="{{ url('/contato') }}">Contato</a></li>
                </ul>
            </div>
        </div>
    </div>


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

                        <div class="col-auto d-none d-lg-block">
                            <div class="header-button">
                                <a href="{{ url('/login') }}" class="btn style2 style-r0 d-xl-block d-none">
                                    Login
                                </a>

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


        <main>
        @yield('conteudo')
       </main>



    <footer class="footer-wrapper footer-layout1" data-bg-src="{{ asset('assets/img/bg/footer-1-bg.png') }}">
        <div class="container">
            <div class="widget-area">
                <div class="row justify-content-between">
                    <div class="col-md-6 col-xl-3">
                        <div class="widget footer-widget">
                            <div class="widget-about">
                                <div class="footer-logo">
                                    <a href="index.html"><img src="{{ asset('assets/img/logoVivaBem.svg') }}" alt="VivaBem"></a>
                                </div>
                                <p class="about-text">Uma academia, também conhecida como centro de fitness ou clube de saúde, é uma instalação dedicada à preparação física e academias de ginástica e normalmente oferece uma variedade</p>
                                <div class="social-btn">
                                    <a href="https://twitter.com/" tabindex="0"><i class="fab fa-twitter"></i></a>
                                    <a href="https://linkedin.com/" tabindex="0"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="https://www.discord.com/" tabindex="0"><i class="fab fa-discord"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget widget_nav_menu footer-widget">
                            <h3 class="widget_title">Links Rápidos</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    <li><a href="{{ url('/') }}">Home</a></li>
                                    <li><a href="{{ url('/sobre') }}">Sobre</a></li>
                                    <li><a href="{{ url('/modalidade') }}">Modalidades</a></li>
                                    <li><a href="{{ url('/treino') }}">Treino</a></li>
                                    <li><a href="{{ url('/noticia') }}">Noticias</a></li>
                                    <li><a href="{{ url('/contato') }}">Contato</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>



                    <div class="col-md-6 col-xl-auto">
                        <div class="widget footer-widget">
                            <h3 class="widget_title">Galeria</h3>
                            <div class="sidebar-gallery">
                                <div class="gallery-thumb">
                                    <img src="{{ asset('assets/img/instagram/feed1.png') }}" alt="Gallery Image">
                                    <a href="{{ asset('assets/img/widget/insta-feed1.png') }}" class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a>
                                </div>
                                <div class="gallery-thumb">
                                    <img src="{{ asset ('assets/img/instagram/feed2.png') }}" alt="Gallery Image">
                                    <a href="{{ asset('assets/img/widget/insta-feed2.png') }}" class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a>
                                </div>
                                <div class="gallery-thumb">
                                    <img src="{{asset ('assets/img/instagram/feed3.png') }}" alt="Gallery Image">
                                    <a href="{{ asset('assets/img/widget/insta-feed3.png') }}" class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a>
                                </div>
                                <div class="gallery-thumb">
                                    <img src="{{ asset('assets/img/instagram/feed4.png')  }}" alt="Gallery Image">
                                    <a href="{{ asset ('assets/img/widget/insta-feed4.png')}}" class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a>
                                </div>
                                <div class="gallery-thumb">
                                    <img src="{{ asset ('assets/img/instagram/feed5.png') }}" alt="Gallery Image">
                                    <a href="{{ asset('assets/img/widget/insta-feed5.png') }}" class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a>
                                </div>
                                <div class="gallery-thumb">
                                    <img src="{{ asset('assets/img/instagram/feed6.png') }}" alt="Gallery Image">
                                    <a href="{{ asset('assets/img/widget/insta-feed6.png') }}" class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="widget footer-widget">
                            <h3 class="widget_title">Receba boletim informativo</h3>
                            <p class="footer-text">Ganhe 10% de desconto no seu primeiro pedido! Se apresse</p>

                            <form action="{{ route('contato.enviarNew') }}" method="POST" class="contact-form newsletter" id="new_letters">
                                @csrf
                                <div class="form-group">
                                    <i class="far fa-envelope"></i>
                                    <input class="form-control" name="emailNew" id="emailNew" type="email" placeholder="Email" required="">
                                </div>
                                <button type="submit" value="Inscreva-se" class="btn style-r0 style2" onclick="new_letters(event)">Se inscrever</button>
                                <div id="newsMensagem" class="msgContato"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="copyright-wrap">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-auto align-self-center"><p class="copyright-text text-center">© 2023 <a href="#">Fitmas.</a>Todos os direitos reservados.</p></div>
                </div>
            </div>
        </div>
    </footer>


    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
        </svg>
    </div>



    <!--==============================
    All Js File
    ============================== -->
    <!-- Jquery -->
    <script src="{{ asset ('assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
    <!-- Slick Slider -->
    <script src="{{ asset ('assets/js/slick.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset ('assets/js/bootstrap.min.js') }}"></script>
    <!-- Magnific Popup -->
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <!-- Counter Up -->
    <script src="{{ asset ('assets/js/jquery.counterup.min.js')}}"></script>
    <!-- Range Slider -->
    <script src="{{ asset ('assets/js/jquery-ui.min.js')}}"></script>
    <!-- Flip Slider -->
    <script src="{{asset  ('assets/js/jquery.flipster.min.js')}}"></script>
    <!-- Isotope Filter -->
    <script src="{{ asset ('assets/js/imagesloaded.pkgd.min.js') }}"></script>

    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>

    <script src="{{ asset ('assets/js/bmi.calculator.js')}}"></script>

    <!-- Main Js File -->
    <script src=" {{ asset ('assets/js/main.js') }}"></script>
    <script src=" {{ asset ('assets/js/script.js') }}"></script>



</body>

</html>


   <!--Script-->














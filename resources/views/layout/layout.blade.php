<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title', 'Título Padrão')</title>
    <meta name="description" content="Fitmas - Gym & Fitness HTML Template">
    <meta name="keywords" content="Fitmas - Gym & Fitness HTML Template">
    <meta name="robots" content="INDEX,FOLLOW">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons - Place favicon.ico in the root directory -->
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/logo-white.png') }}">
    <link rel="manifest" href="{{ asset('assets/img/favicons/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('assets/img/logo-white.png') }}">
    <meta name="theme-color" content="#ffffff">

    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!--==============================
	  Google Fonts
	============================== -->
    <link rel="preconnect" href="{{ asset('https://fonts.googleapis.com') }}">
    <link rel="preconnect" href="{{ asset('https://fonts.gstatic.com') }}" crossorigin>
    <link href="{{ asset('https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;600;700;800&family=Kumbh+Sans:wght@300;400;500;600;700&display=swap') }}" rel="stylesheet">

    <!--==============================
	    All CSS File
	============================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/fontawesome.min.css') }}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/magnific-popup.min.css' ) }}">
    <!-- Slick Slider -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick.min.css') }}">
    <!-- Flip Slider -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.flipster.min.css') }}">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

</head>

<style>
    .hero-slider {
position: relative;
}

.hero-slider::before {
content: "";
position: absolute;
top: 0;
left: 0;
width: 100%;
height: 100%;
background: rgba(0, 0, 0, 0.1); /* Altere o valor de '0.5' para ajustar a intensidade do escurecimento */
pointer-events: none; /* Permite que você clique através da camada de sobreposição */
}

.social-btn a {
    height: 35px;
    width: 35px;
    line-height: 35px;
    border-radius: 7px;
    display: inline-block;
    background-color: var(--smoke-color4);
    color: var(--title-color);
    text-align: center;
    font-size: 12px;
    padding-top: 3%;
}

a i{
    font-size: 12pt;
}
.theme {
    --bg-color: #0600ff73;
    --main-color: #ffffff;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 40px;
    height: 40px;
    background-color: var(--bg-color);
    border-radius: 100%;
    border: 2px solid #ffffff;
    box-shadow: 4px 4px #000000;
}

.input {
  cursor: pointer;
  position: absolute;
  width: 100%;
  height: 100%;
  z-index: 10;
  opacity: 0;
}

.icon {
  position: absolute;
  top: calc(50% -13px);
  left: calc(50% -13px);
  width: 26px;
  height: 26px;
}

.icon.icon-moon {
  fill: var(--main-color);
}

.icon.icon-sun {
  stroke: #FFD950;
  display: none;
}

.input:checked ~ .icon.icon-sun {
  display: block;
}

.input:checked ~ .icon.icon-moon {
  display: none;
}

.theme:active {
  box-shadow: 0px 0px var(--main-color);
  transform: translate(3px, 3px);
}
</style>

<body>



    <!--********************************
   		Code Start From Here
	******************************** -->




    <!--==============================
     Preloader
    ==============================-->
    <div class="preloader">
        <div class="preloader-inner">
            <span class="loader"></span>
        </div>
    </div>
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
                        <a href="/"><img src="assets/img/logo-white.png" alt="Viva Bem"></a>
                    </div>
                    <p class="about-text">Um centro de bem-estar, conhecido como ponto focal para o aprimoramento físico e mental, é uma instituição dedicada ao cultivo holístico do corpo e da mente. Mais do que uma academia de ginástica, é um refúgio para nutrir sua saúde e vitalidade. Em nossas instalações, proporcionamos uma variedade de experiências que transcendem o tradicional.</p>
                    <div class="social-btn">
                        <a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a>
                        <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                        <a href="https://pinterest.com/"><i class="fab fa-pinterest-p"></i></a>
                        <a href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="widget widget_nav_menu footer-widget">
                <h3 class="widget_title">Link Rápidos</h3>
                <ul class="menu">
                    <li><a href="/sobre">Sobre nós</a></li>
                    <li><a href="project-details.html">Nossa Missão</a></li>
                    <li><a href="team.html">Conheça Nossa Equipe</a></li>
                    <li><a href="project.html">Nossos Projetos</a></li>
                    <li><a href="contact.html">Contate-nos</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!--==============================
    Mobile Menu
    ============================== -->
    <div class="mobile-menu-wrapper">
        <div class="mobile-menu-area text-center">
            <button class="menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo">
                <a href="index.html"><img src="assets/img/logo-white.png" alt="Viva Bem"></a>
            </div>
            <div class="mobile-menu">
                <ul>
                    <li class="">
                        <a href="/">Home</a>

                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Pages</a>
                        <ul class="sub-menu">
                            <li><a href="/equipe">Página De Equipe</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Project</a>
                        <ul class="sub-menu">
                            <li><a href="project.html">Projetos</a></li>
                            <li><a href="project-details.html">Página De Projeto</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Service</a>
                        <ul class="sub-menu">
                            <li><a href="service.html">Serviços</a></li>
                            <li><a href="service-details.html">Detalhes De Serviço</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="contact.html">Contato</a>
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
                                <li><i class="far fa-clock"></i>Seg - Sab: 8h00 am - 23h00 pm</li>
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
                                <a href="/"><img src="assets/img/logo-white.png" alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-auto m-lg-auto">
                            <nav class="main-menu d-none d-lg-inline-block">
                                <ul>
                                    <li class="">
                                        <a href="/">Home</a>
                                    </li>
                                    <li>
                                        <a href="/sobre">Sobre</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="/servico">Serviços</a>
                                        <ul class="sub-menu">
                                            <li><a href="/servico">Serviço</a></li>
                                            <li><a href="service-details.html">Detalhes De Serviço</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Paginas</a>
                                        <ul class="sub-menu">
                                            <li><a href="/equipe">Página De Equipe</a></li>
                                            <li><a href="team-details.html">Detalhes Da Equipe</a></li>
                                            <li><a href="/treino">Treino | Aulas</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="contact.html">Contato</a>
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
                                <a href="javascript:void" class="btn style2 style-r0 d-xl-block d-none" id="startNowButton">
                                   Começar agora
                                </a>
                                <button type="button" class="btn style-r0 btn-border3 sideMenuToggler">
                                    <i class="far fa-bars"></i>
                                </button>
                                <label class="theme">
                                    <input id="darkModeToggle" class="input" type="checkbox">
                                    <svg width="24" viewBox="0 0 24 24" stroke-width="2" stroke-linejoin="round" stroke-linecap="round" stroke="currentColor" height="24" fill="none" class="icon icon-sun"><circle r="5" cy="12" cx="12"></circle><line y2="3" y1="1" x2="12" x1="12"></line><line y2="23" y1="21" x2="12" x1="12"></line><line y2="5.64" y1="4.22" x2="5.64" x1="4.22"></line><line y2="19.78" y1="18.36" x2="19.78" x1="18.36"></line><line y2="12" y1="12" x2="3" x1="1"></line><line y2="12" y1="12" x2="23" x1="21"></line><line y2="18.36" y1="19.78" x2="5.64" x1="4.22"></line><line y2="4.22" y1="5.64" x2="19.78" x1="18.36"></line></svg>
                                    <svg viewBox="0 0 24 24" class="icon icon-moon"><path d="m12.3 4.9c.4-.2.6-.7.5-1.1s-.6-.8-1.1-.8c-4.9.1-8.7 4.1-8.7 9 0 5 4 9 9 9 3.8 0 7.1-2.4 8.4-5.9.2-.4 0-.9-.4-1.2s-.9-.2-1.2.1c-1 .9-2.3 1.4-3.7 1.4-3.1 0-5.7-2.5-5.7-5.7 0-1.9 1.1-3.8 2.9-4.8zm2.8 12.5c.5 0 1 0 1.4-.1-1.2 1.1-2.8 1.7-4.5 1.7-3.9 0-7-3.1-7-7 0-2.5 1.4-4.8 3.5-6-.7 1.1-1 2.4-1 3.8-.1 4.2 3.4 7.6 7.6 7.6z"></path></svg>
                                  </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!--==============================
    Hero Area
    ==============================-->
    <div class="hero-wrapper hero-2" id="hero">
        <div class="global-carousel" id="heroSlider2" data-fade="true" data-slide-show="1" data-lg-slide-show="1" data-md-slide-show="1" data-sm-slide-show="1" data-xs-slide-show="1" data-arrows="true" data-xl-arrows="true" data-ml-arrows="true">
            <div style="background-position: unset;" class="hero-slider" data-bg-src="{{ asset('assets/banner/bemEstar.jpeg') }}">
                <div class="hero-shape2-1 shape-mockup movingX" data-bottom="-165px" data-left="0">
                    <img src="assets/img/hero/hero_shape_2-1.png" alt="img">
                </div>
                <div class="hero-shape2-2 shape-mockup jump2" data-bottom="-50px" data-right="-10%">
                    <img src="assets/img/hero/hero_shape_2-2.png" alt="img">
                </div>
                <div class="hero-shape2-3 shape-mockup jump2" data-top="-30%" data-left="-30%">
                    <img src="assets/img/hero/hero_shape_2-3.png" alt="img">
                </div>
                <div class="container">
                    <div class="row justify-content-lg-end justify-content-center">
                        <div class="col-xl-6 col-lg-7 col-md-9">
                            <div class="hero-style2">
                                <span class="hero-subtitle fw-medium" data-ani="slideinup" data-ani-delay="0s">Sua nova fase na</span>
                                <h1 class="hero-title text-white" data-ani="slideinup" data-ani-delay="0.1s">VIDA</h1>
                                <span class="hero-subtitle fw-semibold" data-ani="slideinup" data-ani-delay="0.2s">VIVA BEM</span>
                                <div class="btn-group" data-ani="slideinup" data-ani-delay="0.3s">
                                    <a href="contact.html" class="btn style-r0 style2">Primeiro passo à saúde</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="background-position: unset" class="hero-slider" data-bg-src="{{ asset('assets/banner/bemEstar2.jpeg') }}">
                <div class="hero-shape2-1 shape-mockup movingX" data-bottom="-165px" data-left="0">
                    <img src="assets/img/hero/hero_shape_2-1.png" alt="img">
                </div>
                <div class="hero-shape2-2 shape-mockup jump2" data-bottom="-50px" data-right="-10%">
                    <img src="assets/img/hero/hero_shape_2-2.png" alt="img">
                </div>
                <div class="hero-shape2-3 shape-mockup jump2" data-top="-30%" data-left="-30%">
                    <img src="assets/img/hero/hero_shape_2-3.png" alt="img">
                </div>
                <div class="container">
                    <div class="row justify-content-lg-end justify-content-center">
                        <div class="col-xl-6 col-lg-7 col-md-9">
                            <div class="hero-style2">
                                <span class="hero-subtitle fw-medium" data-ani="slideinup" data-ani-delay="0s">Sua nova fase na</span>
                                <h1 class="hero-title text-white" data-ani="slideinup" data-ani-delay="0.1s">VIDA</h1>
                                <span class="hero-subtitle fw-semibold" data-ani="slideinup" data-ani-delay="0.2s">VIVA BEM</span>
                                <div class="btn-group" data-ani="slideinup" data-ani-delay="0.3s">
                                    <a href="contact.html" class="btn style-r0 style2">Primeiro passo à saúde</a>
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

        <!--==============================
        BMI Area
        ==============================-->
        <main>
            @yield('conteudo')
        </main>
    <!--==============================
        Footer Area
    ==============================-->
    <footer class="footer-wrapper footer-layout1" data-bg-src="assets/img/bg/footer-1-bg.png">
        <div class="container">
            <div class="widget-area">
                <div class="row justify-content-between">
                    <div class="col-md-6 col-xl-3">
                        <div class="widget footer-widget">
                            <div class="widget-about">
                                <div class="footer-logo">
                                    <a href="/"><img src="{{ asset('assets/img/logo-white.png') }}" alt="Viva Bem"></a>
                                </div>
                                <p class="about-text">Junte-se a nós e descubra um ambiente que vai além dos limites convencionais da preparação física. Oferecemos não apenas equipamentos de última geração, mas uma comunidade que incentiva o seu crescimento pessoal.</p>
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
                            <h3 class="widget_title">Link Rápidos</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    <li><a href="/sobre">Sobre nós</a></li>
                                    <li><a href="service-details.html">Nossa Missão</a></li>
                                    <li><a href="team.html">Conheça Nossa Equipe</a></li>
                                    <li><a href="project.html">Nossos Projetos</a></li>
                                    <li><a href="contact.html">Contate-nos</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget footer-widget">
                            <h3 class="widget_title">Galeria</h3>
                            <div class="sidebar-gallery">
                                <div class="gallery-thumb">
                                    <img src="{{ asset('assets/instaFooter/75.1.png') }}" alt="Gallery Image">
                                    <a href="assets/img/widget/insta-feed1.png" class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a>
                                </div>
                                <div class="gallery-thumb">
                                    <img src="{{ asset('assets/instaFooter/75.2.png') }}" alt="Gallery Image">
                                    <a href="assets/img/widget/insta-feed2.png" class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a>
                                </div>
                                <div class="gallery-thumb">
                                    <img src="{{ asset('assets/instaFooter/75.3.png') }}" alt="Gallery Image">
                                    <a href="assets/img/widget/insta-feed3.png" class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a>
                                </div>
                                <div class="gallery-thumb">
                                    <img src="{{ asset('assets/instaFooter/75.4.png') }}" alt="Gallery Image">
                                    <a href="assets/img/widget/insta-feed4.png" class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a>
                                </div>
                                <div class="gallery-thumb">
                                    <img src="{{ asset('assets/instaFooter/75.5.png') }}" alt="Gallery Image">
                                    <a href="assets/img/widget/insta-feed5.png" class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a>
                                </div>
                                <div class="gallery-thumb">
                                    <img src="{{ asset('assets/instaFooter/75.6.png') }}" alt="Gallery Image">
                                    <a href="assets/img/widget/insta-feed6.png" class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="widget footer-widget">
                            <h3 class="widget_title">Receba boletim informativo</h3>
                            <p class="footer-text">Ganhe 10% de desconto no seu primeiro pedido! Se apresse</p>
                            <form action="" method="POST" class="newsletter-form" id="formContatoNew">
                                @csrf
                                <div class="form-group">
                                    <i class=""></i>
                                    <input id="emailDeContato" name="emailDeContato" type="email" placeholder="Endereço de email" required="" value="{{old('emailDeContato')}}">
                                </div>
                                <button onclick="newsLetter();" class="btn style-r0 style2">Se inscrever</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-wrap">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-auto align-self-center"><p class="copyright-text text-center">© 2023 <a href="#">Viva Bem.</a> Todos os direitos reservados.</p></div>
                </div>
            </div>
        </div>
    </footer>

    <!--********************************
			Code End  Here
	******************************** -->

    <!-- Scroll To Top -->
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
        </svg>
    </div>

    <!--==============================
    All Js File
    ============================== -->
    <!-- Jquery -->
    <script src="{{ asset('js/vendor/jquery-3.6.0.min.js') }}"></script>
    <!-- Slick Slider -->
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- Magnific Popup -->
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Counter Up -->
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <!-- Range Slider -->
    <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
    <!-- Flip Slider -->
    <script src="{{ asset('js/jquery.flipster.min.js') }}"></script>
    <!-- Isotope Filter -->
    <script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>

    <script src="{{ asset('js/bmi.calculator.js') }}"></script>

    <!-- Main Js File -->
    <script src="{{ asset('js/main.js') }}"></script>

    <script src="{{ asset('js/script.js') }}"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const darkModeToggle = document.getElementById('darkModeToggle');
            const body = document.body;

            // Evento de mudança no botão de alternância do modo escuro
            darkModeToggle.addEventListener('change', function () {
                body.classList.toggle('dark-mode', darkModeToggle.checked);
                localStorage.setItem('darkMode', darkModeToggle.checked);
            });

            // Verificar e aplicar o estado do modo escuro ao carregar a página
            const savedDarkMode = localStorage.getItem('darkMode') === 'true';
            darkModeToggle.checked = savedDarkMode;
            body.classList.toggle('dark-mode', savedDarkMode);
        });
        </script>

</body>

</html>

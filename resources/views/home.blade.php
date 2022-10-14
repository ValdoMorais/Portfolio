
<!doctype html>
<html lang="pt">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portefolio - Valdo Morais Flor - Inicio</title>
    <!-- google font -->
    <link href="//fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <!-- Template CSS Style link -->
    <link rel="stylesheet" href="{{asset('css/style-starter.css')}}">
</head>

<body>
    <!-- header -->
        @include('section.header')
    <!-- //header -->

    <!-- banner section -->
    <section class="w3l-banner py-5" id="home">
        <div class="container py-md-5 py-4">
            <div class="row align-items-center pt-4">
                <div class="col-md-6 banner-left pe-xl-5">
                    <h4>Ola, Eu sou Valdo Flor</h4>
                    <h3 class="mb-3 mt-1">Desenvolvedor</h3>
                    <p class="banner-sub me-md-5">Adoro trabalhar com design de UI/UX.
                        Eu sempre tento o meu melhor para fazer uma boa UI com o melhor UX.
                    </p>
                    <div class="d-flex align-items-center buttons-banner mt-sm-5 mt-4">
                        <a href="sobre" class="btn btn-style me-2">Contrate me</a>
                    </div>
                </div>
                <div class="col-md-6">
                </div>
            </div>
        </div>
        <!-- animations icons -->
        <div class="icon-effects-w3-1 text-right">
            <img src='images/icon2.png' alt="" class="img-fluid">
        </div>
        <div class="icon-effects-w3-2 text-right">
            <img src="{{asset('images/icon3.png')}}" alt="" class="img-fluid">
        </div>
        <div class="icon-effects-w3-3 text-right">
            <img src="{{asset('images/icon1.png')}}" alt="" class="img-fluid">
        </div>
        <div class="icon-effects-w3-4 text-right">
            <img src="{{asset('images/icon6.png')}}" alt="" class="img-fluid">
        </div>
        <!-- //animations icons -->
    </section>
    <!-- //banner section -->

    <!-- logo partners -->
    <section class="w3l-clients pt-5 pb-4" id="clients">
        <div class="container">
            <div class="company-logos text-center">
                <div class="row mx-auto justify-content-center">
                    <div class="col-md-2 col-sm-4 col-6 ">
                        <img src="{{asset('images/logo1.png')}}" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-2 col-sm-4 col-6">
                        <img src="{{asset('images/logo2.png')}}" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-2 col-sm-4 col-6 mt-sm-0 mt-3">
                        <img src="{{asset('images/logo3.png')}}" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-2 col-sm-4 col-6 mt-md-0 mt-3">
                        <img src="{{asset('images/logo4.png')}}" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-2 col-sm-4 col-6 mt-md-0 mt-3">
                        <img src="{{asset('images/logo5.png')}}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //logo partners -->

    <!-- grids section -->
    <section class="w3l-bottom-grids-6 pt-sm-5 pb-5" id="features">
        <div class="container pt-lg-4">
            <div class="grids-area-hny main-cont-wthree-fea row">
                <div class="col-md-3 col-sm-4 ps-xl-5">
                    <h4 class="ab-exper-count mb-sm-4 ps-lg-4">2</h4>
                    <p class="ab-content ps-lg-4">anos de experiencia em trabalhos proprios</p>
                </div>
                <div class="col-xl-8 col-md-9 col-sm-8 offset-xl-1 ps-xl-0 pe-xl-5 mt-sm-0 mt-4">
                    <h3 class="title-style mb-sm-5 mb-4">Sou desenvolvedor apaixonado por web design</h3>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 grids-feature">
                            <div class="area-box active">
                                <div class="icon-style">
                                    <i class="fas fa-lightbulb"></i>
                                </div>
                                <h4><a href="#feature" class="title-head">Design Criativos</a></h4>
                                <a href="sobre" class="btn more p-0">Ver Mais<i
                                        class="fas fa-long-arrow-alt-right ms-1"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 grids-feature mt-md-0 mt-4">
                            <div class="area-box">
                                <div class="icon-style">
                                    <i class="fas fa-laptop-code"></i>
                                </div>
                                <h4><a href="#feature" class="title-head">Web Design</a></h4>
                                <a href="sobre" class="btn more p-0">Ver Mais<i
                                        class="fas fa-long-arrow-alt-right ms-1"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 grids-feature mt-lg-0 mt-4">
                            <div class="area-box">
                                <div class="icon-style">
                                    <i class="fas fa-layer-group"></i>
                                </div>
                                <h4><a href="#feature" class="title-head">Marca</a></h4>
                                <a href="sobre" class="btn more p-0">Ver Mais<i
                                        class="fas fa-long-arrow-alt-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //grids section -->

    <!-- about section -->
        @include('section.info')
    <!-- //about section -->

    <!-- qualification section -->
        @include('section.qualify')
    <!-- //qualification section -->

    <!-- skills section -->
        @include('section.skill')
    <!-- //skills section -->

    <!-- projects section -->
    <section class="w3l-gallery pb-5" id="gallery">
        <div class="container py-md-5 py-4">
            <div class="title-heading-w3 text-center mb-sm-5 mb-4">
                <h5 class="title-small mb-1">Portfolio</h5>
                <h3 class="title-style">Alguns dos meus projetos mais recentes</h3>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 item">
                    <a href="https://github.com/ValdoMoraisFlor/HCB-job" target=".blank" data-title="Project 1"
                        class="zoom d-block">
                        <img class="card-img-bottom d-block" src="images/g1.jpg" alt="Card image cap">
                        <span class="overlay__hover"></span>
                        <span class="hover-content">
                            <span class="title">Projecto 1</span>
                            <span class="content">Prototipo HCB, Sistema Hospitalar para o Hospital central da beira.</span>
                        </span>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 item mt-md-0 mt-4">
                    <a href="" target=".black"data-lightbox="example-set" data-title="Project 2"
                        class="zoom d-block">
                        <img class="card-img-bottom d-block" src="images/g2.jpg" alt="Card image cap">
                        <span class="overlay__hover"></span>
                        <span class="hover-content">
                            <span class="title">Projecto 2</span>
                            <span class="content">Walembwa, Desktop de gestao de Detentos.</span>
                        </span>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6 item mt-lg-0 mt-4">
                    <a href="images/g3.jpg" data-lightbox="example-set" data-title="Project 3"
                        class="zoom d-block">
                        <img class="card-img-bottom d-block" src="images/g3.jpg" alt="Card image cap">
                        <span class="overlay__hover"></span>
                        <span class="hover-content">
                            <span class="title">Projecto 3</span>
                            <span class="content">MozTopUp, Recargas em Jogos via Mpesa.</span>
                        </span>
                    </a>
                </div>

                {{-- <div class="col-lg-4 col-md-6 item mt-4 pt-lg-2">
                    <a href="images/g5.jpg" data-lightbox="example-set" data-title="Project 4"
                        class="zoom d-block">
                        <img class="card-img-bottom d-block" src="images/g5.jpg" alt="Card image cap">
                        <span class="overlay__hover"></span>
                        <span class="hover-content">
                            <span class="title">Project 4</span>
                            <span class="content">Quisque ut lectus, eros et, sed commodo risus.</span>
                        </span>
                    </a>
                </div> --}}

                {{-- <div class="col-lg-4 col-md-6 item mt-4 pt-lg-2">
                    <a href="images/g6.jpg" data-lightbox="example-set" data-title="Project 5"
                        class="zoom d-block">
                        <img class="card-img-bottom d-block" src="images/g6.jpg" alt="Card image cap">
                        <span class="overlay__hover"></span>
                        <span class="hover-content">
                            <span class="title">Project 5</span>
                            <span class="content">Quisque ut lectus, eros et, sed commodo risus.</span>
                        </span>
                    </a>
                </div> --}}

                {{-- <div class="col-lg-4 col-md-6 item mt-4 pt-lg-2">
                    <a href="images/g4.jpg" data-lightbox="example-set" data-title="Project 6"
                        class="zoom d-block">
                        <img class="card-img-bottom d-block" src="images/g4.jpg" alt="Card image cap">
                        <span class="overlay__hover"></span>
                        <span class="hover-content">
                            <span class="title">Project 6</span>
                            <span class="content">Quisque ut lectus, eros et, sed commodo risus.</span>
                        </span>
                    </a>
                </div>
            </div> --}}
        </div>
    </section>
    <!-- //projects section -->

    <!-- home service section -->
        @include('section.servico')
    <!-- //home service section -->

    <!-- testimonials section -->
    {{-- <section class="w3l-testimonials py-5" id="testimonials">
        <div class="container py-md-5 py-4">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="owl-two owl-carousel owl-theme">
                        <div class="item">
                            <div class="slider-info mt-lg-4 mt-3">
                                <div class="message">
                                    <img src="images/quote.png" alt="" class="img-fluid mb-2" />
                                    <p><q>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea sit id
                                            accusantium
                                            officia quod quasi necessitatibus perspiciatis Harum error provident
                                            quibusdam tenetur.</q></p>
                                    <div class="name mt-4 mb-4">
                                        <h4>Phillip Hunt</h4>
                                        <p>Subtitle goes here</p>
                                    </div>
                                </div>
                                <div class="img-circle">
                                    <img src="images/c1.jpg" class="img-fluid radius-image" alt="client">
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="slider-info mt-lg-4 mt-3">
                                <div class="message">
                                    <img src="images/quote.png" alt="" class="img-fluid mb-2" />
                                    <p><q>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea sit id
                                            accusantium
                                            officia quod quasi necessitatibus perspiciatis Harum error provident
                                            quibusdam tenetur.</q></p>
                                    <div class="name mt-4 mb-4">
                                        <h4>Sara Grant</h4>
                                        <p>Subtitle goes here</p>
                                    </div>
                                </div>
                                <div class="img-circle">
                                    <img src="images/c2.jpg" class="img-fluid radius-image" alt="client">
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="slider-info mt-lg-4 mt-3">
                                <div class="message">
                                    <img src="images/quote.png" alt="" class="img-fluid mb-2" />
                                    <p><q>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea sit id
                                            accusantium
                                            officia quod quasi necessitatibus perspiciatis Harum error provident
                                            quibusdam tenetur.</q></p>
                                    <div class="name mt-4 mb-4">
                                        <h4>Luke Jacobs</h4>
                                        <p>Subtitle goes here</p>
                                    </div>
                                </div>
                                <div class="img-circle">
                                    <img src="images/c3.jpg" class="img-fluid radius-image" alt="client">
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="slider-info mt-lg-4 mt-3">
                                <div class="message">
                                    <img src="images/quote.png" alt="" class="img-fluid mb-2" />
                                    <p><q>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea sit id
                                            accusantium
                                            officia quod quasi necessitatibus perspiciatis Harum error provident
                                            quibusdam tenetur.</q></p>
                                    <div class="name mt-4 mb-4">
                                        <h4>Claire Olson</h4>
                                        <p>Subtitle goes here</p>
                                    </div>
                                </div>
                                <div class="img-circle">
                                    <img src="images/c4.jpg" class="img-fluid radius-image" alt="client">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>--}}
 
    <!-- //testimonials section -->

    <!-- footer -->
    @include('section.footer')
    <!-- //footer -->

    <!-- Js scripts -->
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fas fa-level-up-alt" aria-hidden="true"></span>
    </button>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- //move top -->

    <!-- common jquery plugin -->
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <!-- //common jquery plugin -->

    <!-- libhtbox -->
    <script src="{{asset('js/lightbox-plus-jquery.min.js')}}"></script>
    <!-- libhtbox -->

    <!-- testimonials owlcarousel -->
    <script src="{{asset('js/owl.carousel.js')}}"></script>
    <script>
        $(document).ready(function () {
            $('.owl-two').owlCarousel({
                loop: true,
                margin: 30,
                nav: false,
                responsiveClass: true,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplaySpeed: 1000,
                autoplayHoverPause: false,
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    480: {
                        items: 1,
                        nav: false
                    },
                    667: {
                        items: 1,
                        nav: false
                    },
                    1000: {
                        items: 1,
                        nav: false
                    }
                }
            })
        })
    </script>
    <!-- //script for Testimonials-->

    <!-- theme switch js (light and dark)-->
    <script src="{{asset('js/theme-change.js')}}"></script>
    <!-- //theme switch js (light and dark)-->

    <!-- MENU-JS -->
    <script>
        $(window).on("scroll", function () {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function () {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function () {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function () {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });
    </script>
    <!-- //MENU-JS -->

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function () {
            $('.navbar-toggler').click(function () {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- //disable body scroll which navbar is in active -->

    <!-- bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- //bootstrap -->
    <!-- //Js scripts -->
</body>

</html>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="pt">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portefolio - Valdo Morais Flor - Servicos</title>
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

    <!-- inner banner -->
    <section class="inner-banner py-5">
        <div class="w3l-breadcrumb py-lg-5">
            <div class="container pt-4 pb-sm-4">
                <h4 class="inner-text-title font-weight-bold pt-sm-5 pt-4">Servicos</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="/">Inicio</a></li>
                    <li class="active"><i class="fas fa-angle-right mx-2"></i>Servicos</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- //inner banner -->

    <!-- grids section -->
    <section class="w3l-bottom-grids-6 py-5" id="features">
        <div class="container py-md-5 py-4">
            <div class="title-heading-w3 text-center mb-sm-5 mb-4">
                <h5 class="title-small mb-1">Especializado em</h5>
                <h3 class="title-style">O que eu ofereço</h3>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 grids-feature">
                    <div class="area-box active">
                        <div class="icon-style">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <h4><a href="#feature" class="title-head">Design de Websites</a></h4>
                        <a href="sobre" class="btn more p-0">Saber Mais<i
                                class="fas fa-long-arrow-alt-right ms-1"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 grids-feature mt-md-0 mt-4">
                    <div class="area-box">
                        <div class="icon-style">
                            <i class="fas fa-laptop-code"></i>
                        </div>
                        <h4><a href="#feature" class="title-head">Aplicacoes Mobile</a></h4>
                        <a href="sobre" class="btn more p-0">Saber Mais<i
                                class="fas fa-long-arrow-alt-right ms-1"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 grids-feature mt-lg-0 mt-4">
                    <div class="area-box">
                        <div class="icon-style">
                            <i class="fas fa-layer-group"></i>
                        </div>
                        <h4><a href="#feature" class="title-head">Suporte IT</a></h4>
                        <a href="sobre" class="btn more p-0">Saber Mais<i
                                class="fas fa-long-arrow-alt-right ms-1"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 grids-feature mt-lg-0 mt-4">
                    <div class="area-box">
                        <div class="icon-style">
                            <i class="fas fa-chart-pie"></i>
                        </div>
                        <h4><a href="#feature" class="title-head">Instalacao de Redes</a></h4>
                        <a href="sobre" class="btn more p-0">Saber Mais<i
                                class="fas fa-long-arrow-alt-right ms-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //grids section -->

    <!-- service section -->
        @include('section.servico')
    <!-- //service section -->

    <!-- pricing section -->
    <section class="w3l-pricing py-5">
        <div class="container py-md-5 py-4">
            <div class="title-heading-w3 text-center mb-sm-5 mb-4">
                <h5 class="title-small mb-1">INICIAR</h5>
                <h3 class="title-style">Os melhores planos de preços</h3>
            </div>
            <div class="row t-in justify-content-center">
                <div class="col-lg-4 col-md-6 price-main-info">
                    <div class="price-inner card box-shadow">

                        <div class="card-body">
                            <h4 class="text-uppercase text-center mb-3">Plano Basico</h4>
                            <h5 class="card-title pricing-card-title">
                                Gratuito
                            </h5>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li> <span class="fa fa-check"></span> Ui Design</li>
                                <li> <span class="fa fa-check"></span> Programacao web</li>
                                <li class="disable"> <span class="fa fa-check"></span> design de Logo</li>
                                <li class="disable"> <span class="fa fa-check"></span> Otimização SEO</li>
                                <li class="disable"> <span class="fa fa-check"></span> Integracao Laravel</li>
                            </ul>
                            <div class="read-more mt-4 pt-lg-2 text-center">
                                <a href="contact.html" class="btn btn-style"> Pagar Agora</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 price-main-info mt-md-0 mt-4">
                    <div class="price-inner card box-shadow active">

                        <div class="card-body">
                            <label class="price-label">Recomendado</label>
                            <h4 class="text-uppercase text-center mb-3">Plano Profissional</h4>
                            <h5 class="card-title pricing-card-title">
                                <span class="align-top">MZN</span>3000

                            </h5>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li> <span class="fa fa-check"></span> Ui Design</li>
                                <li> <span class="fa fa-check"></span> Programacao web</li>
                                <li> <span class="fa fa-check"></span> Design de Logo</li>
                                <li class="disable"> <span class="fa fa-check"></span> Optimizacao SEO</li>
                                <li class="disable"> <span class="fa fa-check"></span> Integracao Laravel</li>
                            </ul>
                            <div class="read-more mt-4 pt-lg-2 text-center">
                                <a href="contact.html" class="btn btn-style"> Pagar Agora</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 price-main-info mt-lg-0 mt-4">
                    <div class="price-inner card box-shadow">

                        <div class="card-body">
                            <h4 class="text-uppercase text-center mb-3">Plano Premio</h4>
                            <h5 class="card-title pricing-card-title">
                                <span class="align-top">MZN</span>6000
                            </h5>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li> <span class="fa fa-check"></span> Ui Design</li>
                                <li> <span class="fa fa-check"></span> Programacao Web</li>
                                <li> <span class="fa fa-check"></span> Design de Logo</li>
                                <li> <span class="fa fa-check"></span> Optimizacao SEO</li>
                                <li> <span class="fa fa-check"></span> Integracao Laravel</li>
                            </ul>
                            <div class="read-more mt-4 pt-lg-2 text-center">
                                <a href="contact.html" class="btn btn-style"> Pagar Agora</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //pricing section -->

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
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- //common jquery plugin -->

    <!-- theme switch js (light and dark)-->
    <script src="js/theme-change.js"></script>
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
    <script src="js/bootstrap.min.js"></script>
    <!-- //bootstrap -->
    <!-- //Js scripts -->
</body>

</html>
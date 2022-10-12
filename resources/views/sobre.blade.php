
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portefolio - Valdo Morais Flor - Sobre</title>
    <!-- google font -->
    <link href="//fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <!-- Template CSS Style link -->
    <link rel="stylesheet" href="css/style-starter.css">
</head>

<body>
    <!-- header -->
    @include('section.header')
    <!-- //header -->

    <!-- inner banner -->
    <section class="inner-banner py-5">
        <div class="w3l-breadcrumb py-lg-5">
            <div class="container pt-4 pb-sm-4">
                <h4 class="inner-text-title font-weight-bold pt-sm-5 pt-4">Sobre Mim</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="/">Inicio</a></li>
                    <li class="active"><i class="fas fa-angle-right mx-2"></i>Minha Intro</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- //inner banner -->

    <!-- about section -->
        @include('section.info')
    <!-- //about section -->

    <!-- text with button -->
    <section class="w3l-timeline-1 text-center py-5">
        <div class="container py-lg-5 py-4">
            <div class="mx-auto" style="max-width:800px">
                <h3 class="title-style mb-4"> Por que me contratar para o seu próximo projeto?</h3>
                <p>Eu amo trabalhar em experiência do usuário e design de interface do usuário. Porque eu amo resolver o problema
                    de design
                    e encontrar soluções fáceis e melhores para resolvê-lo. Eu sempre tento o meu melhor para fazer uma boa interface de usuário
                    com
                    a melhor experiência do usuário.</p>
                <a href="servicos" class="btn btn-style mt-5">Saber Mais</a>
            </div>
        </div>
    </section>
    <!-- //text with button -->

    <!-- about2 section -->
    <section class="w3l-about2 py-5">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="row align-items-center">
                <div class="col-lg-6 pe-lg-5">
                    <h5 class="title-small mb-1">Web Design</h5>
                    <h3 class="title-style">Eu adoraria tornar suas ideias reais</h3>
                    <div class="cwp23-text-cols mt-lg-5 mt-4">
                        <div class="column">
                            <span>1200+</span>
                            <h4>Clientes Felizes</h4>
                            <p>Ajudamos nossos clientes a aumentar os lucros aumentando sua visibilidade online.</p>
                        </div>
                        <div class="column">
                            <span>13k+</span>
                            <h4>Projectos Completos </h4>
                            <p>Ajudamos nossos clientes a aumentar os lucros aumentando sua visibilidade online.</p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 cwp23-text align-self mt-lg-0 mt-5">
                    <img src="images/blog5.jpg" alt="" class="radius-image img-fluid">
                </div>
            </div>
        </div>
    </section>
    <!-- //about2 section -->

    <!-- qualification section -->
        @include('section.qualify')
    <!-- //qualification section -->

    <!-- skills section -->
        @include('section.skill')
    <!-- //skills section -->

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
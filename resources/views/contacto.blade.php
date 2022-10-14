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
    <title>Portefolio - Valdo Morais Flor - Contacto</title>
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
                <h4 class="inner-text-title pt-sm-5 pt-4">Contacte Me</h4>
                <ul class="breadcrumbs-custom-path mt-2">
                    <li><a href="/">Inicio</a></li>
                    <li class="active"><i class="fas fa-angle-right mx-2"></i>Contacte Me</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- //inner banner -->

    <!-- contact -->
    <section class="w3l-contact py-5" id="contact">
        <div class="container py-lg-5 py-4">
            <div class="title-heading-w3 text-center mb-sm-5 mb-4">
                <h5 class="title-small">Entre em Contacto</h5>
                <h3 class="title-style">Contacte Me</h3>
            </div>
            <div class="row contact-block">
                <div class="col-md-6 contact-left pe-lg-5">
                    <h3 class="mb-sm-4 mb-3">Info do Contacto</h3>
                    <p class="cont-para mb-sm-5 mb-4">Gosto de discutir novos projetos e desafios. Por favor
                        compartilhe
                        tanta informação, quanto possível para
                        podemos tirar o máximo proveito do nosso primeiro catch-up.</p>
                    <div class="cont-details">
                        <p><i class="fas fa-map-marker-alt"></i>Bairro dos Infermeiros, Macurrungo, Beira.</p>
                        <p><i class="fas fa-phone-alt"></i><a href="#">(+258) 846 777 776</a></p>
                        <p><i class="fas fa-envelope-open-text"></i><a href="#"
                                class="mail">valdomorais.vm@mail.com</a></p>
                    </div>
                    <h4 class="mb-3 mt-5">Siga Me</h4>
                    <ul class="social-icons-contact">
                        <li>
                            <a href="#twitter">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://web.facebook.com/valdo.morais.334" target=".blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/in/valdo-morais-flor-b69206187/" target=".blank">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://github.com/ValdoMoraisFlor" target=".blank">
                                <i class="fab fa-github"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/valdo_flor/" target=".blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 contact-right mt-md-0 mt-5 ps-lg-0">
                    <form action="https://sendmail.w3layouts.com/submitForm" method="post" class="signin-form">
                        <div class="input-grids">
                            <input type="text" name="w3lName" id="w3lName" placeholder="Seu Nome*"
                                class="contact-input" required="" />
                            <input type="email" name="w3lSender" id="w3lSender" placeholder="Seu Email*"
                                class="contact-input" required="" />
                            <input type="text" name="w3lSubect" id="w3lSubect" placeholder="Tema*"
                                class="contact-input" required="" />
                            <input type="text" name="w3lWebsite" id="w3lWebsite" placeholder="URl do site*"
                                class="contact-input" required="" />
                        </div>
                        <div class="form-input">
                            <textarea name="w3lMessage" id="w3lMessage" placeholder="Digita a sua menssagem aqui*"
                                required=""></textarea>
                        </div>
                        <button class="btn btn-style">Enviar Messagem</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- map -->
    <div class="map-iframe">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15012.165065520781!2d34.87398491496792!3d-19.838206786481283!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1f2a401563da1c01%3A0xd52bc61c8aec323!2sMacurungo%2C%20Beira!5e0!3m2!1spt-PT!2smz!4v1665758585062!5m2!1spt-PT!2smz" 
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
    <!-- //contact -->

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
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- //bootstrap -->
    <!-- //Js scripts -->
</body>

</html>
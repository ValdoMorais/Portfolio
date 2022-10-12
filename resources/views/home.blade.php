
<!doctype html>
<html lang="pt">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portfolio</title>
    <!-- google font -->
    <link href="//fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <!-- Template CSS Style link -->
    <link rel="stylesheet" href="{{asset('css/style-starter.css')}}">
</head>

<body>
    <!-- header -->
    <header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="/">
                    <i class="fas fa-bold"></i>.
                </a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav mx-auto my-2 my-lg-0 navbar-nav-scroll">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="sobre">Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="servicos">Servicos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contacto">Contacto</a>
                        </li>
                    </ul>
                    <form action="#search" method="GET" class="d-flex search-header">
                        <input class="form-control" type="search" placeholder="Digite as palavras..." aria-label="Search"
                            required>
                        <button class="btn btn-style" type="submit">Pesquisar</button>
                    </form>
                </div>
                <!-- toggle switch for light and dark theme -->
                <div class="cont-ser-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div>
                <!-- //toggle switch for light and dark theme -->
            </nav>
        </div>
    </header>
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
    <section class="w3l-aboutblock1 pt-lg-5 pt-2 pb-5" id="about">
        <div class="container py-md-5 py-4">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="position-relative">
                        <img src="assets/images/about.jpg" alt="" class="radius-image img-fluid">
                    </div>
                </div>
                <div class="col-lg-8 ps-lg-5 mt-lg-0 mt-5">
                    <h5 class="title-small mb-1">Minha intro</h5>
                    <h3 class="title-style">Sobre mim</h3>
                    <p class="mt-3">Sou um estudante do 4º ano de informática na Universidade Católica de Moçambique.
                        sou um comunicador eficaz e jogador de equipe, hábil em garantir a conformidade e adesão ao trabalho em equipe. 
                        tenho sede de oportunidades de trabalho para mostrar potencial e aprender ainda mais.</p>
                    <div class="my-info mt-md-5 mt-4">
                        <ul class="single-info">
                            <li class="name-style">Nome</li>
                            <li>:</li>
                            <li>
                                <p>Valdo Morais Flor</p>
                            </li>
                        </ul>
                        <ul class="single-info">
                            <li class="name-style">Idade</li>
                            <li>:</li>
                            <li>
                                <p>21 Anos</p>
                            </li>
                        </ul>
                        <ul class="single-info">
                            <li class="name-style">De</li>
                            <li>:</li>
                            <li>
                                <p>Mocambique, Beira</p>
                            </li>
                        </ul>
                        <ul class="single-info">
                            <li class="name-style">Email</li>
                            <li>:</li>
                            <li>
                                <p><a href="mailto:maryateer@mail.com">Valdomorais.vm@gmail.com</a></p>
                            </li>
                        </ul>
                    </div>
                    <a href="#download" class="btn btn-style mt-5">Baixar CV</a>
                </div>
            </div>
        </div>
    </section>
    <!-- //about section -->

    <!-- qualification section -->
    <section class="w3l-timeline-1 py-5">
        <div class="container py-lg-5 py-4">
            <div class="title-heading-w3 text-center mb-sm-5 mb-4">
                <h5 class="title-small">Resumo</h5>
                <h3 class="title-style">Jornada Incrível</h3>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <h5 class="sub-title-timeline"><i class="fas fa-graduation-cap"></i> Educacao</h5>
                    <div class="timeline">
                        <div class="column">
                            <div class="title">
                                <h2>Licenciatura em IT</h2>
                            </div>
                            <div class="description">
                                <p>Universidade Catolica de Mocambique</p>
                                <h6><i class="fas fa-calendar-alt"></i> 2019 - 2022</h6>
                            </div>
                        </div>
                        <div class="column">
                            <div class="title">
                                <h2>Ensino Pre-Universitario</h2>
                            </div>
                            <div class="description">
                                <p>Escola Secundaria de Mucoque</p>
                                <h6><i class="fas fa-calendar-alt"></i> 2017 - 2018</h6>
                            </div>
                        </div>
                        <div class="column">
                            <div class="title">
                                <h2>Ensino Secundario</h2>
                            </div>
                            <div class="description">
                                <p>Escola Secundaria de Vinlankulos</p>
                                <h6><i class="fas fa-calendar-alt"></i> 2014 - 2016</h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-lg-0 mt-4">
                    <h5 class="sub-title-timeline"><i class="fas fa-briefcase"></i> Experiencia</h5>
                    <div class="timeline">
                        <div class="column">
                            <div class="title">
                                <h2>Desenvolvedor Front e Back-end </h2>
                            </div>
                            <div class="description">
                                <p>Moz Top Up LDa.</p>
                                <h6><i class="fas fa-calendar-alt"></i> 2022 - Actualmente</h6>
                            </div>
                        </div>
                        <div class="column">
                            <div class="title">
                                <h2>Laravel FrameWork</h2>
                            </div>
                            <div class="description">
                                <p> Explicador.inc </p>
                                <h6><i class="fas fa-calendar-alt"></i> 2022</h6>
                            </div>
                        </div>
                        {{-- <div class="column">
                            <div class="title">
                                <h2>Tecnologia de Informacao</h2>
                            </div>
                            <div class="description">
                                <p>Agile info</p>
                                <h6><i class="fas fa-calendar-alt"></i> 2019 - 2022</h6>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //qualification section -->

    <!-- skills section -->
    <section class="w3l-progress py-5" id="progress">
        <div class="container py-md-5 py-4">
            <div class="title-heading-w3 text-center mb-sm-5 mb-4">
                <h5 class="title-small mb-1">Minhas habilidades</h5>
                <h3 class="title-style">Minha área de atuação</h3>
            </div>
            <div class="row py-lg-4">
                <div class="col-lg-6 pe-lg-5">
                    <div class="progress-info info1">
                        <h6 class="progress-tittle">Web Design <span class="">80%</span></h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped gradient-1" role="progressbar"
                                style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                    <div class="progress-info info2">
                        <h6 class="progress-tittle">HTML/CSS <span class="">95%</span>
                        </h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped gradient-2" role="progressbar"
                                style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                    <div class="progress-info info3">
                        <h6 class="progress-tittle">JavaScript <span class="">60%</span></h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped gradient-3" role="progressbar"
                                style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                    <div class="progress-info info4 mb-0">
                        <h6 class="progress-tittle"> C# <span class="">85%</span></h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped gradient-4" role="progressbar"
                                style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 ps-lg-5 mt-lg-0 mt-5">
                    <div class="progress-info info1">
                        <h6 class="progress-tittle"> Java <span class="">80%</span></h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped gradient-1" role="progressbar"
                                style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                    <div class="progress-info info2">
                        <h6 class="progress-tittle">PHP <span class="">95%</span>
                        </h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped gradient-2" role="progressbar"
                                style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                    <div class="progress-info info3">
                        <h6 class="progress-tittle">Bootstrap <span class="">60%</span></h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped gradient-3" role="progressbar"
                                style="width: 60%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                    <div class="progress-info info4 mb-0">
                        <h6 class="progress-tittle">UI/UX Design <span class="">85%</span></h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped gradient-4" role="progressbar"
                                style="width: 85%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
                    <a href="images/g1.jpg" data-lightbox="example-set" data-title="Project 1"
                        class="zoom d-block">
                        <img class="card-img-bottom d-block" src="images/g1.jpg" alt="Card image cap">
                        <span class="overlay__hover"></span>
                        <span class="hover-content">
                            <span class="title">Project 1</span>
                            <span class="content">Prototipo HCB, Sistema Hospitalar para o Hospital central da beira.</span>
                        </span>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 item mt-md-0 mt-4">
                    <a href="images/g2.jpg" data-lightbox="example-set" data-title="Project 2"
                        class="zoom d-block">
                        <img class="card-img-bottom d-block" src="images/g2.jpg" alt="Card image cap">
                        <span class="overlay__hover"></span>
                        <span class="hover-content">
                            <span class="title">Project 2</span>
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
                            <span class="title">Project 3</span>
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
    <section class="w3l-servicesblock1 py-5" id="services">
        <div class="container py-md-5 py-4">
            <div class="title-heading-w3 text-center mb-sm-5 mb-4">
                <h5 class="title-small mb-1">O que eu faco?</h5>
                <h3 class="title-style">Como posso ajudar seu próximo projeto</h3>
            </div>
            <div class="w3-services-grids py-lg-4">
                <div class="fea-gd-vv row">
                    <div class="col-lg-3 col-md-6">
                        <div class="feature-gd icon-yellow">
                            <div class="icon">
                                <i class="fas fa-laptop"></i>
                            </div>
                            <div class="icon-info">
                                <a href="#url">Programacao <br> web</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-md-0 mt-4">
                        <div class="feature-gd icon-vilot">
                            <div class="icon">
                                <i class="fas fa-mobile-alt"></i>
                            </div>
                            <div class="icon-info">
                                <a href="#url">Suporte IT<br>e Manuntecao</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-lg-0 mt-md-5 mt-4">
                        <div class="feature-gd icon-blue">
                            <div class="icon">
                                <i class="fab fa-android"></i>
                            </div>
                            <div class="icon-info">
                                <a href="#url">Redes de<br> Computadores</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-lg-0 mt-md-5 mt-4">
                        <div class="feature-gd icon-red">
                            <div class="icon">
                                <i class="fab fa-php"></i>
                            </div>
                            <div class="icon-info">
                                <a href="#url">Programacao <br> Php Web</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-md-5 mt-4">
                        <div class="feature-gd icon-light-green">
                            <div class="icon">
                                <i class="fab fa-apple"></i>
                            </div>
                            <div class="icon-info">
                                <a href="#url">Sistemas <br> Empresariais</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-md-5 mt-4">
                        <div class="feature-gd icon-light-blue">
                            <div class="icon">
                                <i class="fas fa-code"></i>
                            </div>
                            <div class="icon-info">
                                <a href="#url"> Banco de dados <br> Mysql </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-md-5 mt-4">
                        <div class="feature-gd icon-dark-green">
                            <div class="icon">
                                <i class="fas fa-link"></i>
                            </div>
                            <div class="icon-info">
                                <a href="#url"> Pagamentos <br> Online </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-md-5 mt-4">
                        <div class="feature-gd icon-pink">
                            <div class="icon">
                                <i class="fas fa-code-branch"></i>
                            </div>
                            <div class="icon-info">
                                <a href="#url"> Dropshipping e <br>MKT Digital</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <a href="servicos" class="btn btn-style">Saber Mais</a>
            </div>
        </div>
    </section>
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
    <footer class="footer-w3ls text-center py-5">
        <div class="container pt-4">
            <div class="mx-auto" style="max-width:600px;">
                <a href="home" class="footer-logo py-1">
                    <i class="fas fa-bold"></i>.
                </a>
                <p class="mt-4 text-white">Contacte para saber mais, disponivel 24 horas por dia.</p>
                <div class="social-icons-main mt-4 pb-3">
                    <ul class="social-icons3">
                        <li>
                            <a href="#facebook">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#twitter">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#linkedinin">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#dribbble">
                                <i class="fab fa-dribbble"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#instagram">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- copyright -->
            <p class="copy-right-w3 text-white mt-5 pt-4">© 2022. All rights reserved | Design by
                <a href="#url" target="_blank"> Valdo Morais Flor.</a>
            </p>
        </div>
    </footer>
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
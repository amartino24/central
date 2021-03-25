<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> >

<head>

    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/imagenes/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/imagenes/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/imagenes/favicon/favicon-16x16.png">
    <link rel="mask-icon" href="imagenes/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/imagenes/favicon/ms-icon-144x144.png">
	<?php wp_head(); ?>
    <title><?php the_title(); ?></title>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="description" content="Sitio Oficial del Club Atlético Rosario Central">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <!--    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon-32x32.png">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/index.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/js/video-modal/modal-video.min.css">
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.5.1.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/video-modal/jquery-modal-video.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/moment.min.js"></script>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/js/OwlCarousel2-2.3.4/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/js/OwlCarousel2-2.3.4/owl.theme.default.min.css">
    <script src="<?php echo get_template_directory_uri(); ?>/js/OwlCarousel2-2.3.4/owl.carousel.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/carousels.js"></script>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
    <header>
        <div class=" banner-container  bg-white azul-fg">
            <div class="container flex a-center j-between">
                <div class="titulo-principal ">
                    <span class="amarillo-fg">SITIO OFICIAL</span> CLUB ATLÉTICO ROSARIO CENTRAL
                </div>

                <a href="index.html" id='main-escudo' class="main-escudo">
                    <img src="<?php echo get_template_directory_uri(); ?>/imagenes/escudo.png">
                </a>

                <div class="enlaces-externos flex a-center">
                    <div class="enlace over-yellow flex a-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26.441" height="30.084"
                            viewBox="0 0 26.441 30.084">
                            <path id="Trazado_302" data-name="Trazado 302"
                                d="M136.407,130.8a.881.881,0,1,0,.881.881A.881.881,0,0,0,136.407,130.8Zm21.359-6.17a2.643,2.643,0,0,0-1.969-4.407h-5.132a17.09,17.09,0,0,0,.725-4.466v-.881a3.53,3.53,0,0,0-3.525-3.525h-.881a.881.881,0,0,0-.855.667l-.48,1.921c-.673,2.69-2.809,5.658-5.019,6.2a2.648,2.648,0,0,0-2.46-1.676h-5.288a.882.882,0,0,0-.881.881V135.2a.882.882,0,0,0,.881.881h5.288a2.647,2.647,0,0,0,2.387-1.507l3.028,1.009a9.673,9.673,0,0,0,3.066.5h7.384a2.645,2.645,0,0,0,2.458-3.618,2.643,2.643,0,0,0,1.273-4.314,2.639,2.639,0,0,0,0-3.525Zm-18.715,8.814a.882.882,0,0,1-.881.881h-4.407v-14.1h4.407a.882.882,0,0,1,.881.881Zm14.983-7.932H155.8a.881.881,0,0,1,0,1.763h-1.763a.881.881,0,0,0,0,1.763H155.8a.881.881,0,0,1,0,1.763h-1.763a.881.881,0,0,0,0,1.763.881.881,0,1,1,0,1.763h-7.384a7.915,7.915,0,0,1-2.509-.407l-3.328-1.109V121.9a7.1,7.1,0,0,0,3.957-2.571,12.86,12.86,0,0,0,2.587-4.964l.313-1.253h.193a1.765,1.765,0,0,1,1.763,1.763v.881a13.947,13.947,0,0,1-.844,4.466h-1.8a.881.881,0,1,0,0,1.763H155.8a.881.881,0,0,1,0,1.763h-1.763a.881.881,0,0,0,0,1.763Zm-.3-14.375,1.246-1.246a.881.881,0,0,0-1.246-1.246l-1.246,1.246a.881.881,0,0,0,1.246,1.246Zm-4.986-1.549a.881.881,0,0,0,.881-.881v-1.821a.881.881,0,1,0-1.763,0V108.7A.881.881,0,0,0,148.746,109.584Zm-4.986,1.549a.881.881,0,0,0,1.246-1.246l-1.246-1.246a.881.881,0,1,0-1.246,1.246Z"
                                transform="translate(-132 -106)" fill="#173b6a" />
                        </svg>
                        <span class="text">ROSARIO <b>ME GUSTA</b></span>
                    </div>
                    <div class="enlace  over-yellow  flex a-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20.218" height="26.947"
                            viewBox="0 0 20.218 26.947">
                            <path id="ShopOnlineIcon"
                                d="M38.953,24.053H36.62V22.272a4.325,4.325,0,0,0-4.229-4.4H28.828a4.323,4.323,0,0,0-4.229,4.4v1.781H22.265A1.768,1.768,0,0,0,20.5,25.818v12.2a6.811,6.811,0,0,0,6.8,6.8h6.612a6.811,6.811,0,0,0,6.8-6.8v-12.2A1.768,1.768,0,0,0,38.953,24.053Zm-11.9-1.781a1.865,1.865,0,0,1,1.77-1.943h3.56a1.863,1.863,0,0,1,1.77,1.943v1.781h-7.1V22.272Zm11.2,15.743a4.348,4.348,0,0,1-4.344,4.344H27.3a4.348,4.348,0,0,1-4.344-4.344v-11.5H24.6v1.082a1.229,1.229,0,1,0,2.459,0V26.512h7.1v1.175a1.229,1.229,0,0,0,2.459,0V26.512h1.639Z"
                                transform="translate(-20.5 -17.87)" fill="#173b6a" />
                        </svg>

                        <span class="text"><b>TIENDA</b><span class="secondary">ONLINE</span></span>
                    </div>
                    <div class="enlace over-yellow flex a-center"> <svg xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" width="21.055" height="25"
                            viewBox="0 0 21.055 25">
                            <defs>
                                <clipPath id="clip-path">
                                    <rect id="Rectángulo_106" data-name="Rectángulo 106" width="21.055" height="25"
                                        fill="#173b6a" />
                                </clipPath>
                            </defs>
                            <g id="Grupo_190" data-name="Grupo 190" clip-path="url(#clip-path)">
                                <path id="Trazado_127" data-name="Trazado 127"
                                    d="M21.056,19H18.523a7.885,7.885,0,0,0-8-7.751,7.88,7.88,0,0,0-8,7.751H0A10.419,10.419,0,0,1,10.528,8.715,10.418,10.418,0,0,1,21.056,19"
                                    transform="translate(-0.001 6.001)" fill="#173b6a" />
                                <path id="Trazado_128" data-name="Trazado 128"
                                    d="M9.066,13.892a6.946,6.946,0,1,1,6.947-6.947,6.956,6.956,0,0,1-6.947,6.947m0-11.359A4.413,4.413,0,1,0,13.48,6.945,4.417,4.417,0,0,0,9.066,2.533"
                                    transform="translate(1.461 0)" fill="#173b6a" />
                            </g>
                        </svg>

                        <a class="text azul-fg" href="https://rosariocentral.miclub.info/login.php"
                            target="_blank">SEDE<b class="secondary">VIRTUAL</b></a>
                    </div>
                </div>
            </div>

        </div>
        <div class="navbar-container bg-blue">
            <div class="data container flex a-center j-between">
                <a href="javascript:void(0);" class="mobile-navigation" onclick="myFunction(this)">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </a>

                <nav class="main-navigation" id="navigation">
                    <ul>
                        <li class="over-blue">
                            NOTICIAS
                        </li>
                        <li class="over-blue">FÚTBOL</li>
                        <li class="over-blue">EL CLUB</li>
                        <li class="over-blue">SOCIOS</li>
                        <li class="over-blue">DEPORTES AMATEURS</li>
                    </ul>
                </nav>
                <a href="index.html">
                    <img class="xs-escudo" src="<?php echo get_template_directory_uri(); ?>/imagenes/escudo.png">
                </a>
                <div class="asociate-texto gt-xs pointer bold">QUIERO ASOCIARME
                    <svg xmlns="http://www.w3.org/2000/svg" width="20.559" height="13.711" viewBox="0 0 20.559 13.711">
                        <path id="Icon_ionic-ios-arrow-round-forward" data-name="Icon ionic-ios-arrow-round-forward"
                            d="M20.986,11.514a.933.933,0,0,0-.007,1.314l4.342,4.349H8.8a.928.928,0,0,0,0,1.857H25.313l-4.342,4.349a.94.94,0,0,0,.007,1.314.925.925,0,0,0,1.307-.007l5.884-5.927h0a1.042,1.042,0,0,0,.193-.293.886.886,0,0,0,.071-.357.931.931,0,0,0-.264-.65l-5.884-5.927A.91.91,0,0,0,20.986,11.514Z"
                            transform="translate(-7.875 -11.252)" fill="#2680eb" />
                    </svg>
                </div>
            </div>


        </div>

    </header>
    <section class="main-banner">
        <div class="main-banner-post h-100-p">

            <div class="owl-carousel main-banner-carousel owl-theme h-100-p">
                <div class="owl-slide">
                    <div class="main-banner-gradient">

                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/imagenes/imagen-banner-principal.png">
                    <div class="container flex j-between a-center h-100-p">
                        <div class="main-banner-post-info flex-column j-center">
                            <a class="pointer amarillo-fg  owl-slide-animated owl-slide-category bold post-category">PLANTEL
                                PROFESIONAL</a>
                            <a class="pointer post-title  owl-slide-animated owl-slide-title">Rosario está de
                                <b>fiesta</b></a>
                            <p class="pointer post-subtitle owl-slide-animated owl-slide-subtitle">El conjunto Canalla
                                se impuso 2 a 1 frente a Godoy Cruz en la
                                primera
                                fecha de la Copa de la Liga Profesional.</p>
                            <a href="noticia.html"
                                class="radius-button owl-slide-animated owl-slide-cta   ver-mas-button azul-claro-fg bg-blue">VER
                                MÁS
                                <svg xmlns="http://www.w3.org/2000/svg" width="20.559" height="13.711"
                                    viewBox="0 0 20.559 13.711">
                                    <path id="Icon_ionic-ios-arrow-round-forward"
                                        data-name="Icon ionic-ios-arrow-round-forward"
                                        d="M20.986,11.514a.933.933,0,0,0-.007,1.314l4.342,4.349H8.8a.928.928,0,0,0,0,1.857H25.313l-4.342,4.349a.94.94,0,0,0,.007,1.314.925.925,0,0,0,1.307-.007l5.884-5.927h0a1.042,1.042,0,0,0,.193-.293.886.886,0,0,0,.071-.357.931.931,0,0,0-.264-.65l-5.884-5.927A.91.91,0,0,0,20.986,11.514Z"
                                        transform="translate(-7.875 -11.252)" fill="#2680eb" />
                                </svg>


                            </a>
                        </div>

                    </div>
                </div>
                <div class="owl-slide">
                    <div class="main-banner-gradient">

                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/imagenes/imagen-banner-principal.png">
                    <div class="container flex j-between a-center h-100-p">
                        <div class="main-banner-post-info flex-column j-center">
                            <a class="pointer amarillo-fg  owl-slide-animated owl-slide-category bold post-category">PLANTEL
                                PROFESIONAL</a>
                            <a class="pointer post-title  owl-slide-animated owl-slide-title">Rosario está de
                                <b>fiesta</b></a>
                            <p class="pointer post-subtitle owl-slide-animated owl-slide-subtitle">El conjunto Canalla
                                se impuso 2 a 1 frente a Godoy Cruz en la
                                primera
                                fecha de la Copa de la Liga Profesional.</p>
                            <a href="noticia.html"
                                class="radius-button owl-slide-animated owl-slide-cta   ver-mas-button azul-claro-fg bg-blue">VER
                                MÁS
                                <svg xmlns="http://www.w3.org/2000/svg" width="20.559" height="13.711"
                                    viewBox="0 0 20.559 13.711">
                                    <path id="Icon_ionic-ios-arrow-round-forward"
                                        data-name="Icon ionic-ios-arrow-round-forward"
                                        d="M20.986,11.514a.933.933,0,0,0-.007,1.314l4.342,4.349H8.8a.928.928,0,0,0,0,1.857H25.313l-4.342,4.349a.94.94,0,0,0,.007,1.314.925.925,0,0,0,1.307-.007l5.884-5.927h0a1.042,1.042,0,0,0,.193-.293.886.886,0,0,0,.071-.357.931.931,0,0,0-.264-.65l-5.884-5.927A.91.91,0,0,0,20.986,11.514Z"
                                        transform="translate(-7.875 -11.252)" fill="#2680eb" />
                                </svg>


                            </a>
                        </div>

                    </div>
                </div>
                <div class="owl-slide">
                    <div class="main-banner-gradient">

                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/imagenes/imagen-banner-principal.png">
                    <div class="container flex j-between a-center h-100-p">
                        <div class="main-banner-post-info flex-column j-center">
                            <a class="pointer amarillo-fg  owl-slide-animated owl-slide-category bold post-category">PLANTEL
                                PROFESIONAL</a>
                            <a class="pointer post-title  owl-slide-animated owl-slide-title">Rosario está de
                                <b>fiesta</b></a>
                            <p class="pointer post-subtitle owl-slide-animated owl-slide-subtitle">El conjunto Canalla
                                se impuso 2 a 1 frente a Godoy Cruz en la
                                primera
                                fecha de la Copa de la Liga Profesional.</p>
                            <a href="noticia.html"
                                class="radius-button owl-slide-animated owl-slide-cta   ver-mas-button azul-claro-fg bg-blue">VER
                                MÁS
                                <svg xmlns="http://www.w3.org/2000/svg" width="20.559" height="13.711"
                                    viewBox="0 0 20.559 13.711">
                                    <path id="Icon_ionic-ios-arrow-round-forward"
                                        data-name="Icon ionic-ios-arrow-round-forward"
                                        d="M20.986,11.514a.933.933,0,0,0-.007,1.314l4.342,4.349H8.8a.928.928,0,0,0,0,1.857H25.313l-4.342,4.349a.94.94,0,0,0,.007,1.314.925.925,0,0,0,1.307-.007l5.884-5.927h0a1.042,1.042,0,0,0,.193-.293.886.886,0,0,0,.071-.357.931.931,0,0,0-.264-.65l-5.884-5.927A.91.91,0,0,0,20.986,11.514Z"
                                        transform="translate(-7.875 -11.252)" fill="#2680eb" />
                                </svg>


                            </a>
                        </div>

                    </div>
                </div>

            </div>
            <div class="widgets  flex-column">
                <div class="widget">
                    <div class="titulo">
                        último Partido
                    </div>

                    <iframe id="#ultimos-iframe" onload="onMyFrameLoad(this)"
                        src="https://www.rosariocentral.com/files/incoming/df/html/v3/minapp/scoreBoard/scoreBoard.html?channel=deportes.futbol.copalpf.578248&lang=es_LA"
                        width="100%" height="125" scrolling="no" style="width: 1px; min-width: 100%; *width: 100%;"
                        class=""></iframe>
                </div>
                <div class="widget">
                    <div class="titulo">
                        Próximo Partido
                    </div>
                    <iframe
                        src="https://www.rosariocentral.com/files/incoming/df/html/v3/minapp/scoreBoard/scoreBoard.html?channel=deportes.futbol.copalpf.578259&lang=es_LA"
                        width="100%" height="125" scrolling="no" style="width: 1px; min-width: 100%; *width: 100%;"
                        class=""></iframe>
                </div>
            </div>
        </div>


    </section>
    <section class="sponsors-section main bg-grey">
        <div class="container flex j-center a-center">
            <div class="sponsor-container">
                <img class="sponsor" src="<?php echo get_template_directory_uri(); ?>/imagenes/sponsors/underarmour.png">
            </div>
            <div class="sponsor-container">
                <img class="sponsor" src="<?php echo get_template_directory_uri(); ?>/imagenes/sponsors/autocredito.png">

            </div>
            <div class="sponsor-container">

                <img class="sponsor" src="<?php echo get_template_directory_uri(); ?>/imagenes/sponsors/bancomunicipal.png">
            </div>


        </div>

    </section>
    <section class="redes-sociales bg-blue">
        <div class="container flex j-between a-center">
            <div class="hashtag amarillo-fg">
                #SiguiendoAlGuerrero
            </div>
            <div class="iconos flex j-between">
                <a class="icon flex a-center" href="https://facebook.com/CARCoficial/" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/imagenes/social/facebook.png">
                    <span> 445 k</span>
                </a>
                <a class="icon flex a-center" href="https://twitter.com/CARCoficial" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/imagenes/social/twitter.png">

                    <span>290 k</span>
                </a>
                <a class="icon flex a-center" href="https://www.instagram.com/carcoficial" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/imagenes/social/instagram.png">
                    <span>198 k</span>
                </a>
                <a class="icon flex a-center" href="https://www.youtube.com/user/CARCoficial2013" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/imagenes/social/youtube.png">
                    <span>16.900</span>
                </a>
                <a class="icon flex a-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/imagenes/social/socios.png">
                    <span>60.000 Socios</span>
                </a>
            </div>
            <div class="seguinos">
                <span class="azul-claro-fg">Seguinos en redes</span> y enterate el minuto a minuto de lo que está
                pasando en el club.
            </div>
        </div>
    </section>
    <section class="noticias bg-grey">
        <div class="container">
            <div class="titulo azul-fg">La actualidad <b>del club</b></div>
            <div class="search-bar flex a-center ">
                <div class="search-input flex a-center br-20">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18.872" height="18.877" viewBox="0 0 18.872 18.877">
                        <path id="Icon_ionic-ios-search" data-name="Icon ionic-ios-search"
                            d="M23.151,22l-5.249-5.3a7.48,7.48,0,1,0-1.135,1.15l5.214,5.264a.808.808,0,0,0,1.14.029A.813.813,0,0,0,23.151,22ZM12.024,17.92A5.906,5.906,0,1,1,16.2,16.19,5.87,5.87,0,0,1,12.024,17.92Z"
                            transform="translate(-4.5 -4.493)" fill="#b4b4b4" />
                    </svg>
                    <input placeholder="Buscar novedades">
                </div>
                <div class="categorias flex a-center br-20">
                    <ul>
                        <li>
                            PLANTEL PROFESIONAL
                        </li>
                        <li>
                            FUTBOL FEMENINO
                        </li>
                        <li>
                            INFERIORES
                        </li>
                        <li>
                            COMUNICADOS
                        </li>
                        <li>
                            DEPORTES AMATEURS
                        </li>
                        <li>
                            PRENSA
                        </li>
                        <li class="bold todas azul-fg flex a-center">
                            VER TODAS LAS NOTICIAS <svg xmlns="http://www.w3.org/2000/svg" width="20.559"
                                height="13.711" viewBox="0 0 20.559 13.711">
                                <path id="Icon_ionic-ios-arrow-round-forward"
                                    data-name="Icon ionic-ios-arrow-round-forward"
                                    d="M20.986,11.514a.933.933,0,0,0-.007,1.314l4.342,4.349H8.8a.928.928,0,0,0,0,1.857H25.313l-4.342,4.349a.94.94,0,0,0,.007,1.314.925.925,0,0,0,1.307-.007l5.884-5.927h0a1.042,1.042,0,0,0,.193-.293.886.886,0,0,0,.071-.357.931.931,0,0,0-.264-.65l-5.884-5.927A.91.91,0,0,0,20.986,11.514Z"
                                    transform="translate(-7.875 -11.252)" fill="#173b6a" />
                            </svg>

                        </li>
                    </ul>
                </div>
                <a href="javascript:void(0);" class="mobile-navigation" onclick="myFunction(this)">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </a>
            </div>
            <div class="flex posts-fixture-container j-between">
                <div class="posts flex j-between">
                    <div class="post-principal  br-20">
                        <div class="gradient  br-20">

                        </div>
                        <img src="<?php echo get_template_directory_uri(); ?>/imagenes/posts/main.png" class="br-20">
                        <div class="info flex-column j-center">
                            <a class="pointer amarillo-fg bold post-category">DIVISIONES INFERIORES</a>
                            <a class="pointer post-title bold">Regresaron los entrenamientos </a>
                            <p class="pointer post-subtitle">Luego de los largos meses de espera, este lunes,
                                tomando
                                en cuenta la aprobación provincial para la práctica de actividades deportivas
                                individuales para menores de 12 años, el Fútbol Infantil de Rosario Central regresó
                                a los entrenamientos presenciales en cuatro predios.</p>
                            <a href="noticia.html" class="radius-button  ver-mas-button azul-claro-fg bg-blue">VER
                                MÁS
                                <svg xmlns="http://www.w3.org/2000/svg" width="20.559" height="13.711"
                                    viewBox="0 0 20.559 13.711">
                                    <path id="Icon_ionic-ios-arrow-round-forward"
                                        data-name="Icon ionic-ios-arrow-round-forward"
                                        d="M20.986,11.514a.933.933,0,0,0-.007,1.314l4.342,4.349H8.8a.928.928,0,0,0,0,1.857H25.313l-4.342,4.349a.94.94,0,0,0,.007,1.314.925.925,0,0,0,1.307-.007l5.884-5.927h0a1.042,1.042,0,0,0,.193-.293.886.886,0,0,0,.071-.357.931.931,0,0,0-.264-.65l-5.884-5.927A.91.91,0,0,0,20.986,11.514Z"
                                        transform="translate(-7.875 -11.252)" fill="#2680eb" />
                                </svg>


                            </a>

                        </div>



                    </div>
                    <div class="post over-scale br-20">
                        <div class="image-container">
                            <img class="post-image" src="<?php echo get_template_directory_uri(); ?>/imagenes/posts/arquero.png">
                            <div class="gradient">

                            </div>
                        </div>

                        <div class="info flex-column j-center">
                            <a class="pointer amarillo-fg bold post-category">PLANTEL PROFESIONAL</a>
                            <a class="pointer post-title  bold azul-fg ">Parte médico sobre Josué Ayala</a>
                            <div class="separator"></div>
                            <p class="pointer post-subtitle">En el día de la fecha fue intervenido quirúrgicamente Josué
                                Ayala de una lesión aguda completa del ligamento cruzado anterior de su rodilla
                                izquierda. Se estima una baja deportiva de 8 meses.</p>
                            <a href="noticia.html" class="ver-mas azul-claro-fg">VER MÁS <svg
                                    xmlns="http://www.w3.org/2000/svg" width="20.559" height="13.711"
                                    viewBox="0 0 20.559 13.711">
                                    <path id="Icon_ionic-ios-arrow-round-forward"
                                        data-name="Icon ionic-ios-arrow-round-forward"
                                        d="M20.986,11.514a.933.933,0,0,0-.007,1.314l4.342,4.349H8.8a.928.928,0,0,0,0,1.857H25.313l-4.342,4.349a.94.94,0,0,0,.007,1.314.925.925,0,0,0,1.307-.007l5.884-5.927h0a1.042,1.042,0,0,0,.193-.293.886.886,0,0,0,.071-.357.931.931,0,0,0-.264-.65l-5.884-5.927A.91.91,0,0,0,20.986,11.514Z"
                                        transform="translate(-7.875 -11.252)" fill="#2680eb" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="post over-scale br-20">
                        <div class="image-container">
                            <img class="post-image" src="<?php echo get_template_directory_uri(); ?>/imagenes/posts/playa.png">
                            <div class="gradient">

                            </div>
                        </div>

                        <div class="info flex-column j-center">
                            <a class="pointer amarillo-fg bold post-category">COMUNICADO</a>
                            <a class="pointer post-title bold azul-fg ">Se reprograma la apertura de los predios</a>
                            <div class="separator"></div>
                            <p class="pointer post-subtitle">Por nuevas disposiciones Municipales y Provinciales, cambio
                                de
                                fecha en la apertura de los predios. Comenzarán a funcionar a partir del sábado 5 de
                                diciembre.</p>
                            <a href="noticia.html" class="ver-mas azul-claro-fg">VER MÁS <svg
                                    xmlns="http://www.w3.org/2000/svg" width="20.559" height="13.711"
                                    viewBox="0 0 20.559 13.711">
                                    <path id="Icon_ionic-ios-arrow-round-forward"
                                        data-name="Icon ionic-ios-arrow-round-forward"
                                        d="M20.986,11.514a.933.933,0,0,0-.007,1.314l4.342,4.349H8.8a.928.928,0,0,0,0,1.857H25.313l-4.342,4.349a.94.94,0,0,0,.007,1.314.925.925,0,0,0,1.307-.007l5.884-5.927h0a1.042,1.042,0,0,0,.193-.293.886.886,0,0,0,.071-.357.931.931,0,0,0-.264-.65l-5.884-5.927A.91.91,0,0,0,20.986,11.514Z"
                                        transform="translate(-7.875 -11.252)" fill="#2680eb" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="post over-scale br-20">
                        <div class="image-container">
                            <img class="post-image" src="<?php echo get_template_directory_uri(); ?>/imagenes/posts/femenino.png">
                            <div class="gradient">

                            </div>
                        </div>

                        <div class="info flex-column j-center">
                            <a class="pointer amarillo-fg bold post-category">FÚTBOL FEMENINO</a>
                            <a class="pointer post-title bold azul-fg ">Excelente debut de las guerreras </a>
                            <div class="separator"></div>
                            <p class="pointer post-subtitle">Este domingo por la tarde en el predio de Ciudad Deportiva,
                                el
                                equipo de Fútbol Femenino de Rosario Central venció 5 a 1 a Defensores de Belgrano por
                                la 1era fecha del torneo.</p>
                            <a href="noticia.html" class="ver-mas azul-claro-fg">VER MÁS <svg
                                    xmlns="http://www.w3.org/2000/svg" width="20.559" height="13.711"
                                    viewBox="0 0 20.559 13.711">
                                    <path id="Icon_ionic-ios-arrow-round-forward"
                                        data-name="Icon ionic-ios-arrow-round-forward"
                                        d="M20.986,11.514a.933.933,0,0,0-.007,1.314l4.342,4.349H8.8a.928.928,0,0,0,0,1.857H25.313l-4.342,4.349a.94.94,0,0,0,.007,1.314.925.925,0,0,0,1.307-.007l5.884-5.927h0a1.042,1.042,0,0,0,.193-.293.886.886,0,0,0,.071-.357.931.931,0,0,0-.264-.65l-5.884-5.927A.91.91,0,0,0,20.986,11.514Z"
                                        transform="translate(-7.875 -11.252)" fill="#2680eb" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <a href="noticia.html" class="radius-button xs  todas-noticias-button azul-claro-fg bg-blue">Ver
                        todos las noticias
                        <svg xmlns="http://www.w3.org/2000/svg" width="20.559" height="13.711"
                            viewBox="0 0 20.559 13.711">
                            <path id="Icon_ionic-ios-arrow-round-forward" data-name="Icon ionic-ios-arrow-round-forward"
                                d="M20.986,11.514a.933.933,0,0,0-.007,1.314l4.342,4.349H8.8a.928.928,0,0,0,0,1.857H25.313l-4.342,4.349a.94.94,0,0,0,.007,1.314.925.925,0,0,0,1.307-.007l5.884-5.927h0a1.042,1.042,0,0,0,.193-.293.886.886,0,0,0,.071-.357.931.931,0,0,0-.264-.65l-5.884-5.927A.91.91,0,0,0,20.986,11.514Z"
                                transform="translate(-7.875 -11.252)" fill="#2680eb" />
                        </svg>
                    </a>
                </div>
                <div class="fixture">
                    <div class="widget">
                        <div class="titulo">
                            TABLA DE POSICIONES
                        </div>
                        <iframe
                            src="https://www.rosariocentral.com/files/incoming/df/html/v3/minapp/page/page.html?channel=deportes.futbol.copalpf&lang=es_LA&page=posiciones"
                            width="100%" height="100%" scrolling="auto"
                            style="width: 1px; min-width: 100%; *width: 100%;" class=""></iframe>
                    </div>

                    <div class="widget">
                        <div class="titulo">
                            GOLEADORES
                        </div>
                        <iframe
                            src="https://www.rosariocentral.com/files/incoming/df/html/v3/minapp/page/page.html?channel=deportes.futbol.copalpf&lang=es_LA&page=goleadores"
                            width="100%" height="100%" scrolling="auto"
                            style="width: 1px; min-width: 100%; *width: 100%;" class=""></iframe>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section class="sede-virtual ">
        <div class="container flex a-center">
            <div class="sede-virtual-titulo    flex-column j-center ">
                <a class="pointer azul-claro-fg bold exclusivo">EXLUSIVO PARA SOCIOS</a>
                <h2><b>SEDE</b><br>VIRTUAL</h2>
                <a class="radius-button iniciar-sesion-button" href="https://rosariocentral.miclub.info/login.php"
                    target="_blank">INICIAR SESIÓN <svg xmlns="http://www.w3.org/2000/svg" width="20.559"
                        height="13.711" viewBox="0 0 20.559 13.711">
                        <path id="Icon_ionic-ios-arrow-round-forward" data-name="Icon ionic-ios-arrow-round-forward"
                            d="M20.986,11.514a.933.933,0,0,0-.007,1.314l4.342,4.349H8.8a.928.928,0,0,0,0,1.857H25.313l-4.342,4.349a.94.94,0,0,0,.007,1.314.925.925,0,0,0,1.307-.007l5.884-5.927h0a1.042,1.042,0,0,0,.193-.293.886.886,0,0,0,.071-.357.931.931,0,0,0-.264-.65l-5.884-5.927A.91.91,0,0,0,20.986,11.514Z"
                            transform="translate(-7.875 -11.252)" fill="#fff" />
                    </svg>
                </a>
            </div>
            <div class="sede-virtual-funciones flex j-between a-center">
                <div class="funcion br-20 flex-column j-between">
                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="32" viewBox="0 0 26 32">
                        <g id="Icon_feather-file-text" data-name="Icon feather-file-text" transform="translate(-5 -2)">
                            <path id="Trazado_151" data-name="Trazado 151"
                                d="M21,3H9A3,3,0,0,0,6,6V30a3,3,0,0,0,3,3H27a3,3,0,0,0,3-3V12Z" fill="none"
                                stroke="#2680eb" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                            <path id="Trazado_152" data-name="Trazado 152" d="M21,3v9h9" fill="none" stroke="#2680eb"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                            <path id="Trazado_153" data-name="Trazado 153" d="M24,19.5H12" fill="none" stroke="#2680eb"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                            <path id="Trazado_154" data-name="Trazado 154" d="M24,25.5H12" fill="none" stroke="#2680eb"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                            <path id="Trazado_155" data-name="Trazado 155" d="M15,13.5H12" fill="none" stroke="#2680eb"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                        </g>
                    </svg>

                    Resumen<br>de cuenta

                </div>
                <div class="funcion br-20 flex-column j-between">
                    <svg xmlns="http://www.w3.org/2000/svg" width="31.933" height="31.933" viewBox="0 0 31.933 31.933">
                        <g id="Icon_feather-clock" data-name="Icon feather-clock" transform="translate(-2 -2)">
                            <path id="Trazado_147" data-name="Trazado 147"
                                d="M32.933,17.966A14.966,14.966,0,1,1,17.966,3,14.966,14.966,0,0,1,32.933,17.966Z"
                                fill="none" stroke="#2680eb" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" />
                            <path id="Trazado_148" data-name="Trazado 148" d="M18,9v8.98l5.987,2.993"
                                transform="translate(-0.034 -0.013)" fill="none" stroke="#2680eb" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" />
                        </g>
                    </svg>
                    Solicitar<br>Turnos
                </div>
                <div class="funcion br-20 flex-column j-between">
                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="32" viewBox="0 0 26 32">
                        <g id="Icon_feather-flag" data-name="Icon feather-flag" transform="translate(-5 -2)">
                            <path id="Trazado_156" data-name="Trazado 156"
                                d="M6,22.5S7.5,21,12,21s7.5,3,12,3,6-1.5,6-1.5V4.5S28.5,6,24,6,16.5,3,12,3,6,4.5,6,4.5Z"
                                fill="none" stroke="#2680eb" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" />
                            <path id="Trazado_157" data-name="Trazado 157" d="M6,33V22.5" fill="none" stroke="#2680eb"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                        </g>
                    </svg>
                    Venta<br>de entradas
                </div>
                <div class="funcion br-20 flex-column j-between">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32.388" height="24.1" viewBox="0 0 32.388 24.1">
                        <g id="Icon_feather-credit-card" data-name="Icon feather-credit-card"
                            transform="translate(-0.5 -5)">
                            <path id="Trazado_158" data-name="Trazado 158"
                                d="M4.263,6H29.125a2.763,2.763,0,0,1,2.763,2.763V25.338A2.763,2.763,0,0,1,29.125,28.1H4.263A2.763,2.763,0,0,1,1.5,25.338V8.763A2.763,2.763,0,0,1,4.263,6Z"
                                fill="none" stroke="#2680eb" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" />
                            <path id="Trazado_159" data-name="Trazado 159" d="M1.5,15H31.888"
                                transform="translate(0 -0.712)" fill="none" stroke="#2680eb" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" />
                        </g>
                    </svg>
                    Débito<br>automático
                </div>
            </div>
        </div>
    </section>
    <section class="socios-newsletter flex a-center">

        <div class="hacete-socio bg-blue">
            <div class="half-container flex j-between a-center">
                <div class="flex-column">
                    <h2><b>Hacete</b><br>socio <span class="azul-claro-fg">online</span></h2>
                    <a class="asociarse azul-claro-fg pointer flex a-center">QUIERO ASOCIARME <svg
                            xmlns="http://www.w3.org/2000/svg" width="20.559" height="13.711"
                            viewBox="0 0 20.559 13.711">
                            <path id="Icon_ionic-ios-arrow-round-forward" data-name="Icon ionic-ios-arrow-round-forward"
                                d="M20.986,11.514a.933.933,0,0,0-.007,1.314l4.342,4.349H8.8a.928.928,0,0,0,0,1.857H25.313l-4.342,4.349a.94.94,0,0,0,.007,1.314.925.925,0,0,0,1.307-.007l5.884-5.927h0a1.042,1.042,0,0,0,.193-.293.886.886,0,0,0,.071-.357.931.931,0,0,0-.264-.65l-5.884-5.927A.91.91,0,0,0,20.986,11.514Z"
                                transform="translate(-7.875 -11.252)" fill="#2680eb" />
                        </svg>
                    </a>
                </div>
                <div class="flex-column texto">
                    <p>Ser socio significa formar parte, colaborando de forma activa con el club, porque los socios son
                        los protagonistas.</p>
                    <p class="sos-parte amarillo-fg">SOS CANALLA. <b>SOS PARTE.</b> </p>
                </div>


            </div>

        </div>
        <div class="newsletter azul-fg">
            <div class="half-container flex j-center a-center">
                <div class="flex-column texto">
                    <h3>Newsletter</h3>
                    <p>Déjanos tu mail y suscribirte a nuestro newsletter para recibir todas las novedades del club.</p>
                </div>
                <div class="suscribirse">
                    <div class="input-container flex a-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="23.785" height="18.8" viewBox="0 0 23.785 18.8">
                            <g id="Icon_feather-mail" data-name="Icon feather-mail" transform="translate(-1.607 -5)">
                                <path id="Trazado_142" data-name="Trazado 142"
                                    d="M5.1,6H21.9A2.106,2.106,0,0,1,24,8.1V20.7a2.106,2.106,0,0,1-2.1,2.1H5.1A2.106,2.106,0,0,1,3,20.7V8.1A2.106,2.106,0,0,1,5.1,6Z"
                                    fill="none" stroke="#2680eb" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" />
                                <path id="Trazado_143" data-name="Trazado 143" d="M24,9,13.5,16.35,3,9"
                                    transform="translate(0 -0.9)" fill="none" stroke="#2680eb" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" />
                            </g>
                        </svg>
                        <input>
                    </div>
                    <button class="radius-button suscribirse-button">ENVIAR <svg xmlns="http://www.w3.org/2000/svg"
                            width="20.559" height="13.711" viewBox="0 0 20.559 13.711">
                            <path id="Icon_ionic-ios-arrow-round-forward" data-name="Icon ionic-ios-arrow-round-forward"
                                d="M20.986,11.514a.933.933,0,0,0-.007,1.314l4.342,4.349H8.8a.928.928,0,0,0,0,1.857H25.313l-4.342,4.349a.94.94,0,0,0,.007,1.314.925.925,0,0,0,1.307-.007l5.884-5.927h0a1.042,1.042,0,0,0,.193-.293.886.886,0,0,0,.071-.357.931.931,0,0,0-.264-.65l-5.884-5.927A.91.91,0,0,0,20.986,11.514Z"
                                transform="translate(-7.875 -11.252)" fill="#2680eb" />
                        </svg>

                    </button>
                </div>

            </div>
        </div>

    </section>
    <section class="carc-videos bg-grey">
        <div class="container flex a-center">
            <div class="flex-column carc-videos-titulo azul-fg">
                <h2><b>CARC</b><br>TV</h2>
                <a class="radius-button gt-xs  todos-videos-button azul-claro-fg bg-blue"
                    href="https://www.youtube.com/user/CARCoficial2013" target="_blank">Ver todos los videos
                    <svg xmlns="http://www.w3.org/2000/svg" width="20.559" height="13.711" viewBox="0 0 20.559 13.711">
                        <path id="Icon_ionic-ios-arrow-round-forward" data-name="Icon ionic-ios-arrow-round-forward"
                            d="M20.986,11.514a.933.933,0,0,0-.007,1.314l4.342,4.349H8.8a.928.928,0,0,0,0,1.857H25.313l-4.342,4.349a.94.94,0,0,0,.007,1.314.925.925,0,0,0,1.307-.007l5.884-5.927h0a1.042,1.042,0,0,0,.193-.293.886.886,0,0,0,.071-.357.931.931,0,0,0-.264-.65l-5.884-5.927A.91.91,0,0,0,20.986,11.514Z"
                            transform="translate(-7.875 -11.252)" fill="#2680eb" />
                    </svg>


                </a>
            </div>
            <div class="videos-carousel flex-column ">
                <div class="videos-carousel-title flex a-center j-between">
                    <div class="ultimos-videos azul-fg">Últimos videos</div>
                    <div class="arrows">
                        <svg xmlns="http://www.w3.org/2000/svg" class="pointer" id="prevVideoBtn" width="8.399"
                            height="14.69" viewBox="0 0 8.399 14.69">
                            <path id="Icon_ionic-ios-arrow-forward" data-name="Icon ionic-ios-arrow-forward"
                                d="M5.867,7.342.308,1.788a1.045,1.045,0,0,1,0-1.483A1.059,1.059,0,0,1,1.8.305L8.094,6.6a1.048,1.048,0,0,1,.031,1.448L1.8,14.384A1.05,1.05,0,0,1,.313,12.9Z"
                                transform="translate(8.399 14.69) rotate(180)" fill="#2680eb" />
                        </svg>

                        <svg xmlns="http://www.w3.org/2000/svg" class="pointer" id="nextVideoBtn" width="8.399"
                            height="14.692" viewBox="0 0 8.399 14.692">
                            <path id="Icon_ionic-ios-arrow-back" data-name="Icon ionic-ios-arrow-back"
                                d="M2.532,7.344,8.091,1.789A1.05,1.05,0,0,0,6.6.307L.306,6.6A1.048,1.048,0,0,0,.275,8.048L6.6,14.386A1.05,1.05,0,0,0,8.087,12.9Z"
                                transform="translate(8.399 14.692) rotate(180)" fill="#2680eb" />
                        </svg>

                    </div>
                </div>
                <div class="videos-carousel-list  owl-carousel  flex j-between" id="videos-carousel-list">


                </div>
            </div>
            <button class="radius-button xs  todos-videos-button azul-claro-fg bg-blue">Ver todos los videos
                <svg xmlns="http://www.w3.org/2000/svg" width="20.559" height="13.711" viewBox="0 0 20.559 13.711">
                    <path id="Icon_ionic-ios-arrow-round-forward" data-name="Icon ionic-ios-arrow-round-forward"
                        d="M20.986,11.514a.933.933,0,0,0-.007,1.314l4.342,4.349H8.8a.928.928,0,0,0,0,1.857H25.313l-4.342,4.349a.94.94,0,0,0,.007,1.314.925.925,0,0,0,1.307-.007l5.884-5.927h0a1.042,1.042,0,0,0,.193-.293.886.886,0,0,0,.071-.357.931.931,0,0,0-.264-.65l-5.884-5.927A.91.91,0,0,0,20.986,11.514Z"
                        transform="translate(-7.875 -11.252)" fill="#2680eb" />
                </svg>


            </button>
        </div>

    </section>
    <div class="plantel bg-dark-blue ">
        <div class="container flex a-center">
            <div class="plantel-carousel owl-carousel" id="plantel-carousel">
                <div class="jugador flex">
                    <div class="jugador-info  bg-dark-blue flex-column j-center">
                        <div class="posicion amarillo-fg">
                            MEDIOCAMPISTA
                        </div>
                        <div class="nombre azul-claro-fg bold">
                            Emiliano VECCHIO
                        </div>
                        <div class="botones gt-xs ">
                            <button class="radius-button ver-ficha azul-claro-fg">Ver ficha
                                <svg xmlns="http://www.w3.org/2000/svg" width="21.559" height="14.792"
                                    viewBox="0 0 21.559 14.792">
                                    <path id="Icon_ionic-ios-arrow-round-forward" data-name="Icon ionic-ios-arrow-round-forward"
                                        d="M20.986,11.514a.933.933,0,0,0-.007,1.314l4.342,4.349H8.8a.928.928,0,0,0,0,1.857H25.313l-4.342,4.349a.94.94,0,0,0,.007,1.314.925.925,0,0,0,1.307-.007l5.884-5.927h0a1.042,1.042,0,0,0,.193-.293.886.886,0,0,0,.071-.357.931.931,0,0,0-.264-.65l-5.884-5.927A.91.91,0,0,0,20.986,11.514Z"
                                        transform="translate(-7.375 -10.752)" fill="#2680eb" stroke="#2680eb"
                                        stroke-width="1" />
                                </svg>
                            </button>
        
                            <button class="radius-button ver-plantel amarillo-fg">Ver plantel
                                <svg xmlns="http://www.w3.org/2000/svg" width="20.559" height="13.711"
                                    viewBox="0 0 20.559 13.711">
                                    <path id="Icon_ionic-ios-arrow-round-forward" data-name="Icon ionic-ios-arrow-round-forward"
                                        d="M20.986,11.514a.933.933,0,0,0-.007,1.314l4.342,4.349H8.8a.928.928,0,0,0,0,1.857H25.313l-4.342,4.349a.94.94,0,0,0,.007,1.314.925.925,0,0,0,1.307-.007l5.884-5.927h0a1.042,1.042,0,0,0,.193-.293.886.886,0,0,0,.071-.357.931.931,0,0,0-.264-.65l-5.884-5.927A.91.91,0,0,0,20.986,11.514Z"
                                        transform="translate(-7.875 -11.252)" fill="#f9df34" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="imagen-container h-100-p">
                        <img src="<?php echo get_template_directory_uri(); ?>/imagenes/plantel/vecchio.png" class="h-100-p
                        ">
                    </div>
                </div>
                <div class="jugador flex">
                    <div class="jugador-info bg-dark-blue j-center flex-column">
                        <div class="posicion amarillo-fg">
                            MEDIOCAMPISTA
                        </div>
                        <div class="nombre azul-claro-fg bold">
                            Emiliano VECCHIO
                        </div>
                        <div class="botones gt-xs ">
                            <button class="radius-button ver-ficha azul-claro-fg">Ver ficha
                                <svg xmlns="http://www.w3.org/2000/svg" width="21.559" height="14.792"
                                    viewBox="0 0 21.559 14.792">
                                    <path id="Icon_ionic-ios-arrow-round-forward" data-name="Icon ionic-ios-arrow-round-forward"
                                        d="M20.986,11.514a.933.933,0,0,0-.007,1.314l4.342,4.349H8.8a.928.928,0,0,0,0,1.857H25.313l-4.342,4.349a.94.94,0,0,0,.007,1.314.925.925,0,0,0,1.307-.007l5.884-5.927h0a1.042,1.042,0,0,0,.193-.293.886.886,0,0,0,.071-.357.931.931,0,0,0-.264-.65l-5.884-5.927A.91.91,0,0,0,20.986,11.514Z"
                                        transform="translate(-7.375 -10.752)" fill="#2680eb" stroke="#2680eb"
                                        stroke-width="1" />
                                </svg>
                            </button>
        
                            <button class="radius-button ver-plantel amarillo-fg">Ver plantel
                                <svg xmlns="http://www.w3.org/2000/svg" width="20.559" height="13.711"
                                    viewBox="0 0 20.559 13.711">
                                    <path id="Icon_ionic-ios-arrow-round-forward" data-name="Icon ionic-ios-arrow-round-forward"
                                        d="M20.986,11.514a.933.933,0,0,0-.007,1.314l4.342,4.349H8.8a.928.928,0,0,0,0,1.857H25.313l-4.342,4.349a.94.94,0,0,0,.007,1.314.925.925,0,0,0,1.307-.007l5.884-5.927h0a1.042,1.042,0,0,0,.193-.293.886.886,0,0,0,.071-.357.931.931,0,0,0-.264-.65l-5.884-5.927A.91.91,0,0,0,20.986,11.514Z"
                                        transform="translate(-7.875 -11.252)" fill="#f9df34" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="imagen-container h-100-p">
                        <img src="<?php echo get_template_directory_uri(); ?>/imagenes/plantel/vecchio.png" class="h-100-p
                        ">
                    </div>
                </div>
                <div class="jugador flex">
                    <div class="jugador-info bg-dark-blue flex-column j-center">
                        <div class="posicion amarillo-fg">
                            MEDIOCAMPISTA
                        </div>
                        <div class="nombre azul-claro-fg bold">
                            Emiliano VECCHIO
                        </div>
                        <div class="botones gt-xs ">
                            <button class="radius-button ver-ficha azul-claro-fg">Ver ficha
                                <svg xmlns="http://www.w3.org/2000/svg" width="21.559" height="14.792"
                                    viewBox="0 0 21.559 14.792">
                                    <path id="Icon_ionic-ios-arrow-round-forward" data-name="Icon ionic-ios-arrow-round-forward"
                                        d="M20.986,11.514a.933.933,0,0,0-.007,1.314l4.342,4.349H8.8a.928.928,0,0,0,0,1.857H25.313l-4.342,4.349a.94.94,0,0,0,.007,1.314.925.925,0,0,0,1.307-.007l5.884-5.927h0a1.042,1.042,0,0,0,.193-.293.886.886,0,0,0,.071-.357.931.931,0,0,0-.264-.65l-5.884-5.927A.91.91,0,0,0,20.986,11.514Z"
                                        transform="translate(-7.375 -10.752)" fill="#2680eb" stroke="#2680eb"
                                        stroke-width="1" />
                                </svg>
                            </button>
        
                            <button class="radius-button ver-plantel amarillo-fg">Ver plantel
                                <svg xmlns="http://www.w3.org/2000/svg" width="20.559" height="13.711"
                                    viewBox="0 0 20.559 13.711">
                                    <path id="Icon_ionic-ios-arrow-round-forward" data-name="Icon ionic-ios-arrow-round-forward"
                                        d="M20.986,11.514a.933.933,0,0,0-.007,1.314l4.342,4.349H8.8a.928.928,0,0,0,0,1.857H25.313l-4.342,4.349a.94.94,0,0,0,.007,1.314.925.925,0,0,0,1.307-.007l5.884-5.927h0a1.042,1.042,0,0,0,.193-.293.886.886,0,0,0,.071-.357.931.931,0,0,0-.264-.65l-5.884-5.927A.91.91,0,0,0,20.986,11.514Z"
                                        transform="translate(-7.875 -11.252)" fill="#f9df34" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="imagen-container h-100-p">
                        <img src="<?php echo get_template_directory_uri(); ?>/imagenes/plantel/vecchio.png" class="h-100-p
                        ">
                    </div>
                </div>
                <div class="jugador  flex">
                    <div class="jugador-info bg-dark-blue flex-column j-center">
                        <div class="posicion amarillo-fg">
                            MEDIOCAMPISTA
                        </div>
                        <div class="nombre azul-claro-fg bold">
                            Emiliano VECCHIO
                        </div>
                        <div class="botones gt-xs ">
                            <button class="radius-button ver-ficha azul-claro-fg">Ver ficha
                                <svg xmlns="http://www.w3.org/2000/svg" width="21.559" height="14.792"
                                    viewBox="0 0 21.559 14.792">
                                    <path id="Icon_ionic-ios-arrow-round-forward" data-name="Icon ionic-ios-arrow-round-forward"
                                        d="M20.986,11.514a.933.933,0,0,0-.007,1.314l4.342,4.349H8.8a.928.928,0,0,0,0,1.857H25.313l-4.342,4.349a.94.94,0,0,0,.007,1.314.925.925,0,0,0,1.307-.007l5.884-5.927h0a1.042,1.042,0,0,0,.193-.293.886.886,0,0,0,.071-.357.931.931,0,0,0-.264-.65l-5.884-5.927A.91.91,0,0,0,20.986,11.514Z"
                                        transform="translate(-7.375 -10.752)" fill="#2680eb" stroke="#2680eb"
                                        stroke-width="1" />
                                </svg>
                            </button>
        
                            <button class="radius-button ver-plantel amarillo-fg">Ver plantel
                                <svg xmlns="http://www.w3.org/2000/svg" width="20.559" height="13.711"
                                    viewBox="0 0 20.559 13.711">
                                    <path id="Icon_ionic-ios-arrow-round-forward" data-name="Icon ionic-ios-arrow-round-forward"
                                        d="M20.986,11.514a.933.933,0,0,0-.007,1.314l4.342,4.349H8.8a.928.928,0,0,0,0,1.857H25.313l-4.342,4.349a.94.94,0,0,0,.007,1.314.925.925,0,0,0,1.307-.007l5.884-5.927h0a1.042,1.042,0,0,0,.193-.293.886.886,0,0,0,.071-.357.931.931,0,0,0-.264-.65l-5.884-5.927A.91.91,0,0,0,20.986,11.514Z"
                                        transform="translate(-7.875 -11.252)" fill="#f9df34" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="imagen-container h-100-p">
                        <img src="<?php echo get_template_directory_uri(); ?>/imagenes/plantel/vecchio.png" class="h-100-p
                        ">
                    </div>
                </div>
            </div>
         
            <div class="flechas flex j-between">
                <svg xmlns="http://www.w3.org/2000/svg" class="pointer over-scale" width="20" height="20"  id="prevJugadorBtn"
                    viewBox="0 0 6.25 10.93">
                    <path id="Icon_ionic-ios-arrow-forward" data-name="Icon ionic-ios-arrow-forward"
                        d="M4.366,5.463.229,1.33a.778.778,0,0,1,0-1.1.788.788,0,0,1,1.106,0L6.022,4.91a.78.78,0,0,1,.023,1.077L1.339,10.7A.781.781,0,1,1,.233,9.6Z"
                        transform="translate(6.25 10.93) rotate(180)" fill="#f9df34" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" class="pointer over-scale" width="20" height="20"  id="nextJugadorBtn" onclick="nextCarousel($jugadoresCarousel)"
                    viewBox="0 0 6.25 10.932">
                    <path id="Icon_ionic-ios-arrow-back" data-name="Icon ionic-ios-arrow-back"
                        d="M1.884,5.464,6.02,1.331A.781.781,0,0,0,4.914.228L.228,4.911A.78.78,0,0,0,.2,5.988L4.91,10.7A.781.781,0,0,0,6.017,9.6Z"
                        transform="translate(6.25 10.932) rotate(180)" fill="#f9df34" />
                </svg>

            </div>
            <div class="botones xs ">
                <button class="radius-button ver-ficha azul-claro-fg">Ver ficha
                    <svg xmlns="http://www.w3.org/2000/svg" width="21.559" height="14.792" viewBox="0 0 21.559 14.792">
                        <path id="Icon_ionic-ios-arrow-round-forward" data-name="Icon ionic-ios-arrow-round-forward"
                            d="M20.986,11.514a.933.933,0,0,0-.007,1.314l4.342,4.349H8.8a.928.928,0,0,0,0,1.857H25.313l-4.342,4.349a.94.94,0,0,0,.007,1.314.925.925,0,0,0,1.307-.007l5.884-5.927h0a1.042,1.042,0,0,0,.193-.293.886.886,0,0,0,.071-.357.931.931,0,0,0-.264-.65l-5.884-5.927A.91.91,0,0,0,20.986,11.514Z"
                            transform="translate(-7.375 -10.752)" fill="#2680eb" stroke="#2680eb" stroke-width="1" />
                    </svg>
                </button>

                <button class="radius-button ver-plantel amarillo-fg">Ver plantel
                    <svg xmlns="http://www.w3.org/2000/svg" width="20.559" height="13.711" viewBox="0 0 20.559 13.711">
                        <path id="Icon_ionic-ios-arrow-round-forward" data-name="Icon ionic-ios-arrow-round-forward"
                            d="M20.986,11.514a.933.933,0,0,0-.007,1.314l4.342,4.349H8.8a.928.928,0,0,0,0,1.857H25.313l-4.342,4.349a.94.94,0,0,0,.007,1.314.925.925,0,0,0,1.307-.007l5.884-5.927h0a1.042,1.042,0,0,0,.193-.293.886.886,0,0,0,.071-.357.931.931,0,0,0-.264-.65l-5.884-5.927A.91.91,0,0,0,20.986,11.514Z"
                            transform="translate(-7.875 -11.252)" fill="#f9df34" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <section class="tienda-oficial bg-grey">
        <div class="container flex a-center">
            <div class="flex title-arrow-container a-center">
                <div class="flex-column section-title azul-fg">
                    <h3 class="gris-fg">TIENDAS OFICIALES</h3>
                    <h2><b>PUNTO</b><br>CENTRAL</h2>
                    <button class="radius-button gt-xs  todos-productos-button azul-claro-fg bg-blue">Ver todos los
                        productos
                        <svg xmlns="http://www.w3.org/2000/svg" width="20.559" height="13.711"
                            viewBox="0 0 20.559 13.711">
                            <path id="Icon_ionic-ios-arrow-round-forward" data-name="Icon ionic-ios-arrow-round-forward"
                                d="M20.986,11.514a.933.933,0,0,0-.007,1.314l4.342,4.349H8.8a.928.928,0,0,0,0,1.857H25.313l-4.342,4.349a.94.94,0,0,0,.007,1.314.925.925,0,0,0,1.307-.007l5.884-5.927h0a1.042,1.042,0,0,0,.193-.293.886.886,0,0,0,.071-.357.931.931,0,0,0-.264-.65l-5.884-5.927A.91.91,0,0,0,20.986,11.514Z"
                                transform="translate(-7.875 -11.252)" fill="#2680eb" />
                        </svg>
                    </button>
                </div>
                <div class="arrows">
                    <svg xmlns="http://www.w3.org/2000/svg" class="pointer" width="8.399" id="prevProductoBtn"
                        height="14.69" viewBox="0 0 8.399 14.69">
                        <path id="Icon_ionic-ios-arrow-forward" data-name="Icon ionic-ios-arrow-forward"
                            d="M5.867,7.342.308,1.788a1.045,1.045,0,0,1,0-1.483A1.059,1.059,0,0,1,1.8.305L8.094,6.6a1.048,1.048,0,0,1,.031,1.448L1.8,14.384A1.05,1.05,0,0,1,.313,12.9Z"
                            transform="translate(8.399 14.69) rotate(180)" fill="#2680eb" />
                    </svg>

                    <svg xmlns="http://www.w3.org/2000/svg" class="pointer" width="8.399" id="nextProductoBtn"
                        height="14.692" viewBox="0 0 8.399 14.692">
                        <path id="Icon_ionic-ios-arrow-back" data-name="Icon ionic-ios-arrow-back"
                            d="M2.532,7.344,8.091,1.789A1.05,1.05,0,0,0,6.6.307L.306,6.6A1.048,1.048,0,0,0,.275,8.048L6.6,14.386A1.05,1.05,0,0,0,8.087,12.9Z"
                            transform="translate(8.399 14.692) rotate(180)" fill="#2680eb" />
                    </svg>

                </div>
            </div>

            <div class="productos-list owl-carousel  flex a-center j-between" id="tienda-carousel">
                <div class="producto  bg-white  ">
                    <img src="<?php echo get_template_directory_uri(); ?>/imagenes/productos/camiseta.png">
                    <div class="info flex-column  azul-fg">
                        <span class="categoria amarillo-fg bold">CAMISETAS</span>
                        <h4 class="titulo azul-fg bold">
                            Camiseta oficial Under Armour
                        </h4>
                        <p class="descripcion gris-fg">
                            Todos los talles. Camiseta oficial de juego. S - M - L - XL
                        </p>
                        <a class="pointer ver-producto azul-fg flex a-center">
                            VER MÁS <svg xmlns="http://www.w3.org/2000/svg" width="20.559" height="13.712"
                                viewBox="0 0 20.559 13.712">
                                <path id="Icon_ionic-ios-arrow-round-forward"
                                    data-name="Icon ionic-ios-arrow-round-forward"
                                    d="M20.986,11.514a.933.933,0,0,0-.007,1.314l4.342,4.349H8.8a.928.928,0,0,0,0,1.857H25.313l-4.342,4.349a.94.94,0,0,0,.007,1.314.925.925,0,0,0,1.307-.007l5.884-5.927h0a1.042,1.042,0,0,0,.193-.293.886.886,0,0,0,.071-.357.931.931,0,0,0-.264-.65l-5.884-5.927A.91.91,0,0,0,20.986,11.514Z"
                                    transform="translate(-7.875 -11.251)" fill="#2680eb" />
                            </svg>

                        </a>
                    </div>
                </div>
                <div class="producto  bg-white ">
                    <img src="<?php echo get_template_directory_uri(); ?>/imagenes/productos/camiseta.png">
                    <div class="info flex-column  azul-fg">
                        <span class="categoria amarillo-fg bold">CAMISETAS</span>
                        <h4 class="titulo azul-fg bold">
                            Camiseta oficial Under Armour
                        </h4>
                        <p class="descripcion gris-fg">
                            Todos los talles. Camiseta oficial de juego. S - M - L - XL
                        </p>
                        <a class="pointer ver-producto azul-fg flex a-center">
                            VER MÁS <svg xmlns="http://www.w3.org/2000/svg" width="20.559" height="13.712"
                                viewBox="0 0 20.559 13.712">
                                <path id="Icon_ionic-ios-arrow-round-forward"
                                    data-name="Icon ionic-ios-arrow-round-forward"
                                    d="M20.986,11.514a.933.933,0,0,0-.007,1.314l4.342,4.349H8.8a.928.928,0,0,0,0,1.857H25.313l-4.342,4.349a.94.94,0,0,0,.007,1.314.925.925,0,0,0,1.307-.007l5.884-5.927h0a1.042,1.042,0,0,0,.193-.293.886.886,0,0,0,.071-.357.931.931,0,0,0-.264-.65l-5.884-5.927A.91.91,0,0,0,20.986,11.514Z"
                                    transform="translate(-7.875 -11.251)" fill="#2680eb" />
                            </svg>

                        </a>
                    </div>
                </div>
                <div class="producto   bg-white ">
                    <img src="<?php echo get_template_directory_uri(); ?>/imagenes/productos/camiseta.png">
                    <div class="info flex-column  azul-fg">
                        <span class="categoria amarillo-fg bold">CAMISETAS</span>
                        <h4 class="titulo azul-fg bold">
                            Camiseta oficial Under Armour
                        </h4>
                        <p class="descripcion gris-fg">
                            Todos los talles. Camiseta oficial de juego. S - M - L - XL
                        </p>
                        <a class="pointer ver-producto azul-fg flex a-center">
                            VER MÁS <svg xmlns="http://www.w3.org/2000/svg" width="20.559" height="13.712"
                                viewBox="0 0 20.559 13.712">
                                <path id="Icon_ionic-ios-arrow-round-forward"
                                    data-name="Icon ionic-ios-arrow-round-forward"
                                    d="M20.986,11.514a.933.933,0,0,0-.007,1.314l4.342,4.349H8.8a.928.928,0,0,0,0,1.857H25.313l-4.342,4.349a.94.94,0,0,0,.007,1.314.925.925,0,0,0,1.307-.007l5.884-5.927h0a1.042,1.042,0,0,0,.193-.293.886.886,0,0,0,.071-.357.931.931,0,0,0-.264-.65l-5.884-5.927A.91.91,0,0,0,20.986,11.514Z"
                                    transform="translate(-7.875 -11.251)" fill="#2680eb" />
                            </svg>

                        </a>
                    </div>
                </div>
                <div class="producto   bg-white">
                    <img src="<?php echo get_template_directory_uri(); ?>/imagenes/productos/camiseta.png">
                    <div class="info flex-column  azul-fg">
                        <span class="categoria amarillo-fg bold">CAMISETAS</span>
                        <h4 class="titulo azul-fg bold">
                            Camiseta oficial Under Armour
                        </h4>
                        <p class="descripcion gris-fg">
                            Todos los talles. Camiseta oficial de juego. S - M - L - XL
                        </p>
                        <a class="pointer ver-producto azul-fg flex a-center">
                            VER MÁS <svg xmlns="http://www.w3.org/2000/svg" width="20.559" height="13.712"
                                viewBox="0 0 20.559 13.712">
                                <path id="Icon_ionic-ios-arrow-round-forward"
                                    data-name="Icon ionic-ios-arrow-round-forward"
                                    d="M20.986,11.514a.933.933,0,0,0-.007,1.314l4.342,4.349H8.8a.928.928,0,0,0,0,1.857H25.313l-4.342,4.349a.94.94,0,0,0,.007,1.314.925.925,0,0,0,1.307-.007l5.884-5.927h0a1.042,1.042,0,0,0,.193-.293.886.886,0,0,0,.071-.357.931.931,0,0,0-.264-.65l-5.884-5.927A.91.91,0,0,0,20.986,11.514Z"
                                    transform="translate(-7.875 -11.251)" fill="#2680eb" />
                            </svg>

                        </a>
                    </div>
                </div>
                <div class="producto   bg-white">
                    <img src="<?php echo get_template_directory_uri(); ?>/imagenes/productos/camiseta.png">
                    <div class="info flex-column  azul-fg">
                        <span class="categoria amarillo-fg bold">CAMISETAS</span>
                        <h4 class="titulo azul-fg bold">
                            Camiseta oficial Under Armour
                        </h4>
                        <p class="descripcion gris-fg">
                            Todos los talles. Camiseta oficial de juego. S - M - L - XL
                        </p>
                        <a class="pointer ver-producto azul-fg flex a-center">
                            VER MÁS <svg xmlns="http://www.w3.org/2000/svg" width="20.559" height="13.712"
                                viewBox="0 0 20.559 13.712">
                                <path id="Icon_ionic-ios-arrow-round-forward"
                                    data-name="Icon ionic-ios-arrow-round-forward"
                                    d="M20.986,11.514a.933.933,0,0,0-.007,1.314l4.342,4.349H8.8a.928.928,0,0,0,0,1.857H25.313l-4.342,4.349a.94.94,0,0,0,.007,1.314.925.925,0,0,0,1.307-.007l5.884-5.927h0a1.042,1.042,0,0,0,.193-.293.886.886,0,0,0,.071-.357.931.931,0,0,0-.264-.65l-5.884-5.927A.91.91,0,0,0,20.986,11.514Z"
                                    transform="translate(-7.875 -11.251)" fill="#2680eb" />
                            </svg>

                        </a>
                    </div>
                </div>
                <div class="producto   bg-white  ">
                    <img src="<?php echo get_template_directory_uri(); ?>/imagenes/productos/camiseta.png">
                    <div class="info flex-column  azul-fg">
                        <span class="categoria amarillo-fg bold">CAMISETAS</span>
                        <h4 class="titulo azul-fg bold">
                            Camiseta oficial Under Armour
                        </h4>
                        <p class="descripcion gris-fg">
                            Todos los talles. Camiseta oficial de juego. S - M - L - XL
                        </p>
                        <a class="pointer ver-producto azul-fg flex a-center">
                            VER MÁS <svg xmlns="http://www.w3.org/2000/svg" width="20.559" height="13.712"
                                viewBox="0 0 20.559 13.712">
                                <path id="Icon_ionic-ios-arrow-round-forward"
                                    data-name="Icon ionic-ios-arrow-round-forward"
                                    d="M20.986,11.514a.933.933,0,0,0-.007,1.314l4.342,4.349H8.8a.928.928,0,0,0,0,1.857H25.313l-4.342,4.349a.94.94,0,0,0,.007,1.314.925.925,0,0,0,1.307-.007l5.884-5.927h0a1.042,1.042,0,0,0,.193-.293.886.886,0,0,0,.071-.357.931.931,0,0,0-.264-.65l-5.884-5.927A.91.91,0,0,0,20.986,11.514Z"
                                    transform="translate(-7.875 -11.251)" fill="#2680eb" />
                            </svg>

                        </a>
                    </div>
                </div>
            </div>
            <button class="radius-button xs  todos-productos-button azul-claro-fg bg-blue">Ver todos los productos
                <svg xmlns="http://www.w3.org/2000/svg" width="20.559" height="13.711" viewBox="0 0 20.559 13.711">
                    <path id="Icon_ionic-ios-arrow-round-forward" data-name="Icon ionic-ios-arrow-round-forward"
                        d="M20.986,11.514a.933.933,0,0,0-.007,1.314l4.342,4.349H8.8a.928.928,0,0,0,0,1.857H25.313l-4.342,4.349a.94.94,0,0,0,.007,1.314.925.925,0,0,0,1.307-.007l5.884-5.927h0a1.042,1.042,0,0,0,.193-.293.886.886,0,0,0,.071-.357.931.931,0,0,0-.264-.65l-5.884-5.927A.91.91,0,0,0,20.986,11.514Z"
                        transform="translate(-7.875 -11.252)" fill="#2680eb" />
                </svg>
            </button>
        </div>

    </section>

    <section class="sponsors-section main">
        <div class="container flex j-center a-center">
            <div class="sponsor-container">
                <img class="sponsor" src="<?php echo get_template_directory_uri(); ?>/imagenes/sponsors/underarmour.png">
            </div>
         
            <div class="sponsor-container">
                <img class="sponsor" src="<?php echo get_template_directory_uri(); ?>/imagenes/sponsors/autocredito.png">

            </div>
            <div class="sponsor-container">
                <svg id="Grupo_48" data-name="Grupo 48" xmlns="http://www.w3.org/2000/svg" width="123.209" height="50.188" viewBox="0 0 123.209 50.188">
                    <path id="Trazado_57" data-name="Trazado 57" d="M217.648,39.193h0c1.772,0,2.459-.735,2.459-2.411,0-1.581-.575-2.379-2.411-2.379h-2.22v4.79Zm-.016-7.042h0c1.533,0,1.948-.719,1.948-2.14,0-1.389-.511-2.108-2.044-2.108h-2.06v4.248Zm-4.886-6.531h5.317c2.938,0,4.359,1.485,4.359,4.152,0,1.693-.431,2.635-2,3.273,1.517.383,2.635,1.565,2.635,3.88,0,3.21-1.8,4.567-4.982,4.567H212.73V25.62Z" transform="translate(-174.87 -16.422)" fill="#b4b4b4"/>
                    <path id="Trazado_58" data-name="Trazado 58" d="M225.924,37.441h0V34.5h-.415c-2.491,0-2.938.639-2.938,2.108,0,1.325.4,1.788,1.373,1.788a2.865,2.865,0,0,0,1.98-.958m-6-.8c0-2.667,1.565-3.832,5.174-3.832h.83V32.14c0-1.214-.16-1.884-1.469-1.884a6.55,6.55,0,0,0-3.21,1.054l-.958-1.852a7.8,7.8,0,0,1,4.455-1.357c2.587,0,3.8,1.006,3.8,3.625V40H226.5l-.319-1.006a3.735,3.735,0,0,1-2.795,1.309C221.07,40.3,219.92,38.974,219.92,36.643Z" transform="translate(-170.579 -14.942)" fill="#b4b4b4"/>
                    <path id="Trazado_59" data-name="Trazado 59" d="M226.836,28.4h2.092l.272,1.261a4.777,4.777,0,0,1,3.417-1.565c1.836,0,2.906.846,2.906,3.034v8.878H232.9V31.8c0-1.214-.383-1.517-1.246-1.517a3.321,3.321,0,0,0-2.22,1.038v8.687H226.82V28.4Z" transform="translate(-166.461 -14.942)" fill="#b4b4b4"/>
                    <path id="Trazado_60" data-name="Trazado 60" d="M233.37,34.184c0-4.359,1.693-6.084,4.726-6.084a4.535,4.535,0,0,1,3.433,1.325l-1.357,1.741a2.488,2.488,0,0,0-1.98-.942c-1.485,0-2.044.623-2.044,3.9,0,3.257.575,4.04,2.156,4.04a2.755,2.755,0,0,0,2.012-.958l1.277,1.725a4.58,4.58,0,0,1-3.465,1.373c-3.146,0-4.758-1.948-4.758-6.116" transform="translate(-162.552 -14.942)" fill="#b4b4b4"/>
                    <path id="Trazado_61" data-name="Trazado 61" d="M245.978,34.184h0c0-3.321-.591-4.1-2.108-4.1s-2.092.8-2.092,4.12c0,3.273.591,4.12,2.108,4.12,1.517.016,2.092-.862,2.092-4.136m-6.978,0c0-4.375,1.852-6.084,4.854-6.084s4.9,1.741,4.9,6.1-1.884,6.1-4.886,6.1C240.884,40.3,239,38.543,239,34.184Z" transform="translate(-159.192 -14.942)" fill="#b4b4b4"/>
                    <path id="Trazado_62" data-name="Trazado 62" d="M222.75,49.931V41.2h2.619v8.112c0,1.23.463,1.6,1.309,1.6a3.562,3.562,0,0,0,2.22-1.054V41.18h2.587V52.789h-2.092l-.271-1.277a4.4,4.4,0,0,1-3.273,1.581,2.87,2.87,0,0,1-3.1-3.162" transform="translate(-168.89 -7.136)" fill="#b4b4b4"/>
                    <path id="Trazado_63" data-name="Trazado 63" d="M229.786,41.3h2.092l.272,1.261A4.777,4.777,0,0,1,235.566,41c1.836,0,2.906.846,2.906,3.034v8.878h-2.619V44.7c0-1.214-.383-1.517-1.245-1.517a3.322,3.322,0,0,0-2.22,1.038v8.687H229.77V41.3Z" transform="translate(-164.7 -7.243)" fill="#b4b4b4"/>
                    <path id="Trazado_64" data-name="Trazado 64" d="M237.308,39.683h0a1.677,1.677,0,1,1,1.661,1.677,1.67,1.67,0,0,1-1.661-1.677m.4,5.381-1.517-.271V43.1h4.1V54.709h-2.587Z" transform="translate(-160.869 -9.04)" fill="#b4b4b4"/>
                    <path id="Trazado_65" data-name="Trazado 65" d="M239.96,47.084c0-4.359,1.693-6.084,4.727-6.084a4.6,4.6,0,0,1,3.433,1.325l-1.357,1.741a2.479,2.479,0,0,0-1.964-.942c-1.5,0-2.044.623-2.044,3.9,0,3.258.575,4.04,2.156,4.04a2.755,2.755,0,0,0,2.012-.958l1.277,1.725a4.58,4.58,0,0,1-3.465,1.373c-3.162,0-4.774-1.948-4.774-6.116" transform="translate(-158.619 -7.243)" fill="#b4b4b4"/>
                    <path id="Trazado_66" data-name="Trazado 66" d="M246.958,39.683h0a1.677,1.677,0,1,1,1.661,1.677,1.67,1.67,0,0,1-1.661-1.677m.4,5.381-1.517-.271V43.1h4.1V54.709h-2.587Z" transform="translate(-155.109 -9.04)" fill="#b4b4b4"/>
                    <path id="Trazado_67" data-name="Trazado 67" d="M256.615,47.084h0c0-3.273-.431-3.944-1.8-3.944a2.92,2.92,0,0,0-2.172,1.038v6a2.969,2.969,0,0,0,2.012.878c1.469-.016,1.964-.639,1.964-3.976M250.02,41.3h2.092l.3,1.214a4.2,4.2,0,0,1,3.1-1.517c2.331,0,3.928,1.293,3.928,5.94,0,4.615-1.262,6.259-3.928,6.259a4.212,4.212,0,0,1-2.858-1.166v5.4h-2.619V41.3Z" transform="translate(-152.615 -7.243)" fill="#b4b4b4"/>
                    <path id="Trazado_68" data-name="Trazado 68" d="M262.674,50.331h0V47.393h-.415c-2.507,0-2.938.639-2.938,2.108,0,1.325.4,1.788,1.373,1.788a2.742,2.742,0,0,0,1.98-.958m-6-.8c0-2.667,1.565-3.832,5.174-3.832h.83V45.03c0-1.214-.16-1.884-1.469-1.884A6.549,6.549,0,0,0,258,44.2l-.958-1.852a7.8,7.8,0,0,1,4.455-1.357c2.587,0,3.8,1.006,3.8,3.625v8.271h-2.044l-.319-1.006a3.735,3.735,0,0,1-2.794,1.309C257.82,53.206,256.67,51.88,256.67,49.533Z" transform="translate(-148.646 -7.249)" fill="#b4b4b4"/>
                    <path id="Trazado_69" data-name="Trazado 69" d="M263.59,51.685V38h2.619V52c0,.735.176.894.83.894.192,0,.367-.016.367-.016l.319,1.772a5.035,5.035,0,0,1-1.645.3c-2-.016-2.491-1.006-2.491-3.273" transform="translate(-144.516 -9.034)" fill="#b4b4b4"/>
                    <path id="Trazado_70" data-name="Trazado 70" d="M222.431,38.5l-2.89,10.076L216.666,38.5H212.69V54.372H215.4V42.492l.958,3.066c.032.1.064.192.1.3l1.8,5.733H220.8l.974-3.082h0l.718-2.3.112-.367v-.032l1.054-3.321v11.88h2.714V38.5Z" transform="translate(-174.894 -8.735)" fill="#b4b4b4"/>
                    <path id="Trazado_71" data-name="Trazado 71" d="M199.239,34.231h0a4.1,4.1,0,0,1,3.5-1.166h0a.467.467,0,0,1,.144.032c.032,0,.08.016.112.016.1.016.192.048.287.064.032,0,.048.016.08.016.112.032.24.08.351.112l.1.048a1.611,1.611,0,0,1,.24.112c.048.016.08.048.128.064a1.45,1.45,0,0,1,.208.128c.032.032.08.048.112.08a1.815,1.815,0,0,1,.208.16c.032.032.064.048.1.08.1.08.192.176.287.271a4.218,4.218,0,0,1,.926,1.405l1.405-1.389h0a4.1,4.1,0,0,1,3.5-1.166h0a.467.467,0,0,1,.144.032c.048,0,.08.016.128.016.1.016.192.048.287.064.032,0,.048.016.08.016.112.032.24.08.351.112a.78.78,0,0,0,.112.048,1.607,1.607,0,0,1,.239.112c.048.016.08.048.128.064a1.455,1.455,0,0,1,.208.128c.048.032.08.048.128.08a1.02,1.02,0,0,1,.208.16c.032.032.064.048.1.08.1.08.192.176.287.271a4.218,4.218,0,0,1,.926,1.405l1.389-1.389h.016a4.059,4.059,0,0,1,3.178-1.2,14.948,14.948,0,1,0-27.7,9.341l8.128-8.208h0M211.982,43.7a4.154,4.154,0,0,1-5.86,0l6.93-6.946a2.793,2.793,0,0,0-.767-1.565l-4.87,4.87-3.561,3.561c-.016.032-.048.048-.064.08a4.154,4.154,0,0,1-5.86,0l6.93-6.946a2.791,2.791,0,0,0-.766-1.565L195.663,43.6c-.016.032-.048.048-.064.08a4.18,4.18,0,0,1-2.619,1.2,14.955,14.955,0,0,0,25.741-7.936L212.046,43.6A.246.246,0,0,1,211.982,43.7Z" transform="translate(-189.02 -19.86)" fill="#b4b4b4"/>
                  </svg>
                  
            </div>
            <div class="sponsor-container">
                <svg xmlns="http://www.w3.org/2000/svg" width="130.289" height="42.918" viewBox="0 0 130.289 42.918">
                    <g id="A8XhUL" transform="translate(-163.456 -426.413)">
                        <g id="Grupo_258" data-name="Grupo 258" transform="translate(163.456 426.413)">
                            <path id="Trazado_249" data-name="Trazado 249"
                                d="M228.66,469.325q-21.732,0-43.464-.008a21.436,21.436,0,0,1-2.675-42.733,19.706,19.706,0,0,1,2.424-.161q43.689-.012,87.378,0a21.439,21.439,0,0,1,2.584,42.721,24.865,24.865,0,0,1-3.144.177Q250.211,469.334,228.66,469.325Zm-.19-1.8c14.428,0,28.855.036,43.283-.015,7.437-.026,13.329-3.117,17.273-9.483a18.234,18.234,0,0,0,1.295-17.78c-3.559-7.995-10.019-11.972-18.706-11.993q-42.922-.106-85.844-.01a23.808,23.808,0,0,0-4.479.4,19.575,19.575,0,0,0-15.877,20.79,19.231,19.231,0,0,0,8.268,14.462,19.553,19.553,0,0,0,11.776,3.634Q206.964,467.519,228.47,467.524Z"
                                transform="translate(-163.456 -426.413)" fill="#b4b4b4" />
                            <path id="Trazado_250" data-name="Trazado 250"
                                d="M252.654,480.662l-.521,4.442H249.47c-.721,0-1.444.039-2.161-.01s-.912.235-.985.917c-.635,5.878-1.31,11.752-1.975,17.626a2.464,2.464,0,0,1-.1.338H239.3l2.119-18.866h-5.7l.5-4.448Z"
                                transform="translate(-222.687 -470.878)" fill="#b4b4b4" />
                            <path id="Trazado_251" data-name="Trazado 251"
                                d="M509.835,516.667h4.1c-.078.9-.133,1.726-.225,2.549-.313,2.806-.64,5.61-.959,8.415-.072.635-.157,1.318.46,1.724a1.735,1.735,0,0,0,1.879-.155,7.625,7.625,0,0,0,1.4-.977,1.58,1.58,0,0,0,.478-.9c.4-3.279.754-6.563,1.128-9.844.03-.262.107-.519.172-.823h4.123l-1.866,16.461h-4.156c.084-.926.164-1.808.251-2.763-.574.548-1.081,1.041-1.6,1.523a5.3,5.3,0,0,1-3.582,1.678,2.86,2.86,0,0,1-3.171-3.343c.255-2.69.6-5.372.9-8.057.145-1.283.284-2.566.434-3.849C509.666,517.776,509.752,517.248,509.835,516.667Z"
                                transform="translate(-446.064 -500.38)" fill="#b4b4b4" />
                            <path id="Trazado_252" data-name="Trazado 252"
                                d="M574.876,484.228H522.429l-.024-.133c1.089-.191,2.175-.406,3.268-.568,7.873-1.168,15.759-2.244,23.707-2.742q6.382-.4,12.782-.5a31.344,31.344,0,0,1,9.1,1.033,11.972,11.972,0,0,1,2.748,1.29A1.54,1.54,0,0,1,574.876,484.228Z"
                                transform="translate(-457.666 -470.565)" fill="#b4b4b4" />
                            <path id="Trazado_253" data-name="Trazado 253"
                                d="M593.867,520.979l-1.58-2.445a6.476,6.476,0,0,1,2.812-1.625,9.483,9.483,0,0,1,4.884-.416c2.847.513,4.144,2.208,3.844,5.109-.226,2.179-.5,4.354-.74,6.532-.068.618-.22,1.249.351,1.769.134.122.123.447.111.675-.022.419-.106.833-.145,1.252-.127,1.362-.151,1.385-1.533,1.277a3.527,3.527,0,0,1-2.744-1.838c-.345.248-.652.465-.955.687a6.246,6.246,0,0,1-3.386,1.339,3.564,3.564,0,0,1-3.972-4.319,6.356,6.356,0,0,1,4.084-5.4c1.462-.6,3.015-.976,4.647-1.49.027-.2.079-.514.117-.835a1.484,1.484,0,0,0-1.533-1.854,5.216,5.216,0,0,0-3.15.9C594.643,520.49,594.317,520.7,593.867,520.979Zm5.352,3.907a4.419,4.419,0,0,0-4.106,2.592,1.869,1.869,0,0,0,.542,2.34,1.929,1.929,0,0,0,2.36-.478,2.731,2.731,0,0,0,.42-.578A9.132,9.132,0,0,0,599.219,524.886Z"
                                transform="translate(-513.7 -500.125)" fill="#b4b4b4" />
                            <path id="Trazado_254" data-name="Trazado 254"
                                d="M751.934,525.719c-.069.668-.167,1.2-.173,1.738-.016,1.658,1.28,2.724,3.126,2.5a18.673,18.673,0,0,0,2.525-.618c.338-.091.664-.23,1.16-.405.041,1.052.1,1.97.09,2.887,0,.164-.258.405-.447.477a11.476,11.476,0,0,1-6.611.787,4.324,4.324,0,0,1-3.69-4.371,41.23,41.23,0,0,1,.495-6,11.225,11.225,0,0,1,1.095-3.486c1.669-3.209,5.834-3.456,8.111-2.275a3.823,3.823,0,0,1,2.154,3.515c.007,1.554-.218,3.109-.337,4.663-.044.583-.475.526-.862.526-1.833,0-3.665,0-5.5.005C752.721,525.663,752.369,525.7,751.934,525.719Zm4.2-2.552c.076-.731.182-1.35.2-1.972.026-1.1-.421-1.8-1.2-1.97a1.926,1.926,0,0,0-2.34,1.206,21.594,21.594,0,0,0-.632,2.736Z"
                                transform="translate(-642.503 -500.09)" fill="#b4b4b4" />
                            <path id="Trazado_255" data-name="Trazado 255"
                                d="M320.5,525.625h-4.41c-.811,0-1.626-.037-2.432.032a.887.887,0,0,0-.653.529,6.387,6.387,0,0,0-.017,2.053c.251,1.231,1.626,1.949,3.183,1.665,1.114-.2,2.2-.56,3.488-.9.02.932.06,1.9.043,2.858,0,.142-.243.346-.415.409a11.867,11.867,0,0,1-6.086.863c-2.718-.451-4.175-2.023-4.22-4.778a31.878,31.878,0,0,1,.408-4.659,17.179,17.179,0,0,1,.7-3.428c1.5-4.289,6.076-4.617,8.526-3.391a3.95,3.95,0,0,1,2.221,3.757C320.832,522.251,320.625,523.864,320.5,525.625Zm-3.278-2.481c.057-.81.163-1.58.149-2.348a1.5,1.5,0,0,0-1.086-1.587,1.924,1.924,0,0,0-2.1.683,4.769,4.769,0,0,0-.733,3.252Z"
                                transform="translate(-282.73 -500.056)" fill="#b4b4b4" />
                            <path id="Trazado_256" data-name="Trazado 256"
                                d="M677.45,533.257l-2.573-16.95c1.367,0,2.616-.028,3.86.033.165.008.412.454.446.719.331,2.593.624,5.191.932,7.787a3.02,3.02,0,0,0,.305,1.084q.742-2.157,1.483-4.313c.519-1.506,1.072-3,1.545-4.52a1,1,0,0,1,1.167-.816c1.043.047,2.09.013,3.218.013a5.245,5.245,0,0,1-.147.709q-2.952,7.8-5.9,15.6a.834.834,0,0,1-.909.661C679.769,533.239,678.663,533.257,677.45,533.257Z"
                                transform="translate(-582.638 -500.071)" fill="#b4b4b4" />
                            <path id="Trazado_257" data-name="Trazado 257"
                                d="M448.906,517.981l-2.03,2.619c-.793-.4-1.442-.756-2.122-1.039a1.452,1.452,0,0,0-.965-.087,2.588,2.588,0,0,0-1.282.8c-.352.561.052,1.09.554,1.443.883.621,1.758,1.259,2.677,1.824,1.673,1.029,2.825,2.337,2.581,4.456a5.6,5.6,0,0,1-3.847,4.976,6.544,6.544,0,0,1-7.139-1.943L439.607,528a6.4,6.4,0,0,0,.657,1.005,2.963,2.963,0,0,0,2.569,1.041,1.5,1.5,0,0,0,1.407-1.083,1.34,1.34,0,0,0-.679-1.531c-.9-.6-1.782-1.222-2.675-1.829a4.438,4.438,0,0,1-2.166-4.845,5.153,5.153,0,0,1,3.756-4.1C444.779,515.938,446.835,516.595,448.906,517.981Z"
                                transform="translate(-387.936 -500.142)" fill="#b4b4b4" />
                            <path id="Trazado_258" data-name="Trazado 258"
                                d="M386.073,533.2h-3.931c.176-1.64.338-3.212.514-4.783.4-3.549.812-7.1,1.205-10.647.116-1.051.13-1.089,1.194-1.094.831,0,1.663,0,2.625,0l-.276,3.039c1.372-1.544,2.688-3.087,5.047-3.437-.125,1.17-.222,2.229-.355,3.284-.09.709-.013,1.6-.412,2.062-.356.41-1.267.328-1.928.486a9.315,9.315,0,0,0-1.028.329,2.282,2.282,0,0,0-1.647,2.187c-.217,2.692-.581,5.371-.888,8.055C386.176,532.826,386.128,532.967,386.073,533.2Z"
                                transform="translate(-342.7 -500.07)" fill="#b4b4b4" />
                        </g>
                    </g>
                </svg>

            </div>
            <div class="sponsor-container">

                <svg xmlns="http://www.w3.org/2000/svg" width="105.764" height="52.51" viewBox="0 0 105.764 52.51">
                    <g id="_1g8WHD.tif" data-name="1g8WHD.tif" transform="translate(-376.253 -485.905)"
                        style="mix-blend-mode: darken;isolation: isolate">
                        <g id="Grupo_259" data-name="Grupo 259" transform="translate(376.253 485.905)">
                            <path id="Trazado_259" data-name="Trazado 259"
                                d="M414.105,538.415H376.253V527.691c1.221-.245,1.165.811,1.455,1.461a7.274,7.274,0,0,0,9.838,3.474,5.467,5.467,0,0,0,2.984-3.791c.33-1.51-.182-2.206-1.708-2.413a3.535,3.535,0,0,0-2.906.629c.1.833.84.744,1.384.952,1.3.5,1.522,1.33.6,2.391a4.5,4.5,0,0,1-4.731,1.321c-1.983-.461-3.561-1.519-4-3.637-.977-4.7,2.613-7.832,7.177-6.324.61.2,1.219.693,1.958.109.079-.939-.679-1.181-1.327-1.47a6.9,6.9,0,0,0-9.266,3.617c-.29.65-.234,1.706-1.455,1.461V485.9H482.017v52.51H416.332c-.606-1.445-.221-2.918.064-4.319.256-1.26,1.349-1.1,2.406-.911a4.227,4.227,0,0,0,5.235-3.435,4.385,4.385,0,0,0-5.368-5.418,8.551,8.551,0,0,1-2.526.349c-1.432-.1-1.461,1.055-1.477,2.05-.045,3.009,0,6.019-.024,9.029A4.068,4.068,0,0,1,414.105,538.415Z"
                                transform="translate(-376.253 -485.905)" fill="none" />
                            <path id="Trazado_260" data-name="Trazado 260"
                                d="M376.253,530.636a.772.772,0,0,0,.34-.618c.306-3.489,4.6-6.935,9.165-5.891a8.235,8.235,0,0,1,3.35,1.483c.521.412,1.116.792,1.232,1.584-.244.865-1.113,1.068-1.76,1.475a1.143,1.143,0,0,1-1.373-.213,6.1,6.1,0,0,0-1.454-.781,4.253,4.253,0,0,0-5.859,4.047c.2,2.323.88,3.469,3.145,4.163,2.142.655,3.561.135,4.864-1.787a3.99,3.99,0,0,0-1.639-.148,3.16,3.16,0,0,1-1.368-.147c-.156-.143-.281-.21-.329-.312-1.066-2.265.017-3,2.059-2.833,1.638.137,3.334-.253,5.042.652a6.432,6.432,0,0,1-1.356,5.432c-3.825,4.79-11.346,2.912-13.408-1.839-.295-.678-.016-1.5-.649-2.047Z"
                                transform="translate(-376.253 -491.069)" fill="#b4b4b4" />
                            <path id="Trazado_261" data-name="Trazado 261"
                                d="M419.991,544.272a3.221,3.221,0,0,1-.39-1.949q.008-5.631,0-11.263c0-.308-.009-.616.016-.922.054-.662.444-.949,1.092-1.011a2.571,2.571,0,0,1,2.155.671c2.212-1.252,5.3-.933,6.8.915a6.054,6.054,0,0,1,.3,7.349c-1.314,1.995-3.638,2.519-6.81,1.507a4.06,4.06,0,0,0-.207,2.316,3.346,3.346,0,0,1-.728,2.387Z"
                                transform="translate(-382.138 -491.762)" fill="#b4b4b4" />
                            <path id="Trazado_262" data-name="Trazado 262"
                                d="M440.852,514.466a12.345,12.345,0,0,1-9.444,1c-5.446-1.525-9.138-4.891-10.7-10.415a14,14,0,0,1,2.42-12.678,13.577,13.577,0,0,1,7.928-5.355,14.717,14.717,0,0,1,12.43,2.2,5.279,5.279,0,0,1,.754.8c-.417.831-1.1.64-1.728.387-1.816-.73-3.707-.506-5.58-.486a1.936,1.936,0,0,0-1.9,1.409,1.552,1.552,0,0,1-.865.636,8.506,8.506,0,0,0-5.915,6.839,3.565,3.565,0,0,1-.335.85c-1.761,1.659-1,3.614-.617,5.5a10.761,10.761,0,0,0,8.757,8.6,8.928,8.928,0,0,0,2.932.035C439.717,513.68,440.492,513.531,440.852,514.466Z"
                                transform="translate(-382.209 -485.988)" fill="#b4b4b4" />
                            <path id="Trazado_263" data-name="Trazado 263"
                                d="M468.349,531.785a7.323,7.323,0,0,1-7.6,7.687c-4.862-.022-7.68-3.651-7.745-7.809a7.709,7.709,0,0,1,7.678-7.7C464.717,523.947,468.784,527.247,468.349,531.785Z"
                                transform="translate(-386.673 -491.072)" fill="#b4b4b4" />
                            <path id="Trazado_264" data-name="Trazado 264"
                                d="M441.774,516.417c-.825-.156-1.555.321-2.349.357a11.228,11.228,0,0,1-6.979-1.843c-3.732-2.489-5.34-6.049-5.531-10.391a27.258,27.258,0,0,1,.5-3.063c.021-.309.347-.486.651-.592,1.241.818,1.087,2.278,1.541,3.442a7.385,7.385,0,0,0,9.5,4.472c1.315-.477,2.745-1,2.719-2.829a1.88,1.88,0,0,1,2.39-1.48,1.086,1.086,0,0,1,.771.93c.013,2.48,1.351,4.472,2.378,6.579A10.416,10.416,0,0,1,441.774,516.417Z"
                                transform="translate(-383.131 -487.939)" fill="#858585" />
                            <path id="Trazado_265" data-name="Trazado 265"
                                d="M445.442,503.982c-.827.233-1.77.323-1.854,1.48a4.8,4.8,0,0,1-6.242-.052c-2.307-1.819-3.144-4.4-1.913-6.67a8.448,8.448,0,0,1,7.78-4.742,4.575,4.575,0,0,0,1.627-.223c3.136.13,4.92,2.034,6.152,4.663a7.987,7.987,0,0,1,.64,4.86c-.2.846.074,1.831-.607,2.562a3.8,3.8,0,0,0-5.074-1.718C445.824,504.189,445.619,504.024,445.442,503.982Z"
                                transform="translate(-384.211 -486.974)" fill="#b4b4b4" />
                            <path id="Trazado_266" data-name="Trazado 266"
                                d="M439.829,529.073c3.182-.44,5.655,2.585,5.621,5.424a5.629,5.629,0,1,1-11.257.008A5.225,5.225,0,0,1,439.829,529.073Z"
                                transform="translate(-384.119 -491.76)" fill="#b4b4b4" />
                            <path id="Trazado_267" data-name="Trazado 267"
                                d="M490.647,540.151a5.817,5.817,0,0,1-5.734-5.771c.042-2.969,2.775-5.815,5.734-5.588,3.151.242,5.6,1.973,5.706,5.781A5.7,5.7,0,0,1,490.647,540.151Z"
                                transform="translate(-391.006 -491.726)" fill="#b4b4b4" />
                            <path id="Trazado_268" data-name="Trazado 268"
                                d="M411.92,539.227c-2.569,1.4-4.375,1.226-5.882-.39a3.77,3.77,0,0,1-.991-2.517c-.067-1.97-.049-3.943-.012-5.915.018-.976.27-1.18,1.2-1.267,1.739-.162,2.085.139,2.105,1.865.013,1.171,0,2.342.006,3.512a7.153,7.153,0,0,0,.041,1.107,1.783,1.783,0,0,0,1.392,1.549,2.063,2.063,0,0,0,1.887-.932,3.113,3.113,0,0,0,.408-1.771c-.021-1.294-.031-2.589,0-3.882.033-1.251.265-1.437,1.584-1.452,1.446-.016,1.707.175,1.722,1.5.03,2.527.025,5.054,0,7.58-.013,1.421-.226,1.586-1.6,1.632A2.236,2.236,0,0,1,411.92,539.227Z"
                                transform="translate(-380.156 -491.77)" fill="#b4b4b4" />
                            <path id="Trazado_269" data-name="Trazado 269"
                                d="M473.168,523.8a3.763,3.763,0,0,1,2.566-.065,1.428,1.428,0,0,1,.455,1.3c0,4.128.014,8.257,0,12.385a1.8,1.8,0,0,1-2.826,1.5.892.892,0,0,1-.465-.75c-.02-.43-.026-.862-.027-1.293,0-3.7-.007-7.393.005-11.091A3.443,3.443,0,0,1,473.168,523.8Z"
                                transform="translate(-389.369 -491.016)" fill="#b4b4b4" />
                            <path id="Trazado_270" data-name="Trazado 270"
                                d="M399.523,530.076a14,14,0,0,1,1.3-.733c1.162-.5,1.765-.125,1.843,1.11.1,1.593-.05,1.84-1.619,2.363a2.349,2.349,0,0,0-1.677,2.377c-.042,1.106-.01,2.215-.016,3.323a1.287,1.287,0,0,1-.3,1.027,1.359,1.359,0,0,1-1.034.295c-1.791.063-1.987-.12-2-1.966-.01-2.215.01-4.43-.009-6.645-.008-.839.016-1.706.961-1.977C397.94,528.975,398.965,528.891,399.523,530.076Z"
                                transform="translate(-378.936 -491.767)" fill="#b4b4b4" />
                            <path id="Trazado_271" data-name="Trazado 271"
                                d="M447.043,505.359a5.751,5.751,0,0,1,2.56-1.27c1.6-.483,2.613.092,2.954,1.7a8.745,8.745,0,0,1,.069,1.448,9.221,9.221,0,0,1-1.943,4.425,1.529,1.529,0,0,1-.3.347l0,.006a2.5,2.5,0,0,0-.349.4h.015a1.462,1.462,0,0,1-1.6-.928c-.509-1.231-1.076-2.438-1.631-3.65C446.412,506.959,446.94,506.181,447.043,505.359Z"
                                transform="translate(-385.813 -488.352)" fill="#7b7b7b" />
                            <path id="Trazado_272" data-name="Trazado 272"
                                d="M451.174,497.827c-.932-.756-1.467-1.877-2.591-2.5a8.275,8.275,0,0,0-3.391-1.212,23.516,23.516,0,0,0-5.884-2.03,10.128,10.128,0,0,1-1.811-.184,1.3,1.3,0,0,1-.767-.722l-.52-.135c.035-.588.539-.649.885-.777,2.868-1.06,5.746-1.558,8.622.006a2.251,2.251,0,0,0,.706.121c1.411.446,2,1.758,2.738,2.81A10.762,10.762,0,0,1,451.174,497.827Z"
                                transform="translate(-384.394 -486.363)" fill="#7b7b7b" />
                            <path id="Trazado_273" data-name="Trazado 273"
                                d="M479.553,539.559a3.151,3.151,0,0,1-.259-1.755c-.011-2.326-.022-4.652,0-6.978.015-1.5.245-1.7,1.713-1.687,1.366.01,1.6.21,1.614,1.6q.036,3.765,0,7.529c-.013,1.385-.233,1.571-1.62,1.582a5.8,5.8,0,0,1-.918-.047A2.267,2.267,0,0,1,479.553,539.559Z"
                                transform="translate(-390.242 -491.775)" fill="#b4b4b4" />
                            <path id="Trazado_274" data-name="Trazado 274"
                                d="M482.625,525.637c.021,1.341-.613,2.067-1.778,2.037a2.093,2.093,0,0,1-1.964-2.027c.011-1.08.695-1.676,1.945-1.7C482.225,523.925,482.605,524.282,482.625,525.637Z"
                                transform="translate(-390.188 -491.07)" fill="#b4b4b4" />
                            <path id="Trazado_275" data-name="Trazado 275" d="M450.965,513.224l.3-.347Z"
                                transform="translate(-386.397 -489.567)" fill="#858585" />
                            <path id="Trazado_276" data-name="Trazado 276"
                                d="M450.556,513.684l.349-.4A.482.482,0,0,1,450.556,513.684Z"
                                transform="translate(-386.341 -489.623)" fill="#858585" />
                            <path id="Trazado_277" data-name="Trazado 277"
                                d="M423.454,534.958a2.188,2.188,0,0,1,2.356-2.421,2.354,2.354,0,0,1,2.487,2.385,2.314,2.314,0,0,1-2.546,2.459C424.162,537.349,423.444,536.591,423.454,534.958Z"
                                transform="translate(-382.662 -492.236)" fill="#fdfdfd" />
                            <path id="Trazado_278" data-name="Trazado 278"
                                d="M438.237,491.385c2.31.313,4.431.993,5.873,3a9.531,9.531,0,0,0-6.9,2.022,4.836,4.836,0,0,0-1.979,5.8,5.076,5.076,0,0,0,5.631,3.06,7.178,7.178,0,0,1,1.828-.142c.246,1.335-.6,2.016-1.578,2.619a8.515,8.515,0,0,1-9.907-.942,9.331,9.331,0,0,1-2.957-7.22c.1-.149.259-.286.287-.447a8.561,8.561,0,0,1,6.679-7.377,1.6,1.6,0,0,0,.437-.307l1.1-.062A1.992,1.992,0,0,1,438.237,491.385Z"
                                transform="translate(-383.312 -486.629)" fill="#fefefe" />
                            <path id="Trazado_279" data-name="Trazado 279"
                                d="M465.517,532.3c-.009,2.831-1.893,4.186-4.3,4.332a4.241,4.241,0,0,1-4.229-4.419,4.265,4.265,0,1,1,8.528.087Z"
                                transform="translate(-387.215 -491.609)" fill="#fefefe" />
                            <path id="Trazado_280" data-name="Trazado 280"
                                d="M442.572,534.952c.01,1.637-.742,2.431-2.282,2.409a2.157,2.157,0,0,1-2.218-2.343,2.275,2.275,0,0,1,2.331-2.466A2.19,2.19,0,0,1,442.572,534.952Z"
                                transform="translate(-384.646 -492.238)" fill="#fdfdfd" />
                            <path id="Trazado_281" data-name="Trazado 281"
                                d="M491.17,537.364a2.282,2.282,0,0,1-2.4-2.426,2.406,2.406,0,0,1,4.812.006A2.285,2.285,0,0,1,491.17,537.364Z"
                                transform="translate(-391.529 -492.238)" fill="#fdfdfd" />
                            <path id="Trazado_282" data-name="Trazado 282"
                                d="M439.573,491.353l-1.488,0A.967.967,0,0,1,439.573,491.353Z"
                                transform="translate(-384.648 -486.597)" fill="#999" />
                        </g>
                    </g>
                </svg>

            </div>
            <div class="sponsor-container">

                <svg xmlns="http://www.w3.org/2000/svg" width="80.85" height="41.561" viewBox="0 0 80.85 41.561">
                    <g id="_9xANVY.tif" data-name="9xANVY.tif" transform="translate(448.819 -843.918)">
                        <g id="Grupo_260" data-name="Grupo 260" transform="translate(-448.819 843.918)">
                            <path id="Trazado_283" data-name="Trazado 283"
                                d="M40.187,868.235c-.3.643-.557,1.262-.861,1.86q-.567,1.116-1.191,2.2c-.334.581-.694,1.15-1.07,1.7a3.08,3.08,0,0,1-1.18,1.039,1.12,1.12,0,0,1-1.734-.859,5.925,5.925,0,0,1,.023-2.1c.1-.614.173-1.23.261-1.845s.181-1.242.27-1.864.173-1.23.261-1.845.174-1.2.261-1.8q.135-.932.27-1.864c.091-.628.184-1.256.273-1.884s.171-1.231.259-1.846.181-1.242.27-1.864c.035-.241.073-.481.095-.723a.3.3,0,0,1,.276-.322c1.139-.233,2.276-.48,3.413-.724.137-.03.179-.008.154.151-.149.955-.286,1.911-.426,2.867-.134.916-.269,1.831-.4,2.748-.1.723-.193,1.447-.3,2.169s-.212,1.43-.315,2.146-.2,1.405-.3,2.108c-.043.308-.085.616-.128.924,0,.013-.011.028-.008.04.04.124.045.3.13.358.134.1.261-.042.369-.133a3.056,3.056,0,0,0,.763-1.215c.288-.68.561-1.368.79-2.069a12.757,12.757,0,0,0,.6-2.625c.085-.812.236-1.616.351-2.425.1-.729.193-1.459.3-2.188.115-.809.239-1.616.358-2.424.032-.22.069-.441.085-.663a.231.231,0,0,1,.214-.245c.821-.169,1.64-.347,2.46-.521l1.157-.246c-.017.2-.024.38-.048.555-.117.85-.243,1.7-.358,2.549s-.218,1.73-.337,2.594c-.14,1.024-.292,2.047-.439,3.07-.126.883-.256,1.766-.376,2.65-.075.555-.137,1.113-.2,1.669a.238.238,0,0,0,0,.121c.054.113.093.267.185.315.069.036.232-.042.316-.113a2.913,2.913,0,0,0,.805-1.233q.714-1.892,1.378-3.8a19.406,19.406,0,0,0,.927-3.8c.132-.97.3-1.935.436-2.9.1-.689.168-1.381.259-2.071a.231.231,0,0,1,.129-.165c1.2-.264,2.406-.518,3.61-.773.012,0,.026.005.058.012a.542.542,0,0,1,.019.146q-.1.774-.213,1.547c-.09.636-.182,1.271-.273,1.906q-.159,1.114-.316,2.228c-.087.623-.17,1.246-.257,1.868s-.174,1.231-.261,1.847q-.135.953-.27,1.907c-.062.435-.137.868-.183,1.3a1.763,1.763,0,0,0,.041.561.2.2,0,0,0,.359.115,3.136,3.136,0,0,0,.6-.731,22.329,22.329,0,0,0,1.732-4.531q.452-1.7.831-3.409c.144-.658.214-1.333.314-2q.134-.891.261-1.784c.078-.548.153-1.1.23-1.645.086-.609.175-1.217.26-1.825.079-.562.153-1.124.23-1.686q.129-.933.261-1.866c.034-.241.063-.482.112-.72a.235.235,0,0,1,.145-.151c1.137-.245,2.275-.481,3.413-.722.162-.034.187.019.165.169-.136.9-.263,1.793-.393,2.69-.147,1.01-.3,2.021-.439,3.031-.115.81-.223,1.621-.338,2.432-.13.917-.268,1.833-.4,2.75-.1.723-.2,1.448-.3,2.171s-.212,1.458-.315,2.188c-.088.623-.171,1.246-.256,1.869-.063.462-.142.923-.184,1.387a2.946,2.946,0,0,0,.033.767c.056.318.262.384.485.148a2.909,2.909,0,0,0,.538-.731c.279-.594.523-1.206.755-1.821.428-1.135.853-2.272,1.243-3.42a7.822,7.822,0,0,0,.248-1.27c.1-.593.177-1.189.264-1.784q.135-.922.271-1.844.129-.872.259-1.744c.049-.327.106-.653.146-.982a.307.307,0,0,1,.285-.321c1.094-.221,2.183-.464,3.273-.7.172-.037.22,0,.192.191-.083.563-.175,1.125-.262,1.688-.056.359-.109.719-.133,1.087.248-.377.477-.768.747-1.129.405-.542.832-1.068,1.262-1.59a5.021,5.021,0,0,1,1.463-1.212,1.637,1.637,0,0,1,1.144-.249,1.083,1.083,0,0,1,.809.728,3.79,3.79,0,0,1,.249,1.395,9.263,9.263,0,0,0,.042,1.028c.212-.35.407-.712.641-1.047q.6-.866,1.25-1.7a5.235,5.235,0,0,1,1.469-1.3,2.009,2.009,0,0,1,1.394-.34,1.407,1.407,0,0,1,1.123,1.2,4.794,4.794,0,0,1,0,1.94c-.123.789-.24,1.579-.36,2.369-.146.964-.295,1.927-.439,2.891-.156,1.045-.308,2.09-.462,3.135-.049.328-.108.655-.147.984a1.36,1.36,0,0,0,.129.87c.078.136.191.189.317.083a1.238,1.238,0,0,0,.323-.354q.425-.845.813-1.709a12.454,12.454,0,0,0,.743-2.865,26.654,26.654,0,0,1,1.4-4.985,12.279,12.279,0,0,1,1.842-3.27,6.059,6.059,0,0,1,3.377-2.246,3.517,3.517,0,0,1,2.19.095,2.653,2.653,0,0,1,1.333,1.287,5.386,5.386,0,0,1,.592,2.182c.031.487.05.977.04,1.465a7.852,7.852,0,0,1-.733,3.185,8.11,8.11,0,0,1-1.082,1.788,6.3,6.3,0,0,1-1.791,1.518,8.29,8.29,0,0,1-2.794.891.244.244,0,0,1-.081,0c-.212-.041-.274.085-.295.26-.041.349-.1.7-.121,1.048-.052.784-.126,1.57-.116,2.355a2.232,2.232,0,0,0,.816,1.735,1.385,1.385,0,0,0,1.422.18,3.279,3.279,0,0,0,1.4-1.105c.3-.344.568-.709.833-1.077a.459.459,0,0,0,.072-.332,6.2,6.2,0,0,1-.176-1.775,2.9,2.9,0,0,1,.743-1.748,2.626,2.626,0,0,1,1.494-.921,3.616,3.616,0,0,1,.781-.032c.15,0,.256.005.348-.152.6-1.02,1.206-2.031,1.8-3.051a.362.362,0,0,0,.006-.265c-.246-.726-.534-1.439-.744-2.175a9.912,9.912,0,0,1-.32-2.27,6.163,6.163,0,0,1,.326-2.459,3.751,3.751,0,0,1,2.881-2.519,1.942,1.942,0,0,1,1.73.353,1.805,1.805,0,0,1,.584,1.088,3.6,3.6,0,0,1-.277,1.966,12.523,12.523,0,0,1-1.21,2.395.317.317,0,0,0-.028.321c.423,1.072.857,2.14,1.244,3.226a11.989,11.989,0,0,1,.673,2.819,6.619,6.619,0,0,1-1.115,4.528,7.3,7.3,0,0,1-2.451,2.251,8.066,8.066,0,0,1-2.736.938,3.069,3.069,0,0,1-2.251-.394,2.889,2.889,0,0,1-.938-1.081c-.022-.041-.048-.08-.09-.151-.191.241-.365.468-.547.689a7.48,7.48,0,0,1-1.766,1.724,5.713,5.713,0,0,1-2.369.861,3.135,3.135,0,0,1-1.774-.192,3.2,3.2,0,0,1-1.376-1.375,6.973,6.973,0,0,1-.843-2.908c-.039-.479-.07-.958-.108-1.488-.081.192-.146.349-.214.5-.4.9-.786,1.806-1.195,2.7a20.636,20.636,0,0,1-1.587,2.89,6.01,6.01,0,0,1-1.233,1.425,1.517,1.517,0,0,1-1.7.3,1.5,1.5,0,0,1-.668-1.007,4.541,4.541,0,0,1,.013-1.836c.125-.76.236-1.523.355-2.284.1-.648.208-1.295.307-1.943.1-.681.2-1.364.305-2.045.113-.742.23-1.483.343-2.224.1-.688.206-1.377.311-2.065.059-.388.138-.773.175-1.163a3.146,3.146,0,0,0-.015-.847c-.058-.319-.279-.38-.517-.159a2.853,2.853,0,0,0-.486.571,8.959,8.959,0,0,0-1.256,3.608c-.126.96-.291,1.916-.434,2.874-.13.878-.252,1.757-.38,2.635-.122.831-.248,1.662-.372,2.493q-.18,1.206-.36,2.412c-.069.462-.147.924-.2,1.388-.018.153-.125.149-.211.168-.528.118-1.058.226-1.588.337-.609.128-1.219.254-1.828.382-.19.04-.233,0-.205-.19q.223-1.5.444-3.007c.147-.989.3-1.977.442-2.966s.275-1.954.419-2.929.3-1.936.439-2.905c.117-.8.223-1.592.337-2.388q.05-.351.112-.7c.048-.27-.04-.6-.2-.663-.251-.09-.432.074-.6.222a4.165,4.165,0,0,0-1.053,1.72A10.528,10.528,0,0,0,64,857.1c-.126.913-.261,1.825-.391,2.737q-.173,1.208-.344,2.415-.17,1.188-.343,2.375-.175,1.207-.353,2.414c-.095.637-.188,1.274-.3,1.908a.33.33,0,0,1-.222.188c-.825.186-1.653.358-2.48.533l-1.033.218c-.043.009-.088.01-.161.019l1.138-7.745-.035-.011c-.12.313-.232.628-.361.937-.375.9-.747,1.792-1.138,2.679a23.225,23.225,0,0,1-1.75,3.242,12.221,12.221,0,0,1-1.061,1.438,2.341,2.341,0,0,1-1.355.81,1.136,1.136,0,0,1-1.312-1.013,6.155,6.155,0,0,1,0-1.253c.04-.524.123-1.046.189-1.568.062-.489.129-.977.19-1.466s.119-.979.177-1.469c.035-.3.067-.59.105-.932-.255.613-.473,1.193-.734,1.752-.5,1.076-1.005,2.154-1.555,3.207-.427.817-.907,1.607-1.4,2.388a4.258,4.258,0,0,1-1.4,1.5,1.208,1.208,0,0,1-1.307.095,1.394,1.394,0,0,1-.61-.971A4.373,4.373,0,0,1,46.214,870q.117-.863.232-1.726.129-.954.258-1.907.1-.7.191-1.4a.527.527,0,0,0,0-.239c-.084.2-.167.391-.252.586-.358.82-.705,1.645-1.077,2.459-.324.711-.658,1.418-1.017,2.111a21.681,21.681,0,0,1-1.88,3.14,2.4,2.4,0,0,1-1.037.829,1.2,1.2,0,0,1-1.74-.961,7.244,7.244,0,0,1,.011-1.575c.013-.31.06-.619.092-.928.065-.611.133-1.222.2-1.833C40.2,868.458,40.187,868.363,40.187,868.235Zm40.934-10.648a4.233,4.233,0,0,0,.464-.069,3.358,3.358,0,0,0,.8-.252,1.689,1.689,0,0,0,.784-1.168c.128-.594.2-1.2.292-1.8.106-.7.205-1.405.307-2.108s.208-1.432.307-2.149c.095-.683.191-1.366.273-2.051a1.451,1.451,0,0,0-.141-.969.568.568,0,0,0-.661-.264,1.348,1.348,0,0,0-1.018,1.109c-.2.979-.343,1.97-.5,2.958-.1.648-.182,1.3-.272,1.948-.087.623-.175,1.245-.26,1.868q-.137,1-.27,2.01C81.192,856.957,81.159,857.264,81.122,857.587Zm4.991,4.221a2.315,2.315,0,0,0,1.645,1.247,3.215,3.215,0,0,0,1.693-.233,4.174,4.174,0,0,0,2.487-2.761,4.492,4.492,0,0,0,.167-1.748,5.681,5.681,0,0,0-.354-1.726c-.307-.747-.65-1.479-.98-2.217a.614.614,0,0,0-.081-.1l-1.73,2.868a2.306,2.306,0,0,1,.908,2.286,2.857,2.857,0,0,1-1.05,1.978A2.365,2.365,0,0,1,86.112,861.808ZM92.8,849.19c.048-.085.082-.135.105-.19.244-.582.505-1.157.722-1.748a3.617,3.617,0,0,0,.262-1.431.933.933,0,0,0-.7-.929,1.056,1.056,0,0,0-1.143.8,2.777,2.777,0,0,0,0,1.405A8.54,8.54,0,0,0,92.8,849.19Z"
                                transform="translate(-14.332 -843.918)" fill="#b4b4b4" />
                            <path id="Trazado_284" data-name="Trazado 284"
                                d="M-438.1,992.933a2.621,2.621,0,0,1,.346-.2,1.673,1.673,0,0,1,1.74.251,3.482,3.482,0,0,1,1.15,1.875,9.076,9.076,0,0,1,.286,3.125,14.412,14.412,0,0,1-.667,3.745,7.819,7.819,0,0,1-2.155,3.541,3.143,3.143,0,0,1-1.769.84,2.263,2.263,0,0,1-2.159-.984,4.759,4.759,0,0,1-.9-2.3,14.061,14.061,0,0,1-.156-2.1,21.858,21.858,0,0,1,.233-2.521c.114-.815.265-1.628.453-2.429a16.311,16.311,0,0,1,1.122-3.218,12.192,12.192,0,0,1,1.684-2.677,7.2,7.2,0,0,1,3.125-2.266,3.344,3.344,0,0,1,2.12.01,5.32,5.32,0,0,1,2.534,1.766,9.614,9.614,0,0,1,2.013,4.541c.135.729.215,1.471.286,2.21a14.366,14.366,0,0,1,.078,1.745c-.022.825-.087,1.649-.155,2.471a25.8,25.8,0,0,1-.814,4.711,29.255,29.255,0,0,1-1.356,3.959,16.538,16.538,0,0,1-1.7,3.1c-.348.483-.734.939-1.116,1.395a9.912,9.912,0,0,1-2.169,1.861,11.164,11.164,0,0,1-2.427,1.183.4.4,0,0,0-.144.08,6.109,6.109,0,0,0,2.574-.024,4.106,4.106,0,0,0,2.156-1.38l.049.036c-.027.264-.041.529-.083.79a7.141,7.141,0,0,1-.774,2.344,4.764,4.764,0,0,1-3.558,2.564,7.024,7.024,0,0,1-1.5.053,16.747,16.747,0,0,0-1.934.032,11.352,11.352,0,0,0-1.588.188,3.971,3.971,0,0,0-2.6,1.774.3.3,0,0,1-.152.12,2.853,2.853,0,0,1,0-.346,12.031,12.031,0,0,1,.571-2.693,4.685,4.685,0,0,1,2.835-2.95c.068-.026.133-.059.213-.1-.35-.144-.687-.261-1.006-.417A8.182,8.182,0,0,1-446,1014.58a10.755,10.755,0,0,1-2.065-3.753,14.4,14.4,0,0,1-.6-2.71,17.956,17.956,0,0,1-.151-2.961c.033-.823.092-1.649.2-2.465.141-1.036.31-2.072.532-3.093a21.913,21.913,0,0,1,1.658-4.813,17.891,17.891,0,0,1,2.3-3.657,12.167,12.167,0,0,1,3.368-2.911c.341-.195.707-.346,1.064-.514a.223.223,0,0,1,.181.006c-.135.157-.265.319-.407.47a12.626,12.626,0,0,0-1.761,2.506,22.3,22.3,0,0,0-1.441,2.963,20.613,20.613,0,0,0-.98,3.35c-.132.669-.257,1.34-.358,2.014a13.421,13.421,0,0,0-.129,1.372c-.04.86-.1,1.723-.076,2.582a13.606,13.606,0,0,0,.945,4.935,5.019,5.019,0,0,0,1.044,1.615,2.893,2.893,0,0,0,1.8.9,4.445,4.445,0,0,0,2.315-.481,7.377,7.377,0,0,0,2.991-2.6,14.362,14.362,0,0,0,1.072-1.773,17.667,17.667,0,0,0,1.563-4.709,21.224,21.224,0,0,0,.354-2.321,32.035,32.035,0,0,0,.083-3.275,10.609,10.609,0,0,0-.548-3.227,3.639,3.639,0,0,0-.785-1.366,1.69,1.69,0,0,0-2.048-.385,4.124,4.124,0,0,0-1.932,1.909c-.126.231-.228.475-.341.713Zm1.226,2.808a1.582,1.582,0,0,0-.4-1.119.511.511,0,0,0-.712-.072,2.291,2.291,0,0,0-.618,2.708c.371.6.817.471,1.155.091A2.5,2.5,0,0,0-436.878,995.741Z"
                                transform="translate(448.819 -981.574)" fill="#b4b4b4" />
                            <path id="Trazado_285" data-name="Trazado 285"
                                d="M393.792,929.1a1.865,1.865,0,0,1-1.882-1.664,2.767,2.767,0,0,1,2-3.036,1.908,1.908,0,0,1,2.33,1.6,2.784,2.784,0,0,1-1.526,2.907,6.03,6.03,0,0,1-.911.244Z"
                                transform="translate(-357.521 -921.066)" fill="#b4b4b4" />
                            <path id="Trazado_286" data-name="Trazado 286"
                                d="M696.578,1582.856c-.281.125-.5.14-.674-.114a.415.415,0,0,0-.057-.058c-.446-.446-.446-.446-1.054-.3-.4.1-.4.1-.4.506q0,.081,0,.163c0,.3,0,.3-.336.361a1.44,1.44,0,0,1-.025-.188c0-.611,0-1.223,0-1.834a.2.2,0,0,1,.184-.239c.524-.106,1.047-.219,1.572-.325a.5.5,0,0,1,.572.442.824.824,0,0,1-.533.862Zm-2.188-1.07c0,.054,0,.109,0,.163-.015.17.035.235.221.185.314-.083.639-.126.949-.22a.7.7,0,0,0,.368-.26.511.511,0,0,0,.012-.4c-.05-.135-.2-.129-.337-.1-.336.079-.674.153-1.013.216-.137.026-.21.081-.2.226C694.394,1581.664,694.391,1581.725,694.39,1581.786Z"
                                transform="translate(-647.317 -1550.704)" fill="#b4b4b4" />
                            <path id="Trazado_287" data-name="Trazado 287"
                                d="M191.04,1689.809l.741.694c-.339.148-.416.135-.645-.093-.522-.521-.522-.521-1.242-.348-.317.076-.317.076-.317.407,0,.129,0,.258,0,.387,0,.149-.1.193-.211.182-.042,0-.1-.111-.1-.171-.008-.618,0-1.236-.006-1.854a.18.18,0,0,1,.167-.209c.5-.1,1.006-.218,1.511-.318a.541.541,0,0,1,.569.232.7.7,0,0,1-.078.746C191.315,1689.581,191.186,1689.679,191.04,1689.809Zm-1.459.026c.453-.1.865-.187,1.268-.3a.529.529,0,0,0,.291-.236.5.5,0,0,0,.018-.355c-.045-.139-.189-.165-.327-.137-.372.076-.744.153-1.114.24-.052.012-.128.073-.13.116C189.574,1689.372,189.581,1689.581,189.581,1689.835Z"
                                transform="translate(-163.178 -1653.959)" fill="#b4b4b4" />
                            <path id="Trazado_288" data-name="Trazado 288"
                                d="M778.241,1563.924c-.153.128-.265.194-.464.054a.973.973,0,0,0-1.06.049,1,1,0,0,0-.594.866.678.678,0,0,0,.722.749c.45.027,1.115-.423,1.094-.849-.247.051-.49.1-.733.151-.087.019-.2.06-.2-.075a.257.257,0,0,1,.137-.2c.307-.084.621-.144.934-.209.119-.025.179.024.177.151,0,.259,0,.517,0,.776,0,.121,0,.254-.153.256-.06,0-.122-.1-.2-.167a2.011,2.011,0,0,1-.922.461.953.953,0,0,1-1.187-.63,1.17,1.17,0,0,1,.269-1.123,1.733,1.733,0,0,1,1.58-.632A.728.728,0,0,1,778.241,1563.924Z"
                                transform="translate(-725.696 -1534.129)" fill="#b4b4b4" />
                            <path id="Trazado_289" data-name="Trazado 289"
                                d="M1137.024,1486.645v-.932c0-.163,0-.327,0-.49,0-.276.027-.3.327-.277,0,.056.014.116.014.175,0,.605,0,1.211,0,1.817a.3.3,0,0,1-.114.223.267.267,0,0,1-.335-.025c-.471-.419-.956-.824-1.436-1.233a.794.794,0,0,0-.1-.055c-.006.092-.015.162-.016.232,0,.367,0,.735,0,1.1a.612.612,0,0,1-.029.28c-.041.072-.146.107-.223.159-.03-.059-.085-.117-.086-.176q-.01-.9,0-1.8c0-.088.041-.241.087-.251a.519.519,0,0,1,.376.03c.32.24.613.514.918.773.185.157.373.311.56.466Z"
                                transform="translate(-1070.289 -1458.741)" fill="#b4b4b4" />
                            <path id="Trazado_290" data-name="Trazado 290"
                                d="M344.587,1656.131l.826-.171c.266-.056.53-.119.8-.164.053-.009.117.046.176.072-.04.073-.067.2-.121.211-.62.148-1.244.278-1.867.414-.109.024-.171-.008-.171-.13,0-.653,0-1.306,0-1.959a.168.168,0,0,1,.09-.129c.647-.143,1.3-.278,1.944-.414.07.267.049.3-.194.349-.432.09-.862.188-1.295.271-.139.027-.191.08-.192.226,0,.447-.01.442.429.343.388-.088.78-.164,1.175-.246.062.182.041.288-.157.326-.413.079-.822.177-1.235.256a.219.219,0,0,0-.21.263C344.595,1655.8,344.587,1655.944,344.587,1656.131Z"
                                transform="translate(-311.815 -1620.759)" fill="#b4b4b4" />
                            <path id="Trazado_291" data-name="Trazado 291"
                                d="M113.292,1703.884c.05.155.062.273-.161.313-.413.075-.822.177-1.234.262-.292.06-.294.056-.292.347,0,.1.011.2.019.327.484-.1.94-.2,1.4-.291.089-.018.209-.105.251.053s-.064.2-.2.229q-.649.127-1.292.282a.248.248,0,0,0-.16.159,4.757,4.757,0,0,0-.008.565c.283-.055.54-.1.795-.155s.5-.114.755-.166c.093-.019.211-.083.247.074.031.137-.051.192-.177.218-.63.131-1.259.266-1.916.406a1.67,1.67,0,0,1-.026-.2c0-.612,0-1.224,0-1.835,0-.115.02-.189.153-.216.6-.124,1.206-.257,1.809-.385C113.255,1703.866,113.269,1703.877,113.292,1703.884Z"
                                transform="translate(-88.391 -1668.722)" fill="#b4b4b4" />
                            <path id="Trazado_292" data-name="Trazado 292"
                                d="M867.962,1544c.075.207.015.3-.166.333-.419.083-.836.177-1.255.259-.159.031-.237.1-.222.274.013.146,0,.294,0,.476l1.088-.225c.173-.036.346-.07.518-.107.086-.019.18-.063.2.082.014.119-.022.182-.155.208-.5.1-.995.209-1.492.315-.013,0-.027,0-.04,0-.437.085-.437.085-.437-.374,0-.523,0-1.047,0-1.57,0-.141.039-.2.186-.225.6-.12,1.2-.257,1.8-.387.1.237.064.3-.161.347-.431.091-.86.195-1.293.272-.164.03-.213.1-.214.253,0,.421-.006.422.4.334Z"
                                transform="translate(-812.262 -1514.487)" fill="#b4b4b4" />
                            <path id="Trazado_293" data-name="Trazado 293"
                                d="M946.391,1525.26v.969c0,.333.006.667,0,1,0,.084-.039.227-.084.237a.5.5,0,0,1-.358-.025,8.043,8.043,0,0,1-.638-.536l-.92-.782c-.009.118-.02.188-.02.258,0,.422,0,.844,0,1.265,0,.267,0,.267-.3.3-.006-.058-.017-.116-.017-.174,0-.605,0-1.211,0-1.816,0-.082.039-.207.1-.234a.291.291,0,0,1,.354.026c.474.426.96.839,1.442,1.256.02.017.043.03.1.069a2.234,2.234,0,0,0,.026-.247c0-.421-.016-.843-.02-1.264C946.045,1525.287,946.048,1525.287,946.391,1525.26Z"
                                transform="translate(-887.118 -1497.414)" fill="#b4b4b4" />
                            <path id="Trazado_294" data-name="Trazado 294"
                                d="M417.9,1640.13l1.061-.224a3.718,3.718,0,0,1,.4-.085c.054-.005.164.055.162.078-.006.073-.041.2-.086.206-.686.16-1.376.3-2.144.469a1.314,1.314,0,0,1,.127-.383c.47-.579.952-1.148,1.43-1.721.029-.034.053-.072.121-.164-.179.032-.3.051-.421.076-.3.062-.6.132-.9.186-.058.01-.168-.025-.181-.064-.033-.1-.023-.2.122-.226.419-.085.836-.18,1.254-.271l.5-.11c.161-.035.222.016.185.18a.567.567,0,0,1-.126.226c-.486.575-.975,1.147-1.463,1.72A.518.518,0,0,0,417.9,1640.13Z"
                                transform="translate(-381.892 -1605.438)" fill="#b4b4b4" />
                            <path id="Trazado_295" data-name="Trazado 295"
                                d="M1215.65,1474.218c-.307.176-.4.164-.523-.125a.28.28,0,0,0-.392-.18c-.282.074-.569.127-.855.185a.294.294,0,0,0-.257.225,1.79,1.79,0,0,1-.12.258c-.086.185-.205.234-.45.163.1-.229.2-.456.3-.681.236-.512.482-1.019.707-1.535a.348.348,0,0,1,.374-.245c.09.012.186.133.242.227.305.513.6,1.032.9,1.551C1215.6,1474.106,1215.622,1474.157,1215.65,1474.218Zm-.8-.624-.5-.855-.479,1.049Z"
                                transform="translate(-1145.133 -1446.599)" fill="#b4b4b4" />
                            <path id="Trazado_296" data-name="Trazado 296"
                                d="M25.02,1724.779a1.6,1.6,0,0,1-1.178.87,3.206,3.206,0,0,1-.523.053.818.818,0,0,1-.9-.873,1.357,1.357,0,0,1,.756-1.3,1.871,1.871,0,0,1,1.22-.227,1.268,1.268,0,0,1,.465.228c.053.034.059.139.087.212-.112.025-.278.109-.327.065a.965.965,0,0,0-1.054-.109,1.086,1.086,0,0,0-.767.872.659.659,0,0,0,.651.81,1.349,1.349,0,0,0,1.187-.547c.062-.087.235-.095.357-.139Z"
                                transform="translate(-3.154 -1687.343)" fill="#b4b4b4" />
                            <path id="Trazado_297" data-name="Trazado 297"
                                d="M489.418,1628.873c.114-.255.219-.5.329-.735.244-.53.483-1.063.746-1.583.045-.09.2-.137.311-.174.041-.013.134.05.164.1.336.573.665,1.151,1,1.727a.644.644,0,0,1,.036.09c-.234.165-.359.16-.466-.074a.344.344,0,0,0-.491-.217,6.259,6.259,0,0,1-.754.165.392.392,0,0,0-.326.26c-.079.185-.1.446-.4.439Zm1.8-1.186-.506-.886-.5,1.1Z"
                                transform="translate(-451.073 -1594.4)" fill="#b4b4b4" />
                            <path id="Trazado_298" data-name="Trazado 298"
                                d="M612.95,1602.324c-.269.175-.367.154-.492-.091s-.158-.264-.429-.2-.516.118-.777.164a.382.382,0,0,0-.357.273c-.071.229-.171.449-.468.456a.455.455,0,0,1-.073-.017c.127-.286.251-.567.378-.847.218-.483.442-.963.653-1.449.069-.159.189-.185.337-.212.169-.031.169.1.217.187Q612.448,1601.453,612.95,1602.324Zm-1.3-1.506-.5,1.108,1.005-.219Z"
                                transform="translate(-567.066 -1569.477)" fill="#b4b4b4" />
                            <path id="Trazado_299" data-name="Trazado 299"
                                d="M265,1669.729c.341-.125.345-.127.489.139.241.446.476.9.73,1.374.248-.592.492-1.15.715-1.717a.428.428,0,0,1,.485-.318c-.084.21-.161.413-.246.613-.233.549-.476,1.094-.7,1.647a.317.317,0,0,1-.328.215c-.066,0-.15-.093-.188-.164C265.632,1670.929,265.32,1670.336,265,1669.729Z"
                                transform="translate(-235.824 -1635.477)" fill="#b4b4b4" />
                            <path id="Trazado_300" data-name="Trazado 300"
                                d="M1025.008,1508.972c.074.262.051.3-.171.353-.112.025-.225.051-.337.074-.4.079-.341.043-.347.425-.008.462-.01.923-.027,1.385a.273.273,0,0,1-.111.2c-.162.088-.218.047-.222-.142-.01-.489-.016-.977-.024-1.466,0-.228-.028-.245-.251-.2-.19.042-.381.078-.595.122l-.019-.3Z"
                                transform="translate(-962.755 -1481.792)" fill="#b4b4b4" />
                            <path id="Trazado_301" data-name="Trazado 301"
                                d="M1096.009,1504.12c0-.306,0-.612,0-.918,0-.178.083-.25.267-.238.152.01.113.131.113.217,0,.6,0,1.2.006,1.795a.209.209,0,0,1-.177.245c-.158.041-.214,0-.212-.163,0-.313,0-.625,0-.938Z"
                                transform="translate(-1032.87 -1476.028)" fill="#b4b4b4" />
                        </g>
                    </g>
                </svg>

            </div>

        </div>

    </section>


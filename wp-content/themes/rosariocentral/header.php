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
            <?php 
            $args_sponsors = array(  
                'post_type' => 'sponsors',
                'post_status' => 'publish',
                'posts_per_page' => 15, 
            );
        
            $sponsors = new WP_Query( $args_sponsors ); 
                
            while ( $sponsors->have_posts() ) : $sponsors->the_post(); 
            $atributos = get_fields( $post->ID);
            if($atributos["cabecera"]) {            
            ?>
                <div class="sponsor-container">
                    <img class="sponsor" src="<?php echo $atributos["imagen"]["url"]; ?>">
                </div>
            <?php 
            }
            endwhile;
            wp_reset_postdata(); 
            ?>
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
            <?php 
                $args_jugadores = array(  
                    'post_type' => 'jugadores',
                    'post_status' => 'publish',
                    'posts_per_page' => 60, 
                );
            
                $jugadores = new WP_Query( $args_jugadores ); 
                    
                while ( $jugadores->have_posts() ) : $jugadores->the_post();  
                    $atributos = get_fields( $post->ID);
            ?>
                <div class="jugador flex">
                    <div class="jugador-info  bg-dark-blue flex-column j-center">
                        <div class="posicion amarillo-fg">
                            <?php echo $atributos["posicion"]; ?>
                        </div>
                        <div class="nombre azul-claro-fg bold">
                            <?php echo $atributos["nombre"]; ?> <span class="apellido"><?php echo $atributos["apellido"]; ?></span>
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
                        <img src="<?php echo $atributos["imagen"]["url"]; ?>" class="h-100-p
                        ">
                    </div>
                </div>
            <?php   
                endwhile;
                wp_reset_postdata(); 
            ?>
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
        <?php 
            $args_sponsors = array(  
                'post_type' => 'sponsors',
                'post_status' => 'publish',
                'posts_per_page' => 15, 
            );
        
            $sponsors = new WP_Query( $args_sponsors ); 
                
            while ( $sponsors->have_posts() ) : $sponsors->the_post(); 
            $atributos = get_fields( $post->ID);
            if($atributos["pie"]) {            
            ?>
                <div class="sponsor-container">
                    <img class="sponsor" src="<?php echo $atributos["imagen"]["url"]; ?>">
                </div>
            <?php 
            }
            endwhile;
            wp_reset_postdata(); 
            ?>
        </div>

    </section>

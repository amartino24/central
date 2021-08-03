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
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/noticia.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/page-el-club.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/page-jugador.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/page-plantilla.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/page-predio.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/index.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/page-lista-expandible.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/inc/banner-newsletter.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/inc/newsletter.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/inc/noticias-home.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/post-carousel.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/inc/predios-carousel.css" />
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
    <div class="d-flex a-center floating-container">
    <?php $wp_icon = ot_get_option( 'whastsapp_call_icon' );
    $cta_image = ot_get_option( 'cta_image' );
       if (isset($cta_image) && $cta_image != '')
       {; ?>
      <a class='cta_image'  href='<?php echo ot_get_option( 'cta_link' ) ?>' target="_blank">
  
      <img src='<?php echo $cta_image ?>'>
  
  </a> 
  <?php }
    if (isset($wp_icon) && $wp_icon != '')
     {; ?>
    <a class='whatsapp'  href='https://wa.me/<?php echo ot_get_option( 'nro_whatsapp' ) ?>' title="Contactate con nosotros" target="_blank">

    <img src='<?php echo $wp_icon ?>'>

</a> 
<?php } ?>
    </div>
   
    <header>
        <div class=" banner-container  bg-white azul-fg">
            <div class="container flex a-center j-between">
                <div class="titulo-principal ">
                    <span class="amarillo-fg">SITIO OFICIAL</span> CLUB ATLÉTICO ROSARIO CENTRAL
                </div>

                <a href="<?php echo get_home_url(); ?>" id='main-escudo' class="main-escudo">
                    <img src="<?php echo ot_get_option( 'logo' ); ?>">
                </a>

                <div class="enlaces-externos flex a-center">
                    <div class="enlace over-yellow flex a-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26.441" height="30.084"
                            viewBox="0 0 26.441 30.084">
                            <path id="Trazado_302" data-name="Trazado 302"
                                d="M136.407,130.8a.881.881,0,1,0,.881.881A.881.881,0,0,0,136.407,130.8Zm21.359-6.17a2.643,2.643,0,0,0-1.969-4.407h-5.132a17.09,17.09,0,0,0,.725-4.466v-.881a3.53,3.53,0,0,0-3.525-3.525h-.881a.881.881,0,0,0-.855.667l-.48,1.921c-.673,2.69-2.809,5.658-5.019,6.2a2.648,2.648,0,0,0-2.46-1.676h-5.288a.882.882,0,0,0-.881.881V135.2a.882.882,0,0,0,.881.881h5.288a2.647,2.647,0,0,0,2.387-1.507l3.028,1.009a9.673,9.673,0,0,0,3.066.5h7.384a2.645,2.645,0,0,0,2.458-3.618,2.643,2.643,0,0,0,1.273-4.314,2.639,2.639,0,0,0,0-3.525Zm-18.715,8.814a.882.882,0,0,1-.881.881h-4.407v-14.1h4.407a.882.882,0,0,1,.881.881Zm14.983-7.932H155.8a.881.881,0,0,1,0,1.763h-1.763a.881.881,0,0,0,0,1.763H155.8a.881.881,0,0,1,0,1.763h-1.763a.881.881,0,0,0,0,1.763.881.881,0,1,1,0,1.763h-7.384a7.915,7.915,0,0,1-2.509-.407l-3.328-1.109V121.9a7.1,7.1,0,0,0,3.957-2.571,12.86,12.86,0,0,0,2.587-4.964l.313-1.253h.193a1.765,1.765,0,0,1,1.763,1.763v.881a13.947,13.947,0,0,1-.844,4.466h-1.8a.881.881,0,1,0,0,1.763H155.8a.881.881,0,0,1,0,1.763h-1.763a.881.881,0,0,0,0,1.763Zm-.3-14.375,1.246-1.246a.881.881,0,0,0-1.246-1.246l-1.246,1.246a.881.881,0,0,0,1.246,1.246Zm-4.986-1.549a.881.881,0,0,0,.881-.881v-1.821a.881.881,0,1,0-1.763,0V108.7A.881.881,0,0,0,148.746,109.584Zm-4.986,1.549a.881.881,0,0,0,1.246-1.246l-1.246-1.246a.881.881,0,1,0-1.246,1.246Z"
                                transform="translate(-132 -106)" fill="#173b6a" />
                        </svg>
                        <a href='<?php echo get_home_url(); ?>/rosario-me-gusta' class="text">ROSARIO <b>ME GUSTA</b></a>
                    </div>
                    <div class="enlace  over-yellow  flex a-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20.218" height="26.947"
                            viewBox="0 0 20.218 26.947">
                            <path id="ShopOnlineIcon"
                                d="M38.953,24.053H36.62V22.272a4.325,4.325,0,0,0-4.229-4.4H28.828a4.323,4.323,0,0,0-4.229,4.4v1.781H22.265A1.768,1.768,0,0,0,20.5,25.818v12.2a6.811,6.811,0,0,0,6.8,6.8h6.612a6.811,6.811,0,0,0,6.8-6.8v-12.2A1.768,1.768,0,0,0,38.953,24.053Zm-11.9-1.781a1.865,1.865,0,0,1,1.77-1.943h3.56a1.863,1.863,0,0,1,1.77,1.943v1.781h-7.1V22.272Zm11.2,15.743a4.348,4.348,0,0,1-4.344,4.344H27.3a4.348,4.348,0,0,1-4.344-4.344v-11.5H24.6v1.082a1.229,1.229,0,1,0,2.459,0V26.512h7.1v1.175a1.229,1.229,0,0,0,2.459,0V26.512h1.639Z"
                                transform="translate(-20.5 -17.87)" fill="#173b6a" />
                        </svg>

                        <a class="text" href="https://rosariocentraltienda.com/"   target="_blank"><b>TIENDA</b><span class="secondary">ONLINE</span></a>
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

                        <a class="text" href="https://rosariocentral.miclub.info/login.php"
                            target="_blank">SEDE<b class="secondary">VIRTUAL</b></a>
                    </div>
                </div>
            </div>

        </div>
        <div class="navbar-container bg-blue" id="main-navbar">
            <div class="data container flex a-center j-between">
                <a href="javascript:void(0);" class="mobile-navigation" onclick="myFunction(this)">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </a>
                <nav class="main-navigation" id="navigation">
                <?php
                wp_nav_menu( array( 
                    'theme_location' => 'header',
                    ) 
                ); 
                ?>
                </nav>
                <a href="<?php echo get_home_url(); ?>">
                    <img class="xs-escudo" src="<?php echo ot_get_option( 'logo' ); ?>">
                </a>
                <a class="asociate-texto radius-button gt-xs pointer bold" href="https://rosariocentral.miclub.info/nuevosocio/index.php?tipodesocio=n" target="_blank">QUIERO ASOCIARME
                    <svg xmlns="http://www.w3.org/2000/svg" width="20.559" height="13.711" viewBox="0 0 20.559 13.711">
                        <path id="Icon_ionic-ios-arrow-round-forward" data-name="Icon ionic-ios-arrow-round-forward"
                            d="M20.986,11.514a.933.933,0,0,0-.007,1.314l4.342,4.349H8.8a.928.928,0,0,0,0,1.857H25.313l-4.342,4.349a.94.94,0,0,0,.007,1.314.925.925,0,0,0,1.307-.007l5.884-5.927h0a1.042,1.042,0,0,0,.193-.293.886.886,0,0,0,.071-.357.931.931,0,0,0-.264-.65l-5.884-5.927A.91.91,0,0,0,20.986,11.514Z"
                            transform="translate(-7.875 -11.252)" fill="#173B6A" />
                    </svg>
                </a>
            </div>


        </div>

    </header>
    <div class="header-separator"></div>

    <script>
      window.addEventListener('scroll', function (e) {
            last_known_scroll_position = window.scrollY;
            var x = document.getElementById("main-escudo");
            var navbar = document.getElementById("main-navbar");
            var headersep = document.getElementById("header-separator");
            
            if (last_known_scroll_position >= 200) {
 navbar.classList.add('fixed');
                x.classList.add('fixed');
                headersep.classList.add('fixed');
            } else {
                 navbar.classList.remove('fixed');
                x.classList.remove('fixed');
                headersep.classList.add('fixed');
            }
        });
    </script>
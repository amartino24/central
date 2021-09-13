<?php get_header(); ?>
<div class="home">


<section class="main-banner">
        <div class="main-banner-post h-100-p">
            <div class="owl-carousel main-banner-carousel owl-theme h-100-p">
                <?php 
                    $args_noticias = array(  
                        'post_type' => 'noticia',
                        'post_status' => 'publish',
                        'orderby' => array( 
                            'date'      => 'DESC', 
                            'menu_order' => 'ASC' 
                         ) ,
                        'posts_per_page' => 150, 
                    );
                    $i = 0;
                    $noticias = new WP_Query( $args_noticias ); 
                    if ( $noticias->have_posts() ) : while ( $noticias->have_posts() ) : $noticias->the_post();
                    $atributos = get_fields( $post->ID);
            
                    if ($atributos["slider_del_home"] && $i < 3) {
                        $i++;
                ?>
                <div class="owl-slide">
                    <div class="main-banner-gradient">

                    </div>
                    <img src="<?php echo $atributos["image"]["sizes"]["noticia-grande"]; ?>">
                    <div class="container flex j-between a-center h-100-p">
                        <div class="main-banner-post-info flex-column j-center">
                            <a class="pointer amarillo-fg  owl-slide-animated owl-slide-category bold post-category uppercase"><?php echo get_the_category($post->ID)[0]->name; ?></a>
                            <a class="pointer post-title  owl-slide-animated owl-slide-title"><?php echo get_the_title($post->ID); ?></a>
                            <?php $subtitle = get_the_excerpt($post->ID); 
                        if (isset($subtitle) && $subtitle != '') {?>
                                           <p class="pointer post-subtitle owl-slide-animated owl-slide-subtitle"><?php echo $subtitle; ?></p>
                        <?php } ?>

                            <a href="<?php echo get_permalink($post->ID); ?>" class="radius-button owl-slide-animated owl-slide-cta   ver-mas-button azul-claro-fg bg-blue">VER
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
                <?php } ?>
                <?php
                    endwhile; 
                    endif;
                ?>
            </div>
          
            <div class="publicidad widgets  flex-column large">
                <a href="<?php echo ot_get_option( 'banner_principal_enlace' ) ?>">

                    <img class="banner" src="<?php echo ot_get_option( 'banner_principal' ); ?>">
                </a>
            </div> 
        </div>


    </section>
    <?php $option = ot_get_option( 'banner_principal' ); if (isset($option) && $option != '') { ?>
    <div class="publicidad small">
                    <img class="banner" src="<?php echo ot_get_option( 'banner_principal' ); ?>">
    </div> 
    <?php } ?>
    <section class="sponsors-section main bg-grey">
        <div class="container flex j-center a-center">
            <?php 
            $args_sponsors = array(  
                'post_type' => 'sponsors',
                'post_status' => 'publish',
                'orderby' => 'menu_order',
                'order' => 'ASC',
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
                <a class="icon flex a-center" href="<?php echo ot_get_option( 'red_facebook' ); ?>" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/imagenes/social/facebook.png">
                    <span><?php echo ot_get_option( 'cantidad_facebook' ); ?></span>
                </a>
                <a class="icon flex a-center" href="<?php echo ot_get_option( 'red_twitter' ); ?>" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/imagenes/social/twitter.png">

                    <span><?php echo ot_get_option( 'cantidad_twitter' ); ?></span>
                </a>
                <a class="icon flex a-center" href="<?php echo ot_get_option( 'red_instagram' ); ?>" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/imagenes/social/instagram.png">
                    <span><?php echo ot_get_option( 'cantidad_instagram' ); ?></span>
                </a>
                <a class="icon flex a-center" href="<?php echo ot_get_option( 'red_youtube' ); ?>" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/imagenes/social/youtube.png">
                    <span><?php echo ot_get_option( 'cantidad_youtube' ); ?></span>
                </a>
                <a class="icon flex a-center" href="<?php echo ot_get_option( 'red_tiktok' ); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/imagenes/social/tiktok.png">
                    <span><?php echo ot_get_option( 'cantidad_tiktok' ); ?></span>
                </a>
                <a class="icon flex a-center" href="<?php echo ot_get_option( 'red_socios' ); ?>">
                    <img class='socios' src="<?php echo get_template_directory_uri(); ?>/imagenes/social/socios.png">
                    <span><?php echo ot_get_option( 'cantidad_socios' ); ?></span>
                </a>
             
            </div>
            <div class="seguinos">
                <span class="azul-claro-fg">Seguinos en redes</span> y enterate el minuto a minuto de lo que está
                pasando en el club.
            </div>
        </div>
    </section>
    <section class="publicidad-larga  flex-column bg-grey">
        <div class="container">
            <a href="<?php echo ot_get_option( 'banner_1_enlace' ) ?>">

                <img class="banner" src="<?php echo ot_get_option( 'banner_1' ); ?>">
            </a>
        </div>

    </section>
    <?php include 'inc/noticias-home.php'; ?>
    <div class="publicidad-larga  flex-column bg-dark-blue">
        <div class="container">
        <a href="<?php echo ot_get_option( 'banner_2_enlace' ) ?>">

            <img class="banner" src="<?php echo ot_get_option( 'banner_2' ); ?>">
        </a></div>
    </div>
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
                <a class="funcion br-20 flex-column j-between"  href="https://rosariocentral.miclub.info/login.php">
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

                </a>
                <a class="funcion br-20 flex-column j-between"  href="https://rosariocentral.miclub.info/login.php">
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
                </a>
                <a class="funcion br-20 flex-column j-between"  href="https://rosariocentral.miclub.info/login.php">
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
                </a>
                <a class="funcion br-20 flex-column j-between"  href="https://rosariocentral.miclub.info/login.php">
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
                </a>
            </div>
        </div>
    </section>
    <section class="socios-newsletter flex a-center" id="newsletterSection">

        <div class="hacete-socio bg-blue">
            <div class="half-container flex j-between a-center">
                <div class="flex-column">
                    <h2><b>Hacete</b><br>socio <span class="azul-claro-fg">online</span></h2>
                    <a class="asociarse azul-claro-fg pointer flex a-center" href="https://rosariocentral.miclub.info/nuevosocio/index.php?tipodesocio=n" target="_blank">QUIERO ASOCIARME <svg
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
        <?php if ( is_active_sidebar( 'newsletter-widget-area' ) ) : ?>
            <div class="newsletter azul-fg">
                <div class="half-container flex j-center a-center">
                    <div class="flex-column texto">
                        <h3>Newsletter</h3>
                        <p>Déjanos tu mail y suscribirte a nuestro newsletter para recibir todas las novedades del club.</p>
                    </div>
                    <?php include 'inc/newsletter.php' ?>
            </div>
        <?php endif; ?>
        

    </section>
    
    <?php include "inc/videos.php"; ?>
    <div class="publicidad-larga  flex-column bg-dark-blue">
        <div class="container">
        <a href="<?php echo ot_get_option( 'banner_3_enlace' ) ?>">

            <img class="banner" src="<?php echo ot_get_option( 'banner_3' ); ?>">
        </a>
        </div>
    </div>
    <div class="plantel bg-dark-blue ">
        <div class="container flex a-center">
            <div class="plantel-carousel owl-carousel" id="plantel-carousel">
            <?php 
                $args_jugadores = array(  
                    'post_type' => 'jugadores',
                    'post_status' => 'publish',
                    'posts_per_page' => 60, 
                );
                $posiciones = [
                    "Arquero" => "Arqueros",
                    "Defensor" => "Defensores",
                    "Mediocampista" => "Mediocampistas",
                    "Delantero" => "Delanteros",
                    "Cuerpo Técnico" => "Cuerpo Técnico",
                    "Cuerpo Médico" => "Cuerpo Médico",
                    "Auxiliares" => "Auxiliares",
                    "Seguridad y Utileros" => "Seguridad y Utileros",
                ];
                $jugadores = new WP_Query( $args_jugadores ); 
                foreach ($posiciones as $posicion => $posicion_label) { 
                while ( $jugadores->have_posts() ) : $jugadores->the_post();  
                    $atributos = get_fields( $post->ID);
                    if ($posicion ==  $atributos["posicion"]) { ?>
                <div class="jugador flex">
                    <div class="jugador-info  bg-dark-blue flex-column">
                        <div class="posicion amarillo-fg">
                            <?php echo $atributos["posicion"]; ?>
                        </div>
                        <div class="nombre azul-claro-fg bold">
                            <?php echo $atributos["nombre"]; ?> <span class="apellido"><?php echo $atributos["apellido"]; ?></span>
                        </div>
                        <div class="botones gt-xs ">
                            <a class="radius-button ver-ficha azul-claro-fg"  href="<?php echo get_permalink($post->ID); ?>">Ver ficha
                                <svg xmlns="http://www.w3.org/2000/svg" width="21.559" height="14.792"
                                    viewBox="0 0 21.559 14.792">
                                    <path id="Icon_ionic-ios-arrow-round-forward" data-name="Icon ionic-ios-arrow-round-forward"
                                        d="M20.986,11.514a.933.933,0,0,0-.007,1.314l4.342,4.349H8.8a.928.928,0,0,0,0,1.857H25.313l-4.342,4.349a.94.94,0,0,0,.007,1.314.925.925,0,0,0,1.307-.007l5.884-5.927h0a1.042,1.042,0,0,0,.193-.293.886.886,0,0,0,.071-.357.931.931,0,0,0-.264-.65l-5.884-5.927A.91.91,0,0,0,20.986,11.514Z"
                                        transform="translate(-7.375 -10.752)" fill="#2680eb" stroke="#2680eb"
                                        stroke-width="1" />
                                </svg>
                            </a>
        
                            <a class="radius-button ver-plantel amarillo-fg" href='<?php echo get_home_url(); ?>/plantel-masculino'>Ver plantel
                                <svg xmlns="http://www.w3.org/2000/svg" width="20.559" height="13.711"
                                    viewBox="0 0 20.559 13.711">
                                    <path id="Icon_ionic-ios-arrow-round-forward" data-name="Icon ionic-ios-arrow-round-forward"
                                        d="M20.986,11.514a.933.933,0,0,0-.007,1.314l4.342,4.349H8.8a.928.928,0,0,0,0,1.857H25.313l-4.342,4.349a.94.94,0,0,0,.007,1.314.925.925,0,0,0,1.307-.007l5.884-5.927h0a1.042,1.042,0,0,0,.193-.293.886.886,0,0,0,.071-.357.931.931,0,0,0-.264-.65l-5.884-5.927A.91.91,0,0,0,20.986,11.514Z"
                                        transform="translate(-7.875 -11.252)" fill="#f9df34" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="imagen-container h-100-p">
                        <img src="<?php echo $atributos["imagen"]["url"]; ?>" class="h-100-p
                        ">
                    </div>
                </div>
            <?php   
                    }
                endwhile;
                wp_reset_postdata(); }
            ?>
            </div>
         
            <div class="flechas flex j-between">
                <svg xmlns="http://www.w3.org/2000/svg" class="pointer over-scale" width="20" height="20"  id="prevJugadorBtn"
                    viewBox="0 0 6.25 10.93">
                    <path id="Icon_ionic-ios-arrow-forward" data-name="Icon ionic-ios-arrow-forward"
                        d="M4.366,5.463.229,1.33a.778.778,0,0,1,0-1.1.788.788,0,0,1,1.106,0L6.022,4.91a.78.78,0,0,1,.023,1.077L1.339,10.7A.781.781,0,1,1,.233,9.6Z"
                        transform="translate(6.25 10.93) rotate(180)" fill="#f9df34" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" class="pointer over-scale" width="20" height="20"  id="nextJugadorBtn"
                    viewBox="0 0 6.25 10.932">
                    <path id="Icon_ionic-ios-arrow-back" data-name="Icon ionic-ios-arrow-back"
                        d="M1.884,5.464,6.02,1.331A.781.781,0,0,0,4.914.228L.228,4.911A.78.78,0,0,0,.2,5.988L4.91,10.7A.781.781,0,0,0,6.017,9.6Z"
                        transform="translate(6.25 10.932) rotate(180)" fill="#f9df34" />
                </svg>

            </div>
            <div class="botones xs ">
                <a class="radius-button ver-ficha azul-claro-fg"   href="<?php echo get_permalink($post->ID); ?>">Ver ficha
                    <svg xmlns="http://www.w3.org/2000/svg" width="21.559" height="14.792" viewBox="0 0 21.559 14.792">
                        <path id="Icon_ionic-ios-arrow-round-forward" data-name="Icon ionic-ios-arrow-round-forward"
                            d="M20.986,11.514a.933.933,0,0,0-.007,1.314l4.342,4.349H8.8a.928.928,0,0,0,0,1.857H25.313l-4.342,4.349a.94.94,0,0,0,.007,1.314.925.925,0,0,0,1.307-.007l5.884-5.927h0a1.042,1.042,0,0,0,.193-.293.886.886,0,0,0,.071-.357.931.931,0,0,0-.264-.65l-5.884-5.927A.91.91,0,0,0,20.986,11.514Z"
                            transform="translate(-7.375 -10.752)" fill="#2680eb" stroke="#2680eb" stroke-width="1" />
                    </svg>
                </a>

                <a  href='<?php echo get_home_url(); ?>/plantel-masculino' class="radius-button ver-plantel amarillo-fg">Ver plantel
                    <svg xmlns="http://www.w3.org/2000/svg" width="20.559" height="13.711" viewBox="0 0 20.559 13.711">
                        <path id="Icon_ionic-ios-arrow-round-forward" data-name="Icon ionic-ios-arrow-round-forward"
                            d="M20.986,11.514a.933.933,0,0,0-.007,1.314l4.342,4.349H8.8a.928.928,0,0,0,0,1.857H25.313l-4.342,4.349a.94.94,0,0,0,.007,1.314.925.925,0,0,0,1.307-.007l5.884-5.927h0a1.042,1.042,0,0,0,.193-.293.886.886,0,0,0,.071-.357.931.931,0,0,0-.264-.65l-5.884-5.927A.91.91,0,0,0,20.986,11.514Z"
                            transform="translate(-7.875 -11.252)" fill="#f9df34" />
                    </svg>
                </a>
            </div>
        </div>
    </div>

    
    <?php include 'inc/productos.php'; ?>
</div>


<?php get_footer(); ?>

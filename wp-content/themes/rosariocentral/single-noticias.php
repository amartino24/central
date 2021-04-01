<?php get_header(); ?>

<link rel="stylesheet" href="noticia.css" />
<section class="noticias single-noticia bg-grey">

            <div class="search-bar  ">
                <div class="container flex a-center">
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
                <?php $args = array(
                            'taxonomy' => 'category',
                                 'post_type' => 'noticias',
                            'orderby' => 'name',
                            'order'   => 'ASC',
                            'hide_empty'      => false,
                        );
                $categorias = get_categories($args);
                foreach($categorias as $categoria) { ?>
                    <li class="uppercase">
                        <a href="<?php echo get_category_link( $categoria->term_id ) ?>">
                            <?php echo $categoria->name; ?>
                        </a>
                    </li>
                <?php } ?>
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
            </div>
<?php $atributos = get_fields( $post->ID); ?>
    <div class="gradient-container">
        <div class=" posts-fixture-container ">
            <div class="container flex j-between">
                <div class="post-principal azul-fg  br-20">

                    <div class="flex header-info">
                        <a class="pointer amarillo-fg bold category uppercase"><?php echo get_the_category($post->ID)[0]->name; ?></a>
                        <span class="gris-fg fecha"><?php the_time( 'j \d\e F \d\e Y - G\h' ); ?></span>
                        <div class="social flex a-center j-between grow">
                            <div class="instagram" title="Seguinos en Instagram"></div>
                            <div class="facebook" title="Seguinos en Facebook"></div>
                            <div class="twitter" title="Seguinos en Twiiter"></div>
                        </div>
                    </div>
                    <div class="content flex-column">
                        <a class="pointer post-title bold"><?php echo get_the_title($post->ID); ?></a>
                        <p class="pointer post-subtitle"><?php echo get_the_excerpt($post->ID); ?></p>
                        <img src="<?php echo $atributos["image"]["url"] ?>" class="br-20">
                        <div class="text azul-secundario-fg"><?php echo get_the_content($post->ID); ?></div>
                    </div>
                </div>
                <div class="content flex-column">
                    <a class="pointer post-title bold"><?php echo get_the_title($post->ID); ?></a>
                    <p class="pointer post-subtitle"><?php echo get_the_excerpt($post->ID); ?></p>
                    <img src="<?php echo $atributos["image"]["sizes"]["noticia-dentro"]; ?>" class="br-20">
                    <p class="text azul-secundario-fg"><?php echo get_the_content($post->ID); ?></p>
                </div>
            </div>
            <?php include "inc/fixture.php"; ?>
        </div>
        <div class="otros-posts">
            <div class="container wrap flex j-between">

                <div class="otros-posts-titulo w-100-p flex a-center">
                    <h2 class="ultimas-noticias azul-fg">Últimas <b>Noticias</b></h2>
                    <div class="arrows">
                        <svg xmlns="http://www.w3.org/2000/svg" id="prevPostBtn" class="pointer" width="8.399" height="14.69"
                             viewBox="0 0 8.399 14.69">
                            <path id="Icon_ionic-ios-arrow-forward" data-name="Icon ionic-ios-arrow-forward"
                                  d="M5.867,7.342.308,1.788a1.045,1.045,0,0,1,0-1.483A1.059,1.059,0,0,1,1.8.305L8.094,6.6a1.048,1.048,0,0,1,.031,1.448L1.8,14.384A1.05,1.05,0,0,1,.313,12.9Z"
                                  transform="translate(8.399 14.69) rotate(180)" fill="#2680eb" />
                        </svg>

                        <svg xmlns="http://www.w3.org/2000/svg"  id="nextPostBtn" class="pointer" width="8.399" height="14.692"
                             viewBox="0 0 8.399 14.692">
                            <path id="Icon_ionic-ios-arrow-back" data-name="Icon ionic-ios-arrow-back"
                                  d="M2.532,7.344,8.091,1.789A1.05,1.05,0,0,0,6.6.307L.306,6.6A1.048,1.048,0,0,0,.275,8.048L6.6,14.386A1.05,1.05,0,0,0,8.087,12.9Z"
                                  transform="translate(8.399 14.692) rotate(180)" fill="#2680eb" />
                        </svg>

                    </div>
                </div>
                <div class="posts-carousel owl-carousel" id="otros-posts-carousel">
                    <?php
                    $args_noticias = array(
                        'post_type' => 'noticias',
                        'post_status' => 'publish',
                        'posts_per_page' => 150,
                        'post__not_in' => array($post->ID),
                    );

                    $noticias = new WP_Query( $args_noticias );
                    if ( $noticias->have_posts() ) : while ( $noticias->have_posts() ) : $noticias->the_post();
                        $atributos = get_fields( $post->ID);
                        ?>

                    <div class="post over-scale br-20">
                        <div class="image-container">
                            <img class="post-image" src="<?php echo $atributos["image"]["sizes"]["noticia-chica"]; ?>">
                            <div class="gradient"></div>
                        </div>
                        <div class="info flex-column j-center">
                            <a class="pointer amarillo-fg bold post-category uppercase"><?php echo get_the_category($post->ID)[0]->name; ?></a>
                            <a class="pointer post-title  bold azul-fg "><?php echo get_the_title($post->ID); ?></a>
                            <div class="separator"></div>
                            <p class="pointer post-subtitle"><?php echo get_the_excerpt($post->ID); ?></p>
                            <a class="ver-mas azul-claro-fg" href="<?php echo get_permalink($post->ID); ?>">VER MÁS <svg xmlns="http://www.w3.org/2000/svg" width="20.559"
                                                                            height="13.711" viewBox="0 0 20.559 13.711">
                                    <path id="Icon_ionic-ios-arrow-round-forward"
                                            data-name="Icon ionic-ios-arrow-round-forward"
                                            d="M20.986,11.514a.933.933,0,0,0-.007,1.314l4.342,4.349H8.8a.928.928,0,0,0,0,1.857H25.313l-4.342,4.349a.94.94,0,0,0,.007,1.314.925.925,0,0,0,1.307-.007l5.884-5.927h0a1.042,1.042,0,0,0,.193-.293.886.886,0,0,0,.071-.357.931.931,0,0,0-.264-.65l-5.884-5.927A.91.91,0,0,0,20.986,11.514Z"
                                            transform="translate(-7.875 -11.252)" fill="#2680eb" />
                                </svg>
                            </a>
                        </div>
                    <?php
                    endwhile;
                    endif;
                ?>
            </div>

            <button class="radius-button xs  todas-noticias-button azul-claro-fg bg-blue">Ver todos las noticias
                <svg xmlns="http://www.w3.org/2000/svg" width="20.559" height="13.711" viewBox="0 0 20.559 13.711">
                    <path id="Icon_ionic-ios-arrow-round-forward" data-name="Icon ionic-ios-arrow-round-forward"
                          d="M20.986,11.514a.933.933,0,0,0-.007,1.314l4.342,4.349H8.8a.928.928,0,0,0,0,1.857H25.313l-4.342,4.349a.94.94,0,0,0,.007,1.314.925.925,0,0,0,1.307-.007l5.884-5.927h0a1.042,1.042,0,0,0,.193-.293.886.886,0,0,0,.071-.357.931.931,0,0,0-.264-.65l-5.884-5.927A.91.91,0,0,0,20.986,11.514Z"
                          transform="translate(-7.875 -11.252)" fill="#2680eb" />
                </svg>
            </button>

        </div>
    </div>
    </div>
</section>
<?php include "inc/videos.php"; ?>
<?php get_footer(); ?>

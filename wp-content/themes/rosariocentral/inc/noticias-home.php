<section class="noticias noticias-principal bg-grey">
        <div class="container">
            <div class="titulo azul-fg">La actualidad <b>del club</b></div>
            
            <div class="search-bar flex a-center ">
               <!--  <div class="search-input flex a-center br-20">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18.872" height="18.877" viewBox="0 0 18.872 18.877">
                        <path id="Icon_ionic-ios-search" data-name="Icon ionic-ios-search"
                            d="M23.151,22l-5.249-5.3a7.48,7.48,0,1,0-1.135,1.15l5.214,5.264a.808.808,0,0,0,1.14.029A.813.813,0,0,0,23.151,22ZM12.024,17.92A5.906,5.906,0,1,1,16.2,16.19,5.87,5.87,0,0,1,12.024,17.92Z"
                            transform="translate(-4.5 -4.493)" fill="#b4b4b4" />
                    </svg>
                    <input placeholder="Buscar novedades">
                </div> -->
                <div class="categorias flex a-center br-20">
                    <ul>
                <?php $args = array(
                            'taxonomy' => 'category',
                            'post_type' => 'noticia',
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
                        <a href='<?php echo get_home_url(); ?>/noticias'>
                        VER TODAS LAS NOTICIAS <svg xmlns="http://www.w3.org/2000/svg" width="20.559" height="13.711" viewBox="0 0 20.559 13.711">
                            <path id="Icon_ionic-ios-arrow-round-forward" data-name="Icon ionic-ios-arrow-round-forward" d="M20.986,11.514a.933.933,0,0,0-.007,1.314l4.342,4.349H8.8a.928.928,0,0,0,0,1.857H25.313l-4.342,4.349a.94.94,0,0,0,.007,1.314.925.925,0,0,0,1.307-.007l5.884-5.927h0a1.042,1.042,0,0,0,.193-.293.886.886,0,0,0,.071-.357.931.931,0,0,0-.264-.65l-5.884-5.927A.91.91,0,0,0,20.986,11.514Z" transform="translate(-7.875 -11.252)" fill="#173b6a" />
                        </svg>
                        </a>

                        </li>
                    </ul>
                </div>
                <!-- <a href="javascript:void(0);" class="mobile-navigation" onclick="myFunction(this)">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </a>-->
            </div>
            <div class="flex posts-fixture-container j-between">
                <div class="posts flex">
                    <?php 
                    $primera = false;
                    $args_noticias = array(  
                        'post_type' => 'noticia',
                        'post_status' => 'publish',
                        'posts_per_page' => 4, 
                    );
                    if (!empty(get_queried_object()->term_id)) {
                        $args_noticias['category__in'] = get_queried_object()->term_id;
                    }
                
                    $noticias = new WP_Query( $args_noticias ); 
                    if ( $noticias->have_posts() ) : while ( $noticias->have_posts() ) : $noticias->the_post();
                    $atributos = get_fields( $post->ID);
                    if (!$primera) {
                        $primera = true;
                    ?>
                    <div class="post-principal  br-20">
                        <div class="gradient  br-20">

                        </div>
                        <img src="<?php echo $atributos["image"]["sizes"]["noticia-dentro"]; ?>" class="br-20">
                        <div class="info flex-column j-center">
                            <a class="pointer amarillo-fg bold post-category uppercase"><?php echo get_the_category($post->ID)[0]->name; ?></a>
                            <a class="pointer post-title bold"><?php echo get_the_title($post->ID); ?></a>
                            <?php $subtitle = get_the_excerpt($post->ID); 
                        if (isset($subtitle) && $subtitle != '') {?>
                        <p class="pointer post-subtitle"><?php echo  $subtitle?></p>
                        <?php } ?>
                            <a href="<?php echo get_permalink($post->ID); ?>" class="radius-button  ver-mas-button azul-claro-fg bg-blue">VER
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
                    <?php } ?>
                    <?php
                    endwhile; 
                    endif;
                    ?>
    <!--                   <div class="fixture-container">

//
</div> -->
<?php
                $primera = true;
                     if ( $noticias->have_posts() ) : while ( $noticias->have_posts() ) : $noticias->the_post();
                     $atributos = get_fields( $post->ID);
                     if ($primera) {
                         $primera = false;
                     } else {
                     ?>
                    <div class="post over-scale br-20">
                        <div class="image-container">
                            <img class="post-image" src="<?php echo $atributos["image"]["sizes"]["noticia-chica"]; ?>">
                            <div class="gradient">

                            </div>
                        </div>

                        <div class="info flex-column">
                            <a class="pointer amarillo-fg bold post-category uppercase"><?php echo get_the_category($post->ID)[0]->name; ?></a>
                            <a class="pointer post-title  bold azul-fg "><?php echo get_the_title($post->ID); ?></a>
                            <div class="separator"></div>
                            <p class="pointer post-subtitle gris-fg"><?php echo get_the_excerpt($post->ID); ?></p>
                            <a href="<?php echo get_permalink($post->ID); ?>" class="ver-mas azul-claro-fg">VER MÁS <svg
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
                    <?php } 
                    endwhile; 
                    endif;?>
                </div>
                <a class="radius-button xs  todas-noticias-button azul-claro-fg bg-blue"  href="<?php echo get_home_url(); ?>/noticias">Ver todos las noticias
                    <svg xmlns="http://www.w3.org/2000/svg" width="20.559" height="13.711" viewBox="0 0 20.559 13.711">
                        <path id="Icon_ionic-ios-arrow-round-forward" data-name="Icon ionic-ios-arrow-round-forward"
                            d="M20.986,11.514a.933.933,0,0,0-.007,1.314l4.342,4.349H8.8a.928.928,0,0,0,0,1.857H25.313l-4.342,4.349a.94.94,0,0,0,.007,1.314.925.925,0,0,0,1.307-.007l5.884-5.927h0a1.042,1.042,0,0,0,.193-.293.886.886,0,0,0,.071-.357.931.931,0,0,0-.264-.65l-5.884-5.927A.91.91,0,0,0,20.986,11.514Z"
                            transform="translate(-7.875 -11.252)" fill="#2680eb" />
                    </svg>
                </a>

              
            </div>

        </div>
    </section>
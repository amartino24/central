<div class="otros-posts bg-white">
    <div class="container wrap flex j-between">

        <div class="otros-posts-titulo w-100-p  a-center">
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
                'post_type' => 'noticia',
                'post_status' => 'publish',
                'orderby' => array( 
                    'date'      => 'DESC', 
                    'menu_order' => 'ASC' 
                 ) ,
                'posts_per_page' => 150,
            );
            if (isset($_REQUEST['noticias']) && !empty($_REQUEST['noticias'])) {
                $args_noticias['post_title_like'] = $_REQUEST['noticias'];
            } else {
                if (!empty(get_queried_object()->term_id)) {
                    $args_noticias['category__in'] = get_queried_object()->term_id;
                }
            }

            $primera = true;
            $noticias = new WP_Query( $args_noticias );
            if ( $noticias->have_posts() ) : while ( $noticias->have_posts() ) : $noticias->the_post();
                $atributos = get_fields( $post->ID);

                if ($primera)
                {
                    $primera = false;
                }
                else
                {
                    ?>

                    <div class="post over-scale br-20">
                        <div class="image-container br-20">
                            <img class="post-image br-20" src="<?php echo $atributos["image"]["sizes"]["noticia-chica"]; ?>">
                            <div class="gradient br-20"></div>
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
                    </div>
                <?php }
            endwhile;
            endif;
            ?>
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
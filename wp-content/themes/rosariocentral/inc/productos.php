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
            <?php       $args = array(
                'post_type' => 'productos-destacados',
                'post_status' => 'publish',
                'posts_per_page' => 150,
                'orderby' => array( 
                    'date'      => 'DESC', 
                    'menu_order' => 'ASC' 
                 ) ,
            );
            $productos = new WP_Query($args);
            if ($productos->have_posts()) : while ($productos->have_posts()) : $productos->the_post();
                    $atributos = get_fields($post->ID); ?> 
                <div class="producto  bg-white  ">
                    <img src="<?php echo 
                              wp_get_attachment_image_src(CFS()->get( 'imagen', $post->ID ), 'noticia-chica')[0]; ?>">
                    <div class="info flex-column  azul-fg">
                        <span class="categoria amarillo-fg bold"><?php echo CFS()->get( 'categoria', $post->ID ) ?></span>
                        <h4 class="titulo azul-fg bold">
                        <?php echo get_the_title($post->ID); ?>
                        </h4>
                        <div class="descripcion gris-fg">
                        <?php echo get_the_content($post->ID); ?>
                        </div>
                        <a class="pointer ver-producto azul-fg flex a-center" target="_blank" href="<?php echo CFS()->get( 'enlace', $post->ID ) ?>">
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
                <?php
                endwhile;
            endif;
            ?>
         

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
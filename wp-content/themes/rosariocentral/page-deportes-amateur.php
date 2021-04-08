<?php get_header(); ?>
    <section class="deportes bg-grey">

        <div class="container">
            <div class="page-title azul-fg bold">
                Deportes Amateur
            </div>
        </div>
        <div class="lista bg-white">
            <div class="container">
                <?php
$args_noticias = array(
    'post_type' => 'deportes-amateur',
    'post_status' => 'publish',
    'posts_per_page' => 150,
);
$deportes = new WP_Query( $args_noticias );
if ( $deportes->have_posts() ) : while ( $deportes->have_posts() ) : $deportes->the_post();
    $atributos = get_fields( $post->ID);
    {  ?>
        <article class="deporte">
            <div class="title" onclick="expand(this)">
                <div class="text"><?php echo get_the_title($post->ID); ?></div>
                <div class="icon" title="Mas Información"></div>
            </div>
            <div class="content">
                <div class="imagen-container">
                    <img  src="<?php echo $atributos["imagen"]["url"] ?>">
                </div>
                <div class="data">
                    <div class="redes-sociales-deporte">

                    </div>
                    <div class="info">
                        <div class="info-titulo azul-fg bold">
                            LUGAR DE PRÁCTICA
                        </div>
                        <div class="info-valor azul-secundario-fg">
                            <?php echo $atributos["lugar_practica"] ?>
                        </div>

                        <div class="info-titulo azul-fg bold">
                            DÍAS DE PRÁCTICA
                        </div>
                        <div class="info-valor azul-secundario-fg">
                            <?php echo $atributos["dias_de_practica"] ?>
                        </div>

                        <div class="info-titulo azul-fg bold">
                            DESCRIPCIÓN
                        </div>
                        <div class="info-valor azul-secundario-fg">
                            <?php echo $atributos["descripcion"] ?>
                        </div>
                    </div>
                </div>
            </div>

        </article>
        <?php } ?>

<?php
endwhile;
endif;
                ?>

            </div>

        </div>


        </div>
    </section>

    <script>
        function expand(y) {
            var deporte = y.parentElement;
            deporte.classList.toggle("expanded");
        }
        window.addEventListener('scroll', function (e) {
            last_known_scroll_position = window.scrollY;
            var x = document.getElementById("main-escudo");
            if (last_known_scroll_position >= 80) {

                x.classList.add('fixed');
            }
            else {
                x.classList.remove('fixed');
            }
        });
    </script>
<?php get_footer(); ?>
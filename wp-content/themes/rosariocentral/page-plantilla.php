<?php
/*
 * Template Name: Plantilla
 * description:
  Page template without sidebar
 */

get_header();
?>
<div class='plantilla page bg-grey'>
    <div class='container page-titulo'>
        <h2 class='page-title azul-fg'>
           Fútbol
        </h2>
    </div>
    <div class="toolbar-amarilla">
    <div class="container bold flex column a-center">
    <span class="azul-fg">FÚTBOL</span>
        <?php $atributos = get_fields($post->ID); ?>
    <span class="azul-claro-fg plantel-label"><?php echo $atributos["titulo_toolbar"] ?></span>
    </div>
    </div>
    <section class="lista-jugadores">


        <div class="container flex wrap">
        <?php
        $args_jugadores = array(
            'post_type' => $atributos["post_type"],
            'post_status' => 'publish',
            'posts_per_page' => 60,
            'orderby' => 'menu_order',
	        'order' => 'ASC'
        );
        $count = 0;

        if ($atributos["post_type"] == "jugadores") {
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
        } else {
            $posiciones = [
                "Arquero" => "Arqueras",
                "Defensor" => "Defensoras",
                "Mediocampista" => "Mediocampistas",
                "Delantero" => "Delanteras",
                "Cuerpo Técnico" => "Cuerpo Técnico",
                "Cuerpo Médico" => "Cuerpo Médico",
                "Auxiliares" => "Auxiliares",
                "Seguridad y Utileros" => "Seguridad y Utileros",
            ];
        }

        

        $jugadores = new WP_Query( $args_jugadores );
        foreach ($posiciones as $posicion => $posicion_label) { ?>
            <h3 class="w-100-p azul-fg"><?php echo $posicion_label; ?></h3>
            <?php
            while ( $jugadores->have_posts() ) : $jugadores->the_post();
            $atributos = get_fields( $post->ID);
            ?>
            <?php if ($posicion ==  $atributos["posicion"]) { ?>
            <div class="lista-jugador-container">

                    <div class="jugador br-20">
                        <div class="imagen  bg-dark-blue">
                            <img src="<?php echo $atributos["imagen_chica"]["url"]; ?>" class="h-100-p w-100-p
                        ">
                        </div>
                        <div class="info">
                            <div class="azul-claro-fg posicion">
                                <?php echo $atributos["posicion"]; ?>
                            </div>
                            <div class="azul-fg nombre">
                                <?php echo $atributos["nombre"]; ?> <span class="apellido"><?php echo $atributos["apellido"]; ?></span>
                            </div>

                            <a class="radius-button ver-ficha azul-claro-fg" href="<?php echo get_permalink($post->ID); ?>">Ver ficha
                                <svg xmlns="http://www.w3.org/2000/svg" width="21.559" height="14.792" viewBox="0 0 21.559 14.792">
                                    <path id="Icon_ionic-ios-arrow-round-forward" data-name="Icon ionic-ios-arrow-round-forward"
                                          d="M20.986,11.514a.933.933,0,0,0-.007,1.314l4.342,4.349H8.8a.928.928,0,0,0,0,1.857H25.313l-4.342,4.349a.94.94,0,0,0,.007,1.314.925.925,0,0,0,1.307-.007l5.884-5.927h0a1.042,1.042,0,0,0,.193-.293.886.886,0,0,0,.071-.357.931.931,0,0,0-.264-.65l-5.884-5.927A.91.91,0,0,0,20.986,11.514Z"
                                          transform="translate(-7.375 -10.752)" fill="#2680eb" stroke="#2680eb" stroke-width="1" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

            <?php } ?>
            <?php
            $count++;
            endwhile;
        }
        wp_reset_postdata();
        ?>
        </div>
    </section>


</div>
<script>
    function expand(link) {
        var $content = document.getElementById('texto-principal');;
        $content.classList.toggle('expanded');
        link.classList.toggle('expanded');
    };
</script>
    <script>
        const $plantillaCarousel = $("#plantilla-jugadores-carousel").owlCarousel({
            items: 1,
            margin: 24,
            loop: true,
            nav: false,

        });

        function next() {
            $plantillaCarousel.trigger('next.owl.carousel');
        }
        function prev() {
            $plantillaCarousel.trigger('prev.owl.carousel');
        }
        function verFicha(index)
        {
            $plantillaCarousel.trigger('to.owl.carousel', index);
        }
    </script>
<?php

get_footer();

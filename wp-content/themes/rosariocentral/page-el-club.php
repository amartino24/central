<?php
/*
 * Template Name: El Club
 * description:
  Page template without sidebar
 */

get_header();
?>
<div class='el-club page bg-grey'>
    <div class='container page-titulo'>
        <h2 class='page-title azul-fg'>
            <?php echo get_the_title() ?>
        </h2>
    </div>
    <section class='contenido bg-white'>
        <div class='container'>
            <?php $texto = get_field('texto_principal'); ?>
            <h3 class='titulo azul-claro-fg bold'> <?php echo $texto['titulo'] ?></h3>
            <div class='texto-principal azul-secundario-fg' id='texto-principal'>
                <?php echo $texto['contenido'] ?>
            </div>
            <div class='azul-claro-fg show-more pointer bold' onclick="expand(this)">
                VER MAS
                <svg xmlns="http://www.w3.org/2000/svg" width="13.712" height="12.101" viewBox="0 0 13.712 12.101">
                    <path id="Icon_ionic-ios-arrow-round-forward" data-name="Icon ionic-ios-arrow-round-forward" d="M20.986,11.514a.933.933,0,0,0-.007,1.314l4.342,4.349H17.254a.928.928,0,0,0,0,1.857h8.059l-4.342,4.349a.94.94,0,0,0,.007,1.314.925.925,0,0,0,1.307-.007l5.884-5.927h0a1.042,1.042,0,0,0,.193-.293.886.886,0,0,0,.071-.357.931.931,0,0,0-.264-.65l-5.884-5.927A.91.91,0,0,0,20.986,11.514Z" transform="translate(24.963 -16.332) rotate(90)" fill="#2680eb" />
                </svg>

            </div>
        </div>
    </section>
    <section class='comision-directiva bg-dark-blue'>
        <div class='container'>
            <div class='titulo bold'>
                    COMISIÓN DIRECTIVA
            </div>
            <div class="integrantes">
            <?php $comision = get_field('comision_directiva'); ?>
                <?php echo $comision["presidente"] ?>
            </div>
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
<?php

get_footer();

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
            <h3 class='titulo azul-claro-fg bold'> <?php echo CFS()->get('titulo') ?></h3>
            <div class='texto-principal azul-secundario-fg' id='texto-principal'>
                <?php echo CFS()->get('texto') ?>
            </div>
            <div class='azul-claro-fg show-more pointer bold' onclick="expand(this)">
                VER MAS
                <svg xmlns="http://www.w3.org/2000/svg" width="13.712" height="12.101" viewBox="0 0 13.712 12.101">
                    <path id="Icon_ionic-ios-arrow-round-forward" data-name="Icon ionic-ios-arrow-round-forward" d="M20.986,11.514a.933.933,0,0,0-.007,1.314l4.342,4.349H17.254a.928.928,0,0,0,0,1.857h8.059l-4.342,4.349a.94.94,0,0,0,.007,1.314.925.925,0,0,0,1.307-.007l5.884-5.927h0a1.042,1.042,0,0,0,.193-.293.886.886,0,0,0,.071-.357.931.931,0,0,0-.264-.65l-5.884-5.927A.91.91,0,0,0,20.986,11.514Z" transform="translate(24.963 -16.332) rotate(90)" fill="#2680eb" />
                </svg>

            </div>
        </div>
    </section>
    <?php if (CFS()->get('mostrar_comision')) { ?>
        <section class='comision-directiva bg-dark-blue'>
            <div class='container'>
                <div class='titulo bold'>
                    <?php echo CFS()->get('comision_titulo'); ?>
                </div>

                <div class="integrantes">
                    <?php $integrantes = CFS()->get('integrantes');

                    foreach ($integrantes as $int) { ?>
                        <div class="integrante">
                            <div class="integrante-titulo bold amarillo-fg">
                                <?php echo $int['nombre_cargo'] ?>
                            </div>
                            <div class='personas'>
                                <?php echo $int['integrante'] ?>
                            </div>

                        </div>
                    <?php } ?>
                </div>
            </div>

        </section>
    <?php } ?>
    <?php if (CFS()->get('mostrar_secretariados')) { ?>
        <section class='secretariados-section bg-blue'>
            <div class='container'>
                <div class='titulo bold'>
                    <?php echo CFS()->get('titulo_secretariados'); ?>
                </div>

                <div class="secretariados">
                    <?php $secretariados = CFS()->get('secretariados');

                    foreach ($secretariados as $sec) { ?>
                        <div class="secretariado">
                            <div class="integrante-titulo bold amarillo-fg">
                                <?php echo $sec['nombre_secretariado'] ?>
                            </div>
                            <div class='enlace azul-claro-fg'>
                                <a class='link pointer'>VER MAS <svg xmlns="http://www.w3.org/2000/svg" width="12.101" height="13.711" viewBox="0 0 12.101 13.711">
                                        <path id="Icon_ionic-ios-arrow-round-forward" data-name="Icon ionic-ios-arrow-round-forward" d="M20.986,11.514a.933.933,0,0,0-.007,1.314l4.342,4.349H17.254a.928.928,0,0,0,0,1.857h8.059l-4.342,4.349a.94.94,0,0,0,.007,1.314.925.925,0,0,0,1.307-.007l5.884-5.927h0a1.042,1.042,0,0,0,.193-.293.886.886,0,0,0,.071-.357.931.931,0,0,0-.264-.65l-5.884-5.927A.91.91,0,0,0,20.986,11.514Z" transform="translate(-16.332 -11.252)" fill="#2680eb" />
                                    </svg>
                                </a>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="163.5" height="0.5" viewBox="0 0 163.5 0.5" class='line-separator'>
                                <line id="Línea_115" data-name="Línea 115" x1="163" transform="translate(0.25 0.25)" fill="none" stroke="#2680eb" stroke-linecap="round" stroke-width="0.5" />
                            </svg>


                        </div>
                    <?php } ?>
                </div>
            </div>

        </section>
    <?php } ?>
    <section class='predios'>

        <?php include 'inc/predios-carousel.php' ?>
    </section>

    <section class="sede-virtual ">
        <div class="container flex a-center">
            <div class="sede-virtual-titulo    flex-column j-center ">

                <a class="pointer azul-claro-fg bold exclusivo">ROSARIO CENTRAL</a>
                <h2>ENLACES<br><b>DE INTERÉS</b></h2>
              
            </div>
            <div class="sede-virtual-funciones flex j-between a-center">
                <div class="funcion br-20 flex-column j-between">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32.059" height="30.723" viewBox="0 0 32.059 30.723">
                        <path id="star" d="M7.176,31.215a1.706,1.706,0,0,1-1.66-2.084l2.062-9.085L.584,13.912a1.705,1.705,0,0,1,.966-2.982l9.255-.84,3.659-8.563a1.7,1.7,0,0,1,3.134,0l3.659,8.564,9.253.84a1.706,1.706,0,0,1,.969,2.982l-6.994,6.133,2.062,9.085a1.7,1.7,0,0,1-2.535,1.841L16.03,26.2,8.05,30.973a1.708,1.708,0,0,1-.874.242Zm8.854-7.068a1.708,1.708,0,0,1,.874.242l7.531,4.5-1.946-8.575a1.7,1.7,0,0,1,.54-1.66l6.6-5.792-8.738-.793a1.7,1.7,0,0,1-1.416-1.033L16.03,2.96l-3.453,8.082a1.7,1.7,0,0,1-1.412,1.029l-8.739.793,6.6,5.792a1.7,1.7,0,0,1,.54,1.662L7.625,28.892l7.531-4.5a1.707,1.707,0,0,1,.874-.242Zm-5.3-13.891a0,0,0,0,1,0,0Zm10.59,0v0S21.325,10.253,21.324,10.252Zm0,0" transform="translate(-0.001 -0.492)" fill="#2680eb" />
                    </svg>


                    Marketing

                </div>
                <a class="funcion br-20 flex-column j-between" href="/central/noticia/prensa/">
                    <svg xmlns="http://www.w3.org/2000/svg" width="36.199" height="34.259" viewBox="0 0 36.199 34.259">
                        <g id="credential" transform="translate(0 -13.723)">
                            <path id="Trazado_323" data-name="Trazado 323" d="M35.139,22.369H23l6.835-6.835a1.061,1.061,0,0,0-1.5-1.5l-8.23,8.23a1.067,1.067,0,0,0-.091.105H16.2L7.86,14.034a1.061,1.061,0,0,0-1.5,1.5L13.2,22.369H1.061A1.061,1.061,0,0,0,0,23.43V46.922a1.061,1.061,0,0,0,1.061,1.061H35.139A1.061,1.061,0,0,0,36.2,46.922V23.43A1.061,1.061,0,0,0,35.139,22.369ZM34.078,45.861H2.121V24.49h13.2l1.854,1.854a1.06,1.06,0,1,0,1.5-1.5l-.354-.354H34.078Z" fill="#2680eb" />
                            <path id="Trazado_324" data-name="Trazado 324" d="M61.685,211.583a5.534,5.534,0,1,0-8.745,0,7.241,7.241,0,0,0-2.99,5.864v.344a1.061,1.061,0,0,0,1.061,1.061h12.6a1.061,1.061,0,0,0,1.061-1.061v-.344a7.237,7.237,0,0,0-2.99-5.864Zm-4.372-6.8A3.413,3.413,0,1,1,53.9,208.2a3.416,3.416,0,0,1,3.413-3.413ZM52.121,216.73a5.124,5.124,0,0,1,2.488-3.707,5.516,5.516,0,0,0,5.406,0A5.12,5.12,0,0,1,62.5,216.73Z" transform="translate(-46.418 -175.582)" fill="#2680eb" />
                            <path id="Trazado_325" data-name="Trazado 325" d="M285.428,234.532h9.426a1.061,1.061,0,0,0,0-2.121h-9.426a1.061,1.061,0,0,0,0,2.121Z" transform="translate(-264.262 -203.226)" fill="#2680eb" />
                            <path id="Trazado_326" data-name="Trazado 326" d="M285.428,295.165h9.426a1.061,1.061,0,0,0,0-2.121h-9.426a1.061,1.061,0,0,0,0,2.121Z" transform="translate(-264.262 -259.572)" fill="#2680eb" />
                            <path id="Trazado_327" data-name="Trazado 327" d="M348.455,401.617h-5.348a1.061,1.061,0,1,0,0,2.121h5.348a1.061,1.061,0,0,0,0-2.121Z" transform="translate(-317.863 -360.469)" fill="#2680eb" />
                        </g>
                    </svg>

                    Prensa
                    </a>
                <div class="funcion br-20 flex-column j-between">
                    <svg xmlns="http://www.w3.org/2000/svg" width="34.353" height="30.193" viewBox="0 0 34.353 30.193">
                        <path id="portfolio" d="M33.353,4.026H24.222V3.019A3.023,3.023,0,0,0,21.2,0H13.151a3.023,3.023,0,0,0-3.019,3.019V4.026H1.007A1.009,1.009,0,0,0,0,5.032V27.174A3.023,3.023,0,0,0,3.02,30.193H31.334a3.023,3.023,0,0,0,3.019-3.019V5.049a.977.977,0,0,0-1-1.023ZM12.145,3.019a1.008,1.008,0,0,1,1.006-1.006H21.2a1.008,1.008,0,0,1,1.006,1.006V4.026H12.145ZM31.951,6.039l-3.125,9.376a1,1,0,0,1-.955.688H22.209V15.1A1.006,1.006,0,0,0,21.2,14.09H13.151A1.006,1.006,0,0,0,12.145,15.1V16.1H6.483a1,1,0,0,1-.955-.688L2.4,6.039ZM20.2,16.1v2.013H14.158V16.1ZM32.341,27.174a1.008,1.008,0,0,1-1.006,1.006H3.02a1.008,1.008,0,0,1-1.006-1.006V11.234l1.606,4.817a3.015,3.015,0,0,0,2.864,2.065h5.662v1.006a1.006,1.006,0,0,0,1.006,1.006H21.2a1.006,1.006,0,0,0,1.006-1.006V18.116h5.662a3.015,3.015,0,0,0,2.864-2.065l1.606-4.817Zm0,0" transform="translate(0)" fill="#2680eb" />
                    </svg>

                    Trabajá<br>con nosotros
                </div>
                <div class="funcion br-20 flex-column j-between">
                    <svg xmlns="http://www.w3.org/2000/svg" width="36.21" height="29.488" viewBox="0 0 36.21 29.488">
                        <g id="book" transform="translate(0 -47.336)">
                            <path id="Trazado_328" data-name="Trazado 328" d="M35.182,52.614c-.068,0-1.467-.05-3.519,0V48.4a1.065,1.065,0,0,0-1.154-1.061c-4.093.342-9.3,2.15-12.4,5.449C15,49.49,9.794,47.682,5.7,47.34A1.065,1.065,0,0,0,4.547,48.4v4.323c-1.166-.044-2.27-.075-3.451-.11A1.065,1.065,0,0,0,0,53.679V73.074a1.065,1.065,0,0,0,.993,1.063c4.236.285,11.333.317,16.694,2.6a1.067,1.067,0,0,0,.836,0c5.361-2.286,12.456-2.318,16.694-2.6a1.065,1.065,0,0,0,.993-1.063V53.679A1.065,1.065,0,0,0,35.182,52.614ZM29.532,49.6V67.852A22.6,22.6,0,0,0,19.17,73.114V54.807c2.33-2.907,6.743-4.66,10.363-5.208Zm-22.855,0c3.619.548,8.032,2.3,10.363,5.208V73.114A22.6,22.6,0,0,0,6.677,67.852ZM2.13,72.072v-17.3c.763.023,1.578.048,2.417.08V68.72a1.065,1.065,0,0,0,.869,1.047,21.305,21.305,0,0,1,8.541,3.58A72.143,72.143,0,0,0,2.13,72.072Zm31.95,0a72.144,72.144,0,0,0-11.827,1.276,21.306,21.306,0,0,1,8.541-3.58,1.065,1.065,0,0,0,.869-1.047V54.741c.98-.022,1.815-.022,2.417-.017V72.072Z" fill="#2680eb" />
                            <path id="Trazado_329" data-name="Trazado 329" d="M135.59,166.813a9.919,9.919,0,0,0-3.765-1.536,1.065,1.065,0,1,0-.355,2.1,7.765,7.765,0,0,1,2.9,1.184,1.065,1.065,0,1,0,1.218-1.748Z" transform="translate(-121.312 -109.553)" fill="#2680eb" />
                            <path id="Trazado_330" data-name="Trazado 330" d="M135.484,251.556a11.38,11.38,0,0,0-3.658-1.516,1.065,1.065,0,1,0-.355,2.1,9.511,9.511,0,0,1,2.9,1.233,1.065,1.065,0,1,0,1.11-1.818Z" transform="translate(-121.312 -188.298)" fill="#2680eb" />
                            <path id="Trazado_331" data-name="Trazado 331" d="M304.14,168.56a7.765,7.765,0,0,1,2.9-1.184,1.065,1.065,0,1,0-.355-2.1,9.918,9.918,0,0,0-3.765,1.536,1.065,1.065,0,1,0,1.218,1.748Z" transform="translate(-280.992 -109.552)" fill="#2680eb" />
                            <path id="Trazado_332" data-name="Trazado 332" d="M307.379,250.04a11.377,11.377,0,0,0-3.658,1.516,1.065,1.065,0,1,0,1.11,1.818,9.51,9.51,0,0,1,2.9-1.233,1.065,1.065,0,1,0-.355-2.1Z" transform="translate(-281.683 -188.298)" fill="#2680eb" />
                        </g>
                    </svg>

                    Estatuto
                </div>
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

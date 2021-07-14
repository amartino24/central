<?php
/*
 * Template Name: Ficha Jugador
 * description:
  Page template without sidebar
Template Post Type: jugadores, jugadoras
 */

get_header();
?>
<div class='plantilla page bg-grey'>

    <section class='slider-jugadores bg-dark-blue'>
     <!--  <div class="flechas flex j-between">
            <svg xmlns="http://www.w3.org/2000/svg" class="pointer over-scale" width="20" height="20"  id="prevJugadorBtn" onclick="prev()"
                 viewBox="0 0 6.25 10.93">
                <path id="Icon_ionic-ios-arrow-forward" data-name="Icon ionic-ios-arrow-forward"
                      d="M4.366,5.463.229,1.33a.778.778,0,0,1,0-1.1.788.788,0,0,1,1.106,0L6.022,4.91a.78.78,0,0,1,.023,1.077L1.339,10.7A.781.781,0,1,1,.233,9.6Z"
                      transform="translate(6.25 10.93) rotate(180)" fill="#f9df34" />
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" class="pointer next over-scale" width="20" height="20"  id="nextJugadorBtn" onclick="next()"
                 viewBox="0 0 6.25 10.932">
                <path id="Icon_ionic-ios-arrow-back" data-name="Icon ionic-ios-arrow-back"
                      d="M1.884,5.464,6.02,1.331A.781.781,0,0,0,4.914.228L.228,4.911A.78.78,0,0,0,.2,5.988L4.91,10.7A.781.781,0,0,0,6.017,9.6Z"
                      transform="translate(6.25 10.932) rotate(180)" fill="#f9df34" />
            </svg>

        </div > -->
        <div class="owl-carousel"  id="plantilla-jugadores-carousel">


            <?php

                $atributos = get_fields($post->ID);
            ?>
        <div class="jugador  container flex">
    
                <div class="jugador-info  bg-dark-blue flex-column j-center">
                  <?php $post_type = get_post_type( $post->ID );
                  if ($post_type == 'jugadores') { ?>
                <a class="volver pointer" href="<?php echo get_home_url(); ?>/plantel-masculino">
                <?php } else { ?>
                  <a class="volver pointer" href="<?php echo get_home_url(); ?>/plantel-femenino"> <?php } ?>
                <svg xmlns="http://www.w3.org/2000/svg" width="20.559" height="13.712" viewBox="0 0 20.559 13.712">
                        <path id="Icon_ionic-ios-arrow-round-forward" data-name="Icon ionic-ios-arrow-round-forward" d="M20.986,11.514a.933.933,0,0,0-.007,1.314l4.342,4.349H8.8a.928.928,0,0,0,0,1.857H25.313l-4.342,4.349a.94.94,0,0,0,.007,1.314.925.925,0,0,0,1.307-.007l5.884-5.927h0a1.042,1.042,0,0,0,.193-.293.886.886,0,0,0,.071-.357.931.931,0,0,0-.264-.65l-5.884-5.927A.91.91,0,0,0,20.986,11.514Z" transform="translate(-7.875 -11.252)" fill="#FFFFFF" />
                    </svg>
                    VOLVER 

                </a>

                        <div class="posicion amarillo-fg">
                            <?php echo $atributos["posicion"]; ?>
                        </div>
                        <div class="nombre azul-claro-fg bold">
                            <?php echo $atributos["nombre"]; ?> <span class="apellido"><?php echo strtoupper($atributos["apellido"]); ?></span>
                        </div>
                        <div class="informacion-extra flex ">
                            <div class="columna">
                            <div class="label flex">
                                <div class="icono">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24.783" height="17.716" viewBox="0 0 24.783 17.716">
  <path id="soccer" d="M0,73V90.716H24.783V73ZM11.666,83.924a2.19,2.19,0,0,1,0-4.132Zm1.452-4.132a2.19,2.19,0,0,1,0,4.132ZM1.452,79.668H3.824v4.38H1.452Zm0,5.833H5.276V78.216H1.452V74.452H11.666v3.836a3.643,3.643,0,0,0,0,7.139v3.836H1.452Zm11.666,3.764V85.428a3.643,3.643,0,0,0,0-7.139V74.452H23.331v3.764h-3.8V85.5h3.8v3.764Zm10.213-9.6v4.38H20.985v-4.38Z" transform="translate(0 -73)" fill="#2680eb"/>
</svg>

                                </div>
                                <div class="data">
                                    <div class="data-title azul-claro-fg">
                                    POSICIÓN
                                    </div>
                                    <div class="data-value">
                                        <?php echo $atributos["posicion"]; ?>
                                    </div>
                                </div>
                            </div>

                            <div class="label flex">
                                <div class="icono">
                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="22.637" viewBox="0 0 19 22.637">
  <g id="geo" transform="translate(-40.997 0)">
    <path id="Trazado_335" data-name="Trazado 335" d="M57.213,2.784A9.5,9.5,0,1,0,43.781,16.216l6.214,6.214a.71.71,0,0,0,1,0l6.214-6.214a9.492,9.492,0,0,0,0-13.432Zm-1,12.428L50.5,20.924l-5.712-5.712a8.078,8.078,0,1,1,11.424,0Z" transform="translate(0 0)" fill="#2680eb"/>
    <path id="Trazado_336" data-name="Trazado 336" d="M163.662,118.42a4.246,4.246,0,1,0,4.246,4.246A4.243,4.243,0,0,0,163.662,118.42Zm2,6.244a2.79,2.79,0,0,1-2,.828,2.826,2.826,0,1,1,2-.828Z" transform="translate(-113.165 -113.166)" fill="#2680eb"/>
  </g>
</svg>


                                </div>
                                <div class="data">
                                    <div class="data-title azul-claro-fg">
                                    LUGAR DE NACIMIENTO
                                    </div>
                                    <div class="data-value">
                                        <?php echo $atributos["lugar_de_nacimiento"]; ?>
                                    </div>
                                </div>
                            </div>

                            <div class="label flex">
                                <div class="icono">
                                <svg id="calendar" xmlns="http://www.w3.org/2000/svg" width="21.373" height="21.373" viewBox="0 0 21.373 21.373">
  <path id="Trazado_337" data-name="Trazado 337" d="M18.618,1.67H16.7v-1a.668.668,0,0,0-1.336,0v1H6.011v-1a.668.668,0,0,0-1.336,0v1H2.755A2.758,2.758,0,0,0,0,4.425V18.618a2.758,2.758,0,0,0,2.755,2.755H18.618a2.758,2.758,0,0,0,2.755-2.755V4.425A2.758,2.758,0,0,0,18.618,1.67ZM2.755,3.006h1.92v.668a.668.668,0,0,0,1.336,0V3.006h9.351v.668a.668.668,0,0,0,1.336,0V3.006h1.92a1.421,1.421,0,0,1,1.419,1.419V6.011H1.336V4.425A1.421,1.421,0,0,1,2.755,3.006ZM18.618,20.037H2.755a1.421,1.421,0,0,1-1.419-1.419V7.347h18.7V18.618A1.421,1.421,0,0,1,18.618,20.037Z" fill="#2680eb"/>
</svg>


                                </div>
                                <div class="data">
                                    <div class="data-title azul-claro-fg">
                                    FECHA DE NACIMIENTO
                                    </div>
                                    <div class="data-value">
                                        <?php echo $atributos["fecha_de_nacimiento"]; ?>
                                    </div>
                                </div>
                            </div>


                            <div class="label flex">
                                <div class="icono">
                                <svg xmlns="http://www.w3.org/2000/svg" width="29.391" height="29.402" viewBox="0 0 29.391 29.402">
  <g id="football-shoes" transform="translate(-0.099 0)">
    <g id="Grupo_287" data-name="Grupo 287" transform="translate(3.35 0)">
      <g id="Grupo_286" data-name="Grupo 286" transform="translate(0 0)">
        <path id="Trazado_338" data-name="Trazado 338" d="M82.529,23.256,77.914,13q-.229-.508-.5-.995l-.006-.01a14.029,14.029,0,0,0-2.372-3.146l-.8-.8a.574.574,0,0,0-.812,0L72.38,9.083a1.225,1.225,0,0,1-1.73,0L67.4,5.835a2.532,2.532,0,0,1-.711-1.358V3.53l.022-.417a3.262,3.262,0,0,0-.025-.606v0A3.624,3.624,0,0,0,65.642.436,1.466,1.466,0,0,0,64.7,0a1.272,1.272,0,0,0-.983.361L59.636,4.446h0L57.9,6.184a3.115,3.115,0,0,0-.113,4.067l-.58.58a1.725,1.725,0,0,0,0,2.436l.127.127a1.725,1.725,0,0,0,2.436,0l.552-.552.7.7a.575.575,0,0,0,.369.167,3.421,3.421,0,0,1,2.154,1.01l1.685,1.685a1.483,1.483,0,0,1,.44.932A2.6,2.6,0,0,0,66.443,19l1.53,1.53-.533.533a1.725,1.725,0,0,0,0,2.436l.127.127h0a1.725,1.725,0,0,0,2.436,0l.533-.533,2.65,2.65-.533.533a1.725,1.725,0,0,0,0,2.436l.127.127a1.725,1.725,0,0,0,2.436,0l.533-.533a3.555,3.555,0,0,0,2.256,1.037q.107.007.212.007a2.841,2.841,0,0,0,2.039-.823l1.737-1.737A3.131,3.131,0,0,0,82.529,23.256Zm-3.113-4.12H76.752l-.615-1.328h2.681Zm-2.55-5.667.318.706h-2.77L73.8,12.846h2.766Q76.724,13.153,76.866,13.469Zm-17.908-.886a.575.575,0,0,1-.812,0l-.127-.127a.575.575,0,0,1,0-.812l.533-.533.939.939ZM69.192,22.816a.575.575,0,0,1-.812,0l-.127-.127a.575.575,0,0,1,0-.812l.533-.533.594.594.345.345Zm5.213,5.213a.575.575,0,0,1-.812,0l-.127-.127a.575.575,0,0,1,0-.812L74,26.557l.939.939Zm5.04-.312a1.735,1.735,0,0,1-1.364.482,2.411,2.411,0,0,1-1.538-.723l-5.6-5.6h0l-1.751-1.751h0L67.256,18.19a1.472,1.472,0,0,1-.437-.925,2.61,2.61,0,0,0-.774-1.67L64.36,13.91a4.548,4.548,0,0,0-2.669-1.323L58.948,9.844A2.037,2.037,0,0,1,58.711,7l.139-.139a3.537,3.537,0,0,0,1.023,2.062l2.889,2.889a.575.575,0,0,0,.369.167,3.421,3.421,0,0,1,2.154,1.01L66.97,14.67a1.482,1.482,0,0,1,.44.932,2.6,2.6,0,0,0,.771,1.663l9.287,9.287a3.58,3.58,0,0,0,2.105,1.038Zm1.737-1.737h0a2.076,2.076,0,0,1-2.9-.241l-9.287-9.287a1.472,1.472,0,0,1-.437-.925,2.609,2.609,0,0,0-.774-1.67L66.1,12.172a4.548,4.548,0,0,0-2.669-1.323L60.685,8.106a2.037,2.037,0,0,1-.237-2.847l4.083-4.083a.13.13,0,0,1,.1-.027.324.324,0,0,1,.2.1,2.519,2.519,0,0,1,.711,1.368V3.5l-.025.462a3.269,3.269,0,0,0,.025.6v3.7a.574.574,0,0,0,1.149,0V6.748L69.838,9.9a2.375,2.375,0,0,0,3.355,0l.636-.636.4.4A12.992,12.992,0,0,1,75.892,11.7H72.9a.574.574,0,0,0-.521.816l1.147,2.477a.574.574,0,0,0,.521.333H77.7l.6,1.336H75.238a.574.574,0,0,0-.521.816l1.147,2.477a.574.574,0,0,0,.521.333h3.548l1.549,3.443A2,2,0,0,1,81.183,25.98Z" transform="translate(-56.703 0)" fill="#2680eb"/>
      </g>
    </g>
    <g id="Grupo_289" data-name="Grupo 289" transform="translate(0.099 16.727)">
      <g id="Grupo_288" data-name="Grupo 288" transform="translate(0)">
        <path id="Trazado_339" data-name="Trazado 339" d="M16.28,300.838a.574.574,0,0,0-.812,0,6.687,6.687,0,0,1-4.76,1.972H4.3a3.06,3.06,0,0,1-3.056-3.056v-1.512a3.318,3.318,0,0,1,.978-2.362l.471-.471a10.1,10.1,0,0,1,7.189-2.978H10.6a.574.574,0,1,0,0-1.149H9.885a11.315,11.315,0,0,0-8,3.314l-.471.471A4.459,4.459,0,0,0,.1,298.242v1.512a4.21,4.21,0,0,0,4.2,4.2h6.4a7.829,7.829,0,0,0,5.572-2.308A.574.574,0,0,0,16.28,300.838Z" transform="translate(-0.099 -291.283)" fill="#2680eb"/>
      </g>
    </g>
    <g id="Grupo_291" data-name="Grupo 291" transform="translate(6.862 18.553)">
      <g id="Grupo_290" data-name="Grupo 290">
        <path id="Trazado_340" data-name="Trazado 340" d="M119.6,323.072a1.723,1.723,0,1,0,1.723,1.723A1.725,1.725,0,0,0,119.6,323.072Zm0,2.3a.574.574,0,1,1,.574-.574A.575.575,0,0,1,119.6,325.369Z" transform="translate(-117.874 -323.072)" fill="#2680eb"/>
      </g>
    </g>
    <g id="Grupo_293" data-name="Grupo 293" transform="translate(3.187 23.656)">
      <g id="Grupo_292" data-name="Grupo 292">
        <path id="Trazado_341" data-name="Trazado 341" d="M55.6,411.937a1.723,1.723,0,1,0,1.723,1.723A1.725,1.725,0,0,0,55.6,411.937Zm0,2.3a.574.574,0,1,1,.574-.574A.575.575,0,0,1,55.6,414.234Z" transform="translate(-53.874 -411.937)" fill="#2680eb"/>
      </g>
    </g>
    <g id="Grupo_295" data-name="Grupo 295" transform="translate(9.128 24.495)">
      <g id="Grupo_294" data-name="Grupo 294">
        <path id="Trazado_342" data-name="Trazado 342" d="M159.049,426.544a1.723,1.723,0,1,0,1.723,1.723A1.725,1.725,0,0,0,159.049,426.544Zm0,2.3a.574.574,0,1,1,.574-.574A.575.575,0,0,1,159.049,428.841Z" transform="translate(-157.326 -426.544)" fill="#2680eb"/>
      </g>
    </g>
    <g id="Grupo_297" data-name="Grupo 297" transform="translate(25.566 11.472)">
      <g id="Grupo_296" data-name="Grupo 296">
        <path id="Trazado_343" data-name="Trazado 343" d="M444.292,199.784a.574.574,0,1,0-.3,1.108,3.2,3.2,0,0,1,1.867,4.78.574.574,0,1,0,.974.609,4.35,4.35,0,0,0-2.537-6.5Z" transform="translate(-443.566 -199.763)" fill="#2680eb"/>
      </g>
    </g>
    <g id="Grupo_299" data-name="Grupo 299" transform="translate(12.186 9.945)">
      <g id="Grupo_298" data-name="Grupo 298">
        <path id="Trazado_344" data-name="Trazado 344" d="M211.563,173.347a.574.574,0,1,0,.168.406A.579.579,0,0,0,211.563,173.347Z" transform="translate(-210.583 -173.179)" fill="#2680eb"/>
      </g>
    </g>
    <g id="Grupo_301" data-name="Grupo 301" transform="translate(16.604 24.805)">
      <g id="Grupo_300" data-name="Grupo 300">
        <path id="Trazado_345" data-name="Trazado 345" d="M288.1,431.936h-.01a.574.574,0,0,0,0,1.149h.01a.574.574,0,0,0,0-1.149Z" transform="translate(-287.514 -431.936)" fill="#2680eb"/>
      </g>
    </g>
  </g>
</svg>


                                </div>
                                <div class="data">
                                    <div class="data-title azul-claro-fg">
                                    PIERNA HÁBIL
                                    </div>
                                    <div class="data-value">
                                        <?php echo $atributos["pierna_habil"]; ?>
                                    </div>
                                </div>
                            </div>

                            <div class="label flex">
                                <div class="icono">
                          <svg xmlns="http://www.w3.org/2000/svg" width="11.396" height="20.12" viewBox="0 0 11.396 20.12">
  <g id="height" transform="translate(-111)">
    <g id="Grupo_302" data-name="Grupo 302" transform="translate(111)">
      <path id="Trazado_346" data-name="Trazado 346" d="M122.4,0H111V1.572h5.648L112.63,5.59,113.741,6.7l2.132-2.132v11l-2.132-2.132-1.111,1.111,4,4H111V20.12h11.4V18.548h-5.711l4-4-1.111-1.111-2.132,2.132v-11L119.576,6.7l1.111-1.111L116.67,1.572H122.4Z" transform="translate(-111)" fill="#2680eb"/>
    </g>
  </g>
</svg>


                                </div>
                                <div class="data">
                                    <div class="data-title azul-claro-fg">
                                    ALTURA
                                    </div>
                                    <div class="data-value">
                                        <?php echo $atributos["altura"]; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="label flex">
                                <div class="icono">

                                <svg id="weight-scale" xmlns="http://www.w3.org/2000/svg" width="26.5" height="26.5" viewBox="0 0 26.5 26.5">
  <path id="Trazado_347" data-name="Trazado 347" d="M24.171,0H2.329A2.332,2.332,0,0,0,0,2.329V24.171A2.332,2.332,0,0,0,2.329,26.5H24.171A2.332,2.332,0,0,0,26.5,24.171V2.329A2.332,2.332,0,0,0,24.171,0Zm.776,24.171a.777.777,0,0,1-.776.776H2.329a.777.777,0,0,1-.776-.776V2.329a.777.777,0,0,1,.776-.776H24.171a.777.777,0,0,1,.776.776Zm0,0" fill="#2680eb"/>
  <path id="Trazado_348" data-name="Trazado 348" d="M95.218,64.984a14.926,14.926,0,0,0-17.908,0,.776.776,0,0,0-.155,1.088l4.1,5.452a.776.776,0,0,0,1.087.155,6.542,6.542,0,0,1,7.848,0,.776.776,0,0,0,1.086-.155l4.1-5.452a.777.777,0,0,0-.155-1.088ZM90.478,70a8,8,0,0,0-3.437-1.145V66.489a.776.776,0,0,0-1.553,0v2.366A8,8,0,0,0,82.051,70l-3.174-4.223a13.377,13.377,0,0,1,14.775,0Zm0,0" transform="translate(-73.014 -58.791)" fill="#2680eb"/>
</svg>


                                </div>
                                <div class="data">
                                    <div class="data-title azul-claro-fg">
                                    PESO
                                    </div>
                                    <div class="data-value">
                                        <?php echo $atributos["peso"]; ?>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="columna">
                            <div class="data">
                            <div class="label trayectoria">
                                    <div class="data-title azul-claro-fg">
                                    TRAYECTORIA
                                    </div>
                                    <div class="data-value">
                                        <?php echo $atributos["trayectoria"]; ?>
                                    </div>
                                </div>
</div>
                            </div>
                        </div>

                    </div>
            <div class="imagen-container">
                <img src="<?php echo $atributos["imagen"]["url"]; ?>" class="h-100-p
                        ">

            </div>
        </div>
        <?php
        ?>
        </div>
    </section>
    <?php include "inc/videos.php"; ?>

</div>
<script>
    function expand(link) {
        var $content = document.getElementById('texto-principal');;
        $content.classList.toggle('expanded');
        link.classList.toggle('expanded');
    };
</script>
    <script>
    //   const $plantillaCarousel = $("#plantilla-jugadores-carousel").owlCarousel({
    //       items: 1,
    //       margin: 24,
    //       loop: true,
    //       nav: false,

    //   });

    //   function next() {
    //       $plantillaCarousel.trigger('next.owl.carousel');
    //   }
    //   function prev() {
    //       $plantillaCarousel.trigger('prev.owl.carousel');
    //   }
    //   function verFicha(index)
    //   {
    //       $plantillaCarousel.trigger('to.owl.carousel', index);
    //   }
    </script>
<?php

get_footer();

<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
    <footer class="footer bg-blue ">
        <div class="container flex-column j-center">
            <div class="footer-navigation flex a-center j-between">
                <div class="flex a-center escudo-nav">
                    <img src="<?php echo get_template_directory_uri(); ?>/imagenes/escudo.png">
                    <nav>
                        <ul>
                            <li class="over-blue">
                                NOTICIAS
                            </li>
                            <li class="over-blue">FÚTBOL</li>
                            <li class="over-blue">EL CLUB</li>
                            <li class="over-blue">SOCIOS</li>
                            <li class="over-blue">DEPORTES AMATEURS</li>
                        </ul>
                    </nav>
                </div>
                <div class="flex a-center">
                    <div class="enlaces-externos flex a-center azul-claro-fg">
                        <div class="enlace  over-yellow  flex a-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20.218" height="26.947"
                                viewBox="0 0 20.218 26.947">
                                <path id="ShopOnlineIcon"
                                    d="M38.953,24.053H36.62V22.272a4.325,4.325,0,0,0-4.229-4.4H28.828a4.323,4.323,0,0,0-4.229,4.4v1.781H22.265A1.768,1.768,0,0,0,20.5,25.818v12.2a6.811,6.811,0,0,0,6.8,6.8h6.612a6.811,6.811,0,0,0,6.8-6.8v-12.2A1.768,1.768,0,0,0,38.953,24.053Zm-11.9-1.781a1.865,1.865,0,0,1,1.77-1.943h3.56a1.863,1.863,0,0,1,1.77,1.943v1.781h-7.1V22.272Zm11.2,15.743a4.348,4.348,0,0,1-4.344,4.344H27.3a4.348,4.348,0,0,1-4.344-4.344v-11.5H24.6v1.082a1.229,1.229,0,1,0,2.459,0V26.512h7.1v1.175a1.229,1.229,0,0,0,2.459,0V26.512h1.639Z"
                                    transform="translate(-20.5 -17.87)" fill="#2680eb" />
                            </svg>


                            <span class="text"><b>TIENDA</b><span class="secondary">ONLINE</span></span>
                        </div>
                        <div class="enlace over-yellow flex a-center"> <svg xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="21.055" height="25"
                                viewBox="0 0 21.055 25">
                                <defs>
                                    <clipPath id="clip-path">
                                        <rect id="Rectángulo_106" data-name="Rectángulo 106" width="21.055" height="25"
                                            fill="#2680eb" />
                                    </clipPath>
                                </defs>
                                <g id="Grupo_190" data-name="Grupo 190" clip-path="url(#clip-path)">
                                    <path id="Trazado_127" data-name="Trazado 127"
                                        d="M21.056,19H18.523a7.885,7.885,0,0,0-8-7.751,7.88,7.88,0,0,0-8,7.751H0A10.419,10.419,0,0,1,10.528,8.715,10.418,10.418,0,0,1,21.056,19"
                                        transform="translate(-0.001 6.001)" fill="#2680eb" />
                                    <path id="Trazado_128" data-name="Trazado 128"
                                        d="M9.066,13.892a6.946,6.946,0,1,1,6.947-6.947,6.956,6.956,0,0,1-6.947,6.947m0-11.359A4.413,4.413,0,1,0,13.48,6.945,4.417,4.417,0,0,0,9.066,2.533"
                                        transform="translate(1.461 0)" fill="#2680eb" />
                                </g>
                            </svg>

                            <a class="text azul-claro-fg" href="https://rosariocentral.miclub.info/login.php"
                                target="_blank">SEDE<b class="secondary">VIRTUAL</b></a>
                        </div>
                    </div>
                    <div class="social flex a-center j-between grow">

                        <a class="tiktok" title="Seguinos en Tiktok" href="https://www.tiktok.com/@carcoficial"
                            target="_blank"></a>
                        <a class="facebook" title="Seguinos en Facebook" href="https://facebook.com/CARCoficial/"
                            target="_blank"></a>
                        <a class="twitter" title="Seguinos en Twiiter" href="https://twitter.com/CARCoficial"
                            target="_blank"></a>
                        <a class="instagram" title="Seguinos en Instagram" href="https://www.instagram.com/carcoficial"
                            target="_blank"></a>
                        <a class="youtube" title="Seguinos en Youtube"
                            href="https://www.youtube.com/user/CARCoficial2013" target="_blank"></a>

                    </div>

                </div>
            </div>
            <p class="copyright gris-fg">
                Club Atlético Rosario Central © 2020 Todos los derechos reservados, Sede Social Mitre 853, Ciudad de
                Rosario, Santa Fe, Argentina · Teléfono 0810 - 122 - 1889 · socios@rosariocentral.com
            </p>

        </div>
    </footer>
    <script>
        function myFunction(y) {
            y.classList.toggle("change");
            var x = document.getElementById("navigation");
            x.classList.toggle('show');
        }
        window.addEventListener('scroll', function (e) {
            last_known_scroll_position = window.scrollY;
            var x = document.getElementById("main-escudo");
            if (last_known_scroll_position >= 80) {

                x.classList.add('fixed');
            } else {
                x.classList.remove('fixed');
            }
        });

     
    </script>
</body>


</html>
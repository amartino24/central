<form id="newsletter" role="form" method="get" class="search-form suscribirse" action="http://domain.com/">
                    <div class="input-container flex a-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="23.785" height="18.8" viewBox="0 0 23.785 18.8">
                            <g id="Icon_feather-mail" data-name="Icon feather-mail" transform="translate(-1.607 -5)">
                                <path id="Trazado_142" data-name="Trazado 142"
                                    d="M5.1,6H21.9A2.106,2.106,0,0,1,24,8.1V20.7a2.106,2.106,0,0,1-2.1,2.1H5.1A2.106,2.106,0,0,1,3,20.7V8.1A2.106,2.106,0,0,1,5.1,6Z"
                                    fill="none" stroke="#2680eb" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" />
                                <path id="Trazado_143" data-name="Trazado 143" d="M24,9,13.5,16.35,3,9"
                                    transform="translate(0 -0.9)" fill="none" stroke="#2680eb" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" />
                            </g>
                        </svg>
                        <div class="flex-column grow">
                            <span class="notification" aria-hidden="true"></span>
                            <input class="email-field"  value="" name="ne" type="email">
                            <input type="hidden" name="na" value="C">
                            <input type="hidden" name="nhr" value="<?php echo get_bloginfo( 'url' ) ?>">
                        </div>
                     
                    </div>
                    <button class="radius-button suscribirse-button">ENVIAR <svg xmlns="http://www.w3.org/2000/svg" type="submit"
                            width="20.559" height="13.711" viewBox="0 0 20.559 13.711">
                            <path id="Icon_ionic-ios-arrow-round-forward" data-name="Icon ionic-ios-arrow-round-forward"
                                d="M20.986,11.514a.933.933,0,0,0-.007,1.314l4.342,4.349H8.8a.928.928,0,0,0,0,1.857H25.313l-4.342,4.349a.94.94,0,0,0,.007,1.314.925.925,0,0,0,1.307-.007l5.884-5.927h0a1.042,1.042,0,0,0,.193-.293.886.886,0,0,0,.071-.357.931.931,0,0,0-.264-.65l-5.884-5.927A.91.91,0,0,0,20.986,11.514Z"
                                transform="translate(-7.875 -11.252)" fill="#2680eb" />
                        </svg>

                    </button>
                </form>

                <script>
    function validateEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
};

jQuery(function($){
    // now you can use jQuery code here with $ shortcut formatting
    // this executes immediately - before the page finishes loading

    /**
     * Newsletter support
     */
    $('#newsletter')
        .attr('novalidate', true)
        .each( function() {
            var $this = $(this),
                $input = $this.find( 'input[name="ne"]'),
                $noti = $input.prev(),
                $submit = $this.find( 'input[type="submit"]'),
                showNoti = function(txt) {
                    var $msg = $noti.clone();

                    $noti.before($msg);
                    $noti.remove();

                    $msg.text( txt ).addClass('vaporize').attr('aria-hidden', 'false');                  
                },
                success = function() {
                    $this
                        .fadeOut('slow', function() {
                            $this.replaceWith( '<p class="success-text dynamic-msg">Gracias por subscribirte a nuestro newsletter! Te mantendremos informado acerca de todo lo que sucede en nuestro club!</p>' );
                        });      
                };
                
            // Submit handler
            $this.submit( function(e) {
                var serializedData = $this.serialize();

                $noti = $input.prev();
                
                console.log( 'INFO: Form submit.' );

                e.preventDefault();
    
                // validate
                if( validateEmail( $input.val() ) ) { 
                    var data = {};
    
                    // Prepare ajax data
                    data = {
                        action: 'realhero_subscribe',
                        nonce: ajax.ajax_nonce,
                        data: serializedData
                    }

                    // send ajax request
                    $.ajax({
                        method: "POST",
                        url: ajax.url,
                        data: data,
                        beforeSend: function() {
                            $input.prop( 'disabled', true );
                            $submit.val('Wait').prop( 'disabled', true );
                        },
                        success: function( data ) {
                        
                            if( data.status == 'success' ) {
                                success();
                                console.log( 'INFO: OK!' );
                            } else {
                                $input.prop( 'disabled', false );
                                $submit.val('Submit').prop( 'disabled', false );

                                showNoti( data.msg );
                                console.log( 'INFO: Bad response.' );
                            }
                        }
                    });
    
                    console.log( 'INFO: Email ok.' );
                } else {    
                    showNoti( 'Enter valid e-mail address!' );
                };
            });
        });

});
</script>
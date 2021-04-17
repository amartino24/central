$(document).ready(function () {
    let content = `
    <div class="video item pointer over-scale" href="[url]" data-video-id="[videoId]">
        <img src="[image]">
        <div class="info flex-column  azul-fg">
            <span class="fecha bold">[fecha]</span>
            <p class="descripcion">
                [descripcion]
            </p>
        </div>
    </div>`
    $.get("https://www.googleapis.com/youtube/v3/playlistItems?part=snippet%2CcontentDetails&maxResults=6&playlistId=UURIiYwaYzI_8cvzkjdScK_Q&key=AIzaSyB-A69ZY2EPopbIiZMUqvDmQUXXafExMZE",
        function (data) {
            $.each(data.items, (index, video) => {
                let contentReplaced = content.replace('[descripcion]', video.snippet.title);
                contentReplaced = contentReplaced.replace('[fecha]', moment(video.snippet
                    .publishedAt).format('DD-MM-YYYY'));
                contentReplaced = contentReplaced.replace('[image]', video.snippet
                    .thumbnails.high.url);
                contentReplaced = contentReplaced.replace('[videoId]', video.contentDetails.videoId);
                $("#videos-carousel-list").append(contentReplaced);
            });
            $(".video").modalVideo();
            const $videosCarousel = $("#videos-carousel-list").owlCarousel({


                responsive:{
                    0:{
                        items:1,
                        nav:false,
                        loop: false,
                    },
                    480:{
                        items: 4,
                        margin:12,
                        loop: false,
                        nav: false,
                    },
                }
            });
            $('#nextVideoBtn').click(function() {
                $videosCarousel.trigger('next.owl.carousel');
            })
            // Go to the previous item
            $('#prevVideoBtn').click(function() {
                $videosCarousel.trigger('prev.owl.carousel');
            })

        })
    $(".main-banner-carousel").on("initialized.owl.carousel", () => {
        setTimeout(() => {
            $(".owl-item.active .owl-slide-animated").addClass("is-transitioned");
        }, 200);
    });

    const $mainCarousel = $(".main-banner-carousel").owlCarousel({
        items: 1,
        loop: true,
        nav: true,
        autoplay:true,

        autoplayTimeout:10000,
        navText: [
            '<svg width="50" height="50" viewBox="0 0 24 24"><path d="M16.67 0l2.83 2.829-9.339 9.175 9.339 9.167-2.83 2.829-12.17-11.996z"/></svg>',
            '<svg width="50" height="50" viewBox="0 0 24 24"><path d="M5 3l3.057-3 11.943 12-11.943 12-3.057-3 9-9z"/></svg>'
        ],
        responsive:{
            0:{
                touchDrag  : true,
                mouseDrag  : true,
            },
            480:{
                touchDrag  : false,
                mouseDrag  : false,
            },
        }
    });


    $($mainCarousel).on("changed.owl.carousel", e => {
        $(".owl-slide-animated").removeClass("is-transitioned");
        const $currentOwlItem = $(".owl-item").eq(e.item.index);
        $currentOwlItem.find(".owl-slide-animated").addClass("is-transitioned");
    });


    const $tiendaCarousel = $("#tienda-carousel").owlCarousel({

        responsive:{
            0:{
                items:1,
                nav:false,
                loop: true,
                autoplay:true,
            },
            480:{
                items: 3,
                margin: 24,
                nav:false,
                loop: false,
            },  
            768:{
                items: 2,
                margin: 24,
                nav:false,
                loop: false,
            }, 
            1024:{
                items: 3,
                margin: 24,
                nav:false,
                loop: false,
            }, 
        }
    });
    $('#nextProductoBtn').click(function() {
        $tiendaCarousel.trigger('next.owl.carousel');
    })
    // Go to the previous item
    $('#prevProductoBtn').click(function() {
        $tiendaCarousel.trigger('prev.owl.carousel');
    })


    const $otrosPostsCarousel = $("#otros-posts-carousel").owlCarousel({
        items: 4,
        margin: 24,
        loop: false,
        nav: false,
        responsive:{
            0:{
                items:1,
                nav:false,
                loop: true,
                autoplay:true,
            },
            480:{
                items: 3,
                margin: 24,
                nav:false,
                loop: false,
            },
            1080:{
                items: 4,
                margin: 24,
                nav:false,
                loop: false,
            },
        }
    });
    $('#nextPostBtn').click(function() {
        $otrosPostsCarousel.trigger('next.owl.carousel');
    })
    // Go to the previous item
    $('#prevPostBtn').click(function() {
        $otrosPostsCarousel.trigger('prev.owl.carousel');
    })


    const $prediosCarousel = $("#predios-carousel").owlCarousel({
        items: 4,
        margin: 24,
        loop: false,
        nav: false,
        responsive:{
            0:{
                items:1,
                nav:false,
                loop: true,
                autoplay:true,
            },
            480:{
                items: 3,
                margin: 24,
                nav:false,
                loop: false,
            }
        }
    });
    $('#nextPredioBtn').click(function() {
        $prediosCarousel.trigger('next.owl.carousel');
    })
    // Go to the previous item
    $('#prevPredioBtn').click(function() {
        $prediosCarousel.trigger('prev.owl.carousel');
    })


    const $jugadoresCarousel = $("#plantel-carousel").owlCarousel({
        items: 1,
        loop: true,
        nav: false,
    });

    $('#nextJugadorBtn').click(function() {
        $jugadoresCarousel.trigger('next.owl.carousel');
    })
    // Go to the previous item
    $('#prevJugadorBtn').click(function() {
        $jugadoresCarousel.trigger('prev.owl.carousel');
    })


})
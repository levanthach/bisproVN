(function($) {
    "use strict";

    // Preloader (if the #preloader div exists)
    $(window).on('load', function() {
        if ($('#preloader').length) {
            $('#preloader').delay(100).fadeOut('slow', function() {
                $(this).remove();
            });
        }
    });

    // Back to top button
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function() {
        $('html, body').animate({ scrollTop: 0 }, 1500, 'easeInOutExpo');
        return false;
    });

    // Initiate the wowjs animation library
    new WOW().init();

    // Header scroll class
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            $('#header').addClass('header-scrolled');
        } else {
            $('#header').removeClass('header-scrolled');
        }
    });

    if ($(window).scrollTop() > 100) {
        $('#header').addClass('header-scrolled');
    }

    // Smooth scroll for the navigation and links with .scrollto classes
    $('.main-nav a, .mobile-nav a, .scrollto').on('click', function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            if (target.length) {
                var top_space = 0;

                if ($('#header').length) {
                    top_space = $('#header').outerHeight();

                    if (!$('#header').hasClass('header-scrolled')) {
                        top_space = top_space - 40;
                    }
                }

                if (this.hash !== '#login') {
                    $('html, body').animate({
                        scrollTop: target.offset().top - top_space
                    }, 1500, 'easeInOutExpo');
                }


                if ($(this).parents('.main-nav, .mobile-nav').length) {
                    $('.main-nav .active, .mobile-nav .active').removeClass('active');
                    $(this).closest('li').addClass('active');
                }

                if ($('body').hasClass('mobile-nav-active')) {
                    $('body').removeClass('mobile-nav-active');
                    $('.mobile-nav-toggle i').toggleClass('fa-times fa-bars');
                    $('.mobile-nav-overly').fadeOut();
                }
                return false;
            }
        }
    });

    // Navigation active state on scroll
    var nav_sections = $('section');
    var main_nav = $('.main-nav, .mobile-nav');
    var main_nav_height = $('#header').outerHeight();

    $(window).on('scroll', function() {
        var cur_pos = $(this).scrollTop();

        nav_sections.each(function() {
            var top = $(this).offset().top - main_nav_height,
                bottom = top + $(this).outerHeight();

            if (cur_pos >= top && cur_pos <= bottom) {
                main_nav.find('li').removeClass('active');
                main_nav.find('a[href="#' + $(this).attr('id') + '"]').parent('li').addClass('active');
            }
        });
    });

    // jQuery counterUp (used in Whu Us section)
    $('[data-toggle="counter-up"]').counterUp({
        delay: 10,
        time: 1000
    });

    //Colappse Product
    $('.btn-more-detail').click(function() {
        var data_id = $(this).attr('data-id');
        $('.content-product-detail').each(function() {
            if ($(this).attr('data-collapse') == data_id) {
                $(this).toggle();
            } else {
                $(this).hide();
            }
        });
    })

    $('.login100-form-btn').click(function() {
            let numb1 = $('#numb-login-1').val();
            let numb2 = $('#numb-login-2').val();
            let sum = parseInt(numb2) + parseInt(numb1);

            if (numb1 && numb2 && sum == $('#sum-login').val()) {
                $.ajax({
                    url: '/redirect',
                    type: 'post',
                    data: {
                        username: $('#username').val(),
                        password: $('#password').val(),
                        _token: $('input[name=_token]').val()
                    },
                    dataType: 'json',
                    success: function(result) {
                        console.log(result)
                        if (result['check']) {
                            window.location.href = "http://demo.bispro.vn:8069/web/login?username=" + result['username'];
                        } else {
                            $('.alert-login').html(`
                        <div class="alert alert-danger col-12">
                            Tài khoản hoặc mật khẩu không chính xác
                        </div>
                    `)
                        }
                    }
                })
            } else {
                $('.alert-login').html(`
                <div class="alert alert-danger col-12">
                    Tổng không chính xác
                </div>
            `)
            }
        })
        //     // Tab pricing list
        // $('.tab-pane-2').click(function(e) {
        //     e.prevenDefault();
        //     $('.tab-pane-1').removeClass('active');
        // })

    $('.carousel-main').owlCarousel({
        items: 1,
        loop: true,
        autoplay: true,
        autoplayTimeout: 4000,
        margin: 10,
        nav: true,
        dots: false,
        navText: ['<span class="fa fa-chevron-left fa-2x"></span>','<span class="fa fa-chevron-right fa-2x"></span>'],
    })

    // Porfolio isotope and filter
    $(window).on('load', function() {
        var portfolioIsotope = $('.portfolio-container').isotope({
            itemSelector: '.portfolio-item'
        });
        $('#portfolio-flters li').on('click', function() {
            $("#portfolio-flters li").removeClass('filter-active');
            $(this).addClass('filter-active');

            portfolioIsotope.isotope({ filter: $(this).data('filter') });
        });
    });

    // Price list carousel (uses the Owl Carousel library)
    $(".price-carousel-1").owlCarousel({
        dots: true,
        responsive: {
            0: {
                items: 1,
                loop: true
            },
            768: {
                items: 1,
                loop: true
            },
            900: { items: 3 }
        }
    });

    $(".price-carousel").owlCarousel({
        dots: true,
        responsive: {
            0: {
                items: 1,
                loop: true
            },
            768: {
                items: 1,
                loop: true
            },
            900: { items: 3 }
        }
    });


    // Product carousel (uses the Owl Carousel library)
    $(".product-carousel").owlCarousel({
        dots: true,
        responsive: {
            0: {
                items: 1,
                loop: true
            },
            768: {
                items: 1,
                loop: true
            },
            900: { items: 4 }
        }
    });

    /* Video Lightbox - Magnific Popup */
    $('.popup-youtube, .popup-vimeo').magnificPopup({
        disableOn: 700,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false,
        iframe: {
            patterns: {
                youtube: {
                    index: 'youtube.com/',
                    id: function(url) {
                        var m = url.match(/[\\?\\&]v=([^\\?\\&]+)/);
                        if (!m || !m[1]) return null;
                        return m[1];
                    },
                    src: 'https://www.youtube.com/embed/%id%?autoplay=1'
                },
                vimeo: {
                    index: 'vimeo.com/',
                    id: function(url) {
                        var m = url.match(/(https?:\/\/)?(www.)?(player.)?vimeo.com\/([a-z]*\/)*([0-9]{6,11})[?]?.*/);
                        if (!m || !m[5]) return null;
                        return m[5];
                    },
                    src: 'https://player.vimeo.com/video/%id%?autoplay=1'
                }
            }
        }
    });


    /* Lightbox - Magnific Popup */
    $('.popup-with-move-anim').magnificPopup({
        type: 'inline',
        fixedContentPos: false,
        /* keep it false to avoid html tag shift with margin-right: 17px */
        fixedBgPos: true,
        overflowY: 'auto',
        closeBtnInside: true,
        preloader: false,
        midClick: true,
        removalDelay: 300,
        mainClass: 'my-mfp-slide-bottom',
        callbacks: {
            open: function() { // When you open the
                $('body').css('overflow', 'hidden'); // window, the element
            }, // "body" is used "overflow: hidden".

            close: function() { // When the window
                $('body').css('overflow', ''); // is closed, the
            }, // "overflow" gets the initial value.
        }
    });

})(jQuery);

$(document).ready(function() {
    $('input[name="numb1"]').val(Math.floor(Math.random() * 10));
    $('input[name="numb2"]').val(Math.floor(Math.random() * 10));


    $('#numb-login-1').val(Math.floor(Math.random() * 10));
    $('#numb-login-2').val(Math.floor(Math.random() * 10));

    $('.register').submit(function(e) {
        let numb1 =  $('input[name="numb1"]').val();
        let numb2 =  $('input[name="numb2"]').val();
        let sum = parseInt(numb2) + parseInt(numb1);
        if (numb1 && numb2 && sum == $('#result').val()) {
            e.submit();
        } else {
            $('.alert-register').html(`
                <div class="alert alert-danger w-100">
                    Kết quả không chính xác!
                </div>
            `)
            return false;
        }
    })

    $('.product-carousel .popup-with-move-anim').click(function() {
        $('#product').val($(this).attr("data-product"));
    })

    // Custom css by Thach
    $('.pricing-button a').click(function() {
        var row_price = $(this).closest('.single-pricing-table');
        var get_name_service = row_price.find('.pricing-table-heading h2').text();
        $('input[name="try_product"]').val(get_name_service);
    })

    var swiper = new Swiper('.swiper-container', {
        effect: 'coverflow',
        grabCursor: true,
        centeredSlides: true,
        loop: true,
        slidesPerView: 'auto',
        autoplay: 2000,
        coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: true,
        },
        pagination: '.swiper-pagination',
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev'
        },
    });
})

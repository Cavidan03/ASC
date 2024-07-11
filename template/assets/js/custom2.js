jQuery(document).ready(function ($) {

    "use strict";

    // Initialize tabs
    $(function () {
        $("#tabs").tabs();
    });

    // Page loading animation
    $("#preloader").animate({
        'opacity': '0'
    }, 600, function () {
        setTimeout(function () {
            $("#preloader").css("visibility", "hidden").fadeOut();
        }, 300);
    });

    // Scroll event
    $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        var box = $('.header-text').height();
        var header = $('header').height();

        if (scroll >= box - header) {
            $("header").addClass("background-header");
        } else {
            $("header").removeClass("background-header");
        }
    });

    // Initialize testimonials carousel
    if ($('.owl-testimonials').length) {
        $('.owl-testimonials').owlCarousel({
            loop: true,
            nav: false,
            dots: true,
            items: 1,
            margin: 30,
            autoplay: false,
            smartSpeed: 700,
            autoplayTimeout: 6000,
            responsive: {
                0: {
                    items: 1,
                    margin: 0
                },
                460: {
                    items: 1,
                    margin: 0
                },
                576: {
                    items: 2,
                    margin: 20
                },
                992: {
                    items: 2,
                    margin: 30
                }
            }
        });
    }

    // Initialize partners carousel
    if ($('.owl-partners').length) {
        $('.owl-partners').owlCarousel({
            loop: true,
            nav: false,
            dots: true,
            items: 1,
            margin: 30,
            autoplay: true,
            smartSpeed: 600,
            autoplayTimeout: 6000,
            responsive: {
                0: {
                    items: 1,
                    margin: 0
                },
                460: {
                    items: 1,
                    margin: 0
                },
                576: {
                    items: 2,
                    margin: 20
                },
                992: {
                    items: 4,
                    margin: 30
                }
            }
        });
    }

    // Initialize Modern Slider
    if ($('.Modern-Slider').length) {
        $(".Modern-Slider").slick({
            autoplay: true,
            autoplaySpeed: 10000,
            speed: 600,
            slidesToShow: 1,
            slidesToScroll: 1,
            pauseOnHover: false,
            dots: true,
            pauseOnDotsHover: true,
            cssEase: 'linear',
            draggable: false,
            prevArrow: '<button class="PrevArrow"></button>',
            nextArrow: '<button class="NextArrow"></button>',
        });
    }

    // Counter animation
    function visible(partial) {
        var $t = partial,
            $w = jQuery(window),
            viewTop = $w.scrollTop(),
            viewBottom = viewTop + $w.height(),
            _top = $t.offset().top,
            _bottom = _top + $t.height(),
            compareTop = partial === true ? _bottom : _top,
            compareBottom = partial === true ? _top : _bottom;

        return ((compareBottom <= viewBottom) && (compareTop >= viewTop) && $t.is(':visible'));
    }
    $(window).scroll(function() {
        if (visible($('.count-digit'))) {
            if ($('.count-digit').hasClass('counter-loaded')) return;
            $('.count-digit').addClass('counter-loaded');
    
            $('.count-digit').each(function () {
                var $this = $(this);
                var originalValue = parseFloat($this.text().replace('.', '').replace(',', '.')); // Sayıyı parse etmek için
                jQuery({ Counter: 0 }).animate({ Counter: originalValue }, {
                    duration: 3000,
                    easing: 'swing',
                    step: function (now) {
                        $this.text(formatNumber(Math.ceil(now * 100) / 100)); // Sayıyı yuvarla ve 2 ondalık hane ile sınırla
                    }
                });
            });
        }
    });
    
    // Sayıları formatlamak için yardımcı fonksiyon
    function formatNumber(num) {
        var parts = num.toFixed(2).toString().split(".");
        parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ".");
        parts[1] = parts[1].replace(/0+$/, ''); // Sondaki sıfırları kaldır
        if (parts[1].length === 0) {
            return parts[0]; // Ondalık kısım boşsa sadece tamsayı kısmını döndür
        }
        return parts.join(",");
    }
    
    // Görünürlük kontrolü için yardımcı fonksiyon
    function visible(element) {
        var $element = $(element);
        var $window = $(window);
        var viewTop = $window.scrollTop();
        var viewBottom = viewTop + $window.height();
        var top = $element.offset().top;
        var bottom = top + $element.height();
        return ((bottom <= viewBottom) && (top >= viewTop));
    }
    
});

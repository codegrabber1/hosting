// Page Loader
function pageLoader() {
    (function($) {
        "use strict";

        $(".loader-item").delay(700).fadeOut();

        $("#pageloader").delay(800).fadeOut("slow");
    })(jQuery);
}
function menu() {
    var $       = jQuery,
        body    = $('body'),
        primary = '.primary';

    $(primary).find('.parent > a .open-sub, .megamenu .title .open-sub').remove();

    if ((body.width() + scrollWidth) <= 979 || $('.header').hasClass('minimized-menu')) {
        $(primary).find('.parent > a, .megamenu .title').append('<span class="open-sub"><span></span><span></span></span>');
    } else {
        $(primary).find('ul').removeAttr('style').find('li').removeClass('active');
    }

    $(primary).find('.open-sub').click(function(event){
        event.preventDefault();

        var item = $(this).closest('li, .box');

        if ($(item).hasClass('active')) {
            $(item).children().last().slideUp(600);
            $(item).removeClass('active');
        } else {
            var li = $(this).closest('li, .box').parent('ul, .sub-list').children('li, .box');

            if ($(li).is('.active')) {
                $(li).removeClass('active').children('ul').slideUp(600);
            }

            $(item).children().last().slideDown(600);
            $(item).addClass('active');

            if (body.width() + scrollWidth >= 979) {
                var maxHeight = body.height() - ($(primary).find('.navbar-nav')).offset().top - 20;

                $(primary).find('.navbar-nav').css({
                    maxHeight : maxHeight,
                    overflow  : 'auto'
                });
            }
        }
    });

    $(primary).find('.parent > a').click(function(event){
        if (((body.width() + scrollWidth) > 979) &&  (navigator.userAgent.match(/iPad|iPhone|Android/i))) {
            var $this = $(this);

            if ($this.parent().hasClass('open')) {
                $this.parent().removeClass('open')
            } else {
                event.preventDefault();

                $this.parent().addClass('open')
            }
        }
    });

    body.on('click', function(event) {
        if (!$(event.target).is(primary + ' *')) {
            if ($(primary + ' .collapse').hasClass('in')) {
                $(primary + ' .navbar-toggle').addClass('collapsed');
                $(primary + ' .navbar-collapse').collapse('hide');
            }
        }
    });



    /* Top Menu */
    var topMenu = $('.top-navbar').find('.collapse');

    if ((body.width() + scrollWidth) < 768) {
        topMenu.css('width', body.width());
    } else {
        topMenu.css('width', 'auto');
    }
}
// Window Resize
(function() {
    var $ = jQuery;
    var delay = ( function() {
        var timeout = { };

        return function( callback, id, time ) {
            if( id !== null ) {
                time = ( time !== null ) ? time : 100;
                clearTimeout( timeout[ id ] );
                timeout[ id ] = setTimeout( callback, time );
            }
        };
    })();

    function resizeFunctions() {
        if (($('body').width + scrollWidth) > 767) {
            $('.viewport').remove();
        } else {
            $('head').append('<meta class="viewport" name="viewport" content="width=device-width, initial-scale=1.0">');
        }

        //Functions
        fullWidthBox();
        menu();
        footerStructure();
        tabs();
        modernGallery();
        animations();
        chart();
        isotopFilter();
        zoom();
        paralax();
        loginRegister();
        $('.modal-center:visible').each(centerModal);
        mistSlider();
        bannerSetCarousel();
        thumblist();
        carousel();
    }

    if(navigator.userAgent.match(/iPad|iPhone|Android/i)) {
        $(window).bind('orientationchange', function() {
            setTimeout(function() {
                resizeFunctions();
            }, 150);
        });
    } else {
        $(window).on('resize', function() {
            delay( function() {
                resizeFunctions();
            }, 'resize');
        });
    }
}
());
//Text Slider(Typed Text)
function typedSlider() {
    $(".element").each(function(){
        var $this = $(this);
        $this.typed({
            strings: $this.attr('data-elements').split(','),
            typeSpeed: 100, // typing speed
            backDelay: 3000 // pause before backspacing
        });
    });
}
$(document).ready(function(){
    // Revolution Slider
    if ($('.tp-banner').length) {
        var revolutionSlider = $('.tp-banner');

        if (revolutionSlider.closest('.rs-slider').hasClass('full-width')) {
            var body = $('body'),
                width = body.width(),
                topHeight = 0,
                headerHeight = 74,
                height;

            if ($('#top-box').length) {
                if (body.hasClass('hidden-top')) {
                    topHeight = $('#top-box').outerHeight() - 32;
                }
            }

            if ((body.width() + scrollWidth) >= 1200) {
                height = body.height() - (topHeight + headerHeight);
            } else {
                height = 800;
            }

            revolutionSlider.revolution({
                delay: 6000,
                startwidth: 1200,
                startheight: height,
                hideThumbs: 10,
                navigationType: 'bullet',
                navigationArrows: 'solo',
                navigationHAlign: 'center',
                navigationVAlign: 'top',
                navigationHOffset: -545,
                navigationVOffset: 30,
                hideTimerBar: 'off'
            }).parents('.slider').removeClass('load');
        } else {
            revolutionSlider.revolution({
                delay: 6000,
                startwidth: 1200,
                startheight: 700,
                hideThumbs: 10,
                navigationType: 'none',
                onHoverStop: 'off'
            }).parents('.slider').removeClass('load');
        }
    }
    // Language-Currency
    if( !navigator.userAgent.match(/iPad|iPhone|Android/i) ) {
        $('.language, .currency, .sort-by, .show-by').hover(function(){
            $(this).addClass('open');
        }, function(){
            $(this).removeClass('open');
        });
    }
    // Header Phone & Search
    $('.phone-header > a').click(function(event){
        event.preventDefault();
        $('.btn-group').removeClass('open');
        $('.phone-active').fadeIn().addClass('open');
        $('.header-wrapper .navbar').fadeIn().addClass('top-search-open');
    });
    $('.search-header > a').click(function(event){
        event.preventDefault();
        $('.btn-group').removeClass('open');
        $('.search-active').fadeIn().addClass('open');
        $('.header-wrapper .navbar').fadeIn().addClass('top-search-open');
    });
    $('.share-header > a').click(function(event){
        event.preventDefault();
        $('.btn-group').removeClass('open');
        $('.share-active').fadeIn().addClass('open');
        $('.header-wrapper .navbar').fadeIn().addClass('top-search-open');
    });

    $('.phone-active .close, .search-active .close, .share-active .close').click(function(event){
        event.preventDefault();
        $(this).parent().fadeOut().removeClass('open');
        $('.header-wrapper .navbar').fadeIn().removeClass('top-search-open');
    });

    $('body').on('click', function(event) {
        var phone  = '.phone-active',
            search = '.search-active',
            share = '.share-active';

        if ((!$(event.target).is(phone + ' *')) && (!$(event.target).is('.phone-header *'))) {
            if ($(phone).hasClass('open')) {
                $(phone).fadeOut().removeClass('open');
                $('.header-wrapper .navbar').fadeIn().removeClass('top-search-open');
            }
        }
        if ((!$(event.target).is(search + ' *')) && (!$(event.target).is('.search-header *'))) {
            if ($(search).hasClass('open')) {
                $(search).fadeOut().removeClass('open');
                $('.header-wrapper .navbar').fadeIn().removeClass('top-search-open');
            }
        }
        if ((!$(event.target).is(share + ' *')) && (!$(event.target).is('.share-header *'))) {
            if ($(share).hasClass('open')) {
                $(share).fadeOut().removeClass('open');
                $('.header-wrapper .navbar').fadeIn().removeClass('top-search-open');
            }
        }
    });
    // Menu > Sidebar
    $('.menu .parent:not(".active") a').next('.sub').css('display', 'none');
    $('.menu .parent a .open-sub').click(function(event){
        event.preventDefault();

        if ($(this).closest('.parent').hasClass('active')) {
            $(this).parent().next('.sub').slideUp(600);
            $(this).closest('.parent').removeClass('active');
        } else {
            $(this).parent().next('.sub').slideDown(600);
            $(this).closest('.parent').addClass('active');
        }
    });
    // Scrollbar
    $('.minimized-menu .primary .navbar-nav').scrollbar();


}); // end of ready.

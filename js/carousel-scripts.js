$('.jcarousel').on('jcarousel:create jcarousel:reload', function () {
    var element = $(this);
    width = element.innerWidth();
    element.jcarousel('items').css('width', width + 'px');
});
(function ($) {
    $(function () {
        $('[data-jcarousel]').each(function () {
            var el = $(this);
            el.jcarousel(el.data());
        });

        $('[data-jcarousel-control]').each(function () {
            var el = $(this);
            el.jcarouselControl(el.data());
        });
    });
})(jQuery);

// Carrusel básico

var current = 0;
var imagenes = new Array();

$(document).ready(function () {
    var numImages = 8;
    if (numImages <= 4) {
        $('.right-arrow').css('display', 'none');
        $('.left-arrow').css('display', 'none');
    }

    $('.left-arrow').on('click', function () {
        if (current > 0) {
            current = current - 1;
        } else {
            current = numImages - 4;
        }

        $(".carrusel").animate({ "left": -($('#product_' + current).position().left) }, 600);
        console.log(current);

        return false;
    });

    $('.right-arrow').on('click', function () {
        if (numImages > current + 4) {
            current = current + 1;
        } else if (numImages === current - 4) {

            $('.right-arrow').css({ display: 'none' });
        } else {
            current = 0;
        }

        $(".carrusel").animate({ "left": -($('#product_' + current).position().left) }, 600);
        console.log(current);

        return false;
    });
});
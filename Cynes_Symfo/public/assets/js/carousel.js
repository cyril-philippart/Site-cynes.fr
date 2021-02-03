var timer = 4000;

var i = 0;
var max = $('.carousel-ul > li').length;

if (window.matchMedia("(max-width: 768px)").matches) {
    $(".carousel-ul > li").eq(i).addClass('active').css('left', '0%');
    $(".carousel-ul > li").eq(i + 1).addClass('active').css('left', '50%');
} else {
    $(".carousel-ul > li").eq(i).addClass('active').css('left', '0');
    $(".carousel-ul > li").eq(i + 1).addClass('active').css('left', '25%');
    $(".carousel-ul > li").eq(i + 2).addClass('active').css('left', '50%');
}


setInterval(function () {

    $(".carousel-ul > li").removeClass('active');

    if (window.matchMedia("(max-width: 768px)").matches) {
        $(".carousel-ul > li").eq(i).css('transition-delay', '0.25s');
        $(".carousel-ul > li").eq(i + 1).css('transition-delay', '0.5s');
    } else {
        $(".carousel-ul > li").eq(i).css('transition-delay', '0.25s');
        $(".carousel-ul > li").eq(i + 1).css('transition-delay', '0.5s');
        $(".carousel-ul > li").eq(i + 2).css('transition-delay', '0.75s');
    }

    if (window.matchMedia("(max-width: 768px)").matches) {
        if (i < max - 2) {
            i = i + 2;
        }

        else {
            i = 0;
        }
    } else {
        if (i < max - 3) {
            i = i + 3;
        }

        else {
            i = 0;
        }
    }

    if (window.matchMedia("(max-width: 768px)").matches) {
        $(".carousel-ul > li").eq(i).css('left', '0%').addClass('active').css('transition-delay', '1.25s');
        $(".carousel-ul > li").eq(i + 1).css('left', '50%').addClass('active').css('transition-delay', '1.5s');
    } else {
        $(".carousel-ul > li").eq(i).css('left', '0').addClass('active').css('transition-delay', '1.25s');
        $(".carousel-ul > li").eq(i + 1).css('left', '25%').addClass('active').css('transition-delay', '1.5s');
        $(".carousel-ul > li").eq(i + 2).css('left', '50%').addClass('active').css('transition-delay', '1.75s');
    }
}, timer);
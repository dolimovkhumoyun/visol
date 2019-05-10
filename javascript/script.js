/* ==================================================================
|   |   |   |   |   |   |   |   Preloader   |    |   |   |   |   |   |
** =================================================================*/
$(window).on('load', function () {
    $('#status').delay(1000).fadeOut();
    $('#preloader').delay(1000).fadeOut();
});

///* ==================================================================
//|   |   |   |   |   |   |   |   Nav_Bar   |    |   |   |   |   |   |
//** =================================================================*/
$(function () {
    $(document).scroll(function () {
        var $nav = $(".navbar");
        $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
    });
});
var prevScrollpos = window.pageYOffset;
window.onscroll = function () {
    var currentScrollPos = window.pageYOffset;
    if (prevScrollpos > currentScrollPos) {
        document.getElementById("navbar").style.top = "0";
    } else {
        document.getElementById("navbar").style.top = "-100px";
    }
    prevScrollpos = currentScrollPos;
}


///* ==================================================================
//|   |   |   |   |   |   |   |   Nav_Bar   |    |   |   |   |   |   |
//** =================================================================*/
function scroll_to(clicked_link, nav_height) {
    var element_class = clicked_link.attr('href').replace('#', '.');
    var scroll_to = 0;
    if (element_class != '.top-content') {
        element_class += '-container';
        scroll_to = $(element_class).offset().top - nav_height;
    }
    if ($(window).scrollTop() != scroll_to) {
        $('html, body').stop().animate({
            scrollTop: scroll_to
        }, 1000);
    }
}


jQuery(document).ready(function () {


    new WOW().init();

});
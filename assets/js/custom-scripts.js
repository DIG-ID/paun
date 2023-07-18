jQuery(document).ready(function($) {
    $(window).scroll(function() {
        var header = $('#header-main');
        var logo = $('.header-logo');
        var scrollTop = $(window).scrollTop();
        var threshold = 300; // Adjust the value (in pixels) as needed
        var isSticky = header.hasClass('sticky');
    
        if (scrollTop > threshold && !isSticky) {
            header.addClass('sticky');
            logo.addClass('sticky-logo');
            logo.removeClass('transition-logo-width');
        } else if (scrollTop <= threshold && isSticky) {
            header.removeClass('sticky');
            logo.removeClass('sticky-logo');
            logo.addClass('transition-logo-width');
        }
    });
});
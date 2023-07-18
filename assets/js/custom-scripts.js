jQuery(document).ready(function($) {
    function debounce(func, delay) {
        let timer;
        return function() {
          clearTimeout(timer);
          timer = setTimeout(func, delay);
        };
      }
      
      $(window).scroll(debounce(function() {
        var header = $('#header-main');
        var logo = $('.header-logo');
        var scrollTop = $(window).scrollTop();
        var threshold = 0; // Adjust the value (in pixels) as needed
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
      }, 50)); // Adjust the debounce delay (in milliseconds) as needed
});
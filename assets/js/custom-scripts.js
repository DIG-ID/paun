jQuery(document).ready(function($) {
  /*if ($(window).width() > 640) {
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
      var threshold = 0; 
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
    }, 50)); 
  }

  if ($(window).width() < 640) {
    $(window).scroll(function() {
      var header = $('#header-main');
      var maincontent = $('#main-content');
      var logo = $('.header-logo');
      var scrollTop = $(window).scrollTop();
      var threshold = 0; 
      var isSticky = header.hasClass('sticky');
    
      if (scrollTop > threshold && !isSticky) {
        header.addClass('sticky');
        maincontent.addClass( 'content-padding-top' );
        logo.removeClass('transition-logo-width');
      } else if (scrollTop <= threshold && isSticky) {
        header.removeClass('sticky');
        maincontent.removeClass( 'content-padding-top' );
        logo.addClass('transition-logo-width');
      }
    });

  }*/
});
jQuery(document).ready(function($) {
    // Wait for the document to be fully loaded
    $(document).ready(function() {
      // Check for wheel event support (modern browsers)
      if ('onwheel' in document) {
        // Set the scroll behavior to smooth
        document.querySelector('html').style.scrollBehavior = 'smooth';
      } else {
        // For older browsers, use polyfill (optional)
        var script = document.createElement('script');
        script.src = 'https://cdnjs.cloudflare.com/ajax/libs/smoothscroll/1.4.10/SmoothScroll.min.js';
        document.getElementsByTagName('head')[0].appendChild(script);
      }
    });
  
  if ($(window).width() < 640) {
    $(window).scroll(function() {
      var header = $('#header-main');
      var maincontent = $('#main-content');
      var logo = $('.header-logo');
      var scrollTop = $(window).scrollTop();
      var threshold = 70; 
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
  }

});
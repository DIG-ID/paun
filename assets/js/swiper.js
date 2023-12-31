import Swiper from 'swiper/bundle';
// wait until DOM is ready
document.addEventListener("DOMContentLoaded", () => {
  //wait until images, links, fonts, stylesheets, and js is loaded
  window.addEventListener("load", () => {

    if (document.body.classList.contains("page-template-page-home")) {

      const agendaEventsSwiper = new Swiper('.swiper-angebote-home', {
        pagination: {
          el: '.swiper-pagination-angebote',
          clickable: true,
          renderBullet: function (index, className) {
            return '<span class="' + className + ' font-titles text-text-color text-3xl">' + (index + 1) + '</span>';
          },
        },
      });

      const nextSlideArrow = document.getElementById('nextSlideArrow');
      if (nextSlideArrow) {
        nextSlideArrow.addEventListener('click', function (e) {
          // Trigger the next slide action
          e.preventDefault();
          agendaEventsSwiper.slideNext();
        });
      }

      const prevSlideArrow = document.getElementById('prevSlideArrow');
      if (prevSlideArrow) {
        prevSlideArrow.addEventListener('click', function (e) {
          // Trigger the previous slide action
          e.preventDefault();
          agendaEventsSwiper.slidePrev();
        });
      }

    }
    
  }, false);
});

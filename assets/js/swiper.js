import Swiper from 'swiper/bundle';
// wait until DOM is ready
document.addEventListener("DOMContentLoaded", () => {
  //wait until images, links, fonts, stylesheets, and js is loaded
  window.addEventListener("load", () => {

    if (document.body.classList.contains("page-template-page-home")) {

      const agendaEventsSwiper = new Swiper('.swiper-angebote-home', {
        direction: 'horizontal',
        slidesPerView: 1,
        slidesPerGroup :3,
        grid: {
          rows: 3,
          fill: 'row',
        },
        pagination: {
          el: '.swiper-pagination-angebote',
          clickable: true,
          renderBullet: function (index, className) {
            return '<span class="' + className + '">' + (index + 1) + '</span>';
          },
        },
      });

    }
    
  }, false);
});

import Swiper from 'swiper/bundle';
// wait until DOM is ready
document.addEventListener("DOMContentLoaded", () => {
  //wait until images, links, fonts, stylesheets, and js is loaded
  window.addEventListener("load", () => {

    if (document.body.classList.contains("page-template-page-home")) {

      const agendaEventsSwiper = new Swiper('.swiper-angebote-home', {
        direction: 'horizontal',
        slidesPerView: 'auto',
        freeMode: true,
        pagination: {
          el: '.swiper-pagination-angebote',
          clickable: true,
          renderBullet: function (index, className) {
            return '<span class="' + className + '">' + (index + 1) + '</span>';
          },
        },
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
      });

      const angebotesSwiper = new Swiper('.swiper-container', {
        slidesPerView: 3,
        slidesPerColumn: 3,
        slidesPerColumnFill: "row",
        slidesPerGroup: 3,
        spaceBetween: 30,
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
      });

    }
    
  }, false);
});

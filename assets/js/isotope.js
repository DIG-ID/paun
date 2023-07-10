import Isotope from 'isotope-layout';
// wait until DOM is ready
document.addEventListener("DOMContentLoaded", () => {
  //wait until images, links, fonts, stylesheets, and js is loaded
  window.addEventListener("load", () => {

    if (document.body.classList.contains("blog")) {
      var grid = new Isotope('.blog-grid', {
        itemSelector: '.card-blog',
        //layoutMode: 'fitRows',
        stagger: 30,
        masonry: {
          // set to the element
          columnWidth: '.card-blog',
          gutter: 20,
        }
      });
      
      var filtersElem = document.querySelector('.filters-button-group');
      filtersElem.addEventListener('click', function(event) {
        if (event.target.matches('button')) {
          var filterValue = event.target.getAttribute('data-filter');
          grid.arrange({ filter: filterValue });
          var buttonGroup = event.target.parentNode;
          buttonGroup.querySelectorAll('button').forEach(function(button) {
            button.classList.toggle('is-checked', button === event.target);
          });
        }
      });
    }

  }, false);
});

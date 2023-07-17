jQuery(document).ready(function($) {
    var container = $('#angebote-container');
    var pagination = $('#pagination');
    var currentPage = 1;
    var totalPages = pagination.find('.page').length;
  
    function showPage(page) {
      container.find('.angebot').hide();
      container.find('.angebot[data-page="' + page + '"]').show();
    }
  
    pagination.on('click', '.page', function() {
      var page = $(this).data('page');
      showPage(page);
      currentPage = page;
    });
  
    function loadPosts(page) {
      $.ajax({
        url: customPagination.ajaxUrl,
        type: 'post',
        data: {
          action: 'load_angebote',
          page: page,
        },
        success: function(response) {
          container.html(response);
          showPage(currentPage);
        }
      });
    }
  
    loadPosts(currentPage);
  
    // Optional: If you want to display the numeric pagination links dynamically
    function generatePagination() {
      var links = '';
      for (var i = 1; i <= totalPages; i++) {
        links += '<span class="page" data-page="' + i + '">' + i + '</span>';
      }
      pagination.html(links);
    }
  
    generatePagination();
  });
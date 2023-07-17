jQuery(document).ready(function($) {
  var page = 1;
  var loading = false;
  var $angeboteWrapper = $('.angebote-wrapper');
  
  function loadPosts() {
      $.ajax({
          url: ajaxpagination.ajaxurl,
          type: 'post',
          data: {
              action: 'ajax_pagination',
              page: page,
              nonce: ajaxpagination.nonce
          },
          beforeSend: function() {
              loading = true;
              // Display a loading spinner or message
              $angeboteWrapper.append('<div class="loading-message">Loading...</div>');
          },
          success: function(response) {
              if (response && response.success) {
                  var $newPosts = $(response.data.posts);
                  $angeboteWrapper.append($newPosts);
                  page++;
              } else {
                  // Handle error or end of posts
              }
              loading = false;
              // Remove the loading spinner or message
              $('.loading-message').remove();
          },
          error: function(xhr, textStatus, errorThrown) {
              // Handle error
              loading = false;
              $('.loading-message').remove();
          }
      });
  }

  $(window).scroll(function() {
      if (!loading && $(window).scrollTop() + $(window).height() >= $angeboteWrapper.offset().top + $angeboteWrapper.outerHeight()) {
          loadPosts();
      }
  });
});
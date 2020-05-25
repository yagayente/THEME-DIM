jQuery(document).ready(function($) {

  function sticktothetop() {

        var window_top = $(window).scrollTop();
          var top = $('#stick-here').offset().top;
          if (window_top > top) {
              $('#illustrationarticle').addClass('stick');
              $('#stick-here').height($('#stickThis').outerHeight());
          } else {
              $('#illustrationarticle').removeClass('stick');
              $('#stick-here').height(0);
          }
      }

  $(function() {
      $(window).scroll(sticktothetop);
      sticktothetop();
  });


    function sticktothetoptwo() {

          var window_top = $(window).scrollTop();
            var top = $('#stick-ici').offset().top;
            if (window_top > top) {
                $('#entry_header').addClass('stick');
                $('#stick-ici').height($('#stickThis').outerHeight());
                $('#espaceblanc').css('margin-top', $('#entry_header').outerHeight());
            } else {
                $('#entry_header').removeClass('stick');
                $('#stick-ici').height(0);
                $('#espaceblanc').css('margin-top', '');
            }
        }

    $(function() {
        $(window).scroll(sticktothetoptwo);
        sticktothetoptwo();
    });



})

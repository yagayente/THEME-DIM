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


  function sticktothetopproject() {

        var window_top = $(window).scrollTop();
          var top = $('#stick-here').offset().top;
          if (window_top > top) {
              $('#illustrationprojet').addClass('stick');
              $('#stick-here').height($('#stickThis').outerHeight());
          } else {
              $('#illustrationprojet').removeClass('stick');
              $('#stick-here').height(0);
          }
      }

  $(function() {
      $(window).scroll(sticktothetopproject);
      sticktothetopproject();
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



    function sticktothetoptwoprojets() {

          var window_top = $(window).scrollTop();
            var top = $('#stick-ici-projets').offset().top;
            if (window_top > top) {
                $('#entry-header_projet').addClass('stick');
                $('#stick-ici-projets').height($('#stickThis').outerHeight());
                $('#espaceblanc').css('margin-top', $('#entry-header_projet').outerHeight());
            } else {
                $('#entry-header_projet').removeClass('stick');
                $('#stick-ici-projets').height(0);
                $('#espaceblancprojets').css('margin-top', '');
            }
        }

    $(function() {
        $(window).scroll(sticktothetoptwoprojets);
        sticktothetoptwoprojets();
    });


})

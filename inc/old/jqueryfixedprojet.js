jQuery(document).ready(function($) {

                    function sticktothetopproject() {

                          var window_top = $(window).scrollTop();
                            var top = $('#stick-here-projets').offset().top;
                            if (window_top > top) {
                                $('#illustrationprojet').addClass('stick');
                                $('#stick-here-projets').height($('#stickThis').outerHeight());
                            } else {
                                $('#illustrationprojet').removeClass('stick');
                                $('#stick-here-projets').height(0);
                            }
                        }

                    $(function() {
                        $(window).scroll(sticktothetopproject);
                        sticktothetopproject();
                    });

                    function sticktothetoptwoprojets() {

                          var window_top = $(window).scrollTop();
                            var top = $('#stick-ici-projets').offset().top;
                            if (window_top > top) {
                                $('#entryheaderprojet').addClass('stick');
                                $('#stick-ici-projets').height($('#stickThis').outerHeight());
                                $('#espaceblancprojets').css('margin-top', $('#entryheaderprojet').outerHeight());
                            } else {
                                $('#entryheaderprojet').removeClass('stick');
                                $('#stick-ici-projets').height(0);
                                $('#espaceblancprojets').css('margin-top', '');
                            }
                        }

                    $(function() {
                        $(window).scroll(sticktothetoptwoprojets);
                        sticktothetoptwoprojets();
                    });

})

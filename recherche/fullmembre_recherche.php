<?php
/**
 * Template part for displaying posts of membres entirely

 */

?>
<script>
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

</script>
<div id="stick-here-projets"></div>
<div id="stick-ici-projets"></div>


      <svg version="1.1" width="0" height="0" class="filter-rot">

            <filter id="traitement_couleur_1">
             <feColorMatrix type="matrix"
                values=".33 .33 .33 0 0
                        .33 .33 .33 0 0
                        .33 .33 .33 0 0
                        0 0 0 1 0" >
              </feColorMatrix>
              <feComponentTransfer color-interpolation-filters="sRGB">
                <feFuncR type="table" tableValues="0.84 1"/>
                <feFuncG type="table" tableValues="0 1"/>
                <feFuncB type="table" tableValues="0.06 0.78"/>
                <feFuncA type="table" tableValues="0 1"/>
              </feComponentTransfer>
             </filter>

      </svg>

		  <div class="illustration_projet" id="illustrationprojet" style="background-image: url('<?php echo get_field('image_copie'); ?>')">
      </div>







 <div class="structure_de_page_fullarticle">

 <div class="article_complet">
  <div class="entryheaderprojet" id="entryheaderprojet">
    	<div class="title_project">
        <h3>
  		<a href="<?php the_permalink(); ?>" class="bar" rel="<?php the_ID(); ?>" title="<?php the_title(); ?>">
  			<?php the_title(); ?></a>
  		</h3>
    </div>
    	<p class="time"><?php the_time('j F Y'); ?></p>

  	</div><!-- .entry-header -->


	<div class="entry-content" >
    <div id="espaceblancprojets">&nbsp</div>

      <h4>Le projet</h4><!-- A traduire -->

		<?php the_content(); ?>
			<br>
    <h4>Les Membres</h4><!-- A traduire -->






</div>
<div class="footer_post_structure">

    <?php
    get_footer(); ?>

</div>

<?php
/**
 * Template part for displaying un full post

 */

?>
<script>
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
</script>


<div id="stick-here"></div>
<div id="stick-ici"></div>


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


		  <div class="illustration_article" id="illustrationarticle" style="background-image: url('<?php echo get_field('image'); ?>')">
      </div>







 <div class="structure_de_page_fullarticle">

 <div class="article_complet">
  <div class="entry-header" id="entry_header">
    	<h3>
  		<a href="<?php the_permalink(); ?>" class="bar" rel="<?php the_ID(); ?>" title="<?php the_title(); ?>">
  			<?php the_title(); ?></a>
  		</h3>

    	<p class="time"><?php the_time('j F Y'); ?></p>

  	</div><!-- .entry-header -->


	<div class="entry-content" >
    <div id="espaceblanc">&nbsp</div>
    <?php the_category( '' ); ?>

        <div class="formatingtext">

          	<?php the_content(); ?>
        		<?php $imageID = get_field('image_de_larticle'); ?>
        		<?php $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true); ?>
        		<img class="lazy" <?php awesome_acf_responsive_image(get_field( 'image_de_larticle' ),'thumb-640','100%'); ?>  alt="<?php echo $alt_text; ?>" />
        		<br>

        </div>
        	<?php wcr_share_buttons(); ?>
  </div>

<div class="footer_post_structure">
    <?php
    get_footer(); ?>

</div>

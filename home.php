<?php
/*
Template Name: Home
*/
get_header();
?>


<div class="row">

		  <div class="Navigation_recherche_home" style="background-color:pink" id="colonnetaille">


              <?php
      // Aller chercher le contenu de la page home
      $mainquery = get_queried_object();

      $args = array(
          'pagename' => 'Accueil'
      );

      $query = new WP_Query($args);
      if ($query->have_posts()) {
          while ($query->have_posts()) {
              $query->the_post();
      ?>


        <?php
        $images = get_field('gallerie_homepage');
        $rand = array_rand($images, 1);
        if( $images ): ?>
                    <svg version="1.1" width="0" height="0" class="filter-rot">

											<filter id="traitement_couleur_1" x="-10%" y="-10%" width="120%" height="120%" filterUnits="objectBoundingBox" primitiveUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
											<feColorMatrix type="matrix" values=".33 .33 .33 0 0
											            .33 .33 .33 0 0
											            .33 .33 .33 0 0
											            0 0 0 1 0" in="SourceGraphic" result="colormatrix"/>
											<feComponentTransfer in="colormatrix" result="componentTransfer">
											    <feFuncR type="table" tableValues="0.85 1"/>
											<feFuncG type="table" tableValues="0.29 0.97"/>
											<feFuncB type="table" tableValues="0.12 0.97"/>
											<feFuncA type="table" tableValues="0 1"/>
											  </feComponentTransfer>
											<feBlend mode="normal" in="componentTransfer" in2="SourceGraphic" result="blend"/>
											</filter>

                    </svg>


                    <div class="illustration_home" id="illustration_home" style="background-image: url('<?php echo $images[$rand]; ?>');"></div>

      <?php endif; ?>
  </div><!-- image block  -->
  <div class="structure_de_page_recherche">
                <div class="intro">

											<div class="screen">
												<div id="norm"><?php the_field('introduction'); ?></div>
												<div id="mobile">
													<div class="abovethetext">
													<div class="but"><span class="button_text"><?php pll_e('lire_plus'); ?></span><p class="font_size">&nbsp</p></div>
													</div>

													<section class="demo" id="demo">
													<?php the_field('introduction'); ?>
													</section>
												</div>
											</div>
								</div>

    </div>
</div><!-- Row -->

<div class="display_article">
        <?php
    }
}
// Restore original post data.
wp_reset_postdata();

// Aller prendre mes posts + post type
global $wp_query;
$args = array_merge($wp_query->query, array(
    'post_type' => array(
        'post',
    ),
    'posts_per_page' => 3
));
if (query_posts($args)):
    while (have_posts()):
        the_post();
        get_template_part('template-parts/content', 'content');
    endwhile;
else:
    get_template_part('template-parts/none', 'none');
endif;
?>
</div><!-- structure_de_page_2 -->

<script type="text/javascript">
var textHolder = document.querySelector('.demo');
var textover = document.querySelector('.abovethetext');
var btn = document.querySelector('.but');

function toggleText() {
  textHolder.classList.toggle("truncate");
}

function toggleText2() {
	textover.classList.toggle("truncatenone");
}


textover.addEventListener('click', toggleText); toggleText(); //to truncate at first time
textHolder.addEventListener('click', toggleText);  //to truncate at first time

textover.addEventListener('click', toggleText2);
textHolder.addEventListener('click', toggleText2);  //to truncate at first time

</script>

<div class="structure_de_page_articlefooterhome">
    <?php
    get_footer(); ?>
</div>

<?php get_header(); ?>

		<?php
		// Show the selected front page content.
		if ( have_posts() ) :
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content', 'content' );
			endwhile;
			else :
				get_template_part( 'template-parts/none', 'none' );
			endif;
		?>

<div class="structure_de_page_articlefooterhome">
    <?php
    get_footer(); ?>
</div>

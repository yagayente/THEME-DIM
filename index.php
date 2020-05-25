<?php get_header(); ?>


<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

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

	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();

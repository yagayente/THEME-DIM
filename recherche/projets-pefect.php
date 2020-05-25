<?php
/*
Template Name: Projets
*/
get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php
		$args = array(
			'post_type'   => 'Projets',
			'post_status' => 'publish',
		 );

		$Projets = new WP_Query( $args );
		if( $Projets->have_posts() ) :

			while( $Projets->have_posts() ) :
				$Projets->the_post();
				get_template_part( 'template-parts/previewprojet', 'previewprojet' );
			endwhile;
			wp_reset_postdata();
			else :
				get_template_part( 'template-parts/none', 'none' );
			endif;
		?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();

<?php
/*
Template Name: Membres
*/
get_header(); ?>

MEMBRES

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php
		$args = array(
			'post_type'   => 'Membres',
			'post_status' => 'publish',
		 );

		$Membres = new WP_Query( $args );
		if( $Membres->have_posts() ) :

			while( $Membres->have_posts() ) :
				$Membres->the_post();
				get_template_part( 'template-parts/previewmembre', 'previewmembre' );
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

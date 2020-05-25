<?php
/*
Template Name: Single
*/
get_header(); ?>

	<?php
			// include custom post types in loop
			global $wp_query;
			$args = array_merge( $wp_query->query, array( 'post_type' => array('post','Projets','Membres')) );
			if ( query_posts($args) ) :

			// classic loop
			while ( have_posts() ) : the_post();
					get_template_part( 'template-parts/fullarticle', 'fullarticle' );
			endwhile;
			else :
				get_template_part( 'template-parts/none', 'none' );
			endif;
			?>


</div><!-- #primary -->

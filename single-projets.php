<?php
/*
Template Name: Single projets
*/
get_header(); ?>


		<?php
			// include custom post types in loop
			global $wp_query;
			$args = array_merge( $wp_query->query, array( 'post_type' => array('post','Projets','Membres'), 'posts_per_page' => 3, ) );
			if ( query_posts($args) ) :

			// classic loop
			while ( have_posts() ) : the_post();
					get_template_part( 'template-parts/fullprojet', 'fullprojet' );
			endwhile;
			else :
				get_template_part( 'template-parts/none', 'none' );
			endif;
			?>



</div><!-- #primary -->

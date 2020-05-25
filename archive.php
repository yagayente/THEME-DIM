<?php
/*
Template Name: Archive
*/
get_header(); ?>

      <section class="archive">

        <?php
           the_archive_title( '<h2 class="page-title">', '</h2>' );
          ?>

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

      </section>

<?php get_footer();

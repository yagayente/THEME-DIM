<?php get_header(); ?>


<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

	<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
				<header class="entry-header">
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>

				</header><!-- .entry-header -->

				<div class="entry-content">
					<?php the_content(); ?>

				</div><!-- .entry-content -->
		<?php endwhile; ?>
		<?php else : ?>
		<h2>Erreur</h2>
		<?php endif; ?>


	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();

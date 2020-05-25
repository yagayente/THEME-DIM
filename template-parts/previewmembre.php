<?php
/**
 * Template part for displaying posts of membres

 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<h3>
		<a href="<?php the_permalink(); ?>" class="bar" rel="<?php the_ID(); ?>" title="<?php the_title(); ?>">
			<?php the_title(); ?>
		</a>
		</h3>
	</header><!-- .entry-header -->


		<div class="entry-content">
			<?php the_excerpt(); ?>
				<br>
		</div>
		</div><!-- .entry-content -->

<br>
</article><!-- #post-<?php the_ID(); ?> -->

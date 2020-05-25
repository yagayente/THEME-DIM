<?php
/**
 * Template part for displaying un extrait de posts > For home and search
 */
?>

<div class="search_post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<h3>
		<a href="<?php the_permalink(); ?>" class="bar" rel="<?php the_ID(); ?>" title="<?php the_title(); ?>">
			<?php the_title(); ?>
		</a>
		</h3>
<?php the_time('d-m-y'); ?>
			</header><!-- .entry-header -->
		<div class="entry-content">
		<?php the_excerpt(); ?>
		</div><!-- .entry-content -->

	<div class="lancementverspost">
	<div class="illustrations_darticle" style="background-image: url('http://flutiste.fr/wp-content/uploads/2019/03/LESCALIER-VISUEL-LANCEMENT-SITE-V1.jpg');"></div>
	<div class="categ"><?php the_category( ' ' ); ?></div>
	</div>
</div>

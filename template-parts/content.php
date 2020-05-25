<?php
/**
 * Template part for displaying un extrait de posts > For home and search

 */

?>


<article class="projets" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<a class="allpostlink" href="<?php the_permalink(); ?>">

	<header class="entry-header-home">
		<div class="subwhite">
					<h3>
					<p class="bar" rel="<?php the_ID(); ?>" title="<?php the_title(); ?>">
						<?php the_title(); ?>
					</p>
					</h3>

						<p class="timeit"><?php the_time('j F Y'); ?></p>
						<div class="content_preview"><?php the_excerpt(); ?></div>
			</div>
</a>

	<?php the_category(); ?>
	</header><!-- .entry-header -->



	<a class="allpostlink" href="<?php the_permalink(); ?>">
	<svg version="1.1" width="0" height="0" class="filter-rot">

				<filter id="traitement_couleur_1">
				 <feColorMatrix type="matrix"
						values=".33 .33 .33 0 0
										.33 .33 .33 0 0
										.33 .33 .33 0 0
										0 0 0 1 0" >
					</feColorMatrix>
					<feComponentTransfer color-interpolation-filters="sRGB">
						<feFuncR type="table" tableValues="0.84 1"/>
						<feFuncG type="table" tableValues="0 1"/>
						<feFuncB type="table" tableValues="0.06 0.78"/>
						<feFuncA type="table" tableValues="0 1"/>
					</feComponentTransfer>
				 </filter>

	</svg>




	<picture class="article_home_images">
	<img <?php awesome_acf_responsive_image(get_field( 'image' ),'2-width','640px'); ?>  alt="text" />
	</picture>
	</a>
</article><!-- #post-<?php the_ID(); ?> -->

<?php
/**
 * Template part for displaying un extrait de posts

 */

?>
<article class="projets" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<a class="allpostlink" href="<?php the_permalink(); ?>">

	<header class="entry-header">
		<div class="subwhite">
					<h3 class="bar" rel="<?php the_ID(); ?>" title="<?php the_title(); ?>">
						<?php the_title(); ?>
					</h3>


				</div>
	</a>


<?php the_category(); ?>

	</header><!-- .entry-header -->

	<a class="allpostlink" href="<?php the_permalink(); ?>">
	<svg version="1.1" width="0" height="0" class="filter-rot">

		<filter id="traitement_couleur_1" x="-10%" y="-10%" width="120%" height="120%" filterUnits="objectBoundingBox" primitiveUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
		<feColorMatrix type="matrix" values=".33 .33 .33 0 0
								.33 .33 .33 0 0
								.33 .33 .33 0 0
								0 0 0 1 0" in="SourceGraphic" result="colormatrix"/>
		<feComponentTransfer in="colormatrix" result="componentTransfer">
				<feFuncR type="table" tableValues="0.85 1"/>
		<feFuncG type="table" tableValues="0.29 0.97"/>
		<feFuncB type="table" tableValues="0.12 0.97"/>
		<feFuncA type="table" tableValues="0 1"/>
			</feComponentTransfer>
		<feBlend mode="normal" in="componentTransfer" in2="SourceGraphic" result="blend"/>
		</filter>
		
	</svg>

	<picture class="article_search_images">
	<img <?php awesome_acf_responsive_image(get_field( 'image' ),'2-width','640px'); ?>  alt="text" />
	</picture>

		</a>

</article><!-- #post-<?php the_ID(); ?> -->

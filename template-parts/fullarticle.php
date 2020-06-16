<?php
/**
 * Template part for displaying un full article

 */

get_header(); ?>


<div class="prez_gauche_projet">

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


					<picture class="article_illustration">
					<img <?php awesome_acf_responsive_image(get_field( 'image' ),'2-width','640px'); ?>  alt="text" />
					</picture>

</div><!-- .prez_gauche -->

<main class="Site-content">
<div class="row_prez">


				 <div class="prez_droite_projet">

           <div class="article_complet">

									  		<div class="entryheaderprojet" id="entryheaderprojet">
				                			<div class="title_project">
																<h2>
															 <?php the_title(); ?>
															 </h2>
				              				</div>

															<p class="time"><?php the_time('d - m - Y'); ?></p>


				              	</div><!-- .entry-header -->

  			<div class="entry-content">

					<div class="contenu_article">
							<?php the_category( '' ); ?>

								<div class="formatingtext">
										<?php the_content(); ?>
								</div>

							<?php wcr_share_buttons(); ?>

					</div>

					</div><!-- entry content -->
				</div><!-- Article complet -->
				</div><!-- Prez droite -->

</div><!-- Row -->
</main>
<div class="structure_de_page_articlefooter">
    <?php
    get_footer(); ?>
</div>

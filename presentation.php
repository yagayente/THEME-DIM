<?php
/*
Template Name: Présentation
*/
get_header(); ?>

<div class="row_prez">

					<div class="prez_gauche">

							<div class="stickyprez" id="stick">
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

								<picture class="image_presentation">
								<img <?php awesome_acf_responsive_image(get_field( 'image_presentation' ),'2-width','640px'); ?>  alt="text" />
								</picture>



							</div><!-- .stickyprez -->
					</div><!-- .prez_gauche -->



				 <div class="prez_droite">

												<?php
												// Show the selected front page content.
												if ( have_posts() ) :
													while ( have_posts() ) :
														the_post();
														get_template_part( 'template-parts/basic', 'basic' );
													endwhile;
													else :
														get_template_part( 'template-parts/none', 'none' );
													endif;
												?>
				 	</div>

</div>
</div><!-- Row -->



<div class="structure_de_page_articlefooter">
    <?php
    get_footer(); ?>
</div>

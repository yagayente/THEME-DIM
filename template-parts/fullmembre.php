<?php
/**
 * Template part - full membre
 */

get_header(); ?>

<div class="row_prez">

					<div class="prez_gauche">

							<div class="stickyprez" id="stick">
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

								<picture class="image_presentation">
								<img <?php awesome_acf_responsive_image(get_field( 'image_membre' ),'2-width','640px'); ?>  alt="text" />
								</picture>



							</div><!-- .stickyprez -->
					</div><!-- .prez_gauche -->



				 <div class="prez_droite">

						<script type="text/javascript">
						$(document).ready(function(){$(".accordionButton").click(function(){$(".accordionButton").removeClass("on"),$(".accordionContent").slideUp("normal"),1==$(this).next().is(":hidden")&&($(this).addClass("on"),$(this).next().slideDown("normal"))}),$(".accordionButton").mouseover(function(){$(this).addClass("over")}).mouseout(function(){$(this).removeClass("over")}),$(".accordionContent").hide()});
						</script>
						 <div class="basic">
										 <h2>
											 <?php the_title(); ?>
										 </h2>

											<div class="about_membre">
												<?php the_field( 'a_propos_du_membre' ); ?>
											</div>	
											 <div id="wrapper">
											 <?php
											 if( have_rows('presentation_membre') ):
											 while ( have_rows('presentation_membre') ) : the_row();
											 ?>
															 <div class="accordionButton"><h3><?php the_sub_field('titre');	?></h3></div>
															 <div class="accordionContent">
																 <div class="texte">
																	 <div class="formatingtext">

																		 <?php	the_sub_field('content');	?>
																	 </div>
																 </div>
															 </div>
															 <?php
													 endwhile;
											 else :
											 endif;
											 ?>
											 </div>

							 </div>
							 <div class="footer_post_structure">
					 				<?php
					 				get_footer(); ?>
					 		</div><!-- footer_post_structure -->

</div>
</div><!-- Row -->

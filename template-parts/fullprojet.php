<?php
/**
 * Template part for displaying un full project

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
<!--
<script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>-->

<main class="Site-content">
<div class="row_prez">





				 <div class="prez_droite_projet">

           <div class="article_complet">

									  		<div class="entryheaderprojet" id="entryheaderprojet">
				                			<div class="title_project">
									                  <h2><a href="<?php the_permalink(); ?>" class="bar" rel="<?php the_ID(); ?>" title="<?php the_title(); ?>">
									                  <?php the_title(); ?></a>
									                	</h2>
				              				</div>

				              	</div><!-- .entry-header -->


  			<div class="entry-content">

					<div class="details_bellow">

													<?php if( have_rows('detail') ): ?>
														<ul class="slides">
														<?php while( have_rows('detail') ): the_row();
															$content = get_sub_field('signe');
															$content2 = get_sub_field('detail_inside');  ?>

															<li class="slide">
																<?php if( $content ): ?>
																<div class="left_span"><?php echo $content; ?></div>
																<?php endif; ?>

																<?php if( $content2 ): ?>
																<div class="right_span"><?php echo $content2; ?></div>
																<?php endif; ?>
															</li>
														<?php endwhile; ?>
														</ul>

													<?php endif; ?>

					</div><!-- details bellow -->



					<script type="text/javascript">
					$(document).ready(function() {

			//ACCORDION BUTTON ACTION
			$('div.accordionButton').click(function() {

			if($(this).next().is(':visible')) {
				$('div.accordionContent').slideUp('normal');
			} else {
				$('div.accordionContent').slideUp('normal');
				$(this).next().slideDown('normal');
			}
		});

	        //HIDE THE DIVS ON PAGE LOAD
		$("div.accordionContent").show();
	});
	</script>




					<div id="wrapper">
						<?php
						if( have_rows('projet_content') ):
						while ( have_rows('projet_content') ) : the_row();
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

															<div class="accordionButton">	<h3><?php pll_e('les_membres'); ?></h3></div>


															<div class="accordionContent">
																			<div class="formatingtext">




















																										<?php if ( have_rows( 'membres_projet' ) ): ?>
																											<?php while ( have_rows( 'membres_projet' ) ) : the_row(); ?>

																												<?php if ( get_row_layout() == 'membresDIMSTCN' ) : ?>

																													<span class="bolder"><?php the_sub_field( 'titre_membre' ); ?></span><br>
																													<div class="leader">
																													<?php if ( have_rows( 'membre-DIMSTCN_1' ) ): ?>
																														<?php while ( have_rows( 'membre-DIMSTCN_1' ) ) : the_row(); ?>
																															<div class="members_case">
																															<?php if ( get_row_layout() == 'membre_enregistre' ) : ?>

																																<?php $lien_1 = get_sub_field( 'lien_1' ); ?>
																																<?php if ( $lien_1 ) : ?>
																																	<a href="<?php echo esc_url( $lien_1); ?>"><?php the_sub_field( 'Nom_du_membre_1' ); ?></a><br>
																																<?php else: ?><?php the_sub_field( 'Nom_du_membre_1' ); ?><br>

																																<?php endif; ?>
																																<?php the_sub_field( 'univercite_du_membre_1' ); ?>


																															<?php elseif ( get_row_layout() == 'membre_non_enregistre' ) : ?>
																																<?php the_sub_field( 'membre_non_enregistre_2' ); ?><br>
																																<?php the_sub_field( 'univercite_non_enregistré_2' ); ?>

																															<?php endif; ?>
																															</div><!-- members_case  -->
																														<?php endwhile; ?>

																													</div><!-- leader  -->
																													<?php else: ?>
																														<?php // no layouts found ?>
																													<?php endif; ?>
																												<?php endif; ?>
																											<?php endwhile; ?>
																										<?php else: ?>
																											<?php // no layouts found ?>
																										<?php endif; ?>


																								</div><!-- membre end -->
																		</div><!-- formating texte -->

															</div><!-- accordionContent  -->



											</div><!-- Wrapper -->




					</div><!-- entry content -->
				</div><!-- Article complet -->
				</div><!-- Prez droite -->

</div><!-- Row -->
</main>
<div class="structure_de_page_articlefooter">
    <?php
    get_footer(); ?>
</div>

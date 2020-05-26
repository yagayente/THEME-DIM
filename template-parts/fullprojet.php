<?php
/**
 * Template part for displaying un full project

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

								<picture class="image_projet_full">
								<img <?php awesome_acf_responsive_image(get_field( 'image' ),'2-width','640px'); ?>  alt="text" />
								</picture>

							</div><!-- .stickyprez -->
					</div><!-- .prez_gauche -->



				 <div class="prez_droite">

           <div class="article_complet">

									  		<div class="entryheaderprojet" id="entryheaderprojet">
				                			<div class="title_project">
									                  <h2><a href="<?php the_permalink(); ?>" class="bar" rel="<?php the_ID(); ?>" title="<?php the_title(); ?>">
									                  <?php the_title(); ?></a>
									                	</h2>
				              				</div>
				                <?php the_category( '' ); ?>
										
				              	</div><!-- .entry-header -->


  			<div class="entry-content">

												<h3>Le projet</h3><!-- A traduire -->
							                <div class="formatingtext">
							                <?php the_content(); ?>
							                </div>
												<h3>Les Membres</h3><!-- A traduire -->

							<div class="formatingtext">
												<span class="bolder">
												<?php the_field('responsable_projet_-_appelation'); ?>
												</span>

							          <div class="leader">
							                  <?php $post_objects = get_field('Responsable');
							                  if( $post_objects ): ?>

							                     <?php foreach( $post_objects as $post): ?>
							                         <?php setup_postdata($post); ?>

							                             <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br>
							                             <span class="subperson"><?php the_field('a_propos_du_membre'); ?></span>

							                     <?php endforeach; ?>

							                     <?php wp_reset_postdata();?>
							                   <?php endif;?>
							          </div>


      									<span class="bolder"><?php the_field('membres_du_projet_-_appelation'); ?></span>

												<div class="membres">
									              <?php $post_objects = get_field('auteur');
									              if( $post_objects ): ?>

									                 <?php foreach( $post_objects as $post): ?>
									                     <?php setup_postdata($post); ?>
									                     <div class="members_case">
									                         <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br>
									                         <span class="subperson"><?php the_field('a_propos_du_membre'); ?></span>
									                     </div>
									                 <?php endforeach; ?>

									                 <?php wp_reset_postdata();?>
									               <?php endif;?>


									          <?php if( have_rows('membres_non_enregistre') ): ?>

									            <?php while( have_rows('membres_non_enregistre') ): the_row();
									              $content = get_sub_field('nom_du_membre');
									              $content2 = get_sub_field('texte_de_presentation');  ?>

															                <div class="members_case">
															                <?php if( $content ): ?>
															                <span class="nameperson"><?php echo $content; ?></span><br>
															                <?php endif; ?>

															                <?php if( $content2 ): ?>
															                <span class="subperson"><?php echo $content2; ?></span>
															                <?php endif; ?>
															              </div>
									            <?php endwhile; ?>


									          <?php endif; ?>

									      </div><!-- membre end -->
  					</div><!-- formating texte -->

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



			              <div class="footer_post_structure">
			                  <?php
			                  get_footer(); ?>
			              </div><!-- footer_post_structure -->

					</div><!-- entry content -->
				</div><!-- Article complet -->
				</div><!-- Prez droite -->

</div><!-- Row -->

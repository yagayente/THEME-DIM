<?php
/**
 * Template part for displaying un full article

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

								<picture class="image_projet_full">
								<img <?php awesome_acf_responsive_image(get_field( 'image_copie' ),'2-width','640px'); ?>  alt="text" />
								</picture>

							</div><!-- .stickyprez -->
					</div><!-- .prez_gauche -->



				 <div class="prez_droite">

           <div class="article_complet">

             <div class="entryheaderprojet" id="entryheaderprojet">

                <div class="title_project">
                  <h2>
                  <a href="<?php the_permalink(); ?>" class="bar" rel="<?php the_ID(); ?>" title="<?php the_title(); ?>">
                    <?php the_title(); ?></a>
                  </h2>
                </div>

                <p class="time"><?php the_time('j F Y'); ?></p>

              </div><!-- .entry-header -->

              <div class="contenu_article">

                    <div class="formatingtext">
                        <?php the_content(); ?>
                    </div>

                  <?php wcr_share_buttons(); ?>



              </div>

              <div class="footer_post_structure">
                  <?php
                  get_footer(); ?>
              </div>

          </div>
			</div>

</div><!-- Row -->

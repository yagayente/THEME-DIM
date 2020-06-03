<?php
/*
Template Name: Contact
*/
?>

<?php get_header(); ?>


<?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); ?>


<div class="row_prez">

					<div class="prez_gauche">

							<div class="stickyprez" id="stick">
									<div class="info_contact">



										<p><?php the_field( 'contact' ); ?></p>
									</div>

					</div><!-- .stickyprez -->
					</div><!-- .prez_gauche -->


				 <div class="prez_droite">



						 <div class="grid_contact">

							 <div class="header_contact"><h2><?php the_title(); ?></h2></div>


							 <div class="contact_fields">

								 <?php $contactform = get_field('formulaire_de_contact'); ?>
								 <?php echo do_shortcode($contactform); ?>

												 <?php the_content(); ?>
							</div>

							</div>

						 <?php endwhile; ?>
					 <?php endif; ?>

				 	</div>

</div>
</div><!-- Row -->

<script type="text/javascript">
var tx = document.getElementsByTagName('textarea');
for (var i = 0; i < tx.length; i++) {
		tx[i].setAttribute('style', 'height:' + (tx[i].scrollHeight) + 'px;overflow-y:hidden;');
		tx[i].addEventListener("input", OnInput, false);
}

function OnInput() {
		this.style.height = 'auto';
		this.style.height = (this.scrollHeight) + 'px';
}

</script>


  <div class="structure_de_page_articlefooter">
      <?php
      get_footer(); ?>
  </div>

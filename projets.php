<?php
/*
Template Name: Projets
*/
get_header(); ?>

<div class="row">

		  <div class="Navigation_recherche" id="colonnetaille">
				<div class="sticky" id="stick">
					<?php echo do_shortcode('[searchandfilter id="265"]'); ?></div>
				</div>

			 <div class="structure_de_page_recherche" id="colonne">
				   <?php echo do_shortcode('[searchandfilter id="265" show="results"]'); ?>
			</div>

</div>


<div class="structure_de_page_articlefooter">
    <?php
    get_footer(); ?>
</div>

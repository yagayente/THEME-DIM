<?php
/*
Template Name: Actu
*/
get_header(); ?>

<script>
$(window).resize(function() {
  if ( window.innerWidth >  520 ) {
      document.getElementById("stick").style.display =
      'block';
      }else {
        document.getElementById("stick").style.display =
        'none';
      }
});

function myFunction() {
  var x = document.getElementById("stick");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>

<div class="mobilenav_2">
	<?php echo do_shortcode('[searchandfilter id="259"]'); ?>
</div>

<div class="row">

		  <div class="Navigation_recherche" id="colonnetaille">

        <a onclick="myFunction()" class="toggle_menu">Filtres</a>

				<div class="sticky" id="stick">

            <a onclick="myFunction()"  class="toggle_menu">Fermer</a>
            <?php echo do_shortcode('[searchandfilter id="259"]'); ?>

					</div>
				</div>

			 <div class="structure_de_page_recherche" id="colonne">
				   <?php echo do_shortcode('[searchandfilter id="259" show="results"]'); ?>
			</div>

</div>


<div class="structure_de_page_articlefooter">
    <?php
    get_footer(); ?>
</div>

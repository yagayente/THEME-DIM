<?php
/*
Template Name: Projets
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



<div class="row">

		  <div class="Navigation_recherche" id="colonnetaille">
				  <a onclick="myFunction()" class="toggle_menu">Filtres</a>


				<div class="sticky" id="stick">
          <div class="scroll_mobile">
					  <a onclick="myFunction()"  class="toggle_menu">Fermer</a>
					<?php echo do_shortcode('[searchandfilter id="265"]'); ?></div>
            </div>
        </div>

			 <div class="structure_de_page_recherche" id="colonne">
				   <?php echo do_shortcode('[searchandfilter id="265" show="results"]'); ?>
			</div>

</div>


<div class="structure_de_page_articlefooter">
  <style>.noresult~.noresult {display:none !important;}
  .noresult~.noresult~.noresult {display:none !important;}
  .noresult~.noresult~.noresult~.noresult {display:none !important;}
  .noresult~.noresult~.noresult~.noresult {display:none !important;}
  .noresult~.noresult~.noresult~.noresult~.noresult {display:none !important;}
  .noresult~.noresult~.noresult~.noresult~.noresult~.noresult {display:none !important;}
  .result2~.result2 {display:none !important;}
  .result2~.result2~.result2 {display:none !important;}
  .result2~.result2~.result2~.result2 {display:none !important;}
  .result2~.result2~.result2~.result2~.result2 {display:none !important;}
  .result2~.result2~.result2~.result2~.result2~.result2 {display:none !important;}
  .result2~.result2~.result2~.result2~.result2~.result2~.result2 {display:none !important;}
  .result2~.result2~.result2~.result2~.result2~.result2~.result2~.result2 {display:none !important;}
  </style>
    <?php
    get_footer(); ?>
</div>

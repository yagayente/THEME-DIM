<?php
/**
 * Template part for displaying un extrait de posts >basic

 */

?>
<script type="text/javascript">
$(document).ready(function() {

	//ACCORDION BUTTON ACTION (ON CLICK DO THE FOLLOWING)
	$('.accordionButton').click(function() {

		//REMOVE THE ON CLASS FROM ALL BUTTONS
		$('.accordionButton').removeClass('on');

		//NO MATTER WHAT WE CLOSE ALL OPEN SLIDES
	 	$('.accordionContent').slideUp('normal');

		//IF THE NEXT SLIDE WASN'T OPEN THEN OPEN IT
		if($(this).next().is(':hidden') == true) {

			//ADD THE ON CLASS TO THE BUTTON
			$(this).addClass('on');

			//OPEN THE SLIDE
			$(this).next().slideDown('normal');
		 }

	 });


	/*** REMOVE IF MOUSEOVER IS NOT REQUIRED ***/

	//ADDS THE .OVER CLASS FROM THE STYLESHEET ON MOUSEOVER
	$('.accordionButton').mouseover(function() {
		$(this).addClass('over');

	//ON MOUSEOUT REMOVE THE OVER CLASS
	}).mouseout(function() {
		$(this).removeClass('over');
	});

	/*** END REMOVE IF MOUSEOVER IS NOT REQUIRED ***/


	/********************************************************************************************************************
	CLOSES ALL S ON PAGE LOAD
	********************************************************************************************************************/
	$('.accordionContent').hide();

});</script>
	<div class="basic">
					<h2>
						<?php the_title(); ?>
					</h2>


						<div id="wrapper">
						<?php
						if( have_rows('le_dim') ):
 						while ( have_rows('le_dim') ) : the_row();
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

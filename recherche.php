



<script>
jQuery(function($){
	$('#filter').change(function(){ // submit
		var filter = $('#filter');
		$.ajax({
			url:filter.attr('action'),
			data:filter.serialize(), // form data
			type:filter.attr('method'), // POST
			beforeSend:function(xhr){
				filter.find('button').text('Processing...'); // changing the button label
			},
			success:function(data){
				filter.find('button').text('Apply filter'); // changing the button label back
				$('#response').html(data); // insert data
			}
		});
		return false;
	});
});
</script>



<form action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" method="POST" id="filter">


	<?php
	  if( $terms = get_terms( array( 'taxonomy' => 'category', 'orderby' => 'name' ) ) ) :
	    echo '<div name="categoryfiltertest">';
	    foreach ( $terms as $term ) :
	      echo '<div><input type="checkbox" value="' . $term->term_id . '"name="categoryfilterone" id="region_' . $term->term_id . '"><label for="region_' . $term->term_id . '">' . $term->name . '</label></div>'; // ID of the category as the value of an option
	    endforeach;
	    echo '</div>';
	  endif;
	?>

		<label>
		<input type="radio" name="date" value="ASC" /> Date: Ascending
	</label>
	<label>
		<input type="radio" name="date" value="DESC" selected="selected" /> Date: Descending
	</label>
	<label>
		<input type="checkbox" name="featured_image" /> Only posts with featured images
	</label>


	<button>Apply filter</button>
	<input type="hidden" name="action" value="myfilter">
</form>
<div id="response"></div>



<?php
  if( $terms = get_terms( array( 'taxonomy' => 'category', 'orderby' => 'name' ) ) ) :
    echo '<div name="categoryfiltertest">';
    foreach ( $terms as $term ) :
      echo '<div><input type="checkbox" value="' . $term->term_id . '"name="categoryfilterone" id="region_' . $term->term_id . '"><label for="region_' . $term->term_id . '">' . $term->name . '</label></div>'; // ID of the category as the value of an option
    endforeach;
    echo '</div>';
  endif;
?>


<?php
      if( $terms = get_terms( array( 'taxonomy' => 'category' ) ) ) :
      $all_terms = array();

      foreach( $terms as $term ) {
      if( isset( $_GET['region_' . $term->term_id ] ) && $_GET['region_' . $term->term_id] == 'on' )
       $all_terms[] = $term->slug;
      }

      if( count( $all_terms ) > 0 ) {
      $args['tax_query'] = array(
      array(
        'taxonomy' => 'category',
        'field' => 'slug',
        'terms'=> $all_terms
      )
      );
      }
      endif;

?>


<?     // for taxonomies / categories
  	if( isset( $_POST['categoryfilterone'] ))
  		$args['tax_query'] = array(
  			array(
  				'taxonomy' => 'category',
  				'field' => 'id',
  				'terms' => $_POST['categoryfilterone']
  			)
  		);
?>






<?php
  if( $terms = get_terms( array( 'taxonomy' => 'category', 'orderby' => 'name' ) ) ) :

    echo '<select name="categoryfilter"><option value="">Select category...</option>';
    foreach ( $terms as $term ) :
      echo '<option value="' . $term->term_id . '">' . $term->name . '</option>'; // ID of the category as the value of an option
    endforeach;
    echo '</select>';
  endif;
?>





<?php
  if( $terms = get_terms( array( 'taxonomy' => 'category', 'orderby' => 'name' ) ) ) :
    echo '<div name="categoryfiltertest">';
    foreach ( $terms as $term ) :
      echo '<div><input type="checkbox" value="' . $term->term_id . '"name="categoryfilterone" id="' . $term->term_id . '"><label for="' . $term->term_id . '">' . $term->name . '</label></div>'; // ID of the category as the value of an option
    endforeach;
    echo '</div>';
  endif;
?>



> LE AJAX CALL
<?

add_action('wp_ajax_myfilter', 'misha_filter_function'); // wp_ajax_{ACTION HERE}
add_action('wp_ajax_nopriv_myfilter', 'misha_filter_function');

function misha_filter_function(){
	$args = array(
		'orderby' => 'date', // we will sort posts by date
		'order'	=> $_POST['date'] // ASC or DESC
	);

	// for taxonomies / categories
	if( isset( $_POST['categoryfilter'] ) )
		$args['tax_query'] = array(
			array(
				'taxonomy' => 'category',
				'field' => 'id',
				'terms' => $_POST['categoryfilter']
			)
		);


      if( $terms = get_terms( array( 'taxonomy' => 'category' ) ) ) :
      $all_terms = array();

      foreach( $terms as $term ) {
      if( isset( $_GET['region_' . $term->term_id ] ) && $_GET['region_' . $term->term_id] == 'on' )
       $all_terms[] = $term->slug;
      }

      if( count( $all_terms ) > 0 ) {
      $args['tax_query'] = array(
      array(
        'taxonomy' => 'category',
        'field' => 'slug',
        'terms'=> $all_terms
      )
      );
      }
      endif;

	// if post thumbnail is set
	if( isset( $_POST['featured_image'] ) && $_POST['featured_image'] == 'on' )
		$args['meta_query'][] = array(
			'key' => '_thumbnail_id',
			'compare' => 'EXISTS'
		);
	// if you want to use multiple checkboxed, just duplicate the above 5 lines for each checkbox

	$query = new WP_Query( $args );

	if( $query->have_posts() ) :
		while( $query->have_posts() ): $query->the_post();
			echo '<h2>YOOO' . $query->post->post_title . '</h2>';
		endwhile;
		wp_reset_postdata();
	else :
		echo 'No posts found';
	endif;

	die();
}
?>



if( $regions = get_terms( array( 'taxonomy' => 'category' ) ) ) :
 $all_terms = array();

 foreach( $regions as $region ) {
   if( isset( $_GET['region_' . $region->term_id ] ) && $_GET['region_' . $region->term_id] == 'on' )
      $all_terms[] = $region->slug;
 }

 if( count( $all_terms ) > 0 ) {
   $args['tax_query'] = array(
     array(
       'taxonomy' => 'category',
       'field' => 'slug',
       'terms'=> $all_terms
     )
   );
 }
endif;









<?php
  if( $terms = get_terms( array( 'taxonomy' => 'category', 'orderby' => 'name' ) ) ) :
    echo '<div name="categoryfiltertest">';
    foreach ( $terms as $term ) :
      echo '<div><input type="checkbox" value="' . $term->term_id . '"name="categoryfilterone" id="region_' . $term->term_id . '"><label for="region_' . $term->term_id . '">' . $term->name . '</label></div>'; // ID of the category as the value of an option
    endforeach;
    echo '</div>';
  endif;
?>

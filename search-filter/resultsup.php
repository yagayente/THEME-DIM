<?php
/**
 * Search & Filter Pro
 *
 * Sample Results Template
 *
 * @package   Search_Filter
 * @author    Ross Morsali
 * @link      https://searchandfilter.com
 * @copyright 2018 Search & Filter
 *
 * Note: these templates are not full page templates, rather
 * just an encaspulation of the your results loop which should
 * be inserted in to other pages by using a shortcode - think
 * of it as a template part
 *
 * This template is an absolute base example showing you what
 * you can do, for more customisation see the WordPress docs
 * and using template tags -
 *
 * http://codex.wordpress.org/Template_Tags
 *
 */

 $cur_post_type = "";
 $prev_post_type = "";
wp_reset_query();
if ( $query->have_posts() )
{
	?>

	<div class="pagination">

		<?php
			/* example code for using the wp_pagenavi plugin */
			if (function_exists('wp_pagenavi'))
			{
				echo "<br />";
				wp_pagenavi( array( 'query' => $query ) );
			}
		?>
	</div>

	<?php
   //echo '<pre>';
  //print_r($query);
   //$query = new WP_Query(array('posts_per_page'=>-1));
 // echo 'bhawna';
  //print_r($query);
	while ($query->have_posts())
	{
    $cur_post = $query->the_post();
	$post = get_post();
	$ids[]= $post->ID.''.$post->post_type;
	$pro=array();
	$pos=array();
	$cur_post_type = $post->post_type;
	//if($cur_post_type == 'projets') $pro[]=$post->ID;
	//if($cur_post_type == 'post') $pos[]=$post->ID;
	//$mix[]= $post->post_type;

		//$cur_post = $query->the_post();
    //print_r($post);
	//echo 'ccurent'.$cur_post_type ."=". 'prev'.$prev_post_type .'<br/>';
	if($prev_post_type !=$cur_post_type) $mix[]= $post->post_type;
	//if($cur_post_type == 'projets'){
		//
		//if($prev_post_type == 'projets') get_template_part('template-parts/content', 'content');
		if($cur_post_type == 'post')get_template_part('template-parts/previewprojet', 'previewprojet');
	//}else{
		//$query->the_post($prev_post_type);
		if($cur_post_type == 'projets')get_template_part('template-parts/content', 'content');
		//}
	 $prev_post_type = $post->post_type;
	}
	//echo '<pre>';
	//print_r($pro);
	//print_r($pos);
	//array_multisort($ids,SORT_DESC,SORT_NUMERIC);
	//print_r($ids);
	?>

	<?php
}
else
{
	echo "Pas d'autres articles";
	wp_reset_query();
	$query = new WP_Query(array('post_type' => array ( 'post', 'projets','event'),'posts_per_page'=>-1));
 // echo 'bhawna';
  //print_r($query);
	while ($query->have_posts())
	{
    $cur_post = $query->the_post();
	$post = get_post();
	$ids[]= $post->ID.''.$post->post_type;
	$pro=array();
	$pos=array();
	$cur_post_type = $post->post_type;
	//if($cur_post_type == 'projets') $pro[]=$post->ID;
	//if($cur_post_type == 'post') $pos[]=$post->ID;
	//$mix[]= $post->post_type;

		//$cur_post = $query->the_post();
    //print_r($post);
	//echo 'ccurent'.$cur_post_type ."=". 'prev'.$prev_post_type .'<br/>';
	if($prev_post_type !=$cur_post_type) $mix[]= $post->post_type;
	//if($cur_post_type == 'projets'){
		//
		//if($prev_post_type == 'projets') get_template_part('template-parts/content', 'content');
		if($cur_post_type == 'post')get_template_part('template-parts/previewprojet', 'previewprojet');
	//}else{
		//$query->the_post($prev_post_type);
		if($cur_post_type == 'projets')get_template_part('template-parts/content', 'content');
		//}
	 $prev_post_type = $post->post_type;
	}
}
?>

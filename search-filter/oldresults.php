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
  echo '<pre>';
  //print_r($query);
  $query = new WP_Query(array('posts_per_page'=>-1));
	while ($query->have_posts())
	{
    $cur_post = $query->the_post();
		//$cur_post = $query->the_post();
    print_r($cur_post);
		get_template_part('template-parts/content', 'content');
		?>
		<?php
		$query->the_post($prev_post_type);
		get_template_part('template-parts/previewprojet', 'previewprojet');
		?>
		<?php
	}
	?>

	<?php
}
else
{
	echo "Pas d'autres articles";
}
?>

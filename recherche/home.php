<?php
/*
Template Name: Home
*/
get_header();
?>


        <?php
// Aller chercher le contenu de la page home
$mainquery = get_queried_object();

$args = array(
    'pagename' => 'Accueil'
);

$query = new WP_Query($args);
if ($query->have_posts()) {
    while ($query->have_posts()) {
        $query->the_post();
?>


  <?php
  $images = get_field('gallerie_homepage');
  $rand = array_rand($images, 1);
  if( $images ): ?>
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

              <div class="illustration_home" style="background-image: url('<?php echo $images[$rand]; ?>');"></div>

<?php endif; ?>


             <?php
             $terms = get_field('auteur_copie2');
             if( $terms ): ?>
                 <ul>
                 <?php foreach( $terms as $term ): ?>
                     <h2><?php echo esc_html( $term->name ); ?></h2>
                     <p><?php echo esc_html( $term->description ); ?></p>
                     <a href="<?php echo esc_url( get_term_link( $term ) ); ?>">View all '<?php echo esc_html( $term->name ); ?>' posts</a>
                 <?php endforeach; ?>
                 </ul>
             <?php endif; ?>





                <?php
        the_content();
?>
</div><!-- Row -->


<div class="structure_de_page_2">
<div class="article_site_home">


        <?php
    }
}
// Restore original post data.
wp_reset_postdata();

// Aller prendre mes posts + post type
global $wp_query;
$args = array_merge($wp_query->query, array(
    'post_type' => array(
        'post',
        'Projets'
    ),
    'posts_per_page' => 3
));
if (query_posts($args)):
    while (have_posts()):
        the_post();
        get_template_part('template-parts/content', 'content');
    endwhile;
else:
    get_template_part('template-parts/none', 'none');
endif;
?>
</div><!-- article_site_home -->
</div><!-- structure_de_page_2 -->

<div class="structure_de_page_articlefooter">
    <?php
    get_footer(); ?>
</div>

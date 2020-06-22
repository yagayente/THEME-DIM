<?php
if ( is_admin()) {get_template_part( 'func/page_option_acf' );}
get_template_part( 'func/menu' );
get_template_part( 'func/include_scripts' );
get_template_part( 'func/comments_killer' );
get_template_part( 'func/customizer_killer' );
get_template_part( 'func/header_plus_simple' );
get_template_part( 'func/cache_barre_wordpress' );
get_template_part( 'func/image_srcset_size_reset' );
get_template_part( 'func/no_updates' );
get_template_part( 'func/custom_gutemberg' );
get_template_part( 'func/social' );
get_template_part( 'func/affiche_chemin_post' );
get_template_part( 'func/traduire' );
get_template_part( 'func/custom_post_type' );
get_template_part( 'func/details' );
get_template_part( 'func/hide_acf_and_css_for_user' );

add_filter('use_block_editor_for_post_type', 'prefix_disable_gutenberg', 10, 2);
function prefix_disable_gutenberg($current_status, $post_type)
{
    // Use your post type key instead of 'product'
    if ($post_type === 'Projets') return false;
    return $current_status;
}

<?php

function get_template_part_custom($Projets) {
     global $post;
     //its paper type?
     if ($post->post_type == 'Projets') {
         //get template-parts/content-paper.php
         get_template_part( 'template-parts/previewprojet', $Projets );
     }else{
         //fallback to the default
         get_template_part( 'template-parts/content-search', get_post_format($post) );
     }
}

// nombre de caractère excerpt
function custom_excerpt_length( $length ) {
        return 30;
    }
    add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );



function people_init() {
    // create a new taxonomy
    register_taxonomy(
        'people',
        'projets',
        array(
            'label' => __( 'People' ),
            'rewrite' => array( 'slug' => 'person' ),
            'capabilities' => array(
                'assign_terms' => 'edit_guides',
                'edit_terms' => 'publish_guides'
            )
        )
    );
}
add_action( 'init', 'people_init' );


 //*  THEME SUPPORT
add_theme_support('menus');
register_nav_menus(
  array(
    'Menu principal'    => __( 'Menu principal', 'BASE_THEME' ),
  )
);

add_theme_support('buttons_home');
register_nav_menus(
  array(
    'Boutons'    => __( 'Boutons', 'BASE_THEME' ),
  )
);



// include custom jQuery
function shapeSpace_include_custom_jquery() {
	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, false);
}
add_action('wp_enqueue_scripts', 'shapeSpace_include_custom_jquery');

// AJAX



// Register Custom Post Type
function Projets() {

	$labels = array(
		'name'                  => _x( 'Projets', 'Post Type General Name', 'BASE_THEME' ),
		'singular_name'         => _x( 'Projets', 'Post Type Singular Name', 'BASE_THEME' ),
		'menu_name'             => __( 'Projets', 'BASE_THEME' ),
		'name_admin_bar'        => __( 'Post Type', 'BASE_THEME' ),
		'archives'              => __( 'Item Archives', 'BASE_THEME' ),
		'attributes'            => __( 'Item Attributes', 'BASE_THEME' ),
		'parent_item_colon'     => __( 'Parent Item:', 'BASE_THEME' ),
		'all_items'             => __( 'All Items', 'BASE_THEME' ),
		'add_new_item'          => __( 'Add New Item', 'BASE_THEME' ),
		'add_new'               => __( 'Add New', 'BASE_THEME' ),
		'new_item'              => __( 'New Item', 'BASE_THEME' ),
		'edit_item'             => __( 'Edit Item', 'BASE_THEME' ),
		'update_item'           => __( 'Update Item', 'BASE_THEME' ),
		'view_item'             => __( 'View Item', 'BASE_THEME' ),
		'view_items'            => __( 'View Items', 'BASE_THEME' ),
		'search_items'          => __( 'Search Item', 'BASE_THEME' ),
		'not_found'             => __( 'Not found', 'BASE_THEME' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'BASE_THEME' ),
		'featured_image'        => __( 'Featured Image', 'BASE_THEME' ),
		'set_featured_image'    => __( 'Set featured image', 'BASE_THEME' ),
		'remove_featured_image' => __( 'Remove featured image', 'BASE_THEME' ),
		'use_featured_image'    => __( 'Use as featured image', 'BASE_THEME' ),
		'insert_into_item'      => __( 'Insert into item', 'BASE_THEME' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'BASE_THEME' ),
		'items_list'            => __( 'Items list', 'BASE_THEME' ),
		'items_list_navigation' => __( 'Items list navigation', 'BASE_THEME' ),
		'filter_items_list'     => __( 'Filter items list', 'BASE_THEME' ),
	);
	$args = array(
    'show_in_rest' => true,
		'label'                 => __( 'Projets', 'BASE_THEME' ),
		'description'           => __( 'Post Type Description', 'BASE_THEME' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
		'taxonomies'            => array( 'category', 'projets' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
    'menu_icon'             => 'dashicons-text-page',
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Projets', $args );

}
add_action( 'init', 'Projets', 0 );








function Membres() {

	$labels = array(
		'name'                  => _x( 'Membres', 'Post Type General Name', 'BASE_THEME' ),
		'singular_name'         => _x( 'Membres', 'Post Type Singular Name', 'BASE_THEME' ),
		'menu_name'             => __( 'Membres', 'BASE_THEME' ),
		'name_admin_bar'        => __( 'Post Type', 'BASE_THEME' ),
		'archives'              => __( 'Item Archives', 'BASE_THEME' ),
		'attributes'            => __( 'Item Attributes', 'BASE_THEME' ),
		'parent_item_colon'     => __( 'Parent Item:', 'BASE_THEME' ),
		'all_items'             => __( 'All Items', 'BASE_THEME' ),
		'add_new_item'          => __( 'Add New Item', 'BASE_THEME' ),
		'add_new'               => __( 'Add New', 'BASE_THEME' ),
		'new_item'              => __( 'New Item', 'BASE_THEME' ),
		'edit_item'             => __( 'Edit Item', 'BASE_THEME' ),
		'update_item'           => __( 'Update Item', 'BASE_THEME' ),
		'view_item'             => __( 'View Item', 'BASE_THEME' ),
		'view_items'            => __( 'View Items', 'BASE_THEME' ),
		'search_items'          => __( 'Search Item', 'BASE_THEME' ),
		'not_found'             => __( 'Not found', 'BASE_THEME' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'BASE_THEME' ),
		'featured_image'        => __( 'Featured Image', 'BASE_THEME' ),
		'set_featured_image'    => __( 'Set featured image', 'BASE_THEME' ),
		'remove_featured_image' => __( 'Remove featured image', 'BASE_THEME' ),
		'use_featured_image'    => __( 'Use as featured image', 'BASE_THEME' ),
		'insert_into_item'      => __( 'Insert into item', 'BASE_THEME' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'BASE_THEME' ),
		'items_list'            => __( 'Items list', 'BASE_THEME' ),
		'items_list_navigation' => __( 'Items list navigation', 'BASE_THEME' ),
		'filter_items_list'     => __( 'Filter items list', 'BASE_THEME' ),
	);
	$args = array(
    'show_in_rest' => true,
		'label'                 => __( 'Membres', 'BASE_THEME' ),
		'description'           => __( 'Post Type Description', 'BASE_THEME' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
		'taxonomies'            => array( 'category', 'Membres' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
    'menu_icon'             => 'dashicons-admin-users',
		'show_in_menu'          => true,
		'menu_position'         => 6,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Membres', $args );

}
add_action( 'init', 'Membres', 0 );

 //*  NETTOYAGE
if ( is_admin()) {get_template_part( 'func/page_option_acf' );}
get_template_part( 'func/comments_killer' );
get_template_part( 'func/customizer_killer' );
get_template_part( 'func/header_plus_simple' );
get_template_part( 'func/cache_barre_wordpress' );
get_template_part( 'func/image_srcset_size_reset' );
get_template_part( 'func/no_updates' );
get_template_part( 'func/custom_gutemberg' );
get_template_part( 'func/social' );
get_template_part( 'func/affiche_chemin_post' );
get_template_part( 'func/ajax_call' );


function enqueue_my_scripts() {
if ( is_page_template( 'presentation.php' ) ) { //will check if we are on page ID 42, please see conditional tags or is_page_template( 'about.php' ) to check if the page template is about.php ) {
        wp_enqueue_script( 'jqueryfixedprojet', get_stylesheet_directory_uri() . '/inc/jqueryfixedprojet.js', array('jquery'));  }
}
add_action( 'wp_enqueue_scripts', 'enqueue_my_scripts' );


 //*  SCRIPT
add_action( 'wp_enqueue_scripts', 'theme_scripts_styles', 'wpb_adding_scripts');
function theme_scripts_styles() {
  wp_enqueue_style( 'reset', get_stylesheet_directory_uri() . '/inc/reset.css', array(), '1.0', 'all' );
  wp_enqueue_script( 'un_js_sup', get_stylesheet_directory_uri() . '/inc/simon_script.js');
  wp_enqueue_script( 'un_js_sup', get_stylesheet_directory_uri() . '/inc/header_script.js');

  wp_enqueue_script( 'polyfill', get_stylesheet_directory_uri() . '/polyfill/stickybits.min.js');

}
 //*  wp_enqueue_script( 'jqueryfixedprojet', get_stylesheet_directory_uri() . '/inc/jqueryfixedprojet.js', array('jquery'));
  //*  wp_enqueue_script( 'jqueryfixedall', get_stylesheet_directory_uri() . '/inc/jqueryfixedall.js', array('jquery'));
  //*  wp_enqueue_script( 'polyfill', get_stylesheet_directory_uri() . '/inc/modernizr.js');



 //*  TRADUCTION
//*  Traduction en string du formulaire de contact pour Polylang
add_action('init', function() {
  pll_register_string('BASE_THEME', 'lire_plus');
  pll_register_string('BASE_THEME', 'lien_copie');
  pll_register_string('BASE_THEME', 'copier_le_lien');
  pll_register_string('BASE_THEME', 'message_was_send');
  pll_register_string('BASE_THEME', 'message_was_send');
  pll_register_string('BASE_THEME', 'votre_prenom');
  pll_register_string('BASE_THEME', 'votre_nom');
  pll_register_string('BASE_THEME', 'votre_email');
  pll_register_string('BASE_THEME', 'votre_message');
  pll_register_string('BASE_THEME', 'question');
  pll_register_string('BASE_THEME', 'submit');
  pll_register_string('BASE_THEME', 'message_derreur_prenom_vide');
  pll_register_string('BASE_THEME', 'message_derreur_nom_vide');
  pll_register_string('BASE_THEME', 'message_derreur_message_vide');
  pll_register_string('BASE_THEME', 'message_derreur_mauvais_numero');
  pll_register_string('BASE_THEME', 'message_derreur_email_vide');
  pll_register_string('BASE_THEME', 'message_derreur_email_faux');
});

//get_link_by_template



 //*  STYLE DU BACKOFFICE
 //*  function admin_style() { wp_enqueue_style('admin-styles', get_template_directory_uri().'/style-admin.css');}
 //*  add_action('admin_enqueue_scripts', 'admin_style');
 //* if ( is_admin()) {get_template_part( 'func/nettoyer_le_back' );}

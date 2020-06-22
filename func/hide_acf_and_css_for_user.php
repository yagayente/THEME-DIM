<?php


/**
 * Hide ACF menu item from the admin menu
 */
 add_filter('acf/settings/show_admin', 'my_acf_show_admin');
 function my_acf_show_admin( $show ) {
 $current_user = wp_get_current_user();
 $mon_nom_dutilisateur = 'simonbouchardadmin';
 if(current_user_can('manage_options') AND $current_user->user_nicename == $mon_nom_dutilisateur){
 return true;
 }
 else{
   return false;
 }
 }
 /**
  * Un css spécial pour l'administration
  */

  function admin_css() {
  	$admin_handle = 'admin_css';
  	$admin_stylesheet = get_template_directory_uri() . '/sass/admin.css';

  	wp_enqueue_style($admin_handle, $admin_stylesheet);
  }
  add_action('admin_print_styles', 'admin_css', 11);

  /**
   * ... qui charge en fonction du user
   */
 add_filter( 'admin_body_class', 'custom_admin_body_class' );
 function custom_admin_body_class( $classes ) {
        $current_user = wp_get_current_user();
        $mon_nom_dutilisateur = 'simonbouchardadmin';
         $classes .= ' css_for_user';

         if(current_user_can('manage_options') AND $current_user->user_nicename == $mon_nom_dutilisateur)
         {
          	 return false;
         }

         else{
           return $classes;

         }
 }


?>

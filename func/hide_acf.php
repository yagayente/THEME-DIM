<?php

/**
 * Hide ACF menu item from the admin menu
 */
 add_filter('acf/settings/show_admin', 'my_acf_show_admin');
 function my_acf_show_admin( $show ) {
 $current_user = wp_get_current_user();

 if(current_user_can('manage_options') AND $current_user->user_nicename == 'simonbouchardadmin'){
 return true;
 }
 else{
 return false;
 }
 }


?>

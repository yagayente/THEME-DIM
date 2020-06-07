<?php
/*
Plugin Name: Translate
Plugin URI: #
Version: 1.0
Author: Simon Bouchard
*/

add_action('init', function() {
  pll_register_string('BASE_THEME', 'filtrage');
  pll_register_string('BASE_THEME', 'fermer');
  pll_register_string('BASE_THEME', 'error_search');
  pll_register_string('BASE_THEME', 'error_search');
  pll_register_string('BASE_THEME', 'error_article');
  pll_register_string('BASE_THEME', 'error_projet');
  pll_register_string('BASE_THEME', 'all_right');
  pll_register_string('BASE_THEME', 'credit');
  pll_register_string('BASE_THEME', 'les_membres');
  pll_register_string('BASE_THEME', 'le_projet');
  pll_register_string('BASE_THEME', 'partager');
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
/*
Use <?php pll_e('lire_plus'); ?>
*/


?>

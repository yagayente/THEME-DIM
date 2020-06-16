<html class="no-js" <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<title>DIM Sciences du Texte et Connaissances Nouvelles</title>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="<?php the_field('description_du_site', 'options'); ?>"/>
<meta name="keywords" content="<?php the_field('mots_clefs', 'options'); ?>">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link href="<?php the_field('favicon', 'options'); ?>" rel="shortcut icon" type="image/x-icon" />
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=BioRhyme:wght@200;300&display=swap" rel="stylesheet">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>  >
<script type="text/javascript">
document.body.addEventListener('touchmove', function(event) {
    event.preventDefault();
});
</script>
  <div class="grille_dev">
    <div class="box">X1</div><div class="box">2</div><div class="box">3</div><div class="box">4</div>
    <div class="box">5</div><div class="box">6</div><div class="box">7</div><div class="box">8</div>
    <div class="box">9</div><div class="box">10</div><div class="box">11</div><div class="box">12</div>
    <div class="box">13</div><div class="box">14</div><div class="box">15</div><div class="box">16</div>
    <div class="box">X17</div>
  </div>


  <header id="masthead" class="site-header" role="banner">
  <?php get_template_part('template-parts/menu2');?>
	</header><!-- #masthead -->

  <nav class="nav">
  	<div class="outside_menu">
  	</div>
  	<div class="content_menu">
          <?php
          $page = get_page_by_title('Accueil' );
          $pag1 = get_page_by_title('Home' );
          $ids = "{$page->ID},{$pag1->ID}";
          wp_nav_menu(
            array(
              'theme_location' => 'header-menu',
              'menu_id'        => 'Menu_principal_mobile',
              'exclude' => $ids,
              'container' => 'ul',
              'menu_class'=> 'Menu_principal_mobile'
            )
          );
          ?>
          <ul class="Menu_principal_mobile_2"><?php pll_the_languages();?></ul>
  	</div>
  </nav>
<div class="breadcrumb"><?php echo my_path_breadcrumbs(); ?>*/</div>

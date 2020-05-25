


<div class="structure_de_page_menu" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'BASE_THEME' ); ?>">

<div class="home_button">
  <div class="identite">


              <a href="<?php bloginfo('url'); ?>">
                <div class="box_main_logo">
                <img class="logoprincipale" <?php awesome_acf_responsive_image(get_field( 'logo_principal', 'option' ),'2-width','640px'); ?>  alt="text" />

              </div>

              <div class="main_site">
                <h1><?php bloginfo('name'); ?></h1>
                <h2><span class="dim_it">DIM</span><br><span class="dim_it_2">Science du texte<br>et connaissances<br>nouvelles</span></h2>
              </div>
              </a>
  </div>
</div>
      <div class="blockrecherche">
        <div class="loupe">
            O
        </div>
      <span class="recherchebarre"><?php echo do_shortcode('[searchandfilter id="264"]'); ?></span>
      <span class="language"><ul><?php pll_the_languages();?></ul></span>
    </div>

    <?php
    $page = get_page_by_title('Accueil' );
    $pag1 = get_page_by_title('Home' );
    $ids = "{$page->ID},{$pag1->ID}";

    wp_nav_menu(
      array(
        'theme_location' => 'header-menu',
        'menu_id'        => 'Menu_principal',
        'exclude' => $ids,
      )
    );
    ?>
</div><!-- .structure_de_page_menu -->




<header class="headermobile" role="bannermobile">
  <div class="searchoverbar">

    <div class="content_menu">
      <?php echo do_shortcode('[searchandfilter id="264"]'); ?>
    </div>
    <div class="outside_menu_search">

    </div>
  </div>



  <div class="logo_site">
      <div class="boxlogo_site">
          <div class="box_mobile_logo">
            <a href="<?php bloginfo('url'); ?>">
            <?php
            $image = get_field('logo_principal', 'option');
            if( $image ) { echo wp_get_attachment_image( $image);} ?>
          </div>
      </div>
      <div class="intro_site_mobile">
        <h1><?php bloginfo('name'); ?></h1>
        <h2><span class="dim_it">DIM</span><br><span class="dim_it_2">Science du texte<br>et connaissances<br>nouvelles</span></h2>
      </div>

    </a>
  </div>


	<div class="containermobile">

      <div class="nav-toggle">
          <div class="nav-toggle-bar">
          <svg viewBox="0 0 100 80" width="40" height="40">
            <rect width="100" height="5"></rect>
            <rect y="30" width="100" height="5"></rect>
            <rect y="60" width="100" height="5 "></rect>
          </svg>
          </div>
      </div>

      <div class="nav-toggle-2">
          <div class="nav-toggle-bar-2">
          <svg viewBox="0 0 100 80" width="40" height="40">
            <rect width="100" height="5"></rect>
            <rect y="30" width="100" height="5"></rect>
            <rect y="60" width="100" height="5 "></rect>
          </svg>
          </div>
      </div>



  </div>
</header>

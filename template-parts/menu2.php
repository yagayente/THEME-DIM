


<div class="Menu_général" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'BASE_THEME' ); ?>">

        <div class="Menu_général_gauche">
          <h1><?php bloginfo('name'); ?></h1>

        <div class="logo_area">

                      <a href="<?php bloginfo('url'); ?>">

                      <div class="block_image_logo" id="iefix">
                      <img class="logoprincipale" <?php awesome_acf_responsive_image(get_field( 'logo_principal', 'option' ),'2-width','640px'); ?>  alt="text" />
                      <img class="logoprincipalehover" <?php awesome_acf_responsive_image(get_field( 'logo_hover', 'option' ),'2-width','640px'); ?>  alt="text" />
                      </div>

                      <div class="block_text_logo">
                        <div class="enfant_block_text_logo">
                        <h2><span class="dim">DIM</span><br><span class="stcn">Science du texte<br>et connaissances<br>nouvelles</span></h2>
                        </div>
                      </div>
                      </a>
          </div>
        </div>


      <div class="Menu_général_droite">
          <div class="menu_search">
                  <p>L</p>
                  <?php echo do_shortcode('[searchandfilter id="264"]'); ?>
          </div>
      <span class="language"><ul><?php pll_the_languages();?></ul></span>
    </div>

    <?php
    $page = get_page_by_title('Accueil' );
    $pag1 = get_page_by_title('Home' );
    $pag2 = get_page_by_title('Recherche' );
    $ids = "{$page->ID},{$pag1->ID},{$pag2->ID}";

    wp_nav_menu(
      array(
        'theme_location' => 'Menuprincipal',
        'menu_id'        => 'Menu_principal',
        'exclude' => $ids,
        'container' => 'ul',
        'menu_class'=> 'Menu_principal'
      )
    );
    ?>
</div><!-- .Menu_général -->





<header class="headermobile" role="bannermobile">
  <div class="searchoverbar">

    <div class="content_menu">
      <p class="close_search">C</p>
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




      <div class="nav-toggle-2">
          <div class="nav-toggle-bar-2">
          <p>L</p>
          </div>
      </div>



  </div>












  <div class="mobilenav">
    <?php
    $page = get_page_by_title('Accueil' );
    $pag1 = get_page_by_title('Home' );
    $pag2 = get_page_by_title('Recherche' );
    $ids = "{$page->ID},{$pag1->ID},{$pag2->ID}";

    wp_nav_menu(
      array(
        'theme_location' => 'Menuprincipal',
        'menu_id'        => 'Menu_mobile',
        'exclude' => $ids,
        'container' => 'ul',
        'menu_class'=> 'Menu_mobile'
      )
    );
    ?>
      <span class="language"><ul><?php pll_the_languages();?></ul></span>
  </div>
  <a href="javascript:void(0)" class="icon">
  <div class="hamburger">
  <div class="menui top-menu"></div>
  <div class="menui mid-menu"></div>
  <div class="menui bottom-menu"></div>
  </div>
  </a>

</header>

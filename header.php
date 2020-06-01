<html class="no-js" <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<title><?php bloginfo('name') ?></title>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="<?php the_field('description_du_site', 'options'); ?>"/>
<meta name="keywords" content="<?php the_field('mots_clefs', 'options'); ?>">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link href="<?php the_field('favicon', 'options'); ?>" rel="shortcut icon" type="image/x-icon" />
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=BioRhyme:wght@200;300&display=swap" rel="stylesheet">
<?php wp_head(); ?>


<script type="javascript">
var accordion = document.getElementsByClassName('accordion').item(0);
    sections = accordion.getElementsByTagName('section');

function openBelow(el) {
    el.style.marginTop = '0px';
}

function closeBelow(el) {
    el.style.marginTop = -el.offsetHeight + 'px';
}

for (var i = 0; i < sections.length; i++)
{
    (function() {
        var section = sections.item(i),
            anchor = sections.item(i).children[0],
            below = sections.item(i).children[1];

        closeBelow(below, -below.offsetHeight);

        anchor.onclick = function () {
            if (section.getAttribute('class' ) == 'active' ) {
                section.setAttribute('class', '');
                closeBelow(below);
            }
            else {
                section.setAttribute('class', 'active');
                openBelow(below);
            }
        }
    })();
}

</script>
</head>

<body <?php body_class(); ?>>

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



<script type="text/javascript">
function togglescroll() {
  $('body').on('touchstart', function(e) {
    if ($('body').hasClass('noscroll')) {
      e.preventDefault();
    }
  });
}

$(document).ready(function() {
  togglescroll()
  $(".icon").click(function() {
    $(".mobilenav").fadeToggle(500);
    $(".top-menu").toggleClass("top-animate");
    $("body").toggleClass("noscroll");
    $(".mid-menu").toggleClass("mid-animate");
    $(".bottom-menu").toggleClass("bottom-animate");
  });
});

// PUSH ESC KEY TO EXIT

$(document).keydown(function(e) {
  if (e.keyCode == 27) {
    $(".mobilenav").fadeOut(500);
    $(".top-menu").removeClass("top-animate");
    $("body").removeClass("noscroll");
    $(".mid-menu").removeClass("mid-animate");
    $(".bottom-menu").removeClass("bottom-animate");
  }
});
</script>






  <script type="text/javascript">

  	;( function ( document, window, index )
  	{


  		'use strict';

  		var elSelector	= '.headermobile',
  			element		= document.querySelector( elSelector );

  		if( !element ) return true;

  		var elHeight		= 0,
  			elTop			= 0,
  			dHeight			= 0,
  			wHeight			= 0,
  			wScrollCurrent	= 0,
  			wScrollBefore	= 0,
  			wScrollDiff		= 0;

  		window.addEventListener( 'scroll', function()
  		{
  			elHeight		= element.offsetHeight;
  			dHeight			= document.body.offsetHeight;
  			wHeight			= window.innerHeight;
  			wScrollCurrent	= window.pageYOffset;
  			wScrollDiff		= wScrollBefore - wScrollCurrent;
  			elTop			= parseInt( window.getComputedStyle( element ).getPropertyValue( 'top' ) ) + wScrollDiff;

  			if( wScrollCurrent <= 0 ) // scrolled to the very top; element sticks to the top
  				element.style.top = '0px';

  			else if( wScrollDiff > 0 ) // scrolled up; element slides in
  				element.style.top = ( elTop > 0 ? 0 : elTop ) + 'px';

  			else if( wScrollDiff < 0 ) // scrolled down
  			{
  				if( wScrollCurrent + wHeight >= dHeight - elHeight )  // scrolled to the very bottom; element slides in
  					element.style.top = ( ( elTop = wScrollCurrent + wHeight - dHeight ) < 0 ? elTop : 0 ) + 'px';

  				else // scrolled down; element slides out
  					element.style.top = ( Math.abs( elTop ) > elHeight ? -elHeight : elTop ) + 'px';
  			}

  			wScrollBefore = wScrollCurrent;
  		});

  	}( document, window, 0 ));


    (function() {

      var searchham = {
        navTogglesearch: document.querySelector('.nav-toggle-2'),
        navsearch: document.querySelector('.searchoverbar'),
        body: document.querySelector('body'),
        outside_menu_search: document.querySelector('.outside_menu_search'),

        doToggle: function(e) {
          e.preventDefault();
          this.navTogglesearch.classList.toggle('expanded');
          this.navsearch.classList.toggle('expanded');
        }
      };
      searchham.navTogglesearch.addEventListener('click', function(e) { searchham.doToggle(e); });
      searchham.outside_menu_search.addEventListener('click', function(e) { searchham.doToggle(e); });



    }());
</script>
<div class="breadcrumb"><?php echo my_path_breadcrumbs(); ?>*/</div>

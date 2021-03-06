
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

  	var hamburger = {
  		navToggle: document.querySelector('.nav-toggle'),
  		nav: document.querySelector('nav'),
  		outside_menu: document.querySelector('.outside_menu'),
  		mes_liens: document.querySelector('.Menu_principal_mobile'),
      body: document.querySelector('body'),

  		doToggle: function(e) {
  			e.preventDefault();
  			this.navToggle.classList.toggle('expanded');
  			this.nav.classList.toggle('expanded');
        this.body.classList.toggle('fixedPosition');
  		}
  	};
  	hamburger.navToggle.addEventListener('click', function(e) { hamburger.doToggle(e); });
  	hamburger.outside_menu.addEventListener('click', function(e) { hamburger.doToggle(e); });
  	hamburger.mes_liens.addEventListener('click', function(e) { hamburger.doToggle(e); });


  }());

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

/**
 * navigation.js
 *
 * Handles toggling the navigation menu for small screens.
 */
// ( function() {
// 	var container, button, menu;

// 	container = document.getElementById( 'site-navigation' );
// 	if ( ! container )
// 		return;

// 	button = container.getElementsByTagName( 'button' )[0];
// 	if ( 'undefined' === typeof button )
// 		return;

// 	menu = container.getElementsByTagName( 'ul' )[0];

// 	// Hide menu toggle button if menu is empty and return early.
// 	if ( 'undefined' === typeof menu ) {
// 		button.style.display = 'none';
// 		return;
// 	}

// 	if ( -1 === menu.className.indexOf( 'nav-menu' ) )
// 		menu.className += ' nav-menu';

// 	button.onclick = function() {
// 		if ( -1 !== container.className.indexOf( 'toggled' ) )
// 			container.className = container.className.replace( ' toggled', '' );
// 		else
// 			container.className += ' toggled';
// 	};
// } )();
$(document).ready(function() {
  var navigation = $('#site-navigation');
  var menu = $('.menu');
  var menuToggle = $('a.menu-toggle');
  //var signUp = $('.sign-up');

  $(menuToggle).on('click', function(e) {
    e.preventDefault();
    menu.slideToggle(function(){
      if(navigation.hasClass('.hidden')) {
        menu.removeAttr('style');
      } else {
      	menu.addClass('hidden');
      }
    });
  });

  // underline under the active nav item
  $(".nav .nav-link").click(function() {
    $(".nav .nav-link").each(function() {
      $(this).removeClass("active-nav-item");
    });
    $(this).addClass("active-nav-item");
    $(".nav .more").removeClass("active-nav-item");
  });
});

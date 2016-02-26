/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */

(function($) {

  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  var Sage = {
    // All pages
    'common': {
      init: function() {
        // JavaScript to be fired on all pages

        function onScroll( event ){
            var scrollPos = $( document ).scrollTop();
            $( "#nav a" ).each( function() {
                var currLink = $( this );
                var refElement = $( currLink.attr( "href" ) );
                if ( refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos ) {
                    $( "#nav a" ).removeClass( "active" );
                    currLink.addClass( "active" );
                }
            });
            if( $( document ).scrollTop() > 1 ) {
              $( ".nav-container" ).addClass( "nav-background" );
            }
            else {
              $( ".nav-container" ).removeClass( "nav-background" );
            }
        }

        //scroll adjust active menu item
        $( document ).ready( function() {
            $( document ).on("scroll", onScroll);

            $( 'a[href^="#"]' ).on( "click", function( e ) {
                e.preventDefault();
                $( document ).off( "scroll" );

                $( 'a' ).each( function() {
                    $( this ).removeClass( "active" );
                });
                $( this ).addClass( "active" );

                var target = this.hash,
                    menu = target,
                    offset = 40;
                $target = $( target );
                $( "html, body" ).stop().animate({
                    'scrollTop': $target.offset().top-offset
                }, 500, 'swing', function () {
                    window.location.hash = target;
                    $( document ).on( "scroll", onScroll );
                });
            });
        });

        //mobile menu button clicks
        $( ".menu-btn" ).click(function() {
          $( "#nav" ).toggleClass( "active" );
          $( ".menu-btn" ).toggleClass( "active" );
        });

        $( "#nav a" ).click(function() {
          $( "#nav" ).removeClass( "active" );
          $( ".menu-btn" ).removeClass( "active" );
        });


        //video placeholder
        $('.work-item').click(function(){
          $(".work-item").removeClass("active");
          $(this).addClass("active");
          video = '<iframe width="100%" height="440px" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen src="'+ $(this).attr('data-video') +'?rel=0&autoplay=1"></iframe>';
          $(".video-placeholder").html(video);
        });

        $('.video-placeholder, .reel-cta').click(function(){
          video = '<iframe width="100%" height="440px" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen src="'+ $(".video-placeholder").attr('data-video') +'?rel=0&autoplay=1"></iframe>';
          $(".video-placeholder").html(video);
        });

      },
      finalize: function() {
        // JavaScript to be fired on all pages, after page specific JS is fired
      }
    },
    // Home page
    'home': {
      init: function() {
        // JavaScript to be fired on the home page
      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS
      }
    },
    // About us page, note the change from about-us to about_us.
    'about_us': {
      init: function() {
        // JavaScript to be fired on the about us page
      }
    }
  };

  // The routing fires all common scripts, followed by the page specific scripts.
  // Add additional events for more control over timing e.g. a finalize event
  var UTIL = {
    fire: function(func, funcname, args) {
      var fire;
      var namespace = Sage;
      funcname = (funcname === undefined) ? 'init' : funcname;
      fire = func !== '';
      fire = fire && namespace[func];
      fire = fire && typeof namespace[func][funcname] === 'function';

      if (fire) {
        namespace[func][funcname](args);
      }
    },
    loadEvents: function() {
      // Fire common init JS
      UTIL.fire('common');

      // Fire page-specific init JS, and then finalize JS
      $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
        UTIL.fire(classnm);
        UTIL.fire(classnm, 'finalize');
      });

      // Fire common finalize JS
      UTIL.fire('common', 'finalize');
    }
  };

  // Load Events
  $(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.

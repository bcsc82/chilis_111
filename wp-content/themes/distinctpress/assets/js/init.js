jQuery(document).ready(function() {
    jQuery.scrollUp({
        scrollName: 'scrollUp', // Element ID
        topDistance: '1200', // Distance from top before showing element (px)
        topSpeed: 300, // Speed back to top (ms)
        animation: 'fade', // Fade, slide, none
        animationInSpeed: 1500, // Animation in speed (ms)
        animationOutSpeed: 1500, // Animation out speed (ms)
        scrollText: '<i class="el-icon-chevron-up scroll-icon"></i>', // Text for element
        activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
    });
    jQuery('#commentform').validate({
        rules: {
            author: {
                required: true,
                minlength: 2
            },
            email: {
                required: true,
                email: true
            },
            url: {
                url: true
            },
            comment: {
                required: true,
                minlength: 20
            }
        },
        messages: {
            author: "Please enter a valid name.",
            email: "Please enter a valid email address.",
            url: "Please use a valid website address.",
            comment: "Message must be at least 20 characters."
        }
    });

    jQuery('#mobile-menu-toggle').on('click', function (e) {
        e.preventDefault();
        jQuery('.header-menu').toggleClass('nav-open');
    });

    if (jQuery(window).width() < 768) {

        jQuery('.page_item_has_children a').on('click', function (e) {
            e.preventDefault();
            jQuery(this).parent().toggleClass('sub-open');
        });
    }

    jQuery(window).on('resize', function(event){
        if (jQuery(window).width() < 768) {

            jQuery('.page_item_has_children a').on('click', function (e) {
                e.preventDefault();
                jQuery(this).parent().toggleClass('sub-open');
            });
        }
    });

    jQuery('.match-height').matchHeight();

    jQuery('.nav li.dropdown').hover(function() {
      jQuery(this).find('.dropdown-menu').stop(true, true).delay(50).fadeIn(150);
    }, function() {
      jQuery(this).find('.dropdown-menu').stop(true, true).delay(50).fadeOut(150);
    });
});

( function( $ ) {
     jQuery( window ).load( function() {
 
        // Portfolio filtering
        var $container = jQuery( '.portfolio' );
 
        $container.isotope( {
            filter: '*',
            layoutMode: 'fitRows',
            resizable: true, 
          } );
 
        // filter items when filter link is clicked
        $( '.portfolio-filter li' ).click( function(){
            var selector = jQuery( this ).attr( 'data-filter' );
                $container.isotope( { 
                    filter: selector,
                } );
          return false;
        } );
    } );
} )( jQuery );

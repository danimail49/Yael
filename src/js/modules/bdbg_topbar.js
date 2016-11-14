/*----------------------------------------------------------------------------
   TopBar Hide / Show
----------------------------------------------------------------------------*/
;( function( $, window, document, undefined ) {

    /* Caching Elements
    -------------------------------------*/

    /**
     * Check if #bdbg-tombar element is visible.
     *
     * @return bool true if visible, false if no.
     */
    function topbarIsVisible() {
        if ( "none" != $topbarEl.css( "display" ) ) {
            return true;
        }

        return false;
    }

    function toggleTopBar() {
        if ( $navbarEl.offset().top > offsetTop && topbarIsVisible() ) {
            $topbarEl.stop( true, false ).slideUp( 180 );
            $navbarEl.stop( true, false ).animate( { top: adminbarHeight - 1 }, { duration: 180 } );
        } else if ( $navbarEl.offset().top <= offsetTop && ! topbarIsVisible() ) {
            $topbarEl.stop( true, false ).slideDown( 180 );
            $navbarEl.stop( true, false ).animate( { top: offsetTop - 1 }, { duration: 180 } );
        }
    }

    if ( $( "#js-topheader" ).length ) {

        // Elements
        var $navbarEl   = $( "#js-nav" ),
            $topbarEl   = $( "#js-topheader" ),
            $adminbarEl = $( "#wpadminbar" );

        // Dimensions
        var topbarHeight   = $topbarEl.height(),
            navbarHeight   = $navbarEl.height(),
            adminbarHeight = ( $adminbarEl.length ) ? $adminbarEl.height() : 0;

        // Navbar offset from top;
        var offsetTop = adminbarHeight + topbarHeight;

        toggleTopBar();

        $( window ).scroll( function() {
            toggleTopBar();
        } );

    }


} )( jQuery, window, document );

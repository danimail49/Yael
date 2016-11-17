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
        if ( $( window ).scrollTop() > offsetTop && topbarIsVisible() ) {
            $topbarEl.stop( true, false ).slideUp( 180 );
            $navbarEl.stop( true, false ).animate( { top: adminbarHeight - 1 }, { duration: 180 } );
            $( ".bdbg-header" ).css( "top", 0 );
            $( "body" ).removeClass( "js-topbar-opened" );
            $( "#js-topbar-margin" ).css( "margin-top", navbarHeight );
        } else if ( $( window ).scrollTop() <= offsetTop && ! topbarIsVisible() ) {
            $topbarEl.stop( true, false ).slideDown( 180 );
            $navbarEl.stop( true, false ).animate( { top: offsetTop - 1 }, { duration: 180 } );
            $( ".bdbg-header" ).css( "top", offsetTop - adminbarHeight - 1 );
            $( "body" ).addClass( "js-topbar-opened" );
            $( "#js-topbar-margin" ).css( "margin-top", topbarHeight );
        }
    }

    if ( $( "#js-topheader" ).length && $( ".navbar-fixed" ).length ) {

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

        $( window ).on( "resize", function() {
            toggleTopBar();
        } );

    } else {
        $( "body" ).addClass( "header-scroll" );
    }


} )( jQuery, window, document );

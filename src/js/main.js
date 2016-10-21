/**
 * Yael functions and definitions.
 */

( function( $ ) {
    "use strict";

    $( function() {
        // Sidemenu data caching.
        let menuSide = $( ".button-collapse" ).data( "menuside" );

        // Main menu dropdown initialization
        $( ".button-collapse" )
            .sideNav( {
                menuWidth: 300, // Default is 240.
                edge: menuSide,
                closeOnClick: true // Closes side-nav on <a> clicks.
            }
        );

        // Side menu dropdown initialization.
        $( ".collapsible" ).collapsible( {
            /**
             * A setting that changes the collapsible behavior to expandable,
             * instead of the default accordion style.
             */
            accordion: true
        } );

        // Dropdown initialization
        $( ".dropdown-button" ).dropdown();

        // Search for header part.
        //= modules/bdbg-modal.js

    } );

} )( jQuery );

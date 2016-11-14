/**
 * Yael functions and definitions.
 */

( function( $ ) {
    "use strict";

    $( function() {

        // Modal
        //= modules/bdbg-modal.js
        // Grid Height Plugin
        //= modules/bdbg_grid_height.js
        // Grid Height Plugin
        //= modules/bdbg_topbar.js

        $( ".bdbg-row-set" )
            .bdbgGridHeight( {
                elementSelector: ".type-post .card-content"
            } )
            .bdbgGridHeight( {
                elementSelector: ".type-post .card-image"
            } );

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

    } );

} )( jQuery );

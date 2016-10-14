/**
 * Yael functions and definitions.
 */

( function( $ ) {
    "use strict";

    $( function() {
        /*----------------------------------------------------------------------------
        Main Scripts
        ----------------------------------------------------------------------------*/
        /* Menu Desktop & Mobile Module
        --------------------------------------*/

		// ./modules/bdbg_menu_plugin.js
		// $( "#bdbg-menu-main" ).bdbgMenu();
        // $( "#bdbg-menu-side" ).bdbgMenu();
        $('.button-collapse')
            .sideNav({
                menuWidth: 300, // Default is 240
                // edge: 'right', // Choose the horizontal origin
                closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
            }
        );

        $('.collapsible').collapsible({
            accordion: true // A setting that changes the collapsible behavior to expandable instead of the default accordion style
        });

        // main dropdown initialization
        $( ".dropdown-button" ).dropdown();



    } );

} )( jQuery );

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

		//= ./modules/bdbg_menu_plugin.js
		$( "#bdbg-menu-main" ).bdbgMenu();
        $( "#bdbg-menu-side" ).bdbgMenu();

    } );

} )( jQuery );

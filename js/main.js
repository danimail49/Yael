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
        /**
         * Search Modal
         */
        $( ".bdbg-js-search" ).on( "click", function() {
            $( ".bdbg-overlay" ).addClass( "bdbg-overlay--visible" );
            $( "#search-big" ).focus();
        } );
        
        $( ".bdbg-overlay__button--close" ).on( "click", function() {
            $( ".bdbg-overlay" ).removeClass( "bdbg-overlay--visible" );
        } );
        
        $( "#search-big" ).on( "keypress", function( event ) {
            if ( 13 === event.keyCode ) {
                let modalHeading = $( ".bdbg-modal__heading" );
                let count = 0;
        
                modalHeading.html( modalHeading.data( "textsearch" ) );
                setInterval( function() {
                    if ( 0 === count ) {
                        modalHeading.html( modalHeading.data( "textsearch" ) );
                        count++;
                    } else if ( 2 === count ) {
                        count = 0;
                    } else {
                        count++;
                    }
                    modalHeading.append( "." );
                }, 500 );
            }
        } );

    } );

} )( jQuery );
//# sourceMappingURL=main.js.map

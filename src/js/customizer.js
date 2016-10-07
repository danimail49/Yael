/**
* Custom code for WP Customizer
*/

( function( $ ) {
    "use strict";

    //= modules/bdbg_menu_plugin.js

    // Init Menus
    $( "#bdbg-menu-main" ).bdbgMenu();
    $( "#bdbg-menu-side" ).bdbgMenu();

    $( function() {

        wp.customize( "bdbg_header_background", function( value ) {
            value.bind( function( newval ) {
                $( ".bdbg-header" ).css( "background-color", newval );
            } );
        } );

        wp.customize( "bdbg_header_fontcolor", function( value ) {
            value.bind( function( newval ) {
                $( ".bdbg-header" ).css( "color", newval );
                $( ".bdbg-header a" ).css( "color", newval );
            } );
        } );

        wp.customize( "bdbg_header_logo_margin", function( value ) {
            value.bind( function( newval ) {
                $( ".bdbg-logo" ).css( "margin-top", newval + "px" );
            } );
        } );

        wp.customize( "bdbg_header_menu_vertical_margin", function( value ) {
            value.bind( function( newval ) {
                $( ".bdbg-menu" ).css( "margin-top", newval + "px" );
            } );
        } );

        wp.customize( "bdbg_header_shadow", function( value ) {
            value.bind( function( newval ) {
                if ( newval === false ) {
                    $( ".bdbg-header" ).css( "box-shadow", "none" );
                } else {
                    $( ".bdbg-header" ).css( "box-shadow", "" );
                }
            } );
        } );

    } );

} )( jQuery );

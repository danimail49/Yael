/**
* Custom code for WP Customizer
*/

//= modules/bdbg_menu_plugin.js

( function( $ ) {
    "use strict";

    $( function() {

        // Init Menus
        $( "#bdbg-menu-main" ).bdbgMenu();
        $( "#bdbg-menu-side" ).bdbgMenu();

        wp.customize( "bdbg_header_background", function( value ) {
            value.bind( function( newval ) {
                $( ".bdbg-header" ).css( "background-color", newval );
            } );
        } );

        wp.customize( "bdbg_header_fontcolor", function( value ) {
            value.bind( function( newval ) {
                $( ".bdbg-header" ).css( "color", newval );
                $( ".bdbg-header a" ).css( "color", newval );
                $( ".bdbg-header .mdl-layout__drawer-button" ).css( "color", newval );
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

        wp.customize( "bdbg_logo_header_width", function( value ) {
            value.bind( function( newval ) {
                $( ".bdbg-logo--main img" ).attr( "width", newval );
            } );
        } );

        wp.customize( "bdbg_logo_header_height", function( value ) {
            value.bind( function( newval ) {
                $( ".bdbg-logo--main img" ).attr( "height", newval );
            } );
        } );

        wp.customize( "bdbg_logo_side_width", function( value ) {
            value.bind( function( newval ) {
                $( ".bdbg-logo--side img" ).attr( "width", newval );
            } );
        } );

        wp.customize( "bdbg_logo_side_height", function( value ) {
            value.bind( function( newval ) {
                $( ".bdbg-logo--side img" ).attr( "height", newval );
            } );
        } );

    } );

} )( jQuery );

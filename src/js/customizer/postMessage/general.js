/* General Section
-------------------------------------*/

/*
 * General
 */
 wp.customize( "bdbg_general_typography_main_fontsize", function( value ) {
     value.bind( function( newval ) {
         $( "body" ).css( "font-size", newval + "px" );
     } );
 } );

wp.customize( "bdbg_general_colors_background", function( value ) {
    value.bind( function( newval ) {
        $( "body" ).css( "background-color", newval );
    } );
} );

wp.customize( "bdbg_general_colors_fontcolor", function( value ) {
    value.bind( function( newval ) {
        $( "body" ).css( "color", newval );
    } );
} );

$( "head" ).append( "<style id=\"general-settings-link\"></style>" );
wp.customize( "bdbg_general_colors_linkcolor", function( value ) {
    value.bind( function( newval ) {
        $( "#general-settings-link" ).html(
            "a { color:" + newval + "; }"
        );
    } );
} );

$( "head" ).append( "<style id=\"general-settings-linkhover\"></style>" );
wp.customize( "bdbg_general_colors_linkhovercolor", function( value ) {
    value.bind( function( newval ) {
        $( "#general-settings-linkhover" ).html(
            "a:hover:not(.btn) { color:" + newval + "; }"
        );
    } );
} );

wp.customize( "bdbg_general_colors_activeelem_fontcolor", function( value ) {
    value.bind( function( newval ) {
        $( "input[type=\"button\"]" ).css( "color", newval );
        $( "button" ).css( "color", newval );
        $( ".btn" ).css( "color", newval );
    } );
} );

wp.customize( "bdbg_general_colors_activeelem_background", function( value ) {
    value.bind( function( newval ) {
        $( "input[type=\"button\"]" ).css( "background-color", newval );
        $( "button" ).css( "background-color", newval );
        $( ".btn" ).css( "background-color", newval );
        $( ".btn-large" ).css( "background-color", newval );
    } );
} );

/*
 * Style sections
 */
for ( var i = 1; i < 7; i++ ) {
    $( "head" ).append( "<style id=\"style-size-h" + i + "\"></style>" );
    $( "head" ).append( "<style id=\"style-weight-h" + i + "\"></style>" );
    $( "head" ).append( "<style id=\"style-space-h" + i + "\"></style>" );
}

/*
 * Headings 1-6
 */
 wp.customize( "bdbg_general_typography_h1_fontsize", function( value ) {
     value.bind( function( newval ) {
         $( "#style-size-h1" ).html(
             "h1 { font-size:" + newval + "px; }"
         );
     } );
 } );
 wp.customize( "bdbg_general_typography_h1_weight", function( value ) {
     value.bind( function( newval ) {
         $( "#style-weight-h1" ).html(
             "h1 { font-weight:" + newval + "; }"
         );
     } );
 } );
 wp.customize( "bdbg_general_typography_h1_letterspace", function( value ) {
     value.bind( function( newval ) {
         $( "#style-space-h1" ).html(
             "h1 { letter-spacing:" + newval + "px; }"
         );
     } );
 } );
 wp.customize( "bdbg_general_typography_h2_fontsize", function( value ) {
     value.bind( function( newval ) {
         $( "#style-size-h2" ).html(
             ".bdbg-post h2.bdbg-post__title, h2 { font-size:" + newval + "px; }"
         );
     } );
 } );
 wp.customize( "bdbg_general_typography_h2_weight", function( value ) {
     value.bind( function( newval ) {
         $( "#style-weight-h2" ).html(
             ".bdbg-post h2.bdbg-post__title, h2 { font-weight:" + newval + "; }"
         );
     } );
 } );
 wp.customize( "bdbg_general_typography_h2_letterspace", function( value ) {
     value.bind( function( newval ) {
         $( "#style-space-h2" ).html(
             "h2 { letter-spacing:" + newval + "px; }"
         );
     } );
 } );
 wp.customize( "bdbg_general_typography_h3_fontsize", function( value ) {
     value.bind( function( newval ) {
         $( "#style-size-h3" ).html(
             "h3 { font-size:" + newval + "px; }"
         );
     } );
 } );
 wp.customize( "bdbg_general_typography_h3_weight", function( value ) {
     value.bind( function( newval ) {
         $( "#style-weight-h3" ).html(
             "h3 { font-weight:" + newval + "; }"
         );
     } );
 } );
 wp.customize( "bdbg_general_typography_h3_letterspace", function( value ) {
     value.bind( function( newval ) {
         $( "#style-space-h3" ).html(
             "h3 { letter-spacing:" + newval + "px; }"
         );
     } );
 } );
 wp.customize( "bdbg_general_typography_h4_fontsize", function( value ) {
     value.bind( function( newval ) {
         $( "#style-size-h4" ).html(
             "h4 { font-size:" + newval + "px; }"
         );
     } );
 } );
 wp.customize( "bdbg_general_typography_h4_weight", function( value ) {
     value.bind( function( newval ) {
         $( "#style-weight-h4" ).html(
             "h4 { font-weight:" + newval + "; }"
         );
     } );
 } );
 wp.customize( "bdbg_general_typography_h4_letterspace", function( value ) {
     value.bind( function( newval ) {
         $( "#style-space-h4" ).html(
             "h4 { letter-spacing:" + newval + "px; }"
         );
     } );
 } );
 wp.customize( "bdbg_general_typography_h5_fontsize", function( value ) {
     value.bind( function( newval ) {
         $( "#style-size-h5" ).html(
             "h5 { font-size:" + newval + "px; }"
         );
     } );
 } );
 wp.customize( "bdbg_general_typography_h5_weight", function( value ) {
     value.bind( function( newval ) {
         $( "#style-weight-h5" ).html(
             "h5 { font-weight:" + newval + "; }"
         );
     } );
 } );
 wp.customize( "bdbg_general_typography_h5_letterspace", function( value ) {
     value.bind( function( newval ) {
         $( "#style-space-h5" ).html(
             "h5 { letter-spacing:" + newval + "px; }"
         );
     } );
 } );
 wp.customize( "bdbg_general_typography_h6_fontsize", function( value ) {
     value.bind( function( newval ) {
         $( "#style-size-h6" ).html(
             "h6 { font-size:" + newval + "px; }"
         );
     } );
 } );
 wp.customize( "bdbg_general_typography_h6_weight", function( value ) {
     value.bind( function( newval ) {
         $( "#style-weight-h6" ).html(
             "h6 { font-weight:" + newval + "; }"
         );
     } );
 } );
 wp.customize( "bdbg_general_typography_h6_letterspace", function( value ) {
     value.bind( function( newval ) {
         $( "#style-space-h6" ).html(
             "h6 { letter-spacing:" + newval + "px; }"
         );
     } );
 } );

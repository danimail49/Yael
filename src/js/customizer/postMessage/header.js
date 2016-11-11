/* Header General
-------------------------------------*/

wp.customize( "bdbg_header_general_showshadow", function( value ) {
    value.bind( function( newval ) {
        if ( newval === false ) {
            $( ".bdbg-nav" ).css( "box-shadow", "none" );
        } else {
            $( ".bdbg-nav" ).css( "box-shadow", "" );
        }
    } );
} );

wp.customize( "bdbg_header_general_fixed", function( value ) {
    value.bind( function( newval ) {
        if ( newval === true ) {
            $( ".bdbg-header" ).addClass( "navbar-fixed" );
        } else {
            $( ".bdbg-header" ).removeClass( "navbar-fixed" );
        }
    } );
} );

wp.customize( "bdbg_header_general_height", function( value ) {
    value.bind( function( newval ) {
        $( ".bdbg-nav" ).css( "height", parseInt( newval ) );
		$( ".bdbg-header" ).css( "height", parseInt( newval ) );
        $( ".bdbg-logo--main" ).css( "line-height", parseInt( newval ) + "px" );
        $( ".button-collapse" ).css( "line-height", parseInt( newval ) + "px" );
        $( ".bdbg-js-search" ).css( "line-height", parseInt( newval ) + "px" );
        $( ".bdbg-menu--main > li > a" ).css( "line-height", parseInt( newval ) + "px" );
    } );
} );

wp.customize( "bdbg_header_general_background", function( value ) {
    value.bind( function( newval ) {
        $( ".bdbg-nav" ).css( "background-color", newval );
    } );
} );

wp.customize( "bdbg_header_general_fontcolor", function( value ) {
    value.bind( function( newval ) {
        $( ".bdbg-menu--main > li > a" ).css( "color", newval );
        $( ".button-collapse" ).css( "color", newval );
        $( ".bdbg-js-search" ).css( "color", newval );
    } );
} );

$( "head" ).append( "<style id=\"mainhoverback\"></style>" );
wp.customize( "bdbg_header_general_hoverbackground", function( value ) {
    value.bind( function( newval ) {
        $( "#mainhoverback" ).html(
            ".bdbg-menu--main > li > a:hover { background-color:" + newval + "!important;}"
        );
    } );
} );

$( "head" ).append( "<style id=\"mainhovercolor\"></style>" );
wp.customize( "bdbg_header_general_hovercolor", function( value ) {
    value.bind( function( newval ) {
        $( "#mainhovercolor" ).html(
            ".bdbg-menu--main > li > a:hover { color:" + newval + "!important;}"
        );
    } );
} );

wp.customize( "bdbg_header_general_weight", function( value ) {
    value.bind( function( newval ) {
        $( ".bdbg-menu--main > li > a" ).css( "font-weight", newval );
    } );
} );

wp.customize( "bdbg_header_general_fontsize", function( value ) {
    value.bind( function( newval ) {
        $( ".bdbg-menu--main > li > a" ).css( "font-size", parseInt( newval ) );
    } );
} );

wp.customize( "bdbg_header_general_letterspace", function( value ) {
    value.bind( function( newval ) {
        if ( 0 !== newval ) {
            $( ".bdbg-menu--main > li > a" ).css( "letter-spacing", parseInt( newval ) );
        } else {
            $( ".bdbg-menu--main > li > a" ).css( "letter-spacing", "" );
        }
    } );
} );

wp.customize( "bdbg_header_general_margin", function( value ) {
    value.bind( function( newval ) {
        if ( 0 < parseInt( newval ) ) {
            $( ".bdbg-js-search" )
                .css( {
                    "padding-top": Math.abs( parseInt( newval ) ),
                    "padding-bottom": "0"
                } );
            $( ".bdbg-menu--main > li > a" )
                .css( {
                    "padding-top": Math.abs( parseInt( newval ) ),
                    "padding-bottom": "0"
                } );
            $( ".bdbg-header .bdbg-js-search" )
                .css( {
                    "padding-top": Math.abs( parseInt( newval ) ),
                    "padding-bottom": "0"
                } );
        } else if ( 0 > parseInt( newval ) ) {
            $( ".bdbg-js-search" )
                .css( {
                    "padding-bottom": Math.abs( parseInt( newval ) ),
                    "padding-top": "0"
                } );
            $( ".bdbg-menu--main > li > a" )
                .css( {
                    "padding-bottom": Math.abs( parseInt( newval ) ),
                    "padding-top": "0"
                } );
            $( ".bdbg-header .bdbg-js-search" )
                .css( {
                    "padding-bottom": Math.abs( parseInt( newval ) ),
                    "padding-top": "0"
                } );
        } else {
            $( ".bdbg-js-search" ).css( {
                "padding-bottom": "0",
                "padding-top": "0"
            } );
            $( ".bdbg-menu--main > li > a" ).css( {
                "padding-bottom": "0",
                "padding-top": "0"
            } );
            $( ".bdbg-header .bdbg-js-search" ).css( {
                "padding-bottom": "0",
                "padding-top": "0"
            } );
        }
    } );
} );

/* Main Logo
-------------------------------------*/
wp.customize( "bdbg_header_logo_main_height", function( value ) {
    value.bind( function( newval ) {
        $( ".bdbg-logo--main .bdbg-logo__img" ).css( "height", parseInt( newval ) );
    } );
} );

wp.customize( "bdbg_header_logo_main_fontcolor", function( value ) {
    value.bind( function( newval ) {
        $( ".bdbg-logo--main" ).css( "color", newval );
    } );
} );

wp.customize( "bdbg_header_logo_main_weight", function( value ) {
    value.bind( function( newval ) {
        $( ".bdbg-logo--main" ).css( "font-weight", newval );
    } );
} );

wp.customize( "bdbg_header_logo_main_fontsize", function( value ) {
    value.bind( function( newval ) {
        $( ".bdbg-logo--main" ).css( "font-size", parseInt( newval ) );
    } );
} );

wp.customize( "bdbg_header_logo_main_letterspace", function( value ) {
    value.bind( function( newval ) {
        if ( 0 !== newval ) {
            $( ".bdbg-logo--main" ).css( "letter-spacing", parseInt( newval ) );
        } else {
            $( ".bdbg-logo--main" ).css( "letter-spacing", "" );
        }
    } );
} );

wp.customize( "bdbg_header_logo_main_margin", function( value ) {
    value.bind( function( newval ) {
        $( ".bdbg-logo--main" ).css( "margin-top", parseInt( newval ) );
    } );
} );

/* Side Logo
-------------------------------------*/

wp.customize( "bdbg_header_logo_side_width", function( value ) {
    value.bind( function( newval ) {
        $( ".bdbg-logo--side img" ).css( "width", parseInt( newval ) );
    } );
} );

wp.customize( "bdbg_header_logo_side_fontcolor", function( value ) {
    value.bind( function( newval ) {
        $( ".bdbg-logo--side" ).css( "color", newval );
    } );
} );

wp.customize( "bdbg_header_logo_side_weight", function( value ) {
    value.bind( function( newval ) {
        $( ".bdbg-logo--side" ).css( "font-weight", newval );
    } );
} );

wp.customize( "bdbg_header_logo_side_fontsize", function( value ) {
    value.bind( function( newval ) {
        $( ".bdbg-logo--side" ).css( "font-size", parseInt( newval ) );
    } );
} );

wp.customize( "bdbg_header_logo_side_letterspace", function( value ) {
    value.bind( function( newval ) {
        if ( 0 !== newval ) {
            $( ".bdbg-logo--side" ).css( "letter-spacing", parseInt( newval ) );
        } else {
            $( ".bdbg-logo--side" ).css( "letter-spacing", "" );
        }
    } );
} );

wp.customize( "bdbg_header_logo_side_margin", function( value ) {
    value.bind( function( newval ) {
        $( ".bdbg-logo--side" ).css( "margin-left", parseInt( newval ) );
    } );
} );

/* Header Search Section
-------------------------------------*/
wp.customize( "bdbg_header_search_fontsize", function( value ) {
    value.bind( function( newval ) {
        $( ".bdbg-overlay .bdbg-input-group__field" ).css( "font-size", parseInt( newval ) );
    } );
} );

wp.customize( "bdbg_header_search_fontcolor", function( value ) {
    value.bind( function( newval ) {
        $( ".bdbg-overlay .bdbg-input-group__field" ).css( "color", newval );
        $( ".bdbg-modal__heading" ).css( "color", newval );
        $( ".bdbg-overlay .bdbg-input-group__field" ).css( "border-color", newval );
        $( ".bdbg-overlay__button--close" ).css( "color", newval );
    } );
} );

wp.customize( "bdbg_header_search_background", function( value ) {
    value.bind( function( newval ) {
        $( ".bdbg-overlay--search" ).css( "background-color", newval );
    } );
} );

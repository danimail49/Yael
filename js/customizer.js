/**
* Custom code for WP Customizer
*/

( function( $ ) {
    "use strict";

    $( function() {

       /*----------------------------------------------------------------------------
          Header Controls
       ----------------------------------------------------------------------------*/
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
               $( ".bdbg-logo__img" ).css( "height", parseInt( newval ) );
           } );
       } );
       
       wp.customize( "bdbg_header_logo_main_fontcolor", function( value ) {
           value.bind( function( newval ) {
               $( ".bdbg-logo" ).css( "color", newval );
           } );
       } );
       
       wp.customize( "bdbg_header_logo_main_weight", function( value ) {
           value.bind( function( newval ) {
               $( ".bdbg-logo" ).css( "font-weight", newval );
           } );
       } );
       
       wp.customize( "bdbg_header_logo_main_fontsize", function( value ) {
           value.bind( function( newval ) {
               $( ".bdbg-logo" ).css( "font-size", parseInt( newval ) );
           } );
       } );
       
       wp.customize( "bdbg_header_logo_main_letterspace", function( value ) {
           value.bind( function( newval ) {
               if ( 0 !== newval ) {
                   $( ".bdbg-logo" ).css( "letter-spacing", parseInt( newval ) );
               } else {
                   $( ".bdbg-logo" ).css( "letter-spacing", "" );
               }
           } );
       } );
       
       wp.customize( "bdbg_header_logo_main_margin", function( value ) {
           value.bind( function( newval ) {
               $( ".bdbg-logo" ).css( "margin-top", parseInt( newval ) );
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
               $( "#search-big" ).css( "font-size", parseInt( newval ) );
           } );
       } );
       
       wp.customize( "bdbg_header_search_fontcolor", function( value ) {
           value.bind( function( newval ) {
               $( "#search-big" ).css( "color", newval );
               $( ".bdbg-modal__heading" ).css( "color", newval );
               $( ".bdbg-overlay #searchform .bdbg-input-group__field" ).css( "border-color", newval );
               $( ".bdbg-overlay__button--close" ).css( "color", newval );
           } );
       } );
       
       wp.customize( "bdbg_header_search_background", function( value ) {
           value.bind( function( newval ) {
               $( ".bdbg-overlay--search" ).css( "background-color", newval );
           } );
       } );
       /* Footer Top Section
       -------------------------------------*/
       wp.customize( "bdbg_footer_top_columns", function( value ) {
           value.bind( function( newval ) {
               const columns = 12;
               let footerClasses;
       
               switch ( parseInt( newval ) ) {
       			case 4:
       				footerClasses = "l3 m6 s12";
       				break;
       			case 3:
       				footerClasses = "l4 m6 s12";
       				break;
       			case 2:
       				footerClasses = "m6 s12";
       				break;
       			case 1:
       				footerClasses = "s12";
       				break;
       			default:
       				footerClasses = "s12";
       				break;
       		}
       
               $( ".bdbg-footer__section--top .bdbg-widget" )
                   .removeClass( "m6 l4 l3" )
                   .addClass( footerClasses );
       
           } );
       } );
       
       wp.customize( "bdbg_footer_top_background", function( value ) {
           value.bind( function( newval ) {
               $( ".bdbg-footer__section--top" ).css( "background-color", newval );
           } );
       } );
       
       wp.customize( "bdbg_footer_top_fontcolor", function( value ) {
           value.bind( function( newval ) {
               $( ".bdbg-footer__section--top" ).css( "color", newval );
           } );
       } );
       
       wp.customize( "bdbg_footer_top_fontsize", function( value ) {
           value.bind( function( newval ) {
               $( ".bdbg-footer__section--top" ).css( "font-size", newval + "px" );
               $( ".bdbg-footer__section--top .bdbg-widget__title" )
                   .css( "font-size", "1.64em" );
       
           } );
       } );
       
       wp.customize( "bdbg_footer_top_weight", function( value ) {
           value.bind( function( newval ) {
               $( ".bdbg-footer__section--top" ).css( "font-weight", newval );
           } );
       } );
       
       wp.customize( "bdbg_footer_top_letterspace", function( value ) {
           value.bind( function( newval ) {
               $( ".bdbg-footer__section--top" ).css( "letter-spacing", newval + "px" );
           } );
       } );
       
       /* Footer Middle Section
       -------------------------------------*/
       wp.customize( "bdbg_footer_middle_columns", function( value ) {
           value.bind( function( newval ) {
               const columns = 12;
               let footerClasses;
       
               switch ( parseInt( newval ) ) {
       			case 4:
       				footerClasses = "l3 m6 s12";
       				break;
       			case 3:
       				footerClasses = "l4 m6 s12";
       				break;
       			case 2:
       				footerClasses = "m6 s12";
       				break;
       			case 1:
       				footerClasses = "s12";
       				break;
       			default:
       				footerClasses = "s12";
       				break;
       		}
       
               $( ".bdbg-footer__section--middle .bdbg-widget" )
                   .removeClass( "m6 l4 l3" )
                   .addClass( footerClasses );
       
           } );
       } );
       
       wp.customize( "bdbg_footer_middle_background", function( value ) {
           value.bind( function( newval ) {
               $( ".bdbg-footer__section--middle" ).css( "background-color", newval );
           } );
       } );
       
       wp.customize( "bdbg_footer_middle_fontcolor", function( value ) {
           value.bind( function( newval ) {
               $( ".bdbg-footer__section--middle" ).css( "color", newval );
           } );
       } );
       
       wp.customize( "bdbg_footer_middle_fontsize", function( value ) {
           value.bind( function( newval ) {
               $( ".bdbg-footer__section--middle" ).css( "font-size", newval + "px" );
               $( ".bdbg-footer__section--middle .bdbg-widget__title" )
                   .css( "font-size", "1.64em" );
       
           } );
       } );
       
       wp.customize( "bdbg_footer_middle_weight", function( value ) {
           value.bind( function( newval ) {
               $( ".bdbg-footer__section--middle" ).css( "font-weight", newval );
           } );
       } );
       
       wp.customize( "bdbg_footer_middle_letterspace", function( value ) {
           value.bind( function( newval ) {
               $( ".bdbg-footer__section--middle" ).css( "letter-spacing", newval + "px" );
           } );
       } );
       
       /* Footer Bottom Section
       -------------------------------------*/
       wp.customize( "bdbg_footer_bottom_columns", function( value ) {
           value.bind( function( newval ) {
               const columns = 12;
               let footerClasses;
       
               switch ( parseInt( newval ) ) {
       			case 4:
       				footerClasses = "l3 m6 s12";
       				break;
       			case 3:
       				footerClasses = "l4 m6 s12";
       				break;
       			case 2:
       				footerClasses = "m6 s12";
       				break;
       			case 1:
       				footerClasses = "s12";
       				break;
       			default:
       				footerClasses = "s12";
       				break;
       		}
       
               $( ".bdbg-footer__section--bottom .bdbg-widget" )
                   .removeClass( "m6 l4 l3" )
                   .addClass( footerClasses );
       
           } );
       } );
       
       wp.customize( "bdbg_footer_bottom_background", function( value ) {
           value.bind( function( newval ) {
               $( ".bdbg-footer__section--bottom" ).css( "background-color", newval );
           } );
       } );
       
       wp.customize( "bdbg_footer_bottom_fontcolor", function( value ) {
           value.bind( function( newval ) {
               $( ".bdbg-footer__section--bottom" ).css( "color", newval );
           } );
       } );
       
       wp.customize( "bdbg_footer_bottom_fontsize", function( value ) {
           value.bind( function( newval ) {
               $( ".bdbg-footer__section--bottom" ).css( "font-size", newval + "px" );
               $( ".bdbg-footer__section--bottom .bdbg-widget__title" )
                   .css( "font-size", "1.64em" );
       
           } );
       } );
       
       wp.customize( "bdbg_footer_bottom_weight", function( value ) {
           value.bind( function( newval ) {
               $( ".bdbg-footer__section--bottom" ).css( "font-weight", newval );
           } );
       } );
       
       wp.customize( "bdbg_footer_bottom_letterspace", function( value ) {
           value.bind( function( newval ) {
               $( ".bdbg-footer__section--bottom" ).css( "letter-spacing", newval + "px" );
           } );
       } );

    } );

} )( jQuery );
//# sourceMappingURL=customizer.js.map

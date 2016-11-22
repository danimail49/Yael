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
       
       // wp.customize( "bdbg_header_general_fixed", function( value ) {
       //     value.bind( function( newval ) {
       //         if ( newval === true ) {
       //             $( ".bdbg-header" ).addClass( "navbar-fixed" );
       //         } else {
       //             $( ".bdbg-header" ).removeClass( "navbar-fixed" );
       //         }
       //     } );
       // } );
       
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
       
       /* Top Bar
       -------------------------------------*/
       $( "head" ).append( "<style id=\"topbarcss\"></style>" );
       
       wp.customize( "bdbg_topbar_background", function( value ) {
           value.bind( function( newval ) {
               $( "#js-topheader" ).css( "background-color", newval );
           } );
       } );
       
       wp.customize( "bdbg_topbar_fontcolor", function( value ) {
           value.bind( function( newval ) {
               $( "#js-topheader" ).css( "color", newval );
           } );
       } );
       
       wp.customize( "bdbg_topbar_weight", function( value ) {
           value.bind( function( newval ) {
               $( "#js-topheader" ).css( "font-weight", newval );
           } );
       } );
       
       wp.customize( "bdbg_topbar_letterspace", function( value ) {
           value.bind( function( newval ) {
               $( "#js-topheader" ).css( "letter-spacing", parseInt( newval ) );
           } );
       } );
       
       wp.customize( "bdbg_topbar_linkcolor", function( value ) {
           value.bind( function( newval ) {
               $( "#topbarcss" ).append(
                   "#js-topheader a {color:" + newval + ";}"
               );
           } );
       } );
       
       wp.customize( "bdbg_topbar_linkhovercolor", function( value ) {
           value.bind( function( newval ) {
               $( "#topbarcss" ).append(
                   "#js-topheader a:hover {color:" + newval + ";}"
               );
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

       /*----------------------------------------------------------------------------
          General Controls
       ----------------------------------------------------------------------------*/
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
                   "a { color:" + newval + "; } "
               );
           } );
       } );
       
       $( "head" ).append( "<style id=\"general-settings-linkhover\"></style>" );
       wp.customize( "bdbg_general_colors_linkhovercolor", function( value ) {
           value.bind( function( newval ) {
               $( "#general-settings-linkhover" ).html(
                   "a:hover:not(.btn), .card .card-action a:hover:not(.btn):not(.btn-large):not(.btn-large):not(.btn-floating) { color:" + newval + "; }"
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
               $( ".pagination .active" ).css( "background-color", newval );
               $( ".pagination li a " ).not( ".active" ).css( "color", newval );
           } );
       } );
       
       /*
        * Style sections
        */
       for ( var i = 1; i < 7; i++ ) {
           $( "head" ).append( "<style id=\"style-size-h" + i + "\"></style>" );
           $( "head" ).append( "<style id=\"style-weight-h" + i + "\"></style>" );
           $( "head" ).append( "<style id=\"style-space-h" + i + "\"></style>" );
           $( "head" ).append( "<style id=\"style-color-h" + i + "\"></style>" );
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
        wp.customize( "bdbg_general_typography_h1_color", function( value ) {
            value.bind( function( newval ) {
                $( "#style-color-h1" ).html(
                    "h1 { color:" + newval + "; }"
                );
            } );
        } );
        wp.customize( "bdbg_general_typography_h2_fontsize", function( value ) {
            value.bind( function( newval ) {
                $( "#style-size-h2" ).html(
                    ".bdbg-post h2.bdbg-post__title a, h2 { font-size:" + newval + "px; }"
                );
            } );
        } );
        wp.customize( "bdbg_general_typography_h2_weight", function( value ) {
            value.bind( function( newval ) {
                $( "#style-weight-h2" ).html(
                    ".bdbg-post h2.bdbg-post__title a, h2 { font-weight:" + newval + "; }"
                );
            } );
        } );
        wp.customize( "bdbg_general_typography_h2_letterspace", function( value ) {
            value.bind( function( newval ) {
                $( "#style-space-h2" ).html(
                    ".bdbg-post h2.bdbg-post__title a, h2 { letter-spacing:" + newval + "px; }"
                );
            } );
        } );
        wp.customize( "bdbg_general_typography_h2_color", function( value ) {
            value.bind( function( newval ) {
                $( "#style-color-h2" ).html(
                    ".bdbg-post h2.bdbg-post__title a, h2 { color:" + newval + "; }"
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
        wp.customize( "bdbg_general_typography_h3_color", function( value ) {
            value.bind( function( newval ) {
                $( "#style-color-h3" ).html(
                    "h3 { color:" + newval + "; }"
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
        wp.customize( "bdbg_general_typography_h4_color", function( value ) {
            value.bind( function( newval ) {
                $( "#style-color-h4" ).html(
                    "h4 { color:" + newval + "; }"
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
        wp.customize( "bdbg_general_typography_h5_color", function( value ) {
            value.bind( function( newval ) {
                $( "#style-color-h5" ).html(
                    "h5 { color:" + newval + "; }"
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
        wp.customize( "bdbg_general_typography_h6_color", function( value ) {
            value.bind( function( newval ) {
                $( "#style-color-h6" ).html(
                    "h6 { color:" + newval + "; }"
                );
            } );
        } );

    } );

} )( jQuery );
//# sourceMappingURL=customizer.js.map

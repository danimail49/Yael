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

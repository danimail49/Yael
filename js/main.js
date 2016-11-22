/**
 * Yael functions and definitions.
 */

( function( $ ) {
    "use strict";

    $( function() {

        // Modal
        /**
         * Search Modal
         */
        $( ".bdbg-js-search" ).on( "click touchstart", function() {
            $( ".bdbg-overlay" ).addClass( "bdbg-overlay--visible" );
            $( ".bdbg-form--search #s" ).focus();
        } );
        
        $( ".bdbg-overlay__button--close" ).on( "click touchstart", function() {
            $( ".bdbg-overlay" ).removeClass( "bdbg-overlay--visible" );
        } );
        
        $( ".bdbg-modal--search" ).find( "#s" ).on( "keypress", function( event ) {
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
        // Grid Height Plugin
        /*!
         * Budabuga Grid Height Plugin
         * Original author: @alexander.katkov
         * Further changes, comments: @alexander.katkov
         * Licensed under the MIT license
         */
        
        ;( function( $, window, document, undefined ) {
        
            // Create the defaults.
            var pluginName = "bdbgGridHeight",
                defaults = {
                    elementSelector: ".gh-element"
                };
        
            // Plugin constructor.
            function Plugin( element, options ) {
        		this.element = element;
        
                this.options = $.extend( {}, defaults, options ) ;
        
                this._defaults = defaults;
                this._name = pluginName;
        
                this.init();
            }
        
            Plugin.prototype = {
        
        		// Constructor.
                init: function() {
        
                    // Height reset
                    this.maxHeight = 0;
        
        			// Build elements cache.
        			this.buildCache();
        
        			// Calling event builder, no preparation needed.
        			this.bindEvents();
                },
        
        		bindEvents: function() {
        
                    // Caching this.
                    var self = this;
        
                    $( window )
        
                        // Initial resize, after page completly loads.
                        .on( "load", function() {
                            self.doResize( self );
                        } )
        
                        // Every time screen size changes resize.
                        .on( "resize", function() {
                            self.doResize( self );
                        } );
        
        		},
        
        		buildCache: function() {
        
        			// Caching base lements.
        			// this.$this = $( this );
        		},
        
                doResize: function( self ) {
        
                    $( self.element ).each( function() {
                        $( this ).find( self.options.elementSelector ).css( "height", "auto" );
                        if ( 1024 >= $( window ).width() ) {
                            return false;
                        }
                        $( this ).find( self.options.elementSelector )
                            .each( function() {
                                self.maxHeight = ( $( this ).outerHeight() > self.maxHeight ) ?
                                    $( this ).outerHeight() : self.maxHeight;
                            } );
        
                            if ( self.maxHeight !== 0 ) {
                                $( this ).find( self.options.elementSelector )
                                    .outerHeight( self.maxHeight );
                                self.maxHeight = 0;
                            }
                             self.maxHeight = 0;
                    } );
                }
            };
        
            // A really lightweight plugin wrapper around the constructor,
            // preventing against multiple instantiations.
            $.fn[ pluginName ] = function( options ) {
        		return this.each( function() {
        			if ( !$.data( this, "plugin_" + pluginName ) ) {
        				$.data( this, "plugin_" +
        					pluginName, new Plugin( this, options ) );
        			}
        		} );
        	};
        
        } )( jQuery, window, document );
        // Grid Height Plugin
        /*----------------------------------------------------------------------------
           TopBar Hide / Show
        ----------------------------------------------------------------------------*/
        ;( function( $, window, document, undefined ) {
        
            /* Caching Elements
            -------------------------------------*/
        
            /**
             * Check if #bdbg-tombar element is visible.
             *
             * @return bool true if visible, false if no.
             */
            function topbarIsVisible() {
                if ( "none" != $topbarEl.css( "display" ) ) {
                    return true;
                }
        
                return false;
            }
        
            function toggleTopBar() {
                if ( $( window ).scrollTop() > offsetTop && topbarIsVisible() ) {
                    $topbarEl.stop( true, false ).slideUp( 180 );
                    $navbarEl.stop( true, false ).animate( { top: adminbarHeight - 1 }, { duration: 180 } );
                    $( ".bdbg-header" ).css( "top", 0 );
                    $( "body" ).removeClass( "js-topbar-opened" );
                    $( "#js-topbar-margin" ).css( "margin-top", navbarHeight );
                } else if ( $( window ).scrollTop() <= offsetTop && ! topbarIsVisible() ) {
                    $topbarEl.stop( true, false ).slideDown( 180 );
                    $navbarEl.stop( true, false ).animate( { top: offsetTop - 1 }, { duration: 180 } );
                    $( ".bdbg-header" ).css( "top", offsetTop - adminbarHeight - 1 );
                    $( "body" ).addClass( "js-topbar-opened" );
                    $( "#js-topbar-margin" ).css( "margin-top", topbarHeight );
                }
            }
        
            if ( $( "#js-topheader" ).length && $( ".navbar-fixed" ).length ) {
        
                // Elements
                var $navbarEl   = $( "#js-nav" ),
                    $topbarEl   = $( "#js-topheader" ),
                    $adminbarEl = $( "#wpadminbar" );
        
                // Dimensions
                var topbarHeight   = $topbarEl.height(),
                    navbarHeight   = $navbarEl.height(),
                    adminbarHeight = ( $adminbarEl.length ) ? $adminbarEl.height() : 0;
        
                // Navbar offset from top;
                var offsetTop = adminbarHeight + topbarHeight;
        
                toggleTopBar();
        
                $( window ).scroll( function() {
                    toggleTopBar();
                } );
        
                $( window ).on( "resize", function() {
                    $topbarEl.css( "height", "" );
                    topbarHeight   = $topbarEl.height();
                    navbarHeight   = $navbarEl.height();
                    adminbarHeight = ( $adminbarEl.length ) ? $adminbarEl.height() : 0;
                    $topbarEl.css( "height", topbarHeight );
        
                    offsetTop = adminbarHeight + topbarHeight;
        
                    if( topbarIsVisible() ) {
                        $( ".bdbg-header" ).css( "top", offsetTop - 1 );
                        $navbarEl.css( "top", offsetTop - 1 );
                    } else {
                        $( ".bdbg-header" ).css( "top", adminbarHeight - 1 );
                        $navbarEl.css( "top", adminbarHeight - 1 );
                    }
                } );
        
            } else {
                $( "body" ).addClass( "header-scroll" );
            }
        
        
        } )( jQuery, window, document );

        $( ".bdbg-row-set" )
            .bdbgGridHeight( {
                elementSelector: ".type-post .card-content"
            } )
            .bdbgGridHeight( {
                elementSelector: ".type-post .card-image"
            } );

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

    } );

} )( jQuery );
//# sourceMappingURL=main.js.map

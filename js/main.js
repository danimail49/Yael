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

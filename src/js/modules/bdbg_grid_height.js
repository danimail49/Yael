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

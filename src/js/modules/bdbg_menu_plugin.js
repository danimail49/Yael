/*!
 * Budabuga Menu Plugin
 * Original author: @alexander.katkov
 * Further changes, comments: @alexander.katkov
 * Licensed under the MIT license
 */

;( function( $, window, document, undefined ) {

    // Create the defaults.
    var pluginName = "bdbgMenu",

		// Don't need this stuff for now.
        defaults = {
            menuContainer: "#bdbg-menu-main"
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

			// Build elements cache.
			this.buildCache();

			// Calling event builder, no preparation needed.
			this.bindEvents();
        },

		bindEvents: function() {

			// Caching object.
			var self = this;

			// Click on topmenu links.
			this.$element.menuTopLevelLinks.on( "click", function( event ) {
					event.preventDefault();
					self.dropdownToggle( $( this ) );
					event.stopPropagation();
				} );

			// Click on has-submenu item
			this.$element.menuSubLevelLinks.on( "click", function( event ) {
					event.preventDefault();
					self.submenuLevelDown( $( this ) );
					event.stopPropagation();
				} );

			// Click on back button.
			this.$element.find( ".bdbg-menu__item--back a" )
				.on( "click", function( event ) {
					event.preventDefault();
					self.submenuLevelUp( $( this ) );
					event.stopPropagation();
				} );

			$( document ).on( "click", function( event ) {
				self.forceCloseDropdown();
			} );

		},

		dropdownToggle: function( $this ) {

			// Call submenu reset, this will return submenus to initial level.
			this.submenuReset();

            // if ( $this.parent().hasClass( "is-submenu-visible" ) ) {
            //     $this.parent().removeClass( "is-submenu-visible" );
            // } else {
            //     $this.parent().addClass( "is-submenu-visible" );
            // }

            // $this.parent().siblings()
			// 	.removeClass( "is-submenu-visible" );

			$this.parent().siblings( ".is-submenu-visible" )
				.removeClass( "is-submenu-visible" );

            $this.parent().toggleClass( "is-submenu-visible" );

			$this.parent().siblings().find( ".bdbg-menu__submenu" )
				.removeClass( "is-visible" );

			$this.next( ".bdbg-menu__submenu" )
				.stop( true, false, true )
				.toggleClass( "is-visible" );
		},

		forceCloseDropdown: function() {

            // Dropping all open menus
			if ( this.$element.find( ".is-visible" ).length ) {
				this.$element.find( ".is-visible" ).removeClass( "is-visible" );
			}

            if ( this.$element.find( ".is-submenu-visible" ).length ) {
				this.$element.find( ".is-submenu-visible" ).removeClass( "is-submenu-visible" );
			}

            // this.$element.find( "is-submenu-visible" ).removeClass( "is-submenu-visible" );
		},

		submenuLevelDown: function( $this ) {

			// Adds open class to parent ul.bdbg-menu__submenu & li,
			// that contains current submenu ul.
			$this.parent().addClass( "is-open" );
			$this.closest( ".bdbg-menu__submenu" ).addClass( "is-open" );
		},

		submenuLevelUp: function( $this ) {

			// Caching current submenu.
			var $currSubmenu = $this.closest( ".bdbg-menu__item--has-children.is-open" );

			$currSubmenu.removeClass( " is-open" );
			$currSubmenu.parent().removeClass( " is-open" );
		},

		submenuReset: function() {
			this.$element.find( ".is-open" ).removeClass( "is-open" );
		},

		buildCache: function() {

			// Caching base lements.
			this.$element = $( this.element );
			this.$element.menuTopLevelLinks = this.$element
				.find( ".bdbg-menu__item--level-0.bdbg-menu__item--has-children" ).children( "a" );

			this.$element.menuSubLevelLinks = this.$element
				.find( ".bdbg-menu__item--level-0 .bdbg-menu__item--has-children" ).children( "a" );
		}
    };

    // A really lightweight plugin wrapper around the constructor,
    // preventing against multiple instantiations.
    $.fn[ pluginName ] = function( options ) {
        return this.each( function() {
            if ( !$.data( this, "plugin_" + pluginName ) ) {
                $.data( this, "plugin_" + pluginName,
                new Plugin( this, options ) );
            }
        } );
    };

} )( jQuery, window, document );

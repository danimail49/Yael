/**
 * Yael functions and definitions.
 */

(function ($) {

	$(function() {
		/*----------------------------------------------------------------------------
		 Main Scripts
		 ----------------------------------------------------------------------------*/
		/* Menu Desktop Module
		 --------------------------------------*/
		/**
		 * Main menu for Desktop viewport script
		 */
		
		$('#js-menu-main').find('.menu-item-has-children')
			.mouseenter(function () {
				if (!$(this).hasClass('is-active')) {
					$(this).addClass('is-active');
				}
			})
			.mouseleave(function () {
				if ($(this).hasClass('is-active')) {
					$(this).removeClass('is-active');
				}
			});
	});

})(jQuery);
//# sourceMappingURL=main.js.map

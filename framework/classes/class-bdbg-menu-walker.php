<?php
/**
 * BudaBuga custom navigation walker.
 *
 * @package Budabuga
 * @since 1.00
 */

// Preventing direct script access.
if ( ! defined( 'ABSPATH' ) ) :
	die( 'No direct script access allowed' );
endif;

/**
 * Create HTML list of nav menu items.
 *
 * @since 1.00
 * @uses Walker_Nav_Menu
 */
class Bdbg_Menu_Walker extends Walker_Nav_Menu {

	/**
	 * Start the element output.
	 * Changes classes, set by parent func.
	 *
	 * @see Walker::start_el()
	 *
	 * @since 1.00
	 *
	 * @param string $output Passed by reference. Used to append additional content.
	 * @param object $item   Menu item data object.
	 * @param int    $depth  Depth of menu item. Used for padding.
	 * @param array  $args   An array of arguments. @see Walker_Nav_Menu::start_el().
	 * @param int    $id     Current item ID.
	 */
	public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		$item->classes = array();

		$item->classes[] = 'bdbg-menu__item';
		$item->classes[] = 'bdbg-menu__item--level-' . $depth;

		if ( $item->current === true ) :
			$item->classes[] = 'bdbg-menu__item--current';
		endif;

		if ( $args->walker->has_children ) :
			$item->classes[] = 'bdbg-menu__item--has-children';
		endif;

		parent::start_el( $output, $item, $depth, $args, $id );
	}

	/**
	 * Starts the list before the elements are added.
	 * Changes classes, set by parent func.
	 *
	 * @see Walker::start_lvl()
	 *
	 * @since 1.00
	 *
	 * @param string $output Passed by reference. Used to append additional content.
	 * @param int    $depth  Depth of menu item. Used for padding.
	 * @param array  $args   An array of arguments. @see Walker_Nav_Menu::start_lvl().
	 */
	public function start_lvl( &$output, $depth = 0, $args = array() ) {
		$indent = str_repeat( "\t", $depth );
		$backtxt = __( 'Back', 'budabuga' );
		if ( $depth >= 1 ) :
			$output .= "\n$indent<ul class=\"bdbg-menu__submenu\"><li class=\"bdbg-menu__item bdbg-menu__item--back bdbg-menu__item--level-$depth\"><a href=\"#\">$backtxt</a></li>\n";
		else :
			$output .= "\n$indent<ul class=\"bdbg-menu__submenu\">\n";
		endif;
	}

}

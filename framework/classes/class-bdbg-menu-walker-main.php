<?php
/**
 * BudaBuga custom navigation walker for desktop menu.
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
class Bdbg_Menu_Walker_Main extends Walker_Nav_Menu {

	/**
	 * Helps to pass item to start_lvl.
	 *
	 * @var object.
	 */
	private $cur_item;

	public function start_lvl( &$output, $depth = 0, $args = array() ) {
		$indent = str_repeat( "\t", $depth );
		$id = $this->cur_item->ID;
		$output .= "\n$indent<ul id=\"dropdown-$id\" class=\"dropdown-content bdbg-menu__submenu\">\n";
	}

	public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		$this->cur_item = $item;

		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
		$classes[] = 'bdbg-menu__item menu-item-' . $item->ID;

		// Mark active menu item.
		if ( true === $item->current ) :
			$classes[] = 'bdbg-menu__item--active active';
		endif;

		$args = apply_filters( 'nav_menu_item_args', $args, $item, $depth );

		$navitem_args = array(
			'post_type' => 'nav_menu_item',
			'nopaging' => true,
			'numberposts' => 1,
			'meta_key' => '_menu_item_menu_item_parent',
			'meta_value' => $item->ID,
		);
		$children = get_posts( $navitem_args );

		if ( ! empty( $children ) && 0 === $depth ) :
			$classes[] = 'bdbg-menu__item--has-children';
		endif;

		$class_names = implode( ' ', $classes );
		$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

		$id = apply_filters( 'nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args, $depth );
		$id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

		$output .= $indent . '<li' . $id . $class_names . '>';
		$atts = array();
		$atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
		$atts['target'] = ! empty( $item->target ) ? $item->target : '';
		$atts['rel'] = ! empty( $item->xfn ) ? $item->xfn : '';
		$atts['href'] = ! empty( $item->url ) ? $item->url : '';

		$atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );
		$attributes = '';

		foreach ( $atts as $attr => $value ) {
			if ( ! empty( $value ) ) {
				$value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
				$attributes .= ' ' . $attr . '="' . $value . '"';
			}
		}

		if ( ! empty( $children & 0 === $depth ) ) :
			$attributes .= ' data-activates="dropdown-' . $item->ID . '"';
			$attributes .= ' data-constrainwidth="false"';
			$attributes .= ' data-hover="true"';
			$attributes .= ' data-beloworigin="true"';
			$attributes .= ' class="dropdown-button" ';
	 	endif;

		$title = apply_filters( 'the_title', $item->title, $item->ID );

		$title = apply_filters( 'nav_menu_item_title', $title, $item, $args, $depth );
		$item_output = $args->before;
		$item_output .= '<a' . $attributes . '>';
		$item_output .= $args->link_before . $title . $args->link_after;
		$item_output .= '</a>';
		$item_output .= $args->after;

		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
}

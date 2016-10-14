<?php
/**
 * Custom frontend functions & definitions.
 *
 * @package Budabuga
 * @since 1.00
 */

// Preventing direct script access.
if ( ! defined( 'ABSPATH' ) ) :
	die( 'No direct script access allowed' );
endif;

if ( ! function_exists( 'bdbg_header_layout' ) ) :
	/**
	 * Transports user defined settings layout from customizer to header options.
	 *
	 * @since 1.00
	 * @return array	From-To direction of header elements.
	 */
	function bdbg_header_layout() {
		$from_to = array( 'left', 'right' );
		$keys = array( 'from', 'to' );

		$header_direction_setting = get_theme_mod( 'bdbg_header_layout' );

		if ( 'left' === $header_direction_setting ) :
			$layout = $from_to;
		else :
			$layout = array_reverse( $from_to );
		endif;

		return array_combine( $keys, $layout );
	}
endif;

if ( ! function_exists( 'bdbg_menus' ) ) :
	/**
	 * Outputs site menu.
	 *
	 * @since 1.00
	 *
	 * @param	string $menu_type		Defines type of menu. Values: main, side, footer.
	 * @param	string $menu_direction	Defines menu direction, align to left or right side.
	 */
	function bdbg_menus( $menu_type = 'main', $menu_direction = 'left' ) {

		$acceptable_menus = array( 'main', 'side' );
		$default_menu = 'main';
		$walker = 'Bdbg_Menu_Walker_' . ucfirst( $menu_type );

		// Parameter check.
		$menu_type = ( in_array( $menu_type, $acceptable_menus, true ) ) ?
			$menu_type : $default_menu;

		if ( has_nav_menu( $menu_type ) ) :
			$args = array(
				'container'		  => '',
				'menu_class'      => "bdbg-menu bdbg-menu--$menu_type $menu_direction",
				'menu_id'         => "bdbg-menu-$menu_type",
				'echo'            => true,
				'theme_location'  => $menu_type,
				'items_wrap'      => '<ul data-edge="right" id="%1$s" class="%2$s">%3$s</ul>',
				'depth'			  => 2,
				'walker' 		  => new $walker(),
			);
			// Additional params for side nav.
			if ( 'side' === $menu_type ) :
				$args['menu_class'] .= ' side-nav';
				$args['depth'] = 3;
			endif;

			wp_nav_menu( $args );
		else :
			$menu_link_start = '<a href="' . admin_url() . 'nav-menus.php">';
			$message = __( '%4$sTheme Menu is not set for %1$s. You can set it in %2$s Menu Editor %3$s.%5$s', 'budabuga' );
			echo sprintf( esc_html( $message ), esc_html( $menu_type ), esc_url( $menu_link_start ), '</a>', '<span class="bdbg-message">', '</span>' );
		endif;
	}
endif;

if ( ! function_exists( 'bdbg_logo' ) ) :
	/**
	 * Echos formatted logo.
	 * If empty logo, echos site title.
	 *
	 * @since 1.00
	 *
	 * @param string
	 * @param string $logo_name	Name of logo to be retrived.
	 */
	function bdbg_logo( $logo_name ) {
		$logo_name = "bdbg_logo_$logo_name";
		$logo_id = get_theme_mod( $logo_name );

		if ( $logo_id ) :
			$logo = wp_get_attachment_image_src( $logo_id );
			$attr = array(
				'width' => $logo[1],
				'height' => $logo[2],
				'class' => "bdbg-logo__img",
			);

			echo sprintf( '<img src="%1$s" width="%2$d" height="%3$d" class="%4$s" />', $logo[0], $attr['width'], $attr['height'], $attr['class'] );
		else :
			echo esc_html( get_bloginfo( 'name' ) );
		endif;
	}

endif;

if ( ! function_exists( 'bdbg_dynamic_sidebar' ) ) :

	function bdbg_dynamic_sidebar( $sidebar ) {
		if ( is_active_sidebar( $sidebar ) ) :
			dynamic_sidebar( $sidebar );
		else :
			$menu_link_start = '<a href="' . admin_url() . 'widgets.php">';
			$message = __( '%4$sNo active widgets found for %1$s. You can set them in %2$s Theme Widgets %3$s.%5$s', 'budabuga' );
			echo sprintf( esc_html( $message ), 'Widget Area', $menu_link_start, '</a>', '<span class="bdbg-message">', '</span>' );
		endif;
	}

endif;

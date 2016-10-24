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

		$header_direction_setting = get_theme_mod( 'bdbg_header_general_layout' );

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
	function bdbg_menus( $menu_type = 'main', $menu_direction ) {

		$acceptable_menus = array( 'main', 'side' );
		$default_menu = 'main';
		$walker = 'Bdbg_Menu_Walker_' . ucfirst( $menu_type );
		$to = $menu_direction['to'];
		// Parameter check.
		$menu_type = ( in_array( $menu_type, $acceptable_menus, true ) ) ?
			$menu_type : $default_menu;

		$data_attrs = '';

		if ( has_nav_menu( $menu_type ) ) :
			$args = array(
				'container'		  => false,
				'menu_class'      => 'bdbg-menu bdbg-menu--' . $menu_type . ' ' . $to,
				'menu_id'         => "bdbg-menu-$menu_type",
				'echo'            => true,
				'theme_location'  => $menu_type,
				'items_wrap'      => '<ul id="bdbg-menu-' . $menu_type . '" id="%1$s" ' . $data_attrs . ' class="%2$s">%3$s</ul>',
				'depth'			  => 2,
				'walker' 		  => new $walker(),
			);
			// Conditional params for navs.
			if ( 'side' === $menu_type ) :
				$args['menu_class'] .= ' side-nav';
				$args['depth']		 = 3;
				$args['items_wrap']	 = '%3$s';
			endif;
			if ( 'main' === $menu_type ) :
				$args['menu_class'] .= ' hide-on-med-and-down';
			endif;

			wp_nav_menu( $args );
		else :
			$menu_link_start = '<a href="' . admin_url() . 'nav-menus.php">';
			$message = __( '%4$sTheme Menu is not set for %1$s. You can set it in %2$s Menu Editor %3$s.%5$s', 'budabuga' );
			echo sprintf( esc_html( $message ), esc_html( $menu_type ), $menu_link_start, '</a>', '<span class="bdbg-message ' . $to . '">', '</span>' );
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
	function bdbg_logo( $logo_name, $logo_echo = true ) {
		$logo_name = $logo_name . '_upload';
		$logo_id = get_theme_mod( $logo_name );
		$logo_obj ='';

		if ( $logo_id ) :
			$logo = wp_get_attachment_image_src( $logo_id );
			$attr = array(
				'width' => $logo[1],
				'height' => $logo[2],
				'class' => "bdbg-logo__img",
			);

			$logo_obj =  sprintf( '<img src="%1$s" width="%2$d" height="%3$d" class="%4$s" />', esc_url( $logo[0] ), esc_attr( $attr['width'] ), esc_attr( $attr['height'] ), esc_attr( $attr['class'] ) );
		else :
			$logo_obj =  esc_html( get_bloginfo( 'name' ) );
		endif;

		if ( ! $logo_echo ) :
			return $logo_echo;
		endif;

		echo $logo_obj;
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

if ( ! function_exists( 'bdbg_search_modal' ) ) :
	/**
	 * Append search modal in footer.
	 *
	 * @since 1.00
	 */
	function bdbg_search_modal() {
		$searchform = get_search_form( false );
		$text_search = __( 'Searching', 'budabuga' );
		$modal_title = __( 'Type Anything & Press "Enter"', 'budabuga' );

		$output = <<<HEREDOC
			<div class="bdbg-overlay bdbg-overlay--search">
				<div class="bdbg-overlay__button bdbg-overlay__button--close">
					<i class="fa fa-times" aria-hidden="true"></i>
				</div>
				<div class="bdbg-modal bdbg-modal--search">
					<h3 data-textsearch="{$text_search}" class="bdbg-modal__heading center-align">{$modal_title}</h3>
					{$searchform}
				</div>
			</div>
HEREDOC;

		echo balanceTags( $output );
	}
	add_action( 'wp_footer', 'bdbg_search_modal', 100 );

endif;

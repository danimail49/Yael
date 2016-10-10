<?php
/**
 * Custom frontend functions & definitions.
 *
 * @package Budabuga
 * @since 1.00
 */

if ( ! function_exists( 'bdbg_menus' ) ) :
	/**
	 * Outputs site menu.
	 *
	 * @since 1.00
	 *
	 * @param  string $type     Defines type of menu. Values: main, side, footer.
	 */
	function bdbg_menus( $type = 'main' ) {

		if ( has_nav_menu( $type ) ) :
			$args = array(
				'container'		  => '',
				'menu_class'      => "bdbg-menu bdbg-menu--$type",
				'menu_id'         => "bdbg-menu-$type",
				'echo'            => true,
				'theme_location'  => $type,
				'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</nav>',
				'walker' 		  => new Bdbg_Menu_Walker(),
			);
			wp_nav_menu( $args );
		else :
			$menu_link_start = '<a href="' . admin_url() . 'nav-menus.php">';
			$message = __( '%4$sTheme Menu is not set for %1$s. You can set it in %2$s Menu Editor %3$s.%5$s', 'budabuga' );
			echo sprintf( $message, $type, $menu_link_start, '</a>', '<span class="bdbg-message">', '</span>' );
		endif;
	}
endif;

if ( ! function_exists( 'bdbg_header' ) ) :
	/**
	 * Outputs site header.
	 *
	 * @since 1.00
	 *
	 * @param  string  $custom_class	Defines menu postion. Values: left, right, center.
	 * @param  string  $layout      	Defines menu postion. Values: left, right, center.
	 * @param  boolean $fixed       	Is header sticky. Default = true.
	 * @param  boolean $show_search 	Defines show search or not. Default = true.
	 * @param  boolean $show_drawer 	Defines show drawer button on desktop viewport. Default = true.
	 */
	function bdbg_header( $custom_class = '', $layout = 'left', $fixed = true, $show_search = true, $show_drawer = false ) { ?>
		<header class="mdl-layout__header bdbg-header <?php echo $custom_class; ?>">
			<div class="mdl-layout__header-row bdbg-header__row">
				<!-- Header conditional loading -->
				<?php if ( locate_template( 'template-parts/header/header-' . $layout . '.php' ) !== '' ) :
					// Load the header template.
					get_template_part( 'template-parts/header/header', $layout );
				else :
					// Load the header default template.
					get_template_part( 'template-parts/header/header', 'left' );
				endif; ?>

				<?php
				// Searchbutton conditional output.
				if ( $show_search ) :
					get_search_form();
				endif;
				?>

			</div>
		</header>
	<?php }
endif;

if ( ! function_exists( 'bdbg_logo' ) ) :
	/**
	 * Echos formatted logo.
	 * If empty logo, echos site title.
	 *
	 * @since 1.00
	 *
	 * @param string $logo_name	Name of logo to be retrived.
	 */
	function bdbg_logo( $logo_name ) {
		$logo_name = "bdbg_logo_$logo_name";
		$logo_id = get_theme_mod( $logo_name );

		if ( $logo_id ) :
			$logo = wp_get_attachment_image_src( $logo_id );
			$attr = array(
				'width' => ( 0 >= get_theme_mod( $logo_name . '_width' ) ) ? $logo[1] : get_theme_mod( $logo_name . '_width' ),
				'height' => ( 0 >= get_theme_mod( $logo_name . '_height' ) ) ? $logo[2] : get_theme_mod( $logo_name . '_height' ),
				'class' => 'bdbg-logo__img',
			);

			echo sprintf( '<img src="%1$s" width="%2$d" height="%3$d" class="%4$s" />', $logo[0], $attr['width'], $attr['height'], $attr['class'] );
		else :
			echo get_bloginfo( 'name' );
		endif;
	}

endif;

<?php
/**
 * Customizer scripts render function
 *
 * @since 1.00
 */
function bdbg_customizer_scripts() { ?>
	<style type="text/css">

		.bdbg-header {
			background-color: <?php echo get_theme_mod( 'bdbg_header_background' ); ?>;
			<?php
			if( ! get_theme_mod( 'bdbg_header_shadow' ) ) { ?>
				box-shadow: none;
			<?php } ?>
		}

		.bdbg-menu--main > li a,
		.bdbg-logo--main,
		.bdbg-header .mdl-layout__drawer-button {
			color: <?php echo get_theme_mod( 'bdbg_header_fontcolor' ); ?>;
		}

		.bdbg-logo {
			margin: <?php echo get_theme_mod( 'bdbg_header_logo_margin' ); ?>px;
		}

	</style>
<?php }
add_action( 'wp_head', 'bdbg_customizer_scripts' );

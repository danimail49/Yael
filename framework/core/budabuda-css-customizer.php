<?php
/**
 * Customizer scripts render function
 *
 * @since 1.00
 */
function bdbg_customizer_scripts() { ?>
	<style type="text/css">

		/**
		 * General Header Settings
		 */
		<?php if ( bdbg_get_theme_mod( 'bdbg_header_general_showdrawer' ) ) : ?>
			.bdbg-nav .button-collapse {
				display: block;
			}
		<?php endif; ?>

		<?php if ( ! bdbg_get_theme_mod( 'bdbg_header_general_showshadow' ) ) : ?>
			.bdbg-nav {
				box-shadow: none;
			}
		<?php endif; ?>

		.bdbg-nav,
		.bdbg-header {
			height: <?php echo bdbg_get_theme_mod( 'bdbg_header_general_height' ) . 'px;'; ?>
		}

		.bdbg-logo--main,
		nav a.button-collapse,
		.bdbg-js-search,
		.bdbg-menu--main > li > a {
			line-height: <?php echo bdbg_get_theme_mod( 'bdbg_header_general_height' ) . 'px;'; ?>
		}

		.bdbg-nav {
			background-color: <?php echo bdbg_get_theme_mod( 'bdbg_header_general_background' ) . ';'; ?>
		}

		.bdbg-menu--main > li > a,
		.button-collapse,
		.bdbg-js-search {
			color: <?php echo bdbg_get_theme_mod( 'bdbg_header_general_fontcolor' ) . ';'; ?>
		}

		.bdbg-menu--main > li > a:hover {
			background-color: <?php echo bdbg_get_theme_mod( 'bdbg_header_general_hoverbackground' ) . ';'; ?>
		}

		.bdbg-menu--main > li > a:hover {
			color: <?php echo bdbg_get_theme_mod( 'bdbg_header_general_hovercolor' ) . ';'; ?>
		}

		.bdbg-menu--main > li > a {
			font-weight: <?php echo bdbg_get_theme_mod( 'bdbg_header_general_weight' ) . ';'; ?>
		}

		<?php if ( 0 !== ( (int) bdbg_get_theme_mod( 'bdbg_header_general_letterspace' ) ) ) : ?>
			.bdbg-menu--main > li > a {
				letter-spacing: <?php echo bdbg_get_theme_mod( 'bdbg_header_general_letterspace' ) . 'px;'; ?>
			}
		<?php endif; ?>

		.bdbg-menu--main > li > a {
			font-weight: <?php echo bdbg_get_theme_mod( 'bdbg_header_general_weight' ) . ';'; ?>
		}

		/**
		 * Searchbox
		 */
		.bdbg-overlay #searchform .bdbg-input-group__field {
			font-size: <?php echo bdbg_get_theme_mod( 'bdbg_header_search_fontsize' ) . 'px;'; ?>
		}

		#search-big,
		.bdbg-modal__heading,
		.bdbg-overlay__button--close,
		.bdbg-overlay #searchform .bdbg-input-group__field,
		.bdbg-overlay #searchform .bdbg-input-group__field:focus {
			color: <?php echo bdbg_get_theme_mod( 'bdbg_header_search_fontcolor' ) . ';'; ?>
		}

		.bdbg-overlay #searchform .bdbg-input-group__field,
		.bdbg-overlay #searchform .bdbg-input-group__field:focus {
			border-color: <?php echo bdbg_get_theme_mod( 'bdbg_header_search_fontcolor' ) . ';'; ?>
		}

		.bdbg-overlay--search {
			background-color: <?php echo bdbg_get_theme_mod( 'bdbg_header_search_background' ) . ';'; ?>
		}

		/**
		 * Header Main Logo
		 */
		<?php
		// Additonal dynamic style to add margin for drawer.
		if ( bdbg_get_theme_mod( 'bdbg_header_general_showdrawer' ) ) :
		 	$logo_margin_hor = ( 'left' === bdbg_get_theme_mod( 'bdbg_header_general_layout' ) ) ? 'left' : 'right'; ?>
		 	nav .bdbg-logo--main {
				margin-<?php echo $logo_margin_hor; ?>: <?php echo '70px' ?>
			}
		<?php endif; ?>

		.bdbg-logo--main .bdbg-logo__img {
			height: <?php echo bdbg_get_theme_mod( 'bdbg_header_logo_main_height' ) . 'px;'; ?>
		}

		nav .bdbg-logo--main {
			color: <?php echo bdbg_get_theme_mod( 'bdbg_header_logo_main_fontcolor' ) . ';'; ?>
			font-weight: <?php echo bdbg_get_theme_mod( 'bdbg_header_logo_main_weight' ) . ';'; ?>
			font-size: <?php echo bdbg_get_theme_mod( 'bdbg_header_logo_main_fontsize' ) . 'px;'; ?>

			<?php if ( 0 !== ( (int) bdbg_get_theme_mod( 'bdbg_header_logo_main_letterspace' ) ) ) : ?>
				letter-spacing: <?php echo bdbg_get_theme_mod( 'bdbg_header_logo_main_letterspace' ) . 'px;'; ?>
			<?php endif; ?>
		}

		/**
		 * Header Side Logo
		 */
		.bdbg-logo--side img {
 			width: <?php echo bdbg_get_theme_mod( 'bdbg_header_logo_side_width' ) . 'px;'; ?>
		}

		.side-nav .bdbg-logo--side {
			color: <?php echo bdbg_get_theme_mod( 'bdbg_header_logo_side_fontcolor' ) . ';'; ?>
			font-weight: <?php echo bdbg_get_theme_mod( 'bdbg_header_logo_side_weight' ) . ';'; ?>
			font-size: <?php echo bdbg_get_theme_mod( 'bdbg_header_logo_side_fontsize' ) . 'px;'; ?>

			<?php if ( 0 !== ( (int) bdbg_get_theme_mod( 'bdbg_header_logo_side_letterspace' ) ) ) : ?>
				letter-spacing: <?php echo bdbg_get_theme_mod( 'bdbg_header_logo_side_letterspace' ) . 'px;'; ?>
			<?php endif; ?>

			margin-left: <?php echo bdbg_get_theme_mod( 'bdbg_header_logo_side_margin' ) . 'px;'; ?>
		}

		/**
		 * Footer Top Section
		 */
		.bdbg-footer__section--top {
			background-color: <?php echo bdbg_get_theme_mod( 'bdbg_footer_top_background' ) . ';'; ?>
			color: <?php echo bdbg_get_theme_mod( 'bdbg_footer_top_fontcolor' ) . ';'; ?>
			font-size: <?php echo bdbg_get_theme_mod( 'bdbg_footer_top_fontsize' ) . 'px;'; ?>
			font-weight: <?php echo bdbg_get_theme_mod( 'bdbg_footer_top_weight' ) . ';'; ?>
			letter-spacing: <?php echo bdbg_get_theme_mod( 'bdbg_footer_top_letterspace' ) . 'px;'; ?>
		}

		.bdbg-footer__section--top .bdbg-widget__title {
			font-size: <?php echo bdbg_get_theme_mod( 'bdbg_footer_top_fontsize' ) . 'px;'; ?>
		}

		.bdbg-footer__section--top .bdbg-widget__title {
			font-size: 1.64em;
		}

		/**
		 * Footer Middle Section
		 */
		.bdbg-footer__section--middle {
			background-color: <?php echo bdbg_get_theme_mod( 'bdbg_footer_middle_background' ) . ';'; ?>
			color: <?php echo bdbg_get_theme_mod( 'bdbg_footer_middle_fontcolor' ) . ';'; ?>
			font-size: <?php echo bdbg_get_theme_mod( 'bdbg_footer_middle_fontsize' ) . 'px;'; ?>
			font-weight: <?php echo bdbg_get_theme_mod( 'bdbg_footer_middle_weight' ) . ';'; ?>
			letter-spacing: <?php echo bdbg_get_theme_mod( 'bdbg_footer_middle_letterspace' ) . 'px;'; ?>
		}

		.bdbg-footer__section--middle .bdbg-widget__title {
			font-size: <?php echo bdbg_get_theme_mod( 'bdbg_footer_middle_fontsize' ) . 'px;'; ?>
		}

		.bdbg-footer__section--middle .bdbg-widget__title {
			font-size: 1.64em;
		}

		/**
		 * Footer bottom Section
		 */
		.bdbg-footer__section--bottom {
			background-color: <?php echo bdbg_get_theme_mod( 'bdbg_footer_bottom_background' ) . ';'; ?>
			color: <?php echo bdbg_get_theme_mod( 'bdbg_footer_bottom_fontcolor' ) . ';'; ?>
			font-size: <?php echo bdbg_get_theme_mod( 'bdbg_footer_bottom_fontsize' ) . 'px;'; ?>
			font-weight: <?php echo bdbg_get_theme_mod( 'bdbg_footer_bottom_weight' ) . ';'; ?>
			letter-spacing: <?php echo bdbg_get_theme_mod( 'bdbg_footer_bottom_letterspace' ) . 'px;'; ?>
		}

		.bdbg-footer__section--bottom .bdbg-widget__title {
			font-size: <?php echo bdbg_get_theme_mod( 'bdbg_footer_bottom_fontsize' ) . 'px;'; ?>
		}

		.bdbg-footer__section--bottom .bdbg-widget__title {
			font-size: 1.64em;
		}

	</style>
<?php }
add_action( 'wp_head', 'bdbg_customizer_scripts' );

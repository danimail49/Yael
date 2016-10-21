<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Budabuga
 * @subpackage Yael
 * @since 1.00
 */

// Preventing direct script access.
if ( ! defined( 'ABSPATH' ) ) :
	die( 'No direct script access allowed' );
endif; ?>


<footer class="bdbg-footer" role="contentinfo">
	<?php if ( is_active_sidebar( 'footer_top' ) ) : ?>
		<div class="bdbg-footer__section bdbg-footer__section--top">
			<div class="container">
				<div class="row">
					<?php dynamic_sidebar( 'footer_top' ); ?>
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->
		</div>
		<!-- /.bdbg-footer__section bdbg-footer__section--top -->
	<?php endif; ?>
	<?php if ( is_active_sidebar( 'footer_middle' ) ) : ?>
		<div class="bdbg-footer__section bdbg-footer__section--middle">
			<div class="container">
				<div class="row">
					<?php dynamic_sidebar( 'footer_middle' ); ?>
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->
		</div>
		<!-- /.bdbg-footer__section bdbg-footer__section--middle -->
	<?php endif; ?>
		<div class="bdbg-footer__section bdbg-footer__section--bottom">
			<div class="container">
				<div class="row">
					<?php if ( is_active_sidebar( 'footer_bottom' ) ) : ?>
						<?php dynamic_sidebar( 'footer_bottom' ); ?>
					<?php endif; ?>

					<?php
					if ( ! is_active_sidebar( 'footer_top' ) &&
						! is_active_sidebar( 'footer_middle' ) &&
						! is_active_sidebar( 'footer_bottom' ) ) :

						bdbg_dynamic_sidebar( 'footer_bottom' );

					endif; ?>
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->
		</div>
		<!-- /.bdbg-footer__section bdbg-footer__section--bottom -->
</footer>

<?php wp_footer(); ?>
</body>
</html>

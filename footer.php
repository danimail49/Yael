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

</div>
<!-- /.row -->
</div>
<!-- /.container -->

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
						! is_active_sidebar( 'footer_bottom-left' ) &&
						! is_active_sidebar( 'footer_bottom-right' ) ) :

						bdbg_dynamic_sidebar( 'footer_bottom-right-right' );

					else : ?>

						<div class="col l6 m6 s12 bdbg-bottomfooter__item bdbg-widget-wrapper--inline bdbg-bottomfooter__item--left">
							<?php if ( is_active_sidebar( 'footer_bottom-left' ) ) : ?>
								<?php dynamic_sidebar( 'footer_bottom-left' ); ?>
							<?php endif; ?>
						</div>
						<div class="col l6 m6 s12 bdbg-bottomfooter__item bdbg-widget-wrapper--inline bdbg-bottomfooter__item--right bdbg-widget-wrapper--right">
							<?php if ( is_active_sidebar( 'footer_bottom-right' ) ) : ?>
								<?php dynamic_sidebar( 'footer_bottom-right' ); ?>
							<?php endif; ?>
						</div>

					<?php endif; ?>
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

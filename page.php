<?php
/**
 * The template for displaying page.
 *
 * @package Budabuga
 * @subpackage Yael
 * @since 1.00
 */

// Preventing direct script access.
if ( ! defined( 'ABSPATH' ) ) :
	die( 'No direct script access allowed' );
endif;

get_header(); ?>

<div class="bdbg-page">

	<div class="col <?php echo "l12 m12 s12"; ?>">

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'template-parts/content/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}

		// End of the loop.
		endwhile;
		?>

	</div>
	<!-- /.col -->

</div>
<!-- /.bdbg-page -->

<?php get_footer();

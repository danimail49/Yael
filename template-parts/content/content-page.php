<?php
/**
 * The template part for displaying page content.
 *
 * @package Budabuga
 * @subpackage Yael
 * @since 1.00
 */

// Preventing direct script access.
if ( ! defined( 'ABSPATH' ) ) :
	die( 'No direct script access allowed' );
endif; ?>

<main class="bdbg-content" role="main">
	<section class="bdbg-page card">
		<div class="card-content bdbg-page--item">
			<?php the_title( '<h1>', '</h1>' ); ?>
			<?php the_content(); ?>
		</div>
		<!-- /.card-content -->
	</section>
	<!-- /.bdbg-page card -->
</main>
<!-- /.container bdbg-content -->

<?php if ( is_active_sidebar( 'precomments' ) ) : ?>
	<div class="aside card">
		<div class="card-content">
			<?php dynamic_sidebar( 'precomments' ); ?>
		</div>
		<!-- /.card-content -->
	</div>
	<!-- /.aside card -->
<?php endif; ?>

<?php

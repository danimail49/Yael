<?php
/**
 * The template part for displaying post content.
 *
 * @package Budabuga
 * @subpackage Yael
 * @since 1.00
 */

// Preventing direct script access.
if ( ! defined( 'ABSPATH' ) ) :
	die( 'No direct script access allowed' );
endif; ?>

<main class="bdbg-content bdbg-content__single" role="main">
	<section class="bdbg-post card">
		<div class="card-image">
			<?php bdbg_post_thumbnail( 'bdbg-img bdbg-img--responsive' ); ?>
		</div>
		<!-- /.card-image -->
		<div class="card-action">
			<?php bdbg_post_meta(); ?>
		</div>
		<!-- /.card-action  -->
		<div class="card-content bdbg-post--item">
			<?php the_title( '<h1>', '</h1>' ); ?>
			<?php the_content(); ?>
		</div>
		<!-- /.card-content -->

		<?php $tags = bdbg_post_meta_tags(); ?>

		<?php if ( $tags ) : ?>
			<div class="card-action">
				<?php echo bdbg_post_meta_tags(); ?>
			</div>
			<!-- /.card-action  -->
		<?php endif; ?>

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

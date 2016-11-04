<?php
/**
 * The template for displaying the searchform markup.
 *
 * @package Budabuga
 * @subpackage Yael
 * @since 1.00
 */

// Preventing direct script access.
if ( ! defined( 'ABSPATH' ) ) :
	die( 'No direct script access allowed' );
endif; ?>

<!-- start search form -->
<div class="row">
	<form role="search" class="col search-form s12 bdbg-form bdbg-form--search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<div class="input-field bdbg-input-group">
			<input name="s" id="s" type="text" class="validate bdbg-input-group__field" autofocus />
          	<!-- <label for="search-big" class="bdbg-input-group__label">First Name</label> -->
		</div>
	</form>
</div>
<!-- /.row -->
<!-- end search form -->

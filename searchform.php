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
<form class="mdl-textfield mdl-js-textfield mdl-textfield--expandable mdl-textfield--floating-label mdl-textfield--align-right" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label class="mdl-button mdl-js-button mdl-button--icon" for="search-expandable">
		<i class="material-icons">search</i>
	</label>
	<div class="mdl-textfield__expandable-holder">
		<input class="mdl-textfield__input" type="text" id="search-expandable" />
		<!-- <label class="mdl-textfield__label" for="search-expandable"><?php // _e( 'Search', 'budabuga' ); ?></label> -->
	</div>
</form>
<!-- end search form -->

<?php
/**
 * Drop down mobile style template part.
 *
 * @package OceanWP WordPress theme
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( 'dropdown' != oceanwp_mobile_menu_style() ) {
	return;
}

// Navigation classes
$classes = array( 'clr' );

// If social
if ( true == get_theme_mod( 'ocean_menu_social', false ) ) {
	$classes[] = 'has-social';
}

// Turn classes into space seperated string
$classes = implode( ' ', $classes );

// Menu Location
$menu_location = apply_filters( 'ocean_main_menu_location', 'main_menu' );

// Menu arguments
$menu_args = array(
	'theme_location' => $menu_location,
	'container'      => false,
	'fallback_cb'    => false,
);

// Check if custom menu
if ( $menu = oceanwp_header_custom_menu() ) {
	$menu_args['menu']  = $menu;
}

// Top bar menu Location
$top_menu_location = 'topbar_menu';

// Menu arguments
$top_menu_args = array(
	'theme_location' => $top_menu_location,
	'container'      => false,
	'fallback_cb'    => false,
); ?>

<div id="mobile-dropdown" class="clr">

	<nav class="<?php echo esc_attr( $classes ); ?>"<?php oceanwp_schema_markup( 'site_navigation' ); ?>>

		<?php
		// If has mobile menu
		if ( has_nav_menu( 'mobile_menu' ) ) {
			get_template_part( 'partials/mobile/mobile-nav' );
		} else {
			wp_nav_menu( $menu_args );

			// If has top bar menu
			if ( has_nav_menu( $top_menu_location ) ) {
				wp_nav_menu( $top_menu_args );
			}
		}

		// Social
		if ( true == get_theme_mod( 'ocean_menu_social', false ) ) {
			get_template_part( 'partials/header/social' );
		}

		// Mobile search form
	    if ( get_theme_mod( 'ocean_mobile_menu_search', true ) ) {
	        get_template_part( 'partials/mobile/mobile-search' );
	    } ?>

	</nav>

</div>
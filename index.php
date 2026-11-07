<?php
/**
 * Index template.
 *
 * This template should never be loaded on a site unless a plugin is doing
 * something that it shouldn't be doing or something weird is going on. We're
 * leaving the below code as an absolute fallback in case this file is loaded.
 * All it does is correctly load up our `public/views/index.php` template.
 */

// The Backdrop framework isn't installed (see `app/framework-missing.php`).
if ( ! function_exists( 'Backdrop\\View\\display' ) ) {
	wp_die(
		current_user_can( 'switch_themes' ) ? wp_kses( nocturne_framework_missing_message(), [ 'code' => [] ] ) : esc_html__( 'This site is temporarily unavailable.', 'nocturne' ),
		esc_html__( 'Theme dependencies are missing', 'nocturne' ),
		[ 'response' => 503 ]
	);
}

// Access the view template engine.
$engine = Backdrop\App::resolve( 'view/engine' );

// Load the index template.
$engine->display( 'index' );

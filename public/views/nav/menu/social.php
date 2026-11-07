<?php if ( has_nav_menu( $data->location ) ) : ?>
	<nav class="social-menu" aria-label="<?php esc_attr_e( 'Social', 'nocturne' ); ?>">
		<?php wp_nav_menu( [
			'theme_location' => $data->location,
			'container'      => false,
			'menu_class'     => 'social-menu__items',
			'depth'          => 1,
		] ); ?>
	</nav>
<?php endif; ?>

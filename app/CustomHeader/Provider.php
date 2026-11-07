<?php
/**
 * Component Service Provider.
 *
 * Bootstraps the menu components.
 *
 * @package   Nocturne
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright 2026 Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://luthemes.com/portfolio/nocturne
 */

namespace Nocturne\CustomHeader;

use Backdrop\Core\ServiceProvider;

/**
 * Component service provider class.
 *
 * @since  0.0.1
 * @access public
 */
class Provider extends ServiceProvider {

	/**
	 * Binds sidebar and menu components to the container.
	 *
	 * @since  0.0.1
	 * @access public
	 * @return void
	 */
	public function register(): void {


		// Register the Sidebars collection with shorthand
		$this->app->singleton( 'nocturne/custom/header', App\CustomHeaders::class );

		// Register the Sidebar Component
		$this->app->singleton( App\Component::class, function() {
			return new App\Component( $this->app->resolve( 'nocturne/custom/header' ) );
		});
	}

	/**
	 * Bootstrap the sidebar and menu components.
	 *
	 * @since  0.0.1
	 * @access public
	 * @return void
	 */
	public function boot(): void {

		// Boot Sidebar Component
		$this->app->resolve( App\Component::class)->boot();
	}
}

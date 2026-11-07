<?php
/**
 * Customize service provider.
 *
 * Bootstraps the customize component.
 *
 * @package   Nocturne
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright 2026 Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://luthemes.com/portfolio/nocturne
 */

namespace Nocturne\Customize;

use Backdrop\Tools\Collection;
use Backdrop\Core\ServiceProvider;

use Nocturne\Footer;
use Nocturne\Image;
use Nocturne\Layout;

/**
 * Customize service provider.
 *
 * @since  0.0.1
 * @access public
 */
class Provider extends ServiceProvider {

	/**
	 * Binds customize component to the container.
	 *
	 * @since  0.0.1
	 * @access public
	 * @return void
	 */
	public function register(): void {

		$this->app->singleton( Component::class, function() {
			return new Component( [
				Footer\Customize::class,
				Image\Customize::class,
				Layout\Customize::class
			] );
		} );
	}

	/**
	 * Bootstrap the customize component.
	 *
	 * @since  0.0.1
	 * @access public
	 * @return void
	 */
	public function boot(): void {
		$this->app->resolve( Component::class )->boot();
	}
}

<?php
/**
 * Customize component.
 *
 * Integrates the theme's settings into the customizer.
 *
 * @package   Nocturne
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright 2026 Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://luthemes.com/portfolio/nocturne
 */

namespace Nocturne\Customize;

use WP_Customize_Manager;

use Backdrop\App;
use Backdrop\Contracts\Bootable;
use Nocturne\Tools\Collection;

use Backdrop\Customize\Component as Customize;

class Component extends Customize implements Bootable {

    /**
     * Adds our customizer-related actions to the appropriate hooks.
     *
     * @since  0.0.1
     * @return void
     *
     * @access public
     */
    public function boot(): void {

		parent::boot(); // Boots everything from Backdrop

		// Enqueue scripts and styles.
		add_action( 'customize_controls_enqueue_scripts', [ $this, 'controlsEnqueue'] );
		add_action( 'customize_preview_init',             [ $this, 'previewEnqueue' ] );
	}

	/**
	 * Register or enqueue scripts/styles for the controls that are output
	 * in the controls frame.
	 *
	 * @since  0.0.1
	 * @access public
	 * @return void
	 */
	public function controlsEnqueue() {

		// The customizer's own style and script are plain files in `public/`, loaded as they
		// are, so the customizer works on a copy of the theme that hasn't been built.
		wp_enqueue_style( 'nocturne-customize-controls', get_parent_theme_file_uri( 'public/css/customize-controls.css' ), [], $this->fileVersion( 'public/css/customize-controls.css' ) );

		wp_enqueue_script( 'nocturne-customize-controls', get_parent_theme_file_uri( 'public/js/customize-controls.js' ), [ 'customize-controls' ], $this->fileVersion( 'public/js/customize-controls.js' ), true );

		// Set up a new collection to store our JSON.
		$json = new Collection();

		// Register component controls JSON.
		foreach ( $this->components as $component ) {
			App::resolve( $component )->controlsJson( $json );
		}

		// Pass JSON to the controls script.
		wp_localize_script( 'nocturne-customize-controls', 'nocturneCustomizeControls', $json->jsonSerialize() );
	}

	/**
	 * Register or enqueue scripts/styles for the live preview frame.
	 *
	 * @since  0.0.1
	 * @access public
	 * @return void
	 */
	public function previewEnqueue() {

		// Enqueue preview script (a plain file, like the controls script).
		wp_enqueue_script( 'nocturne-customize-preview', get_parent_theme_file_uri( 'public/js/customize-preview.js' ), [ 'customize-preview' ], $this->fileVersion( 'public/js/customize-preview.js' ), true );

		// Set up a new collection to store our JSON.
		$json = new Collection();

		// Register component preview JSON.
		foreach ( $this->components as $component ) {
			App::resolve( $component )->previewJson( $json );
		}

		// Pass JSON to the preview script.
		wp_localize_script( 'nocturne-customize-preview', 'nocturneCustomizePreview', $json->jsonSerialize() );
	}


	/**
	 * Returns a version for a file's URL that changes whenever the file does, so browsers
	 * don't keep an old copy after an update.
	 *
	 * @since  0.0.1
	 * @access protected
	 * @param  string $file Path from the theme's root folder.
	 * @return string|null
	 */
	protected function fileVersion( string $file ) {

		$path = get_parent_theme_file_path( $file );

		return is_file( $path ) ? (string) filemtime( $path ) : null;
	}
}

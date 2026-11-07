<?php
/**
 * Powered By Text Class.
 *
 * A simple class for randomly displaying a "powered by..." line of text in the
 * theme footer.
 *
 * @package   Nocturne
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright 2026 Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://luthemes.com/portfolio/nocturne
 */

namespace Nocturne\Tools;

/**
 * Powered by class.
 *
 * @since  0.0.1
 * @access public
 */
class PoweredBy {

	/**
	 * Returns an array of all the powered by quotes.
	 *
	 * @since  0.0.1
	 * @access public
	 * @return array
	 */
	public static function all() {

		return apply_filters( 'nocturne/poweredby/collection', [
			esc_html__( 'Powered by heart and soul.', 'nocturne' ),
			esc_html__( 'Powered by crazy ideas and passion.', 'nocturne' ),
			esc_html__( 'Powered by the thing that holds all things together in the universe.', 'nocturne' ),
			esc_html__( 'Powered by love.', 'nocturne' ),
			esc_html__( 'Powered by the vast and endless void.', 'nocturne' ),
			esc_html__( 'Powered by the code of a maniac.', 'nocturne' ),
			esc_html__( 'Powered by peace and understanding.', 'nocturne' ),
			esc_html__( 'Powered by coffee.', 'nocturne' ),
			esc_html__( 'Powered by sleepness nights.', 'nocturne' ),
			esc_html__( 'Powered by the love of all things.', 'nocturne' ),
			esc_html__( 'Powered by something greater than myself.', 'nocturne' ),
			esc_html__( 'Powered by whispers from the future.', 'nocturne' ),
			esc_html__( 'Powered by the fusion of technology and dreams.', 'nocturne' ),
			esc_html__( 'Powered by the strength found in kindness.', 'nocturne' ),
			esc_html__( 'Powered by the melodies of the unseen world.', 'nocturne' ),
			esc_html__( 'Powered by the courage of the unheard voices.', 'nocturne' ),
			esc_html__( 'Powered by the beauty of the human spirit.', 'nocturne' ),
			esc_html__( 'Powered by the quest for eternal wisdom.', 'nocturne' ),
			esc_html__( 'Powered by the energy of uncharted galaxies.', 'nocturne' ),
			esc_html__( 'Powered by the magic hidden in plain sight.', 'nocturne' ),
			esc_html__( 'Powered by the legacy of the ancients.', 'nocturne' ),
			esc_html__( 'Powered by the dance between light and darkness.', 'nocturne' ),
			esc_html__( 'Powered by the touch of the morning sun.', 'nocturne' ),
			esc_html__( 'Powered by the secrets of the deep ocean.', 'nocturne' ),
			esc_html__( 'Powered by the echoes of laughter and joy.', 'nocturne' ),
			esc_html__( 'Powered by the relentless pursuit of truth.', 'nocturne' ),
		] );
	}

	/**
	 * Displays a random powered by quote.
	 *
	 * @since  0.0.1
	 * @access public
	 * @return void
	 */
	public static function display() {

		echo esc_html( static::render() );
	}

	/**
	 * Returns a random powered by quote.
	 *
	 * @since  0.0.1
	 * @access public
	 * @return string
	 */
	public static function render() {

		$collection = static::all();

		return $collection[ array_rand( $collection, 1 ) ];
	}
}

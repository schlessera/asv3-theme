<?php declare( strict_types=1 );

/**
 * Modern\WP::development() Homepage Theme.
 *
 * @package   MWPD\MwpdTheme
 * @author    Alain Schlesser <alain.schlesser@gmail.com>
 * @license   MIT
 * @link      https://www.modernwp.dev/
 * @copyright 2019 Alain Schlesser
 */

namespace MWPD\MwpdTheme\Asset;

final class AssetResolver {

	/**
	 * @var string[]|null
	 */
	private static  $manifest;


	/**
	 * @param $path
	 *
	 * @return string
	 */
	public static function resolve( $path ): string {
		$path = self::leading_slash_it( $path );
		$map  = self::get_manifest();

		if ( ! is_array( $map ) || ! isset( $map[ $path ] ) ) {
			return get_stylesheet_directory_uri() . '/assets' . $path;
		}

		return get_stylesheet_directory_uri() . '/assets' . self::leading_slash_it( $map[ $path ] );
	}


	/**
	 * @return array|mixed|object
	 */
	private static function get_manifest() {
		if ( null === self::$manifest ) {
			$manifest       = get_stylesheet_directory() . '/assets/mix-manifest.json';
			$map            = file_get_contents( $manifest );
			$map            = json_decode( $map, true );
			self::$manifest = $map;
		}

		return self::$manifest;
	}


	/**
	 * @param $string
	 *
	 * @return string
	 */
	private static function leading_slash_it( $string ): string {
		return '/' . ltrim( $string, '/\\' );
	}
}

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

namespace MWPD\MwpdTheme\Navigation;

use MWPD\MwpdTheme\Infrastructure\Registerable;
use MWPD\MwpdTheme\Infrastructure\Service;

final class MenuLocations implements Service, Registerable {

	/**
	 * Register the service.
	 *
	 * @return void
	 */
	public function register(): void {
		register_nav_menus( [
			'main-navigation' => 'Main navigation',
		] );
	}
}


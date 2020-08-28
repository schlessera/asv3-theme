<?php

/**
* Modern\WP::development() Homepage Theme.
*
* @package   MWPD\MwpdTheme
* @author    Alain Schlesser <alain.schlesser@gmail.com>
* @license   MIT
* @link      https://www.modernwp.dev/
* @copyright 2019 Alain Schlesser
*/

namespace MWPD\MwpdTheme\Feature;

use MWPD\MwpdTheme\Infrastructure\Registerable;
use MWPD\MwpdTheme\Infrastructure\Service;

final class FeaturedImage implements Service, Registerable {

	/**
	 * Register the service.
	 *
	 * @return void
	 */
	public function register(): void
	{
		add_theme_support( 'post-thumbnails' );
	}
}

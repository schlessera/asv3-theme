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

namespace MWPD\MwpdTheme\Infrastructure\View;

use MWPD\MwpdTheme\Infrastructure\Service;
use MWPD\MwpdTheme\Infrastructure\View;
use MWPD\MwpdTheme\Infrastructure\ViewFactory;

/**
 * Factory to create the simplified view objects.
 */
final class SimpleViewFactory implements Service, ViewFactory {

	/**
	 * Create a new view object for a given relative path.
	 *
	 * @param string $relative_path Relative path to create the view for.
	 * @return View Instantiated view object.
	 */
	public function create( string $relative_path ): View {
		return new SimpleView( $relative_path, $this );
	}
}

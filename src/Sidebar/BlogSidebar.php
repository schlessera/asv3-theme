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

namespace MWPD\MwpdTheme\Sidebar;

use MWPD\MwpdTheme\Infrastructure\Registerable;
use MWPD\MwpdTheme\Infrastructure\Service;

final class BlogSidebar implements Service, Registerable {

	/**
	 * Register the service.
	 *
	 * @return void
	 */
	public function register(): void {
		register_sidebar( [
			'id' => 'blog_sidebar',
			'name' => 'Blog Sidebar',
			'before_widget' => '<div id="%1$s" class="pt-8 widget %2$s">',
			'after_widget' => '</div></div>',
			'before_title' => '<h3>',
			'after_title' => '</h3><div class="padder">'
		] );
	}
}


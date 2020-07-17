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
use MWPD\MwpdTheme\Infrastructure\ViewFactory;

final class Pagination implements Service, Registerable {

	/**
	 * @var ViewFactory
	 */
	private ViewFactory $view_factory;

	/**
	 * Pagination constructor.
	 *
	 * @param ViewFactory $view_factory
	 */
	public function __construct( ViewFactory $view_factory ) {
		$this->view_factory = $view_factory;
	}

	/**
	 * Register the service.
	 *
	 * @return void
	 */
	public function register(): void {
		add_action( 'asv3_pagination', [ $this, 'render_pagination' ], 10, 0 );
	}

	public function render_pagination() {
		$pagination_view = $this->view_factory->create( 'partials/pagination' );

		$args = [
			'mid_size'           => 1,
			'prev_text'          => _x( 'Previous', 'previous set of posts' ),
			'next_text'          => _x( 'Next', 'next set of posts' ),
			'screen_reader_text' => __( 'Posts navigation' ),
			'aria_label'         => __( 'Posts' ),
			'type'               => 'array'
		];

		$links = paginate_links( $args );
		$links_markup = $pagination_view->render( compact( 'links' ) );

		if ( $links && ! empty( $links_markup ) ) {
			echo $links_markup;
		}
	}
}

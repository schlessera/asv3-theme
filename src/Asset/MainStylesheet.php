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

use MWPD\MwpdTheme\Infrastructure\Registerable;
use MWPD\MwpdTheme\Infrastructure\Service;
use function add_action;
use function wp_enqueue_style;
use function wp_register_style;

final class MainStylesheet implements Service, Registerable {

	/**
	 * Stylesheet handle to use.
	 *
	 * @var string
	 */
	public const HANDLE = 'mwpd-theme';

	/**
	 * Asset resolver to use to resolve paths to the assets.
	 *
	 * @var AssetResolver
	 */
	private $asset_resolver;

	/**
	 * Instantiate a MainStylesheet object.
	 *
	 * @param AssetResolver $asset_resolver Asset resolver to use.
	 */
	public function __construct( AssetResolver $asset_resolver ) {
		$this->asset_resolver = $asset_resolver;
	}
	/**
	 * Register the service.
	 *
	 * @return void
	 */
	public function register(): void {
		add_action( 'wp_enqueue_scripts', [ $this, 'enqueue_stylesheet' ] );
	}

	/**
	 * Enqueue the main stylesheet.
	 */
	public function enqueue_stylesheet() {
		wp_register_style( self::HANDLE, $this->asset_resolver->resolve( 'css/theme.css' ), [], false );
		wp_enqueue_style( self::HANDLE );
	}
}

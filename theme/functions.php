<?php
/**
 * Modern\WP::development() Homepage Theme.
 *
 * @package   MWPD\MwpdTheme
 * @author    Alain Schlesser <alain.schlesser@gmail.com>
 * @license   MIT
 * @link      https://www.modernwp.dev/
 * @copyright 2019 Alain Schlesser
 *
 *------------------------------------------------------------------------------
 *-- 1. Provide the plugin meta information that WordPress needs.             --
 *------------------------------------------------------------------------------
 *
 * @wordpress-plugin
 * Plugin Name:  MWPD Homepage Theme
 * Plugin URI:   https://www.modernwp.dev/
 * Description:  Homepage theme for the "Modern WordPress Development" site.
 * Version:      0.1.0
 * Requires PHP: 7.2
 * Author:       Alain Schlesser <alain.schlesser@gmail.com>
 * Author URI:   https://www.alainschlesser.com/
 * Text Domain:  mwpd-theme
 * Domain Path:  /languages
 * License:      MIT
 * License URI:  https://opensource.org/licenses/MIT
 */

namespace MWPD\MwpdTheme;

use function register_activation_hook;
use function register_deactivation_hook;

/*
 * This is the theme's bootstrap file. It serves three main purposes:
 *  1. Provide the theme meta information that WordPress needs;
 *  2. Prepare the environment so that it is ready to execute our OOP code;
 *  3. Instantiate and kick off our "composition root" (our 'Theme' class).
 *
 * The bootstrap file should not do anything else, so that we have a clean
 * separation between a.) code that needs to be run sequentially and produces
 * side-effects and b.) declarations that can be taken out of contexts for
 * testing and reuse and have no side-effects.
 *
 * Anything past this bootstrap file should be autoloadable classes, interfaces
 * or traits without any side-effects.
 */

/*
 * As this is the only PHP file having side effects, we need to provide a
 * safeguard, so we want to make sure this file is only run from within
 * WordPress and cannot be directly called through a web request.
 */

if ( ! defined('ABSPATH' ) ) {
	die();
}



/*------------------------------------------------------------------------------
 *-- 2. Prepare the environment so that it is ready to execute our OOP code.  --
 *----------------------------------------------------------------------------*/

/*
 * We try to load the Composer if it exists.
 * If it doesn't exist, we fall back to a basic bundled autoloader
 * implementation. This allows us to just use the theme as-is without requiring
 * the 'composer install' step.
 * Note: If you use Composer not only for autoloading, but also including
 * dependencies needed in production, the 'composer install' becomes mandatory
 * and the fallback autoloader should probably be removed.
 */
$composer_autoloader = __DIR__ . '/vendor/autoload.php';

if ( is_readable ( $composer_autoloader ) ) {
	require $composer_autoloader;
}

if ( ! class_exists( __NAMESPACE__ . '\\MwpdThemeFactory' ) ) {
	// Composer autoloader apparently was not found, so fall back to our bundled
	// autoloader.
	require_once __DIR__ . '/src/Infrastructure/Autoloader.php';

	( new Infrastructure\Autoloader() )
		->add_namespace( __NAMESPACE__, __DIR__ . '/src' )
		->register();
}



/*------------------------------------------------------------------------------
 *-- 3. Instantiate and kick off our "composition root" (our "Theme" class). --
 *----------------------------------------------------------------------------*/

/*
 * We use a factory to instantiate the actual theme.
 *
 * The factory keeps the object as a shared instance, so that you can also
 * get outside access to that same theme instance through the factory.
 *
 * This is similar to a Singleton, but without all the drawbacks the Singleton
 * anti-pattern brings along.
 *
 * For more information on why to avoid a Singleton,
 * @see https://www.alainschlesser.com/singletons-shared-instances/
 */
$theme = MwpdThemeFactory::create();

/*
 * We register activation and deactivation hooks by using closures, as these
 * need static access to work correctly.
 */
register_activation_hook( __FILE__, static function () use ( $theme ) {
	$theme->activate();
} );

register_deactivation_hook( __FILE__, static function () use ( $theme ) {
	$theme->deactivate();
} );

/*
 * Finally, we run the theme's register method to hook the theme into the
 * WordPress request lifecycle.
 */
$theme->register();

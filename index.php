<?php namespace MWPD\MwpdTheme;

use MWPD\MwpdTheme\Infrastructure\Injector;
use MWPD\MwpdTheme\Infrastructure\ViewFactory;

$container = MwpdThemeFactory::create()
                             ->get_container();

/** @var ViewFactory $view_factory */
$view_factory = $container->get( MwpdTheme::VIEW_FACTORY_ID );

/** @var Injector $injector */
$injector = $container->get( MwpdTheme::INJECTOR_ID );

$layout = 'layout';

if ( is_404() ) {
	$layout = '404/layout';
}

if ( is_front_page() ) {
	$layout = 'frontpage/layout';
}

echo $view_factory->create( $layout )
	->render( [
		'view_factory' => $view_factory,
		'injector' => $injector
	] );

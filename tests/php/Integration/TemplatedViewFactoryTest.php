<?php

namespace MWPD\MwpdTheme\Tests\Integration;

use MWPD\MwpdTheme\Infrastructure\View;
use MWPD\MwpdTheme\Infrastructure\View\TemplatedView;
use MWPD\MwpdTheme\Infrastructure\View\TemplatedViewFactory;
use MWPD\MwpdTheme\Tests\ViewHelper;

final class TemplatedViewFactoryTest extends TestCase {

	public function test_it_can_create_views(): void {
		$factory = new TemplatedViewFactory( ViewHelper::LOCATIONS );

		$view = $factory->create( 'static-view' );
		$this->assertInstanceOf( TemplatedView::class, $view );
	}

	public function test_created_views_implement_the_interface(): void {
		$factory = new TemplatedViewFactory( ViewHelper::LOCATIONS );

		$view = $factory->create( 'static-view' );
		$this->assertInstanceOf( View::class, $view );
	}
}

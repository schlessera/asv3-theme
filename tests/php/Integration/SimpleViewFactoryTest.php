<?php

namespace MWPD\MwpdTheme\Tests\Integration;

use MWPD\MwpdTheme\Infrastructure\View;
use MWPD\MwpdTheme\Infrastructure\View\SimpleView;
use MWPD\MwpdTheme\Infrastructure\View\SimpleViewFactory;
use MWPD\MwpdTheme\Tests\ViewHelper;

final class SimpleViewFactoryTest extends TestCase {

	public function test_it_can_create_views(): void {
		$factory = new SimpleViewFactory();

		$view = $factory->create( ViewHelper::VIEWS_FOLDER . 'static-view' );
		$this->assertInstanceOf( SimpleView::class, $view );
	}

	public function test_created_views_implement_the_interface(): void {
		$factory = new SimpleViewFactory();

		$view = $factory->create( ViewHelper::VIEWS_FOLDER . 'static-view' );
		$this->assertInstanceOf( View::class, $view );
	}
}

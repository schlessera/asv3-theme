<?php

namespace MWPD\MwpdTheme\Tests\Integration;

use MWPD\MwpdTheme\Infrastructure\View\SimpleView;
use MWPD\MwpdTheme\Infrastructure\View\SimpleViewFactory;
use MWPD\MwpdTheme\Tests\ViewHelper;

final class SimpleViewTest extends TestCase {

	public function test_it_loads_partials_across_overrides(): void {
		$view = new SimpleView(
			ViewHelper::VIEWS_FOLDER . 'static-view',
			new SimpleViewFactory()
		);

		$this->assertStringStartsWith(
			'<p>Rendering works.</p>',
			$view->render()
		);
	}
}

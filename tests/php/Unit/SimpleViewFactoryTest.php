<?php

namespace MWPD\MwpdTheme\Tests\Unit;

use MWPD\MwpdTheme\Infrastructure\View\SimpleViewFactory;
use MWPD\MwpdTheme\Infrastructure\ViewFactory;

final class SimpleViewFactoryTest extends TestCase {

	public function test_it_can_be_instantiated(): void {
		$factory = new SimpleViewFactory();

		$this->assertInstanceOf( SimpleViewFactory::class, $factory );
	}

	public function test_it_implements_the_interface(): void {
		$factory = new SimpleViewFactory();

		$this->assertInstanceOf( ViewFactory::class, $factory );
	}
}

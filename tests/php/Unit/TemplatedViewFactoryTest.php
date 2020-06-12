<?php

namespace MWPD\MwpdTheme\Tests\Unit;

use MWPD\MwpdTheme\Infrastructure\View\TemplatedViewFactory;
use MWPD\MwpdTheme\Infrastructure\ViewFactory;

final class TemplatedViewFactoryTest extends TestCase {

	public function test_it_can_be_instantiated(): void {
		$factory = new TemplatedViewFactory();

		$this->assertInstanceOf( TemplatedViewFactory::class, $factory );
	}

	public function test_it_implements_the_interface(): void {
		$factory = new TemplatedViewFactory();

		$this->assertInstanceOf( ViewFactory::class, $factory );
	}
}

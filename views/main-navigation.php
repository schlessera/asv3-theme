<?php
/** @var MWPD\MwpdTheme\Infrastructure\View $this */

use MWPD\MwpdTheme\Navigation\MainNavigationMenuWalker;
use MWPD\MwpdTheme\Navigation\MobileNavigationMenuWalker; ?>
<nav class="bg-indigo-700">
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<div class="flex items-center justify-between h-16">
			<div class="flex items-center">
				<div class="flex-shrink-0">
					<?= $this->section( 'company-logo' ) ?>
				</div>
				<?php
				wp_nav_menu( [
					'menu'   => 'main-navigation',
					'walker' => $this->injector->make( MainNavigationMenuWalker::class ),
					'container_class' => 'hidden md:block',
					'menu_class' => 'ml-10 flex items-baseline',
				] );
				?>
			</div>
			<div class="-mr-2 flex md:hidden">
				<!-- Mobile menu button -->
				<button on="tap:sidebar.open" class="inline-flex items-center justify-center p-2 rounded-md text-indigo-300 hover:text-white hover:bg-indigo-600 focus:outline-none focus:bg-indigo-600 focus:text-white">
					<!-- Menu open: "hidden", Menu closed: "block" -->
					<svg class="block h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
					</svg>
					<!-- Menu open: "block", Menu closed: "hidden" -->
					<svg class="hidden h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
					</svg>
				</button>
			</div>
		</div>
	</div>

	<!--
	  Mobile menu, toggle classes based on menu state.

	  Open: "block", closed: "hidden"
	-->
	<amp-sidebar id="sidebar"
				 class="flex flex-col w-64 bg-indigo-800 pt-5 pb-4"
				 layout="nodisplay"
				 side="right">
		<button class="text-white" on="tap:sidebar.close">Close sidebar</button>
		<?php wp_nav_menu( [
			'menu'   => 'main-navigation',
			'walker' => $this->injector->make( MobileNavigationMenuWalker::class ),
			'container_class' => 'px-2 pt-2 pb-3 sm:px-3',
			'items_wrap' => '%3$s',
		] ); ?>
	</amp-sidebar>
</nav>

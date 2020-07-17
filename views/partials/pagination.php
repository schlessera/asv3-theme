<?php /** @var \MWPD\MwpdTheme\Infrastructure\View $this */
$links         = $this->raw( 'links' );
$previous_link = array_shift( $links );
$next_link     = array_pop( $links );

?><nav class="navigation border-t border-gray-200 px-4 flex items-center justify-between sm:px-0 mt-8" role="navigation" aria-label="<?= esc_html__( 'Posts' ) ?>">
	<h2 class="hidden screen-reader-text"><?= esc_html__( 'Posts navigation' ) ?></h2>
	<div class="w-0 flex-1 flex">
		<a href="<?= previous_posts() ?>" class="-mt-px border-t-2 border-transparent pt-4 pr-1 inline-flex items-center text-sm leading-5 font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-400 transition ease-in-out duration-150">
			<svg class="mr-3 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
				<path fill-rule="evenodd" d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd" />
			</svg>
			  <?= esc_html_x( 'Previous', 'previous set of posts' ) ?>
		</a>
	</div>
	<div class="hidden md:flex">
		<?php foreach ( $links as $link ) : ?>
			<?php if ( false !== strpos( $link, ' dots"' ) ) : ?>
				<?= str_replace( ' class="', ' class="-mt-px border-t-2 border-transparent pt-4 px-4 inline-flex items-center text-sm leading-5 font-medium text-gray-500"', $link ) ?>
			<?php else : ?>
				<?php if ( false !== strpos( $link, ' current"' ) ) : ?>
					<?= str_replace( ' class="', ' class="-mt-px border-t-2 border-indigo-500 pt-4 px-4 inline-flex items-center text-sm leading-5 font-medium text-indigo-600 focus:outline-none focus:text-indigo-800 focus:border-indigo-700 transition ease-in-out duration-150"', $link ) ?>
				<?php else : ?>
					<?= str_replace( ' class="', ' class="-mt-px border-t-2 border-transparent pt-4 px-4 inline-flex items-center text-sm leading-5 font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-400 transition ease-in-out duration-150"', $link ) ?>
				<?php endif; ?>
			<?php endif; ?>
		<?php endforeach; ?>
	</div>
	<div class="w-0 flex-1 flex justify-end">
		<a href="<?= next_posts() ?>" class="-mt-px border-t-2 border-transparent pt-4 pl-1 inline-flex items-center text-sm leading-5 font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-400 transition ease-in-out duration-150">
			<?= esc_html_x( 'Next', 'next set of posts' ) ?>
			<svg class="ml-3 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
				<path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
			</svg>
		</a>
	</div>
</nav>
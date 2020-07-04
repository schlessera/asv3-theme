<div class="relative px-4 sm:px-6 lg:px-8">
	<h1 class="text-5xl">Hi, and welcome to my blog!</h1>
	<?php if ( have_posts() ) : ?>
		<div class="relative max-w-7xl mx-auto pt-16 lg:pt-24">
			<div class="text-center">
				<h2 class="text-3xl leading-9 tracking-tight font-extrabold text-gray-900 sm:text-4xl sm:leading-10">
					From the blog
				</h2>
				<p class="mt-3 max-w-2xl mx-auto text-xl leading-7 text-gray-500 sm:mt-4">
					Here's a selection of the latest blog posts.
				</p>
			</div>
			<div class="mt-12 grid gap-5 max-w-lg mx-auto lg:grid-cols-3 lg:max-w-none">
				<?php while ( have_posts() ) : ?>
					<?php the_post() ?>
					<a class="flex flex-col rounded-lg shadow-lg overflow-hidden" href="<?php the_permalink() ?>">
						<div class="flex-shrink-0">
							<?php the_post_thumbnail( null, [  'class' => 'h-48 w-full object-cover', 'data-amp-layout' => 'responsive' ] ) ?>
						</div>
						<div class="flex-1 bg-white p-6 flex flex-col justify-between">
							<div class="flex-1">
								<h3 class="mt-2 text-xl leading-7 font-semibold text-gray-900">
									<?php the_title() ?>
								</h3>
								<p class="mt-3 text-base leading-6 text-gray-500">
									<?php the_excerpt() ?>
								</p>
							</div>
						</div>
					</a>
				<?php endwhile; ?>
			</div>
		</div>
	<?php endif; ?>
</div>

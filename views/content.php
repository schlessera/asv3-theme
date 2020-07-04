<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : ?>
		<?php the_post() ?>
		<article>
			<?php the_content() ?>
		</article>
	<?php endwhile; ?>
<?php endif; ?>
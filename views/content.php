<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : ?>
		<?php the_post() ?>
		<?php the_content() ?>
	<?php endwhile; ?>
<?php endif; ?>
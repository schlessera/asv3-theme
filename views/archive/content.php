<?php use MWPD\MwpdTheme\Navigation\Pagination;

if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : ?>
		<?php the_post() ?>
		<article>
			<?php the_content() ?>
		</article>
	<?php endwhile; ?>
<?php endif; ?>
<?php do_action( 'asv3_pagination' ); ?>

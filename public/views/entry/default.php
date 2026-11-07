<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry__header">
		<div class="entry__metadata">
			<?php Backdrop\Post\display_date(); ?>
			<?php Backdrop\Post\display_author( [ 'before' => Nocturne\sep() ] ); ?>
			<?php Backdrop\Post\display_comments_link( [ 'before' => Nocturne\sep() ] ); ?>
		</div>
		<?php Backdrop\Post\display_title( [ 'class' => 'entry__title' ] ); ?>
	</header>
	<?php if ( has_post_thumbnail() ) : ?>
		<a class="entry__thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
			<?php the_post_thumbnail( Nocturne\Tools\Mod::get( 'theme_content_feature_image', Nocturne\Tools\Mod::fallback( 'featured_image_size' ) ) ); ?>
		</a>
	<?php endif; ?>
	<div class="entry__content">
		<?php the_excerpt(); ?>
	</div>
</article>

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
		<figure class="entry__thumbnail">
			<?php the_post_thumbnail( Nocturne\Tools\Mod::get( 'theme_content_feature_image', Nocturne\Tools\Mod::fallback( 'featured_image_size' ) ) ); ?>
		</figure>
	<?php endif; ?>
	<div class="entry__content">
		<?php the_content(); ?>
		<?php Backdrop\View\display( 'nav/pagination', 'post' ); ?>
	</div>
	<footer class="entry__terms">
		<?php Backdrop\Post\display_terms( [
			// Translators: %s is the category list.
			'text'     => __( 'Posted in %s', 'nocturne' ),
			'taxonomy' => 'category',
		] ); ?>
		<?php Backdrop\Post\display_terms( [
			// Translators: %s is the tag list.
			'text'     => __( 'Tagged %s', 'nocturne' ),
			'taxonomy' => 'post_tag',
			'before'   => Nocturne\sep(),
		] ); ?>
	</footer>
</article>
<?php the_post_navigation(); ?>

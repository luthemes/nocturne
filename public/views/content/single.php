<div id="content" class="<?php echo esc_attr( Nocturne\content_class() ); ?>">
	<main id="main" class="app-main">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php Backdrop\View\display( 'entry', 'single' ); ?>
			<?php comments_template(); ?>
		<?php endwhile; ?>
	</main>
	<?php Nocturne\display_sidebar(); ?>
</div>

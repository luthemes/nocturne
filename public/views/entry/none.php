<article class="entry entry--none">
	<header class="entry__header">
		<h1 class="entry__title"><?php esc_html_e( 'Nothing found', 'nocturne' ); ?></h1>
	</header>
	<div class="entry__content">
		<?php if ( is_search() ) : ?>
			<p><?php esc_html_e( 'Nothing matched your search. Try different keywords.', 'nocturne' ); ?></p>
		<?php else : ?>
			<p><?php esc_html_e( 'There is nothing here yet. Try a search instead.', 'nocturne' ); ?></p>
		<?php endif; ?>
		<?php get_search_form(); ?>
	</div>
</article>

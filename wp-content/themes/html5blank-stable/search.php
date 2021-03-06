<?php get_header(); ?>

		<section id="search-page">


			<img src="<?=get_theme_mod( 'search-image' ); ?>" />

			<article>
				<h2><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo "\"".get_search_query()."\""; ?></h2>

				<?php get_template_part('search-loop'); ?>

				<?php get_template_part('pagination'); ?>
			</article>

		</section>

<?php get_footer(); ?>

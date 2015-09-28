<?php get_header(); ?>

	<ul class="subnav"></ul>
	<section>
	<section id="blog">
		<aside>
			<?php show_contact();?>
		</aside>
		<img src="<?=types_render_field('left-image', array('output' => 'raw')); ?>" />

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<?php the_content(); // Dynamic Content ?>

		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>

<?php get_footer(); ?>

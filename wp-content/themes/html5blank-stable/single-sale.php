<?php get_header(); ?>

	<ul class="subnav"></ul>
	<section>
	<?php show_contact();?>
	<section id="blog">
		<aside>
			<img src="<?php echo get_template_directory_uri(); ?>/images/phone.gif" />
			<a href="tel:+1">5025855951</a>
			<img src="<?php echo get_template_directory_uri(); ?>/images/email.gif" />
			<a href="mailto:email@example.com">mail@dae.com</a>
			<img src="<?php echo get_template_directory_uri(); ?>/images/location.gif" />
			<address>
				501 South 15th Street<br />
				Louisville, KY 40203
			</address>
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

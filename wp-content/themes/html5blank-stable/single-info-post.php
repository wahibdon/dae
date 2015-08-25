<?php get_header();
wp_nav_menu(array(
	'menu' => 'info-menu',
	'theme_location' => '__no_such_location',
	'menu_class' => 'subnav',
	'fallback_cb' => false,
	'items_wrap' => '<ul class="%2$s">%3$s</ul>'
)); ?>
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
		<img src="<?=types_render_field('info-image', array('output' => 'raw')); ?>" />
		<?
			the_post();
			echo "<article>";
			the_content();
			echo "</article>";
		?>
	</section>

    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/info-indicator.js"></script>
<?php get_footer(); ?>

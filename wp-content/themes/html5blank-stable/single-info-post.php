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
			<?php show_contact();?>
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

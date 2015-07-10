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
			<img src="images/phone.gif" />
			<a href="tel:+1">5025855951</a>
			<img src="images/email.gif" />
			<a href="mailto:email@example.com">mail@dae.com</a>
			<img src="images/location.gif" />
			<address>
				501 South 15th Street<br />
				Louisville, KY 40203
			</address>
		</aside>
		<img src="<?="htp://dae.ott-toolbox.com/static-html/images/aboutbg.png" ?>" />
		<?while(have_posts()){
			the_post();
			echo "<article>";
			the_content();
			echo "</article>";
		}?>
	</section>

<?php get_footer(); ?>

<?php get_header(); ?>
<? wp_nav_menu(array(
	'menu' => 'services-menu',
	'theme_location' => '__no_such_location',
	'menu_class' => 'subnav',
	'fallback_cb' => false,
	'items_wrap' => '<ul class="%2$s">%3$s</ul>'
)); 
	$services = new WP_Query(array('post_type'=>'service'));

	/*get_posts(array(
		'posts_per_page' => -1,
		'post_type' => 'service',
		'orderby' => 'title'
	))*/;
	if( $services->have_posts() ){
		echo "<ul id=\"internal-landing\">";
		while ($services->have_posts()){
			$services->$the_post();
			echo "<li class=\"internal-landing\">
	        	<a href=\"/index.php/service/".$post->post_name."/\">
	        		<div>
	        			<div></div>
	            		<img src=\"".get_field("services-image", array('output' => 'raw'))." />
	            	</div>
	                <h2>".$post->post_title."</h2>
	        		<p>".$post->description."</p>
	                <p>Read more &raquo;</p>
	        	</a>
	        </li>";
		}
		echo "</ul>";
	} else {echo "shit went wrong";}?>

<?php get_footer(); ?>
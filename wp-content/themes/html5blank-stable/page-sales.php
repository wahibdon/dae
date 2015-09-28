<?php get_header(); ?>
<? wp_nav_menu(array(
	'menu' => 'sales-menu',
	'theme_location' => '__no_such_location',
	'menu_class' => 'subnav',
	'fallback_cb' => false,
	'items_wrap' => '<ul class="%2$s">%3$s</ul>'
)); 
	$sales = new WP_Query(array('post_type'=>'sales-post'));

	if( $sales->have_posts() ){
		echo "<ul id=\"internal-landing\">";
		while ($sales->have_posts()){
			$sales->the_post();
			?>
			<li class="internal-landing">
	        	<a href="<?="/index.php/sales-posts/".$post->post_name."/" ?>">
	        		<div>
	        			<div></div>
	            		<img src="<?=types_render_field("sales-image", array('output' => 'raw')); ?>" />
	            	</div>
	                <h2><?=$post->post_title; ?></h2>
	        		<p> <?=types_render_field("sales-description", array('output' => 'raw'));?></p>
	                <p>Read more &raquo;</p>
	        	</a>
	        </li>
			<?
		}
		?>
		</ul>
	<?}?>

<?php get_footer(); ?>
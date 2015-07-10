<?php get_header(); ?>
<? wp_nav_menu(array(
	'menu' => 'services-menu',
	'theme_location' => '__no_such_location',
	'menu_class' => 'subnav',
	'fallback_cb' => false,
	'items_wrap' => '<ul class="%2$s">%3$s</ul>'
)); ?>
	<?
	print_r(get_posts(array(
		'posts_per_page' => -1,
		'post_type' => 'service',
		'orderby' => 'title'
	)));
	/*
	echo "<ul id=\"internal-landing\">";
	foreach ($terms as $term){
		?>
		<li class="internal-landing">
        	<a href="<?="/index.php/prodcat/".$term->slug."/" ?>">
        		<div>
        			<div></div>
            		<img src="<?=get_field("products_image", $term->taxonomy."_".$term->term_id)?>" />
            	</div>
                <h2><?=$term->name; ?></h2>
        		<p> <?=$term->description;?></p>
                <p>Go to product &raquo;</p>
        	</a>
        </li>
        <?
	}
	*/?>

<?php get_footer(); ?>
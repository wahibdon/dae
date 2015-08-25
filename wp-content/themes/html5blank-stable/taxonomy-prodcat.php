<?php 
$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
get_header(); 
wp_nav_menu(array(
    'menu' => 'subnav-products',
    'theme_location' => '__no_such_location',
    'menu_class' => 'subnav',
    'fallback_cb' => false,
    'items_wrap' => '<ul class="%2$s">%3$s</ul>'
)); 
?>
    <div id="product-search">
        <input id="search-box" type="text" placeholder="Search Products" />
    </div>

    <ul id="product-list">
    <?php while (have_posts()) : the_post(); ?> 
		<? $image = types_render_field("product-image", array('output' => 'raw', 'index' => '0'));
		$tags = wp_get_post_tags($post->ID);
        $tags_array = [];
        foreach ($tags as $tag) {
            $tags_array[] = $tag->name;
        }
        ?>
        <li class="single-product" data-tags='<?=json_encode($tags_array); ?>'>
        	<a href="<?php the_permalink() ?>" rel="bookmark">
        		<div>
        			<div></div>
            		<img src="<?=$image?>" />
            	</div>
                <h2><?php the_title(); ?></h2>
        		<p> <? echo substr($post->post_content, 0, 100)."...";?></p>
                <p>Learn more &raquo;</p>
        	</a>
        </li>
    <?php endwhile; ?>
    </ul>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/filter.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/products-indicator.js"></script>
<?php get_footer(); ?>

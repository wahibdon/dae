<?php get_header(); ?>
<? wp_nav_menu(array(
	'menu' => 'info-menu',
	'theme_location' => '__no_such_location',
	'menu_class' => 'subnav',
	'fallback_cb' => false,
	'items_wrap' => '<ul class="%2$s">%3$s</ul>'
)); 
	$paged = get_query_var('page', 1);
	$blog = new WP_Query(array('post_type'=>'blog-post', 'orderby'=>'modified', 'posts_per_page'=>2, 'paged' => $paged,''));

	if( $blog->have_posts() ){
		echo "<ul id=\"internal-landing\">";
		while ($blog->have_posts()){
			$blog->the_post();
			?>
		<li class="blog-landing">
            	<img src="<?=types_render_field("blog-image", array('output' => 'raw')); ?>" />
                <h2><? the_title(); ?></h2>
        		<p> <?=substr($post->post_content, 0, 500)."...";?></p>
                <p><a href="<? the_permalink(); ?>">Read more &raquo;</a></p>
	        </li>
			<?
		}
		?>
		</ul>

	<?php previous_posts_link( '« Newer Entries' ); ?>
	<?php echo get_next_posts_link('Go to next page');?>

	<?}?>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/info-indicator.js"></script>

<?php get_footer(); ?>
<?php get_header(); ?>
<?php wp_nav_menu(array(
	'menu' => 'info-menu',
	'theme_location' => '__no_such_location',
	'menu_class' => 'subnav',
	'fallback_cb' => false,
	'items_wrap' => '<ul class="%2$s">%3$s</ul>'
)); 
// set the "paged" parameter (use 'page' if the query is on a static front page)
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
 
//stickies
$stickies = new WP_Query( array('post_type'=>'blog-post', 'orderby'=>'modified'));

if ( $blog->have_posts() ) : ?>
        <ul id="sticky-landing">
        <?php
        // the loop
        while ( $blog->have_posts() ) : $blog->the_post();
	        //if(types_render_field('blog-sticky', array('output' => 'raw'))) :
	        ?>
                <li class="blog-landing">
            	<img src="<?php echo types_render_field("blog-image", array('output' => 'raw')); ?>" />
                <h2><?php the_title(); ?></h2>
                <p><?php echo substr($post->post_content, 0, 500)."...";?></p>
                <p><a href="<? the_permalink(); ?>">Read more &raquo;</a></p>
                </li>
	        <?php //endif;
        endwhile; ?>
        </ul>
<?php
// the query
$blog = new WP_Query( array('post_type'=>'blog-post', 'orderby'=>'modified', 'posts_per_page'=>5, 'paged' => $paged) );
?>
 
<?php if ( $blog->have_posts() ) : ?>
        <ul id="internal-landing">
        <?php
        // the loop
        while ( $blog->have_posts() ) : $blog->the_post();
        ?>
                <li class="blog-landing">
            	<img src="<?php echo types_render_field("blog-image", array('output' => 'raw')); ?>" />
                <h2><?php the_title(); ?></h2>
                <p><?php echo substr($post->post_content, 0, 500)."...";?></p>
                <p><a href="<? the_permalink(); ?>">Read more &raquo;</a></p>
                </li>
        <?php endwhile; ?>
        </ul>
        <div id="paging-links">
        <?php
 
        // get_next_posts_link() usage with max_num_pages
        echo get_previous_posts_link( 'Newer Entries' );
        echo get_next_posts_link( 'Older Entries', $blog->max_num_pages );
        ?>
        </div>
        <?php
        // clean up after our query
        wp_reset_postdata();
        ?>
 
        <?php else:  ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/info-indicator.js"></script>

<?php get_footer(); ?>
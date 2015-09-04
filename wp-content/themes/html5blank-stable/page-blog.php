<?php get_header(); ?>
<? wp_nav_menu(array(
	'menu' => 'info-menu',
	'theme_location' => '__no_such_location',
	'menu_class' => 'subnav',
	'fallback_cb' => false,
	'items_wrap' => '<ul class="%2$s">%3$s</ul>'
)); 
// set the "paged" parameter (use 'page' if the query is on a static front page)
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
 
// the query
$blog = new WP_Query( array('post_type'=>'blog-post', 'orderby'=>'modified', 'posts_per_page'=>2, 'paged' => $paged) );
?>
 
<?php if ( $blog->have_posts() ) : ?>
        <ul id=\"internal-landing\">
        <?php
        // the loop
        while ( $blog->have_posts() ) : $blog->the_post();
        ?>
                <li class="blog-landing">
                <h2><?php the_title(); ?></h2>
                <p><?php the_content(); ?></p>
                </li>
        <?php endwhile; ?>
        </ul>
        <?php
 
        // get_next_posts_link() usage with max_num_pages
        echo get_next_posts_link( 'Older Entries', $blog->max_num_pages );
        echo get_previous_posts_link( 'Newer Entries' );
        ?>
 
        <?php
        // clean up after our query
        wp_reset_postdata();
        ?>
 
        <?php else:  ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/info-indicator.js"></script>

    <? print_r($blog);?>

<?php get_footer(); ?>
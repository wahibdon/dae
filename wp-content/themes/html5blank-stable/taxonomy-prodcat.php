<?php 
$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
get_header(); ?>
	<h2><?php echo $term->name; ?> elsewhere on the site</h2>
    <ul>
    <?php while (have_posts()) : the_post(); ?> 
    			<? $image = types_render_field("product-image", array('output' => 'raw', 'index' => '0'));
    			?>
                <li>
                	<a class="single-product" href="<?php the_permalink() ?>" rel="bookmark">
                		<img src="<?=$image?>" />
                		<?php the_title(); echo substr($post->content, 0, 100)."...";?>
                	</a>
                </li>
    <?php endwhile; ?>
    </ul>

<?php get_footer(); ?>

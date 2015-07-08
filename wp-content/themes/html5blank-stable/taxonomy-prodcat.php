<?php 
$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
get_header(); ?>
	<h2><?php echo $term->name; ?> elsewhere on the site</h2>
    <ul id="product-list">
    <?php while (have_posts()) : the_post(); ?> 
    			<? $image = types_render_field("product-image", array('output' => 'raw', 'index' => '0'));
    			?>
                <li class="single-product">
                	<a href="<?php the_permalink() ?>" rel="bookmark">
                		<div>
                			<div></div>
	                		<img src="<?=$image?>" />
	                	</div>
                		<?php the_title(); echo substr($post->post_content, 0, 100)."...";?>
                	</a>
                </li>
    <?php endwhile; ?>
    </ul>

<?php get_footer(); ?>

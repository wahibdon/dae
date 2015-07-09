<?php 
$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
get_header(); 
print_r ( get_terms( 'prodcat') );
?>

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
                        <h2><?php the_title(); ?></h2>
                		<p> <? echo substr($post->post_content, 0, 100)."...";?></p>
                        <p>Learn more &raquo;</p>
                	</a>
                </li>
    <?php endwhile; ?>
    </ul>

<?php get_footer(); ?>

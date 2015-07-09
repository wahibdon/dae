<?php 
$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
echo $term->slug;
get_header(); 
$terms = get_terms( 'prodcat');
echo '  <ul class="subnav">';
foreach ($terms as $tax_term) {
    echo $tax_term->slug
    echo "      <li><a";
    if ($term->slug == $tax_term->slug)
        echo " class=\"active\"";
    echo " href=\"/index.php/prodcat/".$tax_term->slug."\">".$tax_term->name."</a></li>";
}
echo "  </ul>";
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

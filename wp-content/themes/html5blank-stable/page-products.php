<?php get_header(); ?>

	<? $terms = get_terms( 'prodcat');
	foreach ($terms as $term){
		print_r($term);
		print_r(get_field("products_image", "prodcat_7"));
	}
	?>


<?php get_footer(); ?>

$terms = get_terms ( $taxonomy, $t_args); 
foreeach ($terms as $aterm) { 
	 $img = get_field('img',$aterm)
	  }

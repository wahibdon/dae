<?php get_header(); ?>

	<? $terms = get_terms( 'prodcat');
	foreach ($terms as $term){
		print_r($term);
		echo get_field("products_image", $term->taxonomy."_".$term->term_id));
	}
	?>


<?php get_footer(); ?>
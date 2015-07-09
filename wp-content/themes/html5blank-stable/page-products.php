<?php get_header(); ?>

	<? $terms = get_terms( 'prodcat');
	foreach ($terms as $term){
		print_r($term);
		//print_r(get_field("products-image", $term->$term_id));
	}
	?>


<?php get_footer(); ?>

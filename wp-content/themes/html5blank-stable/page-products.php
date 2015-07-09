<?php get_header(); ?>

	<? $terms = get_terms( 'prodcat');
	foreach ($terms as $term){
		print_r($term);
		print_r(get_field("products-image", "access-stands"));
	}
	?>


<?php get_footer(); ?>

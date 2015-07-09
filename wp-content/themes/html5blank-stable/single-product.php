<?php get_header(); 
$terms = get_terms( 'prodcat');
	echo '  <ul class="subnav">';
	foreach ($terms as $tax_term) {
	    echo "      <li><a href=\"/index.php/prodcat/".$tax_term->slug."\">".$tax_term->name."</a></li>";
	}
	echo "  </ul>";
	print_r(wp_get_post_terms($post->ID, 'prodcat'));
?>	
	<ul id="bread-crumbs">
		<li><a href="internal-landing.html">All Products ></a></li>
		<li><a href="product-landing.html">Product Type ></a></li>
		<li>Product Name</li>
	</ul>
	<section id="product-copy">
		<article>
			<h1><?php echo get_the_title(); ?></h1>
			<?php echo show_post_body($post->post_content);	?>
		</article>
		<? echo build_spec_table(get_field('specs')); ?>
	</section>
	<section id="images-rec">
		<ul id="product-actions">
			<li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/share.gif" /></a></li>
			<li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/print.gif" /></a></li>
			<li><a href="<?php echo types_render_field('manual') ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/manual.gif" /></a></li>
			<li><a href="<?php echo types_render_field('spec-sheet') ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/spec.gif" /></a></li>
		</ul>
		<div id="slideshow">
			<div>
				<img id="largeImage" />
			</div>
			<div>
				<?php echo types_render_field("product-image", array('output' => 'html')); ?>
			</div>
		</div>
		<? echo build_spec_table(get_field('recommendations')); ?>
		<? echo build_spec_table(get_field('options')); ?>
	</section>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/product-functions.js"></script>
<?php get_footer(); ?>
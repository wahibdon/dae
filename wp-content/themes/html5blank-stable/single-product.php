<?php get_header(); ?>
	<ul class="subnav">
		<li><a href="">Engline Stands</a></li>
		<li><a href="">Docking Systems</a></li>
		<li><a href="">Access Stands</a></li>
		<li><a href="">Tooling</a></li>
		<li><a href="">Other Products</a></li>
	</ul>
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
			<li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/manual.gif" /></a></li>
			<li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/spec.gif" /></a></li>
		</ul>
		<div id="slideshow">
			<div>
				<img src="images/product.png" />
			</div>
			<div>
				<?php echo types_render_field("product-image", array('output' => 'html')); ?>
			</div>
		</div>
		<? echo build_spec_table(get_field('recommendations')); ?>
		<? echo build_spec_table(get_field('options')); ?>
	</section>
<?php get_footer(); ?>
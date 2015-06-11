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
		<? print_r(get_field('specs')); ?>
		<table>
			<thead>
				<tr>
					<th>Attribute</th><th>Value</th><th>Units</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Model</td><td>3224-lr</td><td></td>
				</tr>
				<tr>
					<td>Weight</td><td>2400</td><td>lbs</td>
				</tr>
			</tbody>
		</table>
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
		<table>
			<thead>
				<tr>
					<th>Recommended Accesories</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Accesory 1</td>
				</tr>
				<tr>
					<td>Accesory 2</td>
				</tr>
				<tr>
					<td>Accesory 3</td>
				</tr>
				<tr>
					<td>Accesory 4</td>
				</tr>
			</tbody>
		</table>
		<table>
			<thead>
				<tr>
					<th colspan="2">Options</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Option 1</td><td>Detail</td>
				</tr>
				<tr>
					<td>Option 2</td><td>Detail</td>
				</tr>
				<tr>
					<td>Option 3</td><td>Detail</td>
				</tr>
				<tr>
					<td>Option 4</td><td>Detail</td>
				</tr>
			</tbody>
		</table>
	</section>
<?php get_footer(); ?>
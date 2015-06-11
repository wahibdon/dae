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
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	<section id="product-copy">
		<article>
			<h1><?php echo get_the_title(); ?></h1>
			<?php echo the_content(); ?>
			<!--<a href="">Read more &raquo;</a>-->
		</article>
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
		<div>
			testgin:
			<?php $var =  types_render_field("product-image", array('output' => 'html')); print_f("somethign should happen %s", $var); ?>
		</div>
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
				<div>
					<a href=""><img src="images/product.png" /></a>
				</div>
				<div>
					<a href=""><img src="images/product2.png" /></a>
				</div>
				<div>
					<a href=""><img src="images/product3.png" /></a>
				</div>
				<div>
					<a href=""><img src="images/product4.png" /></a>
				</div>
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
	<?php endwhile; ?>
	<?php endif; ?>
<?php get_footer(); ?>
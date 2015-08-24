<?php get_header(); 
$term_slug = wp_get_post_terms($post->ID, 'prodcat');
$terms = get_terms( 'prodcat');
$manual = explode('/',types_render_field('manual'));
$manual = $manual[count($manual)-1];
	echo '  <ul class="subnav">';
	foreach ($terms as $tax_term) {
	    echo "      <li";
	    if ($term_slug[0]->slug == $tax_term->slug)
	        echo " class=\"active\"";
	    echo "><a href=\"/index.php/prodcat/".$tax_term->slug."\">".$tax_term->name."</a></li>";
	}
	echo "  </ul>";
?>	
	<ul id="bread-crumbs">
		<li><a href="/index.php/products/">All Products ></a></li>
		<li><a href="/index.php/prodcat/<?=$term_slug[0]->slug; ?>"><?=$term_slug[0]->name; ?> ></a></li>
		<li><?= get_the_title(); ?></li>
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
			<li><a href="javascript:window.print();"><img src="<?php echo get_template_directory_uri(); ?>/images/print.gif" /></a></li>
			<li><a target="_blank" href="<?php echo "http://dae.ott-toolbox.com/index.php/files/?file=$manual" ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/manual.gif" /></a></li>
			<li><a target="_blank" href="<?php echo types_render_field('spec-sheet') ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/spec.gif" /></a></li>
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
	<div style="display: none">
		<span class='st_email_large' displayText='Email'></span>
		<span class='st_facebook_large' displayText='Facebook'></span>
		<span class='st_twitter_large' displayText='Tweet'></span>
		<span class='st_linkedin_large' displayText='LinkedIn'></span>
		<span class='st_googleplus_large' displayText='Google +'></span>
	</div>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/product-functions.js"></script>
<?php get_footer(); ?>
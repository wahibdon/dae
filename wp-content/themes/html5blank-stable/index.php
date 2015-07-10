<?php get_header(); 
$thisvar = new WP_Query(array('post_type' => 'event'));
while($thisvar->have_posts()){
	$thisvar->the_post();
	$eurl = types_render_field('event-link', array('output' => 'raw'));
	$eimage = types_render_field('event-image', array('output' => 'raw'));
	break;
}

$products = new WP_Query(array('post_type' => 'product'));
while ($products->have_posts()){
	$products->the_post();
	if(types_render_field('featured-product', array('output' => 'raw'))){
		$fp_image = types_render_field("product-image", array('output' => 'raw', 'index' => '0'));
		$fp_title = $post->post_title;
		$fp_content = substr($post->post_content, 0, 300)."...";
		$fp_link = get_permalink($post->ID);
		break;
	}
}

$products = new WP_Query(array('post_type' => 'product'));
$fs = "";
while ($products->have_posts()){
	$products->the_post();
	if(types_render_field('front-slider', array('output' => 'raw'))){
		$fs_image = types_render_field("product-image", array('output' => 'raw', 'index' => '0'));
		$fs_title = $post->post_title;
		$fs_content = substr($post->post_content, 0, 300)."...";
		$fs_link = get_permalink($post->ID);
		$fs .= "<section>
			<a href=\"$fs_link\">
				<img src=\"$fs_image\" />
				<article>
					<h1>$fs_title</h1>
					<div>
						$fs_content
					</div>
				</article>
			</a>
		</section>";
	}
}

$news = new WP_Query(array('post_type' => 'blog-post', 'posts_per_page' => '9', 'orderby' => 'date', 'order' => 'DESC'));
$news_list = "";
while ($news->have_posts()){
	$news->the_post();
	if ($news->current_post == 0){
		$bn_image = types_render_field('blog-image', array('output' => 'raw'));
		$bn_date = $post->post_date;
		$bn_title = $post->post_title;
		$bn_content = substr($post->post_content, 0, 200)."...";
		$bn_link = get_permalink($post->ID);
	}else{
		$news_list .= "<li><a href=\"".get_permalink($post->ID)."\"><span>".$post->post_date."</span> ".$post->post_title."</a></li>";
	}
}

?>



	<div id="css-index-spotlight">
		<img class="left-arrow" src="<?php echo get_template_directory_uri(); ?>/images/home-left-arrow.gif" /><img class="right-arrow" src="<?php echo get_template_directory_uri(); ?>/images/home-right-arrow.gif" />
		<?=$fs;?>
	</div>
	<div id="css-index-more-info">
		<ul id="css-index-more-info-links">
			<li><a id="feature-toggle">Featured Product</a></li>
			<li><a id="news-toggle">News</a></li>
			<li><a href="<?=$eurl;?>"><img src="<?=$eimage; ?>"></a></li>
		</ul>
		<section id="css-index-featured-product">
			<article>
				<img src="<?=$fp_image;?>" />
				<h1><?=$fp_title;?></h1>
				<div>
					<?=$fp_content;?>
				</div>
				<a href="<?=$fp_link;?>">See the specs &raquo;</a>
			</article>
		</section>
		<section id="css-index-news">
			<ul>
				<?=$news_list;?>
			</ul>
			<article>
				<img src="<?=$bn_image;?>" />
				<h1><?=$bn_title;?></h1>
				<div>
					<p><time pubdate datetime="<?=$bn_date;?>"><?=$bn_date;?></time></p>
					<p><?=$bn_content;?></p>
				</div>
				<a href="<?=$bn_link;?>">Read more &raquo;</a>
			</article>
		</section>
	</div>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/index.js"></script>

<?php get_footer(); ?>

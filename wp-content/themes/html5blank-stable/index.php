<?php get_header(); 
$event = new WP_Query('p=115');
while($event->have_posts()){
	$event->the_post();
	print_r($post);
	$eurl = types_render_field('event-link', array('output' => 'raw'));
	$eimage = types_render_field('event-image', array('output' => 'raw'));
}
?>

	<div id="css-index-spotlight">
		<section>
			<img src="<?php echo get_template_directory_uri(); ?>/images/enginelift.gif" />
			<img class="left-arrow" src="<?php echo get_template_directory_uri(); ?>/images/home-left-arrow.gif" /><img class="right-arrow" src="<?php echo get_template_directory_uri(); ?>/images/home-right-arrow.gif" />
			<article>
				<h1>Engine Stand X</h1>
				<div>
					<p>Ut mei purto expetenda, erat adipisci necessitatibus eam et. Impetus impedit expetenda no pr In pri aperiam similique. Sea honestatis mediocritatem ut.</p>
					<p>Impetus impedit expetenda no pri, vitae nemore scripta vix ut. Impetus impedit expetenda no pr In pri aperiam vitae nemore scriptasimilique.</p>
				</div>
			</article>
		</section>
	</div>
	<div id="css-index-more-info">
		<ul id="css-index-more-info-links">
			<li><a id="" href="featured-product.html">Featured Product</a></li>
			<li><a href="news.html">News</a></li>
			<li><a href="<?=$eurl;?>"><img src="<?=$eimage; ?>"></a></li>
		</ul>
		<section id="css-index-featured-product">
			<article>
				<img src="<?php echo get_template_directory_uri(); ?>/images/enginelift.gif" />
				<h1>Engine Stand X</h1>
				<div>
					<p>Ut mei purto expetenda, erat adipisci necessitatibus eam et. Impetus impedit expetenda no pr In pri aperiam similique. Sea honestatis mediocritatem ut.</p>
					<p>Impetus impedit expetenda no pri, vitae nemore scripta vix ut. Impetus impedit expetenda no pr In pri aperiam vitae nemore scriptasimilique.</p>
				</div>
				<a href="product-page.html">See the specs &raquo;</a>
			</article>
		</section>
		<section id="css-index-news">
			<ul>
				<li><a href="news-item.html"><span>July 8</span> Past News Headline</a></li>
				<li><a href="news-item.html"><span>July 7</span> Past News Headline</a></li>
				<li><a href="news-item.html"><span>July 6</span> Past News Headline</a></li>
				<li><a href="news-item.html"><span>July 5</span> Past News Headline</a></li>
				<li><a href="news-item.html"><span>July 4</span> Past News Headline</a></li>
				<li><a href="news-item.html"><span>July 3</span> Past News Headline</a></li>
				<li><a href="news-item.html"><span>July 2</span> Past News Headline</a></li>
				<li><a href="news-item.html"><span>July 1</span> Past News Headline</a></li>
			</ul>
			<article>
				<img src="<?php echo get_template_directory_uri(); ?>/images/news-placeholder.jpg" />
				<h1>This is the News Headline</h1>
				<div>
					<p>Byline <time pubdate datetime="2015-05-14">09 May 2015</time></p>
					<p>Phasellus eu lacus non velit consequat facilisis. Aliquam aliquet nisl mattis eros viverra, eget rutrum diam gravida. Pellentesque turpis neque, lobortis a semper ut, volutpat vestibulum arcu...</p>
				</div>
				<a href="news-item.html">Read more &raquo;</a>
			</article>
		</section>
	</div>

<?php get_footer(); ?>

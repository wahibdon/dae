var feature = document.getElementById('css-index-featured-product');
var news = document.getElementById('css-index-news');
document.getElementById('feature-toggle').addEventListener('click', function(){
	if (feature.style.display == 'block')
		feature.style.display = 'none';
	else
		feature.style.display = 'block';
	news.style.display = "none";
});
document.getElementById('news-toggle').addEventListener('click', function(){
	if (news.style.display == 'block')
		news.style.display = 'none';
	else
		news.style.display = 'block';
	feature.style.display = "none";
});
document.getElementById('logo').src="/wp-content/themes/html5blank-stable/images/dae-logo-big.gif";
document.getElementsByTagName('nav')[0].id = "index-nav";
var feature = document.getElementById('css-index-featured-product');
var news = document.getElementById('css-index-news');
document.getElementById('feature-toggle').addEventListener('click', function(){
	if (feature.style.display == 'none')
		feature.style.display = 'block';
	else
		feature.style.display = 'none';
	news.style.display = "none";
});
document.getElementById('news-toggle').addEventListener('click', function(){
	if (news.style.display == 'none')
		news.style.display = 'block';
	else
		news.style.display = 'none';
	feature.style.display = "none";
});
var feature = document.getElementById('#css-index-featured-product');
var news = document.getElementById('#css-index-news');
feature.addEventListener('click', function(){
	if (this.style.display == 'none')
		this.style.display = 'block';
	else
		this.style.display = 'none';
	news.style.display = "none";
});
news.addEventListener('click', function(){
	if (this.style.display == 'none')
		this.style.display = 'block';
	else
		this.style.display = 'none';
	feature.style.display = "none";
})l
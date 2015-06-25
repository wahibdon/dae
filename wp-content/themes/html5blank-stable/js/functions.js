var images = document.querySelectorAll(".wpcf-field-product-image-value img");
for (var i= 0; i <images.length; i++){
	images[i].addEventListener('click', function(){
		for (var i= 0; i <images.length; i++){
			images[i].parentNode.style.backgroundImage = "none";
		}
		this.parentNode.style.backgroundImage = "url('http://dae.ott-toolbox.com/wp-content/themes/html5blank-stable/images/product-img-indicator.gif')";
	});
}
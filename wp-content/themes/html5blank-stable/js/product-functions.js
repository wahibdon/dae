var images = document.querySelectorAll(".wpcf-field-product-image-value img");
for (var i= 0; i <images.length; i++){
	images[i].addEventListener('click', function(){
		var holders = document.querySelectorAll(".wpcf-field-product-image");
		for (var i= 0; i <holders.length; i++){
			holders[i].style.backgroundImage = "none";
		}
		this.parentNode.parentNode.style.backgroundImage = "url('http://dae.ott-toolbox.com/wp-content/themes/html5blank-stable/images/product-img-indicator.gif')";
		setLargeImage(this);
	});
}
function setLargeImage(img){
	var largeImage = document.getElementById("largeImage");
	largeImage.src = img.src;
	if(largeImage.clientWidth < largeImage.clientHeight){
		largeImage.style.height = "340px";
		largeImage.style.width = "auto";
	}else{
		largeImage.style.width = "540px";
		largeImage.style.height = "auto";
	}
}
setLargeImage(images[0]);
document.getElementById('close-share').addEventListener('click', function(){
	document.getElementById("share-box").style.display = "none";
});
document.getElementById('open-share').addEventListener('click', function(e){
	e.preventDefault();
	document.getElementById("share-box").style.display = "block";
});

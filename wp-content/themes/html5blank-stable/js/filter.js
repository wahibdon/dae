var products = document.querySelectorAll(".single-product");
var productsUl = document.getElementById("product-list");
for(var i = 0; i<products.length; i++){
	products[i].tags = JSON.parse(products[i].dataset.tags);
}
document.getElementById('search-box').addEventListener('keyup', function(){
	if(this.value == ""){
		for(var i = 0; i<products.length; i++){
			productsUl.appendChild(products[i]);
		}
		return;
	}
	for(var i = 0; i<products.length; i++){
		if(products[i].parentNode)
			products[i].parentNode.removeChild(products[i]);
	}

});
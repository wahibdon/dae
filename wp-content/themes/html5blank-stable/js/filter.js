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
	var matches = [];
	for(var i = 0; i<products.length; i++){
		if(products[i].parentNode)
			products[i].parentNode.removeChild(products[i]);
		for(var j = 0; j<products[i].tags.length; j++){
			if (products[i].tags[j] == this.value){
				matches.push(products[i]);
				break;
			}
		}
	}
	if(matches != []){
		for(var i = 0; i<matches.length; i++){
			productsUl.appendChild(matches[i]);
		}
	}
});
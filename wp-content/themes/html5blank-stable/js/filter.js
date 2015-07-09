var products = document.querySelectorAll(".single-product");
for(var i = 0; i<products.length; i++){products[i].tags = (JSON.parse(products[i].dataset.tags);}
document.getElementById('search-box').addEventListener('change', function(){console.log('chage');});
var products = document.querySelectorAll(".single-product");
for(var i = 0; i<products.length; i++){console.log(JSON.parse(products[i].dataset.tags)[0]);}
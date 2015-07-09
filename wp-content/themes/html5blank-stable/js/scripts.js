window.onload = function(){
	document.getElementById("toggle-search").addEventListener('click', function(){
		var input = document.getElementById("nav-search");
		var nav = document.getElementById("main-nav");
		if (input.show){
			input.style.visibility = "hidden";
			input.style.opacity = "0";
			nav.style.visibility = "visible";
			nav.style.opacity = "1";
			input.show = 0;
		}else{
			input.style.visibility = "visible";
			input.style.opacity = "1";
			nav.style.visibility = "hidden";
			nav.style.opacity = "0";
			input.show = 1;
		}
	});
}
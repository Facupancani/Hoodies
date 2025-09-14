var loadFile = function(event) {
	var image = document.getElementById('output');
	image.src = URL.createObjectURL(event.target.files[0]);
};

function move() {
	let pag = document.getElementById("select_categorias").value;
	window.location.replace(pag);
 };
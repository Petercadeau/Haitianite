let btn = document.querySelector('#btn_pub');
let modal = document.querySelector('#modal1');
let img = document.querySelector('#modal__img');
let boton = document.querySelector('#btn_cerrar');


	btn.addEventListener('click', function(){
		modal.classList.toggle("modal1_open");
		/*let src = e.target.src;
		img.setAttribute("src",src);*/
	});


boton.addEventListener('click', function(){
	modal.classList.toggle("modal1_open");
});
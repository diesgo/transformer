// Slider básico

// Array con la ruta de las imágenes
misFotos = [
    "<img id='diapositiva' src='imgs/slider/0.jpg' alt='Primera diapositiva' name='fotos0'>",
    "<img id='diapositiva' src='imgs/slider/1.jpg' alt='Segunda diapositiva' name='fotos1'>",
    "<img id='diapositiva' src='imgs/slider/2.jpg' alt='Tercera diapositiva' name='fotos2'>",
    "<img id='diapositiva' src='imgs/slider/3.jpg' alt='Cuarta diapositiva' name='fotos3'>",
    "<img id='diapositiva' src='imgs/slider/4.jpg' alt='Quinta diapositiva' name='fotos4'>",
    "<img id='diapositiva' src='imgs/slider/5.jpg' alt='Sexta diapositiva' name='fotos5'>"
]
muestra = misFotos.length;



// Menú

function menu() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}

window.onscroll = function () { scrollFunction() };
function scrollFunction() {
    block=document.getElementById("navbar");
    if (document.body.scrollTop > 170 || document.documentElement.scrollTop > 170) {
        block.style.top = "0px";
        block.style.position="fixed";
        block.classList.add("slideInDown");
    } else {
        block.style.top = "";
        block.style.position="relative";
        block.classList.remove("slideInDown");
    }
} 

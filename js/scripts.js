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
    var x = document.getElementById("myMenu");
    if (x.className === "w3-bar topnav") {
        x.className += " responsive";
    } else {
        x.className = "w3-bar topnav";
    }
}

function openNav() {
    document.getElementById("mySidenav").style.width = "100%";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}

window.onscroll = function () { scrollFunction() };
function scrollFunction() {
    block=document.getElementById("navbar");
    if (document.body.scrollTop > 160 || document.documentElement.scrollTop > 160) {
        block.style.top = "0px";
        block.style.position="fixed";
        block.classList.add("w3-animate-top");
    } else {
        block.style.top = "";
        block.style.position="relative";
        block.classList.remove("w3-animate-top");
    }
}

function dropdownNavbar() {
    var x = document.getElementById("drop");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}

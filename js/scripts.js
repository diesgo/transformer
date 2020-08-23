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

function dropMenuBig() {
    var x = document.getElementById("menuDropBig");
    if (x.className.indexOf("w3-show") == -1) {
        x.classList.add("w3-show");
        x.classList.add("w3-animate-opacity");
    } else {
        x.classList.remove("w3-show");
        x.classList.remove("w3-animate-opacity");
    }
}
function dropMenuSmall() {
    var x = document.getElementById("menuDropSmall");
    if (x.className.indexOf("w3-show") == -1) {
        x.classList.add("w3-show");
        x.classList.add("w3-animate-opacity");
    } else {
        x.classList.remove("w3-show");
        x.classList.remove("w3-animate-opacity");
    }
}
function menuSmall() {
    var x = document.getElementById("smallbar");
    if (x.className.indexOf("w3-show") == -1) {
        x.classList.add("w3-show");
        x.classList.add("w3-animate-opacity");
    } else {
        x.classList.remove("w3-show");
        x.classList.remove("w3-animate-opacity");
    }
}

// CAROUSEL
// AUTOMÁTICO

var myIndex = 0;

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) { myIndex = 1 }
    x[myIndex - 1].style.display = "block";
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
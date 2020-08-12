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

$('.jcarousel')
    .on('jcarousel:create jcarousel:reload', function() {
        var element = $(this),
            width = element.innerWidth();

        // if (width > 900) {
        // 	width = width / 3;
        // } else if (width > 600) {
        // 	width = width / 2;
        // }

        element.jcarousel('items').css('width', width + 'px');
    });



function mueve(opcion) {
    // anterior=misFotos[muestra];
    // fotoAnt.innerHTML=anterior;
    switch (opcion) {
        case "avance":
            muestra++;
            if (muestra > 5) {
                muestra = 0
            }
            actual = document.getElementById("visor");
            $("#visor").addClass('animated slideOutLeft');
            actual.innerHTML = misFotos[muestra];

            // actual.className="animated slideOutLeft";
            // pantalla.innerHTML=misFotos[muestra];
            console.log(misFotos[muestra]);
            $("#diapositiva").removeClass("animated slideOutLeft");


            // estilo="derecho";
            break;
        case "retro":
            muestra--;
            if (muestra < 0) {
                muestra = 5
            }
            estilo = "izquierdo";
            break;
    }
    // pantalla.style.backgroundImage="url('imgs/slider/"+muestra+".jpg')";
    ver = misFotos[muestra];
    mueveFoto = 960;
    mueveFoto2 = -960;
    completado = setInterval(transicion, 20);
}

function transicion() {
    // if (estilo=="izquierdo") {
    // 	mueveFoto-=30;
    // 	mueveAnt=mueveFoto-960;
    // 	cambioFoto=mueveFoto+"px";
    // 	cambioAnt=mueveAnt+"px";
    // 	foto.style.left=cambioFoto;
    // 	fotoAnt.style.left=cambioAnt;
    // 	if (mueveFoto<=0) {
    // 		parar()
    // 	}
    // }
    // else if (estilo=="derecho") {
    // 	mueveFoto2+=30;
    // 	mueveAnt=mueveFoto2+960;
    // 	cambioFoto=mueveFoto2+"px";
    // 	cambioAnt=mueveAnt+"px";
    // 	foto.style.left=cambioFoto;
    // 	fotoAnt.style.left=cambioAnt;
    // 	foto.innerHTML=ver;
    // 	if (mueveFoto2>=0) {
    // 		parar()
    // 	}
    // }
}

function parar() {
    clearInterval(completado);
    numFoto = "fotos" + muestra;
    numff = muestra;
    fotoFondo = "imgs/slider/" + numff + ".jpg"
    imagenFondo = "url(" + fotoFondo + ")";
    pantalla.style.backgroundImage = imagenFondo;
    pantalla.style.backgroundSize = 'cover'
}

// Carrusel básico

var current = 0;
var imagenes = new Array();

$(document).ready(function() {
    var numImages = 8;
    if (numImages <= 4) {
        $('.right-arrow').css('display', 'none');
        $('.left-arrow').css('display', 'none');
    }

    $('.left-arrow').on('click', function() {
        if (current > 0) {
            current = current - 1;
        } else {
            current = numImages - 4;
        }

        $(".carrusel").animate({ "left": -($('#product_' + current).position().left) }, 600);
        console.log(current);

        return false;
    });

    $('.right-arrow').on('click', function() {
        if (numImages > current + 4) {
            current = current + 1;
        } else if (numImages === current - 4) {

            $('.right-arrow').css({ display: 'none' });
        } else {
            current = 0;
        }

        $(".carrusel").animate({ "left": -($('#product_' + current).position().left) }, 600);
        console.log(current);

        return false;
    });
});

// Menú

function menu() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}


// When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
// window.onscroll = function() {scrollFunction()};

// function scrollFunction() {
// 	var nav = document.getElementById("navbar");
// 	if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
// 		nav.style.position = 'fixed';
// 		$("#navbar").animate({
// 			top : '0',
// 			zIndex : '99'
// 		});
// 	} else {
// 		nav.style.position = 'initial';
// 	}
// } 

// window.onscroll = function() {myFunction()};
// 	var nav = document.getElementById("navbar");
// 	var sticky = nav.offsetTop;
// 	function myFunction() {
// 		if (window.pageYOffset >= sticky) {
// 			nav.classList.add("sticky")
// 		}else {
// 			nav.classList.remove("sticky");
// 		}
// 	};
(function($) {
    $(function() {
        $('[data-jcarousel]').each(function() {
            var el = $(this);
            el.jcarousel(el.data());
        });

        $('[data-jcarousel-control]').each(function() {
            var el = $(this);
            el.jcarouselControl(el.data());
        });
    });
})(jQuery);
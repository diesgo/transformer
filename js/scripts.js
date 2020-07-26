// Slider básico

// Array con la ruta de las imágenes
misFotos=[
"<img src='slider/lp0.jpg' alt='1. Gibson Les Paul 01' name='fotos0'>",
"<img src='slider/lp1.jpg' alt='2. Gibson Les Paul 02' name='fotos1'>",
"<img src='slider/lp2.jpg' alt='3. Gibson Les Paul 03' name='fotos2'>",
"<img src='slider/lp3.jpg' alt='4. Gibson Les Paul 04' name='fotos3'>",
"<img src='slider/lp4.jpg' alt='5. Gibson Les Paul 05' name='fotos4'>",
"<img src='slider/lp5.jpg' alt='6. Gibson Les Paul 06' name='fotos5'>"]
muestra=0

window.onload = function() {
	pantalla=document.getElementById("visor");
	foto=document.getElementById("fotoSale");
	fotoAnt=document.getElementById("fotoEntra");
	pantalla.style.backgroundImage="url('slider/lp1.jpg')";
	pantalla.style.backgroundSize = 'cover'
}


function mueve(opcion) {
	anterior=misFotos[muestra];
	fotoAnt.innerHTML=anterior;
	switch (opcion) {
		case "avance":muestra++;
		if (muestra>5) {
			muestra=0
		}
		estilo="derecho";
		break;
		case "retro":muestra--;
		if (muestra<0) {
			muestra=5
		}
		estilo="izquierdo";
		break;
	}
	pantalla.style.backgroundImage="url('slider/lp"+muestra+".jpg')";
	ver=misFotos[muestra];
	mueveFoto = 960;
	mueveFoto2=-960;
	completado=setInterval(transicion,20);
}

function transicion() {
	if (estilo=="izquierdo") {
		mueveFoto-=30;
		mueveAnt=mueveFoto-960;
		cambioFoto=mueveFoto+"px";
		cambioAnt=mueveAnt+"px";
		foto.style.left=cambioFoto;
		fotoAnt.style.left=cambioAnt;
		if (mueveFoto<=0) {
			parar()
		}
	}
	else if (estilo=="derecho") {
		mueveFoto2+=30;
		mueveAnt=mueveFoto2+960;
		cambioFoto=mueveFoto2+"px";
		cambioAnt=mueveAnt+"px";
		foto.style.left=cambioFoto;
		fotoAnt.style.left=cambioAnt;
		foto.innerHTML=ver;
		if (mueveFoto2>=0) {
			parar()
		}
	}
}

function parar() {
	clearInterval(completado);
	numFoto="fotos"+muestra;
	numff=muestra;
	fotoFondo="slider/lp"+numff+".jpg"
	imagenFondo="url("+fotoFondo+")";
	pantalla.style.backgroundImage=imagenFondo;
	pantalla.style.backgroundSize = 'cover'
}
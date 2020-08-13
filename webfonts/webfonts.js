var fonts = ["amarant", "arima", "catamaran", "de-valencia", "densia", "emblem", "haetten-schweiler", "lemonada", "lobster", "monoton", "montserrat", "nunito", "optima", "oswald", "restu", "roboto", "samble-tracie", "samble-tracie-swash", "spoken", "robofan-symbols", "transformers"];

var numFonts = fonts.length;
var x = document.getElementById("body");

function cambioFuente() {
    let f = document.getElementById("fuentes").selectedIndex;
    let font = fonts[f];
    document.getElementById("uno").className = "font-" + font;
    document.getElementById("fuente").innerHTML = font;
}

function cambioFuente2() {
    var f2 = document.getElementById("fuentes2").selectedIndex;
    font2 = fonts[f2];
    document.getElementById("dos").className = "font-" + font2;
    document.getElementById("fuente2").innerHTML = font2;
}

var marco = document.getElementById("seccion");
var code = 256;
tabla = document.createElement("TABLE");
marco.appendChild(tabla);
tabla.setAttribute("id", "tabla");
row = document.getElementById("tabla");

function caracteres() {
    let font = document.getElementById("fuentes").selectedIndex;
    let woff = fonts[font];
    fila = document.createElement("TR");
    row.appendChild(fila);
    for (let r = 0; r < code; r++) {
        celda = document.getElementsByTagName("tr")[0];
        cel = document.createElement("TD");
        celda.appendChild(cel).innerHTML = r;
    }
    fila = document.createElement("TR");
    row.appendChild(fila);
    for (let q = 0; q < code; q++) {
        celda = document.getElementsByTagName("tr")[1];
        simbol = String.fromCharCode(q);
        cel = document.createElement("TD");
        cel.setAttribute("class", "font-" + woff);
        celda.appendChild(cel).innerHTML = simbol;
    }
}
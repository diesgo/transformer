var fonts = ["amaranth-bold", "arima-madurai", "catamaran", "comfortaa-bold", "confortaa-regular", "de-valencia", "densia", "emblem", "haetten-schweiler", "lemonada", "lobster", "manrope-extralight", "monoton", "montserrat", "nunito", "oswald", "permanent-maker", "pompiere-regular", "restu", "roboto", "samble-tracie", "samble-tracie-swash", "fat-wandals", "spoken", "robofan-symbols", "transformers","varela", "zanzabar"];

var numFonts = fonts.length;
var x = document.getElementById("body");

function cambioFuente() {
    let f = document.getElementById("fuentes").selectedIndex;
    let font = fonts[f];
    document.getElementById("muestra").className = "font-" + font;
    document.getElementById("fuente").innerHTML = font;
}

function cambioFuente2() {
    var f2 = document.getElementById("fuentes2").selectedIndex;
    font2 = fonts[f2];
    document.getElementById("dos").className = "font-" + font2;
    document.getElementById("fuente2").innerHTML = font2;
}
cambioFuente();
cambioFuente2();
var fonts = ["amarant", "arima", "catamaran", "de-valencia", "densia", "emblem", "haetten-schweiler", "lemonada", "lobster", "monoton", "montserrat", "nunito", "optima", "oswald", "permanent-maker","restu", "roboto", "samble-tracie", "samble-tracie-swash", "spoken", "fat-wandals","robofan-symbols", "transformers","varela"];

function cambioFuente() {
    var f = document.getElementById("fuentes").selectedIndex;
    var font = fonts[f];
    var x = document.getElementById("muestra");
    if (x.className.indexOf("font-" + font) == -1) {
        x.setAttribute("class", "font-" + font); 
    } else {
        x.classList.remove("font-" + font);
    }
    document.getElementById("fuente").innerHTML = font;
}

function cambioFuente2() {
    var f2 = document.getElementById("fuentes2").selectedIndex;
    var font2 = fonts[f2];
    document.getElementById("dos").classList.add("font-" + font2);
    document.getElementById("fuente2").innerHTML = font2;
}
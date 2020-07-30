var fonts=["amaranth-bold","arima-madurai-light","de-valencia-regular","densia-sans-regular","emblem-regular","haetten-schweiler-regular","montserrat-regular","montserrat-italic","montserrat-bold","montserrat-light","optima","optima-italic","optima-medium","optima-bold","restu-bundah-regular","samble-tracie","samble-tracie-bold","samble-tracie-swash","samble-tracie-swash-bold","fat-wandals","spoken-bg","spoken","spoken-plain","robofan-symbols-regular","transformers-regular"];

var numFonts=fonts.length;
var x = document.getElementById("body");

function cambioFuente(){
	f = document.getElementById("fuentes").selectedIndex;
	font=fonts[f];
	document.getElementById("uno").className="font-"+font;
	document.getElementById("fuente").innerHTML=font;
}

function cambioFuente2(){
	f = document.getElementById("fuentes2").selectedIndex;
	font=fonts[f];
	document.getElementById("dos").className="font-"+font;
	document.getElementById("fuente2").innerHTML=font;
}
  

//   function myFunction() {
//   var z = document.createElement("option");
//   z.setAttribute("value", "volvocar");
//   var t = document.createTextNode("Volvo");
//   z.appendChild(t);
//   document.getElementById("mySelect").appendChild(z);
// }
  
// for(z=0;z<valperiodos;z++){
// 			document.formRent.timetorent.options[z].value=selecperiodos[z].pvp;
// 			document.formRent.timetorent.options[z].text=selecperiodos[z].periodo;
// 		}
  
  
// }


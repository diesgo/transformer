<!DOCTYPE php>
<php>

<head>
    <meta charset="utf-8">
    <meta lang="es">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="webfonts/font-fontello/css/fontello.css">
    <link rel="stylesheet" type="text/css" href="webfonts/stylesheet.css">
    <link rel="stylesheet" href="css/w3.css">
    <link rel="stylesheet" href="css/w3-theme-green.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Transformer | Inicio</title>
</head>
<style>
    /* Center website */
/* .main {
max-width: 1000px;
  margin: auto;
} */

/* h1 {
  font-size: 50px;
  word-break: break-all;
}
p{
    word-break: break-all;
}

.row {
  margin: 10px -16px;
} */

/* Add padding BETWEEN each column */
/* .row,
.row > .column {
  padding: 8px;
} */

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  display: none; 
}

/* Clear floats after rows */ 
/* .row:after {
  content: "";
  display: table;
  clear: both;
} */

/* Content */
.content {
  background-color: white;
  padding: 10px;
}

/* The "show" class is added to the filtered elements */
.show {
  display: block;
}

/* Style the buttons */
.btn {
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: white;
  cursor: pointer;
}

.btn:hover {
  background-color: #ddd;
}

.btn.active {
  background-color: #666;
  color: white;
}
</style>
<body>
    <script type="text/javascript" src="js/w3.js"></script>

    <!-- CABECERA -->

    <div id="navbar">
    
        <!-- BARRA SUPERIOR -->
    
        <div class="w3-cell-row w3-green">
    
            <div class="w3-container w3-content w3-right-align">
                <a href="javascript:void(0)" class="w3-button w3-hide-large w3-hide-medium w3-left "
                    onclick="openNav()">&#9776;</a>
                <a class="top-bar-element w3-button w3-hover-opacity" href="#">Bienvenido</a>
                <a class="top-bar-element w3-button w3-hover-opacity" href="#"
                    onclick="document.getElementById('login').style.display='block'">Inicio sesión</a>
                <a class="top-bar-element w3-button w3-hover-opacity" href="registro.php">Registro</a>
            </div>
        </div>
    
        <!-- MODAL INICIO SESIÓN -->
    
        <div id="login" class="w3-modal w3-padding">
            <div class="w3-modal-content w3-card-4 w3-animate-zoom">
    
                <div class="w3-center"><br>
                    <span onclick="document.getElementById('login').style.display='none'"
                        class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Cerrar ventana">×</span>
                    <img src="imgs/design/velazquez-373x273_oscuro_transparente.png" alt="Avatar" style="width:30%"
                        class="w3-circle w3-margin-top">
                </div>
    
                <form class="w3-container" action="/action_page.php">
                    <div class="w3-section">
                        <label><b>Nombre de usuario</b></label>
                        <input class="w3-input w3-border w3-margin-bottom w3-round" type="text"
                            placeholder="Nombre de  Usuario" name="usrname" required>
                        <label><b>Contraseña</b></label>
                        <input class="w3-input w3-border w3-round" type="text" placeholder="Contraseña" name="psw" required>
                        <div class="w3-row">
                            <div class="w3-half">
                                <button class="w3-buton w3-green w3-round w3-section w3-round" type="submit">Acceder</button>
                            </div>
                            <div class="w3-half w3-padding-24">
                                <label class="checkbox w3-right">Reruérdame
                                    <input type="checkbox">
                                    <span class="check"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </form>
    
                <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
                    <button onclick="document.getElementById('login').style.display='none'" type="button"
                        class="w3-button w3-red w3-round">Cancelar</button>
                    <span class="w3-right w3-padding w3-hide-small"><a href="#">Recuperar contraseña</a></span>
                </div>
            </div>
        </div>
    
        <!-- BARRA DE BÚSQUEDA -->
    
        <div id="searchBar" class="searchBar">
            <div class="w3-row-padding w3-content">
                <div id="logo" class="w3-half w3-padding-32">
                    <img src="imgs/design/transformer.png" class="w3-image" alt="logo_transformer" width="60%">
                </div>
                <div id="searchBar" class="w3-half w3-padding-32 w3-right-align search-container">
                    <form action="/action_page.php">
                        <input type="text" placeholder="Buscar..." name="search">
                        <button type="submit" class="w3-green w3-round"><i class="fto-search-1"></i></button>
                    </form>
                </div>
            </div>
        </div>
    
        <!-- BARRA DE MENÚ -->
    
        <div class="w3-container w3-light-grey w3-hide-small">
            <div class="w3-content">
                <div class="w3-bar">
                    <a href="index.php" class="w3-bar-item w3-button  w3-hover-white w3-hover-text-green fto-home"></a>
                    <a href="blog.php"
                        class="w3-bar-item w3-button w3-hide-small w3-hover-white w3-hover-text-green">Blog</a>
                    <a href="contact.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white w3-hover-text-green"">Contacto</a>
                            <a href=" about.php"
                        class="w3-bar-item w3-button w3-hide-small w3-hover-white w3-hover-text-green">Acerca de</a>
                    <div class="w3-dropdown-click w3-hide-small">
                        <button class="w3-button w3-hover-white w3-hover-text-green" onclick="drop('menuDropBig')">
                            Categorías <i class="fto-down-dir-2"></i>
                        </button>
                        <div id="menuDropBig" class="w3-dropdown-content w3-padding w3-bar-block" style="z-index: 1;">
                            <a href="documentacion.php"
                                class="w3-bar-item w3-button w3-hover-white w3-hover-text-green">Documentación</a>
                            <a href="tipografias.php"
                                class="w3-bar-item w3-button w3-hover-white w3-hover-text-green  ">Tipografías</a>
                            <a href="portafolio.php" class="w3-bar-item w3-button w3-hover-white w3-hover-text-green">Portafolio</a>
                        </div>
                    </div>
                    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium"
                        onclick="drop('smallbar')">&#9776;</a>
                </div>
            </div>
        </div>
    
        <!-- MENU DISPOSITIVOS PEQUEÑOS -->
    
        <div id="myNav" class="capaOculta">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <div class="capaOculta-content">
                <a href="index.php">Home</a>
                <a href="blog.php">Blog</a>
                <a href="contact.php">Contacto</a>
                <a href=" about.php">Acerca de</a>
                <div class="w3-dropdown-click">
                    <button class="w3-button" onclick="drop('menuDropSmall')">
                        Dropdown <i class="fto-down-dir-2"></i>
                    </button>
                    <div id="menuDropSmall" class="w3-dropdown-content w3-padding w3-bar-block" style="z-index: 1;">
                        <a href="documentacion.php"
                            class="w3-bar-item w3-button w3-hover-white w3-hover-text-green">Documentación</a>
                        <a href="tipografias.php"
                            class="w3-bar-item w3-button w3-hover-white w3-hover-text-green  ">Tipografías</a>
                        <a href="#" class="w3-bar-item w3-button w3-hover-white w3-hover-text-green">Link 3</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CUERPO DEL DOCUMENTO -->
    
    <!-- MAIN (Center website) -->

    <div class="w3-content">
    
        <h1>Categoría</h1>
    
        <h2>Selecciona una marca</h2>
    
        <div id="containerButton">
            <button class="w3-button w3-green w3-round active" onclick="brandSelection('all')"> Mostrar todas</button>
            <button class="w3-button w3-green w3-round" onclick="brandSelection('gibson')"> Gibson</button>
            <button class="w3-button w3-green w3-round" onclick="brandSelection('fender')"> Fender</button>
            <button class="w3-button w3-green w3-round" onclick="brandSelection('ibanez')"> Ibanez</button>
            <button class="w3-button w3-green w3-round" onclick="brandSelection('bcRich')"> BC Rich</button>
            <button class="w3-button w3-green w3-round" onclick="brandSelection('epiphone')"> Epiphone</button>
            <button class="w3-button w3-green w3-round" onclick="brandSelection('prs')"> PRS</button>
        </div>

        <div class="row">
            <div class="column bcRich">
                <div class="content">
                    <img src="imgs/portfolio/bcRichWarlock.jpg" alt="BC Rich" style="width:100%">
                    <h4>BC Rich WARLOCK</h4>
                    <p>Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="column epiphone">
                <div class="content">
                    <img src="imgs/portfolio/epiphoneSheratonII.jpg" alt="Epiphone" style="width:100%">
                    <h4>Epiphone Sheraton II</h4>
                    <p>Lorem ipsum dolor..</p>
                </div>
            </div>

            <!-- Fender Stratocaster -->
            <!-- American Original -->
            <div class="column fender">
                <div class="content">
                    <img src="imgs/portfolio/fender_Stratocaster_American_Original_Olimpic_White.jpg" alt="Fender Stratocaster American Original - Olimpic White" style="width:100%">
                    <h4>Fender Stratocaster</h4>
                    <h3>American Original</h3>
                    <p>Olimpic White</p>
                </div>
            </div>
            <div class="column fender">
                <div class="content">
                    <img src="imgs/portfolio/fender_Stratocaster_American_Original_Shell_Pink.jpg" alt="Fender Stratocaster American Original - Shell Pink" style="width:100%">
                    <h4>Fender Stratocaster</h4>
                    <h3>American Original</h3>
                    <p>Shell Pink</p>
                </div>
            </div>
            <div class="column fender">
                <div class="content">
                    <img src="imgs/portfolio/fender_Stratocaster_American_Original_Sunburst.jpg" id="muestra" alt="Fender Stratocaster American Original - Sunburst" style="width:100%">
                    <h4>Fender Stratocaster</h4>
                    <h3>American Original</h3>
                    <p>Sunburst</p>
                </div>
            </div>

            <!-- Fender Telecaster -->
            <!-- American Original 60's -->
            <div class="column fender">
                <div class="content">
                    <img src="imgs/portfolio/fender_Telecaster_American_Original_60_Aged_Natural.jpg" alt="Fender Telecaster American Original - Aged Natural" style="width:100%">
                    <h4>Fender Telecaster</h4>
                    <h3>American Original</h3>
                    <p>Aged Natural</p>
                </div>
            </div>
            <div class="column fender">
                <div class="content">
                    <img src="imgs/portfolio/fender_Telecaster_American_Original_60_Sunburst.jpg" alt="Fender Telecaster American Original - Sunburst" style="width:100%">
                    <h4>Fender Telecaster</h4>
                    <h3>American Original</h3>
                    <p>Sunburst</p>
                </div>
            </div>
            <div class="column fender">
                <div class="content">
                    <img src="imgs/portfolio/fender_Telecaster_American_Original_60_Surf_Green.jpg" alt="Fender Telecaster American Original - Surf Green" style="width:100%">
                    <h4>Fender Stratocaster</h4>
                    <h3>American Original</h3>
                    <p>Sunburst</p>
                </div>
            </div>

            <!-- Fender Jaguar -->
            <div class="column fender">
                <div class="content">
                    <img src="imgs/portfolio/fender_Jaguar_American_Original_60_Sunburst.jpg" alt="Fender Jaguar American Original 60's - Sunburst" style="width:100%">
                    <h4>Fender Jaguar</h4>
                    <h3>American Original 60's</h3>
                    <p>Sunburst</p>
                </div>
            </div>
            <div class="column fender">
                <div class="content">
                    <img src="imgs/portfolio/fender_Jaguar_American_Original_60_Candy_Apple_Red.jpg"
                        alt="Fender Jaguar American Original 60's - Candy Apple Red" style="width:100%">
                    <h4>Fender Jaguar</h4>
                    <h3>American Original 60's</h3>
                    <p>Candy Apple Red</p>
                </div>
            </div>
            <div class="column fender">
                <div class="content">
                    <img src="imgs/portfolio/fender_Jaguar_American_Original_60_Daphne_Blue.jpg"
                        alt="Fender Jaguar American Original 60's - Daphne blue" style="width:100%">
                    <h4>Fender Jaguar</h4>
                    <h3>American Original 60's</h3>
                    <p>Daphne Blue</p>
                </div>
            </div>
            <div class="column fender">
                <div class="content">
                    <img src="imgs/portfolio/fender_Jaguar_American_Original_60_Surf_Green.jpg" alt="Fender Jaguar American Original 60's - Surf Green" style="width:100%">
                    <h4>Fender Jaguar</h4>
                    <h3>American Original 60's</h3>
                    <p>Surf Green</p>
                </div>
            </div>

            <!-- Gibson Les Paul Junior -->
            <div class="column gibson">
                <div class="content">
                    <img src="imgs/portfolio/gibson_Les_Paul_Junior_Ebony.jpg"
                        alt="Gibson Les Paul Junior - Ebony" style="width:100%">
                    <h4>Gibson Les Paul Junior</h4>
                    <h3>Ebony</h3>
                    <p>Lorem ipsum dolor...</p>
                </div>
            </div>
            <div class="column gibson">
                <div class="content">
                    <img src="imgs/portfolio/gibson_Les_Paul_Junior_Vintage_Tobacco_Burst.jpg"
                        alt="Gibson Les Paul Junior - Vintage Tobacco Burst" style="width:100%">
                    <h4>Gibson Les Paul Junior</h4>
                    <h3>Vintage Tobacco Burst</h3>
                    <p>Lorem ipsum dolor...</p>
                </div>
            </div>
            <div class="column gibson">
                <div class="content">
                    <img src="imgs/portfolio/gibson_Les_Paul_Junior_Double_Cut_Cherry_Red.jpg"
                        alt="Gibson Les Paul Junior Double Cut - Cherry Red " style="width:100%">
                    <h4>Gibson Les Paul Junior Double Cut</h4>
                    <h3>Cherry Red</h3>
                    <p>Lorem ipsum dolor...</p>
                </div>
            </div>
            <div class="column gibson">
                <div class="content">
                    <img src="imgs/portfolio/gibson_Les_Paul_Junior_Double_Cut_TV_Yellow.jpg"
                        alt="Gibson Les Paul Junior Double Cut - TV Yellow" style="width:100%">
                    <h4>Gibson Les Paul Junior Double Cut</h4>
                    <h3>TV Yellow</h3>
                    <p>Lorem ipsum dolor...</p>
                </div>
            </div>

            <!-- Gibson Les Paul Standard -->
            <div class="column gibson">
                <div class="content">
                    <img src="imgs/portfolio/gibson_Les_Paul_Standard_Antiquity_Burst.jpg" alt="Gibson Les Paul Standard - Antiquity Burst" style="width:100%">
                    <h4>Gibson Les Paul Standard</h4>
                    <h3>Antiquity Burst</h3>
                    <p>Lorem ipsum dolor...</p>
                </div>
            </div>
            <div class="column gibson">
                <div class="content">
                    <img src="imgs/portfolio/gibson_Les_Paul_Standard_Deep_Cherry_Burst.jpg"
                        alt="Gibson Les Paul Standard - Deep Cherry Brurst" style="width:100%">
                    <h4>Gibson Les Paul Standard</h4>
                    <h3>Cherry Burst</h3>
                    <p>Lorem ipsum dolor...</p>
                </div>
            </div>
            <div class="column gibson">
                <div class="content">
                    <img src="imgs/portfolio/gibson_Les_Paul_Standard_Orange_Lemon_Fade.jpg"
                        alt="Gibson Les Paul Standard - Orange Lemon Fade" style="width:100%">
                    <h4>Gibson Les Paul Standard</h4>
                    <h3>Orange Lemon Fade</h3>
                    <p>Lorem ipsum dolor...</p>
                </div>
            </div>
            <div class="column gibson">
                <div class="content">
                    <img src="imgs/portfolio/gibson_Les_Paul_Standard_Tomato_Soup_Burst.jpg"
                        alt="Gibson Les Paul Standard - Tomato Soup Burst" style="width:100%">
                    <h4>Gibson Les Paul Standard</h4>
                    <h3>Tomato  Soup Burst</h3>
                    <p>Lorem ipsum dolor...</p>
                </div>
            </div>
            <div class="column gibson">
                <div class="content">
                    <img src="imgs/portfolio/gibson_Les_Paul_Standard_Washed_Bourbon_Burst.jpg"
                        alt="Gibson Les Paul Standard - Wasted Bourbon Burst" style="width:100%">
                    <h4>Gibson Les Paul Standard</h4>
                    <h3>Wasted Bourdon Burst</h3>
                    <p>Lorem ipsum dolor...</p>
                </div>
            </div>
            <div class="column gibson">
                <div class="content">
                    <img src="imgs/portfolio/gibson_Les_Paul_Standard_Wide_Tomato_Burst.jpg"
                        alt="Gibson Les Paul Standard - Wide Tomato Burst" style="width:100%">
                    <h4>Gibson Les Paul Standard</h4>
                    <h3>Wide Tomato Burst</h3> 
                </div>
            </div>

            <!-- Gibson Les Paul Custom -->
            <div class="column gibson">
                <div class="content">
                    <img src="imgs/portfolio/gibson_Les_Paul_Custom.jpg" alt="Gibson Les Paul Custom"
                        style="width:100%">
                    <h4>Gibson Les Paul Custom</h4>
                    <p>Ebony</p>
                </div>
            </div>
            <div class="column gibson">
                <div class="content">
                    <img src="imgs/portfolio/gibson_Les_Paul_Custom_Floyd_Rose.jpg" alt="Gibson Les Paul Custom with Floyd Rose" style="width:100%">
                    <h4>Gibson Les Paul Custom</h4>
                    <p>With Floyd Rose</p>
                </div>
            </div>
            <div class="column gibson">
                <div class="content">
                    <img src="imgs/portfolio/gibson_Les_Paul_Custom_Three_Pickup.jpg" alt="Gibson Les Paul Custom with 3-pickup"
                        style="width:100%">
                    <h4>Gibson Les Paul Custom</h4>
                    <p>With 3 pickup</p>
                </div>
            </div>
            <div class="column gibson">
                <div class="content">
                    <img src="imgs/portfolio/gibson_Les_Paul_Custom_Three_Pickup_Bigsby.jpg" alt="Gibson Les Paul Custom with 3-pickup and Bigsby"
                        style="width:100%">
                    <h4>Gibson Les Paul Custom</h4>
                    <p>With 3 pickup and Bigsby</p>
                </div>
            </div>

            <!-- Gibson SG -->
            <div class="column gibson">
                <div class="content">
                    <img src="imgs/portfolio/gibson_SG_Standard_Cherry_Red.jpg" alt="Gibson SG Standard Cherry Red" style="width:100%">
                    <h4>Gibson SG Standard Cherry</h4>
                    <p>Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="column gibson">
                <div class="content">
                    <img src="imgs/portfolio/gibson_SG_Junior.jpg" alt="Gibson SG Junior" style="width:100%">
                    <h4>Gibson SG Junior</h4>
                    <p>Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="column gibson">
                <div class="content">
                    <img src="imgs/portfolio/gibson_SG_Special.jpg" alt="Gibson SG Special" style="width:100%">
                    <h4>Gibson SG Special</h4>
                    <p>Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="column gibson">
                <div class="content">
                    <img src="imgs/portfolio/gibson_SG_Standard_Maestro_Viola_Cherry_Red.jpg"
                        alt="Gibson SG Standard with Maestro Viola" style="width:100%">
                    <h4>Gibson SG Maertro Viola</h4>
                    <p>Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="column gibson">
                <div class="content">
                    <img src="imgs/portfolio/gibson_SG_Custom_Ebony.jpg" alt="Gibson" style="width:100%">
                    <h4>Gibson SG Custom</h4>
                    <p>Ebony with Maestro Viola</p>
                </div>
            </div>
            <div class="column gibson">
                <div class="content">
                    <img src="imgs/portfolio/gibson_SG_Custom_Maestro_Viola_Classic_White.jpg" alt="Gibson SG Custom with Maestro Viola - Classic White" style="width:100%">
                    <h4>Gibson SG Custom</h4>
                    <p>Classic White with Maestro Viola</p>
                </div>
            </div>

            <!-- Gibson EDS -->
            <div class="column gibson">
                <div class="content">
                    <img src="imgs/portfolio/Gibson_EDS_Double_Neck_Cherry_Red.jpg" alt="Gibson EDS Double Neck - Cherry Red" style="width:100%">
                    <h4>Gibson EDS Double Neck</h4>
                    <p>Cherry Red</p>
                </div>
            </div>
            <div class="column gibson">
                <div class="content">
                    <img src="imgs/portfolio/gibson_EDS_Custom_ebony.jpg" alt="Gibson EDS Custom - Ebony"
                        style="width:100%">
                    <h4>Gibson EDS Custom</h4>
                    <p>Ebony</p>
                </div>
            </div>

            <!-- Gibson ES-335 -->
            <div class="column gibson">
                <div class="content">
                    <img src="imgs/portfolio/gibson_ES_335_Vintage_Burst.jpg" alt="Gibson ES-335 - Vintage Burst"
                        style="width:100%">
                    <h4>Gibson ES-335</h4>
                    <p>Vintage Burst</p>
                </div>
            </div>
            <div class="column gibson">
                <div class="content">
                    <img src="imgs/portfolio/gibson_ES_335_Vintage_Natural.jpg" alt="Gibson ES-335 - Vintage Natural"
                        style="width:100%">
                    <h4>Gibson ES-335</h4>
                    <p>Vintage Natural</p>
                </div>
            </div>
            <div class="column gibson">
                <div class="content">
                    <img src="imgs/portfolio/gibson_ES_335_Custom_Sixties_Cherry.jpg" alt="Gibson ES-335 Custom - Sixtiles_Cherry"
                        style="width:100%">
                    <h4>Gibson ES-335 Custom</h4>
                    <p>Sixties Cherry</p>
                </div>
            </div>
            <div class="column gibson">
                <div class="content">
                    <img src="imgs/portfolio/gibson_ES_335_Custom_Ebony.jpg" alt="Gibson ES-335 Custom - Ebony"
                        style="width:100%">
                    <h4>Gibson ES-335 Custom</h4>
                    <p>Ebony</p>
                </div>
            </div>

            <!-- Gibson Firebird -->
            <div class="column gibson">
                <div class="content">
                    <img src="imgs/portfolio/gibson_Firebird_Tobacco_Burst.jpg" alt="Gibson Firebird - Tobacco Burst" style="width:100%">
                    <h4>Gibson Firebird</h4>
                    <p>Tobacco Burst</p>
                </div>
            </div>
            <div class="column gibson">
                <div class="content">
                    <img src="imgs/portfolio/gibson_Firebird_Tobacco_Cherry_Red.jpg" alt="Gibson Firebird - Cherry Red"
                        style="width:100%">
                    <h4>Gibson Firebird</h4>
                    <p>Cherry Red</p>
                </div>
            </div>
            <div class="column gibson">
                <div class="content">
                    <img src="imgs/portfolio/gibson_Firebird_Vintage_Sunburst.jpg" alt="Gibson Firebird - Vintage Sunburst"
                        style="width:100%">
                    <h4>Gibson Firebird</h4>
                    <p>Vintage Sunburst</p>
                </div>
            </div>
            <div class="column gibson">
                <div class="content">
                    <img src="imgs/portfolio/gibson_Non_Reverse_Firebird_Vintage_Sunburst.jpg" alt="Gibson Non Reverse  Firebird - Vintage Sunburst"
                        style="width:100%">
                    <h4>Gibson Non Reverse Firebird</h4>
                    <p>Vintage Sunburst</p>
                </div>
            </div>
            <div class="column gibson">
                <div class="content">
                    <img src="imgs/portfolio/gibson_Firebird_Custom_Ebony.jpg"
                        alt="Gibson Firebird Custom - Ebony" style="width:100%">
                    <h4>Gibson Firebird Custom</h4>
                    <p>Ebony</p>
                </div>
            </div>

            <!-- Gibson Explorer -->
            <div class="column gibson">
                <div class="content">
                    <img src="imgs/portfolio/gibson_Explorer_Custom_Ebony.jpg" alt="Gibson Explorer Custom - Ebony"
                        style="width:100%">
                    <h4>Gibson Explorer Custom</h4>
                    <p>Ebony</p>
                </div>
            </div>

            <!-- Gibson Flying V -->
            <div class="column gibson">
                <div class="content">
                    <img src="imgs/portfolio/gibson_Flying_V_Custom_Ebony.jpg" alt="Gibson Flying V Custom - Ebony"
                        style="width:100%">
                    <h4>Gibson Flying V Custom</h4>
                    <p>Ebony</p>
                </div>
            </div>
            <div class="column gibson">
                <div class="content">
                    <img src="imgs/portfolio/gibson_Flying_V_Vibrola_Sparkling_Burgundy.jpg" alt="Gibson Flying V Vibrola - Sparkling Burgundy" style="width:100%">
                    <h4>Gibson Flying V Vibrola</h4>
                    <p>Sparkling Burgundy</p>
                </div>
            </div>
            <div class="column gibson">
                <div class="content">
                    <img src="imgs/portfolio/gibson_Flying_V_Antique_Natural.jpg" alt="Gibson Flying V Vibrola - Antique Natural" style="width:100%">
                    <h4>Gibson Flying V</h4>
                    <p>Antique Natural</p>
                </div>
            </div>
            <div class="column ibanez">
                <div class="content">
                    <img src="imgs/portfolio/ibanezJem.jpg" alt="Ibanez" style="width:100%">
                    <h4>Ibanez JEM</h4>
                    <p>Lorem ipsum dolor..</p>
                </div>
            </div>

            <div class="column ibanez">
                <div class="content">
                    <img src="imgs/portfolio/ibanezJs.jpeg" alt="Ibanez" style="width:100%">
                    <h4>Ibanez JS</h4>
                    <p>Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="column prs">
                <div class="content">
                    <img src="imgs/portfolio/prsSantana.jpeg" alt="PRS" style="width:100%">
                    <h4>PRS Santana</h4>
                    <p>Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="column rickenbacker">
                <div class="content">
                    <img src="imgs/portfolio/rickenbacker330.jpeg" alt="Rickenbacker" style="width:100%">
                    <h4>Rickenbacker 330</h4>
                    <p>Lorem ipsum dolor..</p>
                </div>
            </div>

            <div class="column rickenbacker">
                <div class="content">
                    <img src="imgs/portfolio/yamahaPacifica.jpg" alt="Yamaha" style="width:100%">
                    <h4>Yamaha Pacifica</h4>
                    <p>Lorem ipsum dolor..</p>
                </div>
            </div>
            <!-- END GRID -->
        </div>
    
        <!-- END MAIN -->
    </div>
    
    <script>
        brandSelection("all")
            function brandSelection(c) {
                var x, i;
                x = document.getElementsByClassName("column");
                if (c == "all") c = "";
                for (i = 0; i < x.length; i++) {
                    w3.removeClass(x[i], "show");
                    if (x[i].className.indexOf(c) > -1) w3.addClass(x[i], "show");
                }
            }

            // Add active class to the current button (highlight it)
            var btnContainer = document.getElementById("containerButton");
            var btns = btnContainer.getElementsByClassName("btn");
            for (var i = 0; i < btns.length; i++) {
                btns[i].addEventListener("click", function () {
                    var current = document.getElementsByClassName("active");
                    current[0].className = current[0].className.replace(" active", "");
                    this.className += " active";
                });
            }
    </script>

<?php

include('./templates/footer.php');

?>
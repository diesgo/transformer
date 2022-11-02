<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta lang="es">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
  <link rel="shortcut icon" type="image/x-icon" href="imgs/favicon/favicon_dbold.ico">
  <link rel="apple-touch-icon" href="imgs/favicon/apple-touch-icon.png">
  <link rel="stylesheet" type="text/css" href="css/normalize.css">
  <link rel="stylesheet" type="text/css" href="../../assets/webfonts/buenas/stylesheet.css">
  <link rel="stylesheet" href="css/w3.css">
  <link rel="stylesheet" href="css/w3-theme-green.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <title>ddbold | Inicio</title>
</head>

<body>

  <!-- CABECERA -->

  <div id="navbar">

    <!-- BARRA SUPERIOR -->

    <div class="w3-cell-row w3-green">
      <div class="w3-container w3-content w3-right-align">
        <a href="javascript:void(0)" class="w3-button w3-hide-large w3-hide-medium w3-left " onclick="openNav()">&#9776;</a>
        <a class="top-bar-element w3-button w3-hover-opacity" href="profile.php">Bienvenido</a>
        <a class="top-bar-element w3-button w3-hover-opacity" href="#" onclick="document.getElementById('login').style.display='block'">Inicio sesión</a>
        <a class="top-bar-element w3-button w3-hover-opacity" href="registro.php">Registro</a>
      </div>
    </div>

    <!-- MODAL INICIO SESIÓN -->

    <div id="login" class="w3-modal w3-padding">
      <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="z-index: 5000;">

        <div class="w3-center"><br>
          <span onclick="document.getElementById('login').style.display='none'" class="w3-button w3-xlarge w3-transparent w3-display-topright w3-hover-green" title="Cerrar ventana">×</span>
          <img src="imgs/design/logo_velazquez.png" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top">
        </div>

        <form class="w3-container" action="./login.php">
          <div class="w3-content w3-padding-large">
            <label><b>email</b></label>
            <input class="w3-input w3-border w3-margin-bottom w3-round" type="text" placeholder="user@domail.ext" name="email" required>
            <label><b>Contraseña</b></label>
            <input class="w3-input w3-border w3-margin-bottom w3-round" id="password" type="password" placeholder="&#128273 Contraseña" name="password" required />
            <p id="blockmay" class="w3-text-red" style="display: none;">El bloqueo de mayúsculas está activado.</p>
            <div class="w3-row">
              <div class="w3-half">
                <input type="submit" value="Acceder" name="acceder" class="w3-button w3-green w3-hover w3-round w3-section">
              </div>
              <div class="w3-half w3-padding-24">
                <label class="checkbox w3-right">Mostrar contraseña
                  <input type="checkbox" name="passwd" id="passwd" onclick="showPassword()">
                  <span class="check"></span>
                </label>
              </div>
            </div>

          </div>
        </form>

        <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
          <button onclick="document.getElementById('login').style.display='none'" type="button" class="w3-button w3-red w3-round">Cancelar</button>
          <span class="w3-right w3-button w3-green w3-round w3-padding w3-hide-small"><a href="#">Recuperar contraseña</a></span>
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
            <button type="submit" class="w3-round"><i>&#x1f50e;</i></button>
          </form>
        </div>
      </div>
    </div>

    <!-- BARRA DE MENÚ -->

    <div class="w3-container w3-light-grey w3-hide-small">
      <div class="w3-content">
        <div class="w3-bar">
          <a href="index.php" class="w3-bar-item w3-button w3-hover-green w3-xlarge">&#x1f3da;&#xfe0f;</a>
          <a href="blog.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white w3-hover-text-green w3-xlarge">Blog</a>
          <a href="contact.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white w3-hover-text-green w3-xlarge">Contacto</a>
          <a href="about.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white w3-hover-text-green w3-xlarge">Acerca de</a>
          <div class="w3-dropdown-click w3-hide-small">
            <button class="w3-button w3-hover-white w3-hover-text-green w3-xlarge" onclick="drop('menuDropBig')">Categorías <i class="fto-down-dir-2"></i></button>
            <div id="menuDropBig" class="w3-dropdown-content w3-padding w3-bar-block" style="z-index: 1;">
              <a href="documentacion.php" class="w3-bar-item w3-button w3-hover-white w3-hover-text-green">Documentación</a>
              <a href="construction.php" class="w3-bar-item w3-button w3-hover-white w3-hover-text-green">Animaciones</a>
              <a href="tipografias.php" class="w3-bar-item w3-button w3-hover-white w3-hover-text-green">Tipografías</a>
              <a href="portafolio.php" class="w3-bar-item w3-button w3-hover-white w3-hover-text-green">Portafolio</a>
            </div>
          </div>
          <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="drop('smallbar')">&#9776;</a>
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
        <a href="about.php">Acerca de</a>
        <div class="w3-dropdown-click">
          <button class="w3-button" onclick="drop('menuDropSmall')">Dropdown <i class="fto-down-dir-2"></i></button>
          <div id="menuDropSmall" class="w3-dropdown-content w3-padding w3-bar-block" style="z-index: 1;">
            <a href="documentacion.php" class="w3-bar-item w3-button w3-hover-white w3-hover-text-green">Documentación</a>
            <a href="construction.php" class="w3-bar-item w3-button w3-hover-white w3-hover-text-green">Animaciones</a>
            <a href="tipografias.php" class="w3-bar-item w3-button w3-hover-white w3-hover-text-green">Tipografías</a>
            <a href="portafolio.php" class="w3-bar-item w3-button w3-hover-white w3-hover-text-green">Portafolio</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- CUERPO DEL DOCUMENTO -->
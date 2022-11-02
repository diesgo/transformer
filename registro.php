<?php

include('./templates/header.php');

?>

<div class="w3-container w3-content w3-padding-24">
  <div class="w3-third w3-padding-small">
    <div class="w3-margin-bottom">
      <h3 class="upper">Formulario de registro</h3>
      <p>¿Ya estás registrado? <span><a href="#" onclick="document.getElementById('login').style.display='block'" class="w3-text-green">Inicia sesión</a></span></p><br>
      <h3 class="upper">Porqué registrarse</h3>
      <p>Registrarse te brinda el acceso a una experiéncia de usuario única. Ningún dato es utilizado para un fin que no sea este. Además, es gratis ;)</p>
    </div>
  </div>
  <div class="w3-twothird">
    <div class="w3-container">
      <form action="register.php" name="register" method="GET">
        
          <div class="w3-row">
            <div class="w3-col l6 w3-padding-small">
              <label class="w3-block"><sup class="w3-text-red">*</sup> Tratamiento</label>
              <div class="w3-col l3">
                <label class="radio">Sr.<input type="radio" name="tratamiento" value="h" required><span class="rad"></span></label>
              </div>
              <div class="w3-col l3">
                <label class="radio">Sra.<input type="radio" name="tratamiento" value="m" required><span class="rad"></span></label>
              </div>
            </div>
            <div class="w3-col l6 w3-padding-small">
              <label for="birthday">Fecha de nacimiento</label>
              <input type="date" class="w3-input w3-border w3-round" id="birthday" name="birthday">
            </div>
          </div>
          <div class="w3-row w3-section">
            <label for="nombre">Nombre:</label>
            <input type="text" class="w3-input w3-border w3-round" id="nombre" name="nombre" placeholder="Escribe tu nombre de pila" onkeyup="pasaValor('nombre');" required>
            <div id="infoNombre"></div>
          </div>
          <div class="w3-row w3-section">
            <label for="apellidos">Apellidos:</label>
            <input type="text" class="w3-input w3-border w3-round" id="apellidos" name="apellidos" placeholder="Escribe tus apellidos" onkeyup="pasaValor('apellidos')">
            <div id="infoApellidos"></div>
          </div>
          <div class="w3-row w3-section">
            <label for="email">Correo electrónico</label>
            <input type="text" class="w3-input w3-border w3-round" id="email" name="email" placeholder="nombre@dominio.ext" onkeyup="pasaValor('email');" required>
            <div id="infoEmail"></div>
          </div>
          <div class="w3-row w3-section">
            <label for="password">Contraseña</label>
            <input type="password" class="w3-input w3-border w3-round" id="password" name="password" required>
          </div>
          <div class="w3-row w3-section">
            <div class="w3-col">
              <label class="checkbox">Recibir ofertas de nuestros socios
                <input name="offer" id="offer" type="checkbox" onkeyup="pasaValor('ofertas');">
                <span class="check"></span>
              </label>
            </div>
            <div class="w3-col l6">
              <label class="checkbox">Suscribirse al boletín de noticias
                <input type="checkbox" name="newsletter" id="newsletter" onkeyup="pasaValor('newsletter');">
                <span class="check"></span>
              </label>
            </div>
            <div id="mostra"></div>
          </div>
          <div class="w3-row w3-section">
            <input type="submit" value="enviar" name="registrar" class="w3-button w3-green w3-hover w3-round">
          </div>
        
      </form>
    </div>
  </div>
</div>
<script src="js/validator.js"></script>

<?php

include('./templates/footer.php');

?>
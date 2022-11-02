<?php
include('./templates/header.php');
include('./config/conexion.php');
$usuario = getUsuarioById($_REQUEST['id']);
?>

<div class="w3-content w3-padding-48" style="min-height: 190px;">
  <div class="w3-quarter">
    <img class="w3-image" src="imgs/users/user1.png" alt="">
  </div>
  <div class="w3-threequarter">
    <div class="container">
      <label for="nombre">Nombre</label>
      <input class="w3-input w3-border w3-round w3-section" type="text" name="nombre" id="nombre" value="<?php echo $nombre ?>" />

      <label for="apellidos">Apellidos</label>
      <input class="w3-input w3-border w3-round w3-section" type="text" name="apellidos" id="apellidos" value="<?php echo $apellidos ?>" />

      <label for="email">Email</label>
      <input class="w3-input w3-border w3-round w3-section" type="text" name="email" id="email" value="<?php echo $email ?>" />

      <label for="suscripciones">Suscripciones</label>
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
    </div>
  </div>
</div>
<?php
include('templates/footer.php');
?>
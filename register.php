<?php
include('./templates/header.php');
include('./config/conexion.php');
?>
<div class="w3-content w3-padding-48 w3-center" style="min-height: 190px;">
  <?php

  if (isset($_REQUEST['registrar'])) {
    $tratamiento = $_REQUEST['tratamiento'];
    $nombre = $_REQUEST['nombre'];
    $apellidos = $_REQUEST['apellidos'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $birthday = $_REQUEST['birthday'];
    $offer = isset($_REQUEST['offer']) ? 1 : 0;
    $newsletter = isset($_REQUEST['newsletter']) ? 1 : 0;
    $online = 0;
    $sql = "SELECT * FROM usuarios WHERE email='$_REQUEST[email]'";
    $registro = mysqli_query($conn, $sql); // or die("problemas en el select" . mysqli_error($conne)); // Ejecutar la query
    if (mysqli_num_rows($registro) == 0) {
      $sql = "INSERT INTO usuarios(tratamiento, nombre, apellidos, email, password, birthday, ofertas, boletin, online) VALUES ('$tratamiento', '$nombre', '$apellidos', '$email', '$password', '$birthday', '$offer', '$newsletter', '$online')";
      mysqli_query($conn, $sql) or die('<p>No se ha podido establecer la conexión' . mysqli_error($conn) . '</p>');
      mysqli_close($conn);
      echo "<p>!Felicidades¡ Ya estás registrad@</p>";
      echo "<a class='w3-button' href='#'>Volver</a>";
    } else {
      echo "<p>Ya existe un usuario con este correo electrónico.</p>";
      echo "<a class='w3-button w3-green w3-hover w3-round w3-margin-right' href='registro.php'>Volver</a>";
      echo "<a class='w3-button w3-green w3-hover w3-round w3-margin-left' href='#'>Iniciar sesión</a>";
    }
    // echo "conectado";
  }

  ?>

</div>

<?php
include('templates/footer.php');
?>
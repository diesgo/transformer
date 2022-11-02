<?php

require('conexion.php');

function getUsuarioById(){
  $sql = "SELECT * FROM settings WHERE id ='$_REQUEST[id]";
  $row = mysqli_query($conn, $sql);
  return $row;

}
  if (isset($_REQUEST['acceder'])) {
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $sql = "SELECT * FROM usuarios WHERE email='$_REQUEST[email]'";
    $registro = mysqli_query($conn, $sql) or die("problemas en el select" . mysqli_error($conne)); // Ejecutar la query
    if (mysqli_num_rows($registro) == 0) {
      echo "<h2 class='w3-center'>ERROR</h2>";
      echo "<p class='w3-center'>Actualmente no hay ningún usuario con ese email. Posiblemente hayas tenido un error de typeo; a todos nos pasa de vez en cuando.</p>";
      echo "<p class='w3-center'>Si este es tu caso, haz click en reintentar, en caso contrario, te animo a crear tu cuenta de usuario. Elije la opción que se ajuste a tu caso.</p>";
      echo $boton;
    } else {
      $row = mysqli_fetch_array($registro);
      $checkpassword = $row['password'];
      if ($checkpassword != $password) {
        echo "password incorrecto";
        echo $botones;
      } else {
        echo "<p>Has iniciado sesión correctamente</p>";
        echo $botones;
      }
      // $row = mysqli_fetch_assoc($registro);
      // $sql = "UPDATE usuarios SET online = '$online' WHERE email = '$email'";
      // mysqli_query($conn, $sql) or die('<p>No se ha podido establecer la conexión' . mysqli_error($conn) . '</p>');
      // mysqli_close($conn);

    }
    // echo "conectado";
  }
  

?>
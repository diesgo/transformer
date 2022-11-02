<?php
include('config.php');
$conn = mysqli_connect($servidor, $usuario, $contrasena, $bdd); // establecer la conexión.

// Comprobar la conexión.

if (!$conn) {
  die(("<p>No se ha podido conectar con la Base de Datos</p>") . mysqli_connect_error());
} else {
  // echo "<p>Conectado!!</p>";
}

?>
<?php

$conn = new mysqli("localhost","root","","prueba");

if ($conn -> connect_errno) {
  echo "Error al conectar " . $conn -> connect_error;
}

?>
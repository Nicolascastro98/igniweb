<?php
session_start();
require('../conexionBD/conexionBD.php');
$usuario = $_POST['txtUsuario'];
$nombres = $_POST['txtNombres'];
$edad = $_POST['txtEdad'];
$pass = $_POST['txtPass'];
$validar = 0;
$sql = "SELECT usuario, id_registro FROM usuarios WHERE usuario = '$usuario'";
$result = $conn->query($sql);

if ($result->num_rows == 0) {
   
  if ($validar == 0){
    $sql = "INSERT INTO usuarios (id_registro, usuario, nombres, edad, pass) VALUES (NULL, '$usuario' , '$nombres', '$edad', '$pass')";
    $result = $conn->query($sql);
    //echo "Error: " . $sql . "<br>" . $conn->error;
    $respuesta = Array ("respuesta" => 'Correcto');
    $_SESSION['page'] = '0';
  }else{
    $respuesta = Array ("respuesta" => 'Error');
  }
       
} else {
    $respuesta = Array ("respuesta" => 'Ya existe');
}
echo json_encode($respuesta);
$conn->close();

?>
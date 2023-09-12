<?php
session_start();
require('../conexionBD/conexionBD.php');
$usuario = $_POST['txtUsuario'];
$nombres = $_POST['txtNombres'];
$edad = $_POST['txtEdad'];
$pass = $_POST['txtPass'];
$txtId = $_POST['txtId'];
$validar = 0;
$sql = "SELECT usuario, id_registro FROM usuarios WHERE usuario = '$usuario'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   while($row = $result->fetch_assoc()) {
    if($row["id_registro"] != $txtId){
        $validar = 1;
    }
    }      
}

if ($validar == 0){
  $sql = "UPDATE usuarios SET usuario = '$usuario' , nombres = '$nombres', edad = '$edad', pass = '$pass' WHERE id_registro = '$txtId'";
  $result = $conn->query($sql);
  $respuesta = Array ("respuesta" => 'Correcto');
  $_SESSION['usuario_global'] = $usuario;
  $_SESSION['nombres'] = $nombres;
  $_SESSION['edad'] = $edad;
}else{
  $respuesta = Array ("respuesta" => 'Ya existe');
}

echo json_encode($respuesta);
$conn->close();

?>
<?php
session_start();
require('../conexionBD/conexionBD.php');
$usuario = $_POST['txtUsuario'];
$pass = $_POST['txtPass'];

$sql = "SELECT id_registro, usuario, nombres, edad, pass FROM usuarios WHERE usuario = '$usuario' and pass = '$pass'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    //"id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>"
  while($row = $result->fetch_assoc()) {
    $respuesta = Array ("respuesta" => 'Correcto');
    $_SESSION['usuario_global'] = $usuario;
    $_SESSION['page'] = '1';
    $_SESSION['idUsuario'] = $row["id_registro"];
    $_SESSION['nombres'] = $row["nombres"];
    $_SESSION['edad'] = $row["edad"];
  }
} else {
    $respuesta = Array ("respuesta" => 'Sin registros');
}
echo json_encode($respuesta);
$conn->close();

?>
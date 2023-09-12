<?php
session_start();
require('../conexionBD/conexionBD.php');
$id_api = $_POST['id_api'];
$dato_uno = $_POST['dato_uno'];
$dato_dos = $_POST['dato_dos'];
$checkActivar = $_POST['checkActivar'];
$validar = '';

$sql = "UPDATE datos_api SET dato_uno = '$dato_uno', dato_dos = '$dato_dos', estado = '$checkActivar' WHERE id_registro = '$id_api'";
$result = $conn->query($sql);
//echo "Error: " . $sql . "<br>" . $conn->error;
$respuesta = Array ("respuesta" => 'Correcto');
$_SESSION['page'] = '1' ;      

echo json_encode($respuesta);
$conn->close();

?>
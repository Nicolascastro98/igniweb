<?php
session_start();
require('../conexionBD/conexionBD.php');
$id = $_POST['id'];
$uno = $_POST['uno'];
$dos = $_POST['dos'];
$estado = $_POST['estado'];
$validar = 0;
$sql = "SELECT id_registro, dato_uno, dato_dos FROM datos_api WHERE id_registro = '$id'";
$result = $conn->query($sql);

if ($result->num_rows == 0) {
   
  if ($validar == 0){
    $sql = "INSERT INTO datos_api (id_registro, dato_uno, dato_dos , estado) VALUES ('$id' , '$uno', '$dos', '1')";
    $result = $conn->query($sql);
    //echo "Error: " . $sql . "<br>" . $conn->error;
    $respuesta = Array ("respuesta" => 'Correcto');
    $_SESSION['page'] = '3';
    $_SESSION['id'] = $id;
    $_SESSION['uno'] = $uno ;
    $_SESSION['dos'] = $dos ;
    $_SESSION['estado'] = $estado;
  }else{
    $respuesta = Array ("respuesta" => 'Error');
  }
       
} else {
    $sql = "UPDATE datos_api SET dato_uno = '$uno', dato_dos = '$dos', estado = '1' WHERE id_registro = '$id')";
    $result = $conn->query($sql);
    //echo "Error: " . $sql . "<br>" . $conn->error;
    
    $_SESSION['page'] = '3';
    $_SESSION['id'] = $id;
    $_SESSION['uno'] = $uno ;
    $_SESSION['dos'] = $dos ;
    $_SESSION['estado'] = $estado;
    $respuesta = Array ("respuesta" => 'Correcto');
}
echo json_encode($respuesta);
$conn->close();

?>
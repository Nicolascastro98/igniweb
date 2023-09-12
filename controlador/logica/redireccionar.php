<?php
session_start();
$_SESSION['page'] = $_POST['url'];
$respuesta = Array ("respuesta" => 'Correcto');
echo json_encode($respuesta);

?>
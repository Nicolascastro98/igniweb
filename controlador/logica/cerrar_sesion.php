<?php
session_start();
session_destroy();
$respuesta = Array ("respuesta" => 'Correcto');
echo json_encode($respuesta);

?>
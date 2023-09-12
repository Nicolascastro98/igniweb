<?php

session_start();
$page = (isset($_SESSION['page'])) ? $_SESSION['page'] : 'index';
switch ($page){

    case 0:

        //Pagina de login
        require('vista/login/index.php');

    break;

    case '1':
        
        //Pagina del usuario
        require('vista/menu/perfil.php');

    break;

    case '2':
        
        //Pagina del registro
        require('vista/registro/index.php');

    break;

    case '3':
        
        //Pagina del registro
        require('vista/menu/editar_api.php');

    break;

    default:
        //Pagina de login
        require('vista/login/index.php');

    break;

}

?>
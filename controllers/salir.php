<?php
    session_start();
//Convertimos las variables de sesión en un array vacio
    $_SESSION = array();


 //Al eleiminar la sesión elimnamos también la cookie de la sesión
//Lo siguiente no solo destruye las variables si no TODA LA SESIÓN
    if(ini_get('session.use_cookies')){
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000, //definimos el tiempo de vida de una cookie
        $params['path'], $params['domain'], $params['securre'], $params['httponly']);
    }
    //Destruimos todas las variables
    session_destroy();
    header('Location: ../');
    exit;
?>

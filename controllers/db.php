<?php

define('LOCALHOST', 'localhost');
define('USER', 'root');
define('PASSWORD', '');
define('DATABASE', 'relaciones');

try{
    $conn = mysqli_connect(
        LOCALHOST,
        USER,
        PASSWORD,
        DATABASE
    );
} catch (mysqli_sql_exception $e){
    die('Connected failed: '. $e->getMessage());
}

// $email = 'user2@gmail.com';
// $type = 'user';

//INSERTAR DATOS DIRECTAMENTE A LA BD, 

// $password = password_hash('admin', PASSWORD_DEFAULT);

//PASSORD_HASH PARA REALIZAR LA ENCRIPTACION  EN LA BASE DE DATOS DE UNA CONTRA MAS SEGURA

// $insert = "INSERT INTO USERS(type, email, password) VALUES('".$type."','".$email."', '".$password."')";
// $return = mysqli_query($conn, $insert);
// print_r(($return));
// mysqli_close($conn);

?>
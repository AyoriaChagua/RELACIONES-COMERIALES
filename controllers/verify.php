<?php
    session_start();
    require 'db.php';
    //La verificación se realizará por medio del email, si este existe se crearán las variables con las que interactuaremos
    if(isset($_SESSION['email']) && !empty($_SESSION['email'])){
        $email = $_SESSION['email'];
        $get_datos_usuario = $conn->query("SELECT * FROM users WHERE email = '$email'");
        $dato_usuario = mysqli_fetch_assoc($get_datos_usuario);
        $name = $dato_usuario["name"];
        $type = $dato_usuario["type"]; 
        $email = $dato_usuario["email"];
    }else{//Si no se a validado se enviará a la página de inicio
        header('Location: ../index.php');
        exit;
    }
?>

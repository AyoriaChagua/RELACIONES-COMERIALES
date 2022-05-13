<?php
    session_start();
    require 'db.php';
    if(isset($_SESSION['email']) && !empty($_SESSION['email'])){
        $email = $_SESSION['email'];
        $get_datos_usuario = $conn->query("SELECT * FROM users WHERE email = '$email'");
        $dato_usuario = mysqli_fetch_assoc($get_datos_usuario);
        $name = $dato_usuario["name"];
        $type = $dato_usuario["type"]; 
        $email = $dato_usuario["email"];
    }else{
        header('Location: ../index.php');
        exit;
    }
?>
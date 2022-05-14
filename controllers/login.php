<?php 
    if(isset($_POST['email']) && isset($_POST['password'])){
        //Verificamos si el correo existe
        if(!empty(trim($_POST['email'])) && !empty(trim($_POST['password']))){
            
            $email = mysqli_real_escape_string($conn, htmlspecialchars(trim($_POST['email'])));
            $query = $conn->query("SELECT type, email, password FROM users WHERE  email = '$email'");
            
            if(mysqli_num_rows($query) > 0){
                
                $row = mysqli_fetch_assoc($query);
                $conn_pass = $row["password"];
                $verify_pass = password_verify($_POST['password'], $conn_pass);
                
                //Verificamos si la contraseña (encritada en la db ) es correcta
                
                if($verify_pass === TRUE){
                    session_regenerate_id(true);
                    $_SESSION['email'] = $email;
                    if ($row['type'] == 'admin'){ //Si el tipo de usuario es administrador nos redirecciona a la vista de administrador de usuarios
                        header('Location: ../views/adminUsers.php');
                    }else{                        //Si no simplemente a la vista de relaciones para ejecuttar las acciones de usuario
                        header('Location: ../views/relaciones.php');
                    }
                    exit;
                    
                //NO ES UNA BUENA PRACTICA PARA NADA INDICAR LOS DATOS INCORRECTOS PERO SIRVE EN ESTA OCACIÓN
                }else{
                    $error_message = "Contraseña invalida";
                }
            }else{
                $error_message = "No se encontró la cuenta";
            }
        }else{
            $error_message = "Datos vacios";
        }
    }
?>

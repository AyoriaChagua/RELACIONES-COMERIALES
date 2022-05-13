<?php 
    if(isset($_POST['email']) && isset($_POST['password'])){
        if(!empty(trim($_POST['email'])) && !empty(trim($_POST['password']))){
            $email = mysqli_real_escape_string($conn, htmlspecialchars(trim($_POST['email'])));
            $query = $conn->query("SELECT type, email, password FROM users WHERE  email = '$email'");
            if(mysqli_num_rows($query) > 0){
                $row = mysqli_fetch_assoc($query);
                $conn_pass = $row["password"];
                $verify_pass = password_verify($_POST['password'], $conn_pass);
                if($verify_pass === TRUE){
                    session_regenerate_id(true);
                    $_SESSION['email'] = $email;
                    if ($row['type'] == 'admin'){
                        header('Location: ../views/adminUsers.php');
                    }else{
                        header('Location: ../views/relaciones.php');
                    }
                    exit;
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
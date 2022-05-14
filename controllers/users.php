<?php
/* esta conexion es de mi base de datos
para que funcione hace falta hacer un include de db.php y asi traer la conexion principal
la tabla que estoy usando es 
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `type` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci
*/


if(isset($_POST['save'])){
    $type = $conn->real_escape_string($_POST['type']);
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']);
  
    //GUARDAMOS EL PASSWORD EN LA Base de datos,  PERO ANTES LO ENCRIPTAMOS CON LO SIGUIENTE, PARA QUE YA NO SEA HACKEABLE :v
  
    $hashPass = password_hash($password, PASSWORD_DEFAULT);
    $SQL = $conn->query("INSERT INTO users(type, name, email, password) VALUES ('$type','$name','$email', '$hashPass')");

    if(!$SQL){
        echo $conn->error;   
        header('Location: /');
    }
}

// <url ?del>
if(isset($_GET['del'])){
    $SQL = $conn->query("DELETE FROM users WHERE id=".$_GET['del']);
}

// <url ?edit>
if(isset($_GET['edit'])){
    $SQL = $conn->query("SELECT * FROM users WHERE id=".$_GET['edit']);
    $getROW = $SQL->fetch_array();
}

// <button name = update> 
if(isset($_POST['update'])){
    $SQL = $conn->query("UPDATE users SET type='".$_POST['type']."', name='".$_POST['name']."', email='".$_POST['email']."' WHERE id=".$_GET['edit']);

}

?>

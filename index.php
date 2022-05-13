<?php 
    session_start();
    require('controllers/db.php');
    require('controllers/login.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style/sytle.css">
    <title>CRUD</title>
  </head>
  <body style="background-image: url('../img/fondo.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6">
                <h2>
                Encuentra las relaciones comerciales y diplomáticas de el Perú con otros países y realice operaciones que le ayuden a administrar la información
                </h2>
            </div>
            <div class="col-12 col-sm-12 col-md-6">
            <div class="card text-center ">
                <div class="card-header">
                    CRUD
                </div>
                <div class="card-body">
                    <h5 class="card-title">
                    <?php if(!empty($message)): ?>
                        <p><?php $message ?></p>
                    <?php endif;?>
                    Ingrese sus credenciales por favor
                    </h5>
                    <div class="mb-3">
                       <form action="/index.php" method="POST" >
                       <label for=""></label>
                        <input type="email" class="form-control" placeholder="Correo Electrónico" name="email">
                        <label for=""></label>
                        <input type="password" class="form-control"  placeholder="Contraseña" name="password">
                        <label for=""></label>
                        <div class="d-grid gap-2">
                        <input class="btn btn-dark" type="submit" value="ENTRAR">
                        </div>
                       </form>
                    </div>
                </div>
                <div class="card-footer text-muted">
                    <?php
                        if(isset($error_message)){
                            echo '<p style="color:red;">'.$error_message.'</p>';
                        }else{
                            echo 'Si no tiene cuenta solicite que el administrador le cree una';
                        }
                    ?>
                </div>
            </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
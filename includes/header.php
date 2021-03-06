<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../style/sytle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>CRUD</title>
  </head>
  <body style="background-image: url('../img/fondo_user.png');">
  <div class="header">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">CRUD RELACIONES COMERCIALES</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        
        <?php 
          if($type === 'user') { //SI EN CASO ESTEN EN MODO USUARIO SE OMSTRARÁN LAS SIGUIENTES OPCIONES PARA NAVEGAR EN LAS PÁGINAS
        ?>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../views/relaciones.php">Relaciones</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../views/productos.php">Productos</a>
        </li>
        <?php } ?>
      </ul>
    </div>
  </div>
  <form action="../controllers/salir.php" class="d-flex m-1">
  <button type="submit" class="btn btn-danger"  onclick="return confirm('Seguro que quiere cerrar sesión?')" >
    <img src="../img/box-arrow-left.svg" alt="">
    <b>Logout</b>
  </button>
  </form>
</nav>
</div>



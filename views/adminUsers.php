<?php 
    require '../controllers/verify.php';
    include('../includes/header.php');
?>

<div class="container">
<br>
<h1>Administración de cuentas de usuarios</h1>
<br>
<h3 class="h3">... hola de nuevo <?php echo $name; ?>!</h3>
<br>
<?php 
include('../controllers/users.php');
?>

    <div class="row">
        <div class="col-8">
            <table width="100%" cellpadding="15" align="center" class="table table-dark table-hover" >
            <thead class="bg-secondary bg-gradient">
                <th>Id</th>
                <th>Tipo de usuario</th>
                <th>Nombre</th>
                <th>Correo electrónico</th>
                <th>Operaciones</th>
            </thead>
            <?php
            $res = $conn->query("select * from users");
            while($row=$res->fetch_array()){ 
            ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['type']; ?></td>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['email']; ?></td>
                <td> 
                    <div class="input-group">
                    <button class="btn btn-outline-secondary" type="button"><a href="?edit=<?php echo $row['id'];?>" onclick="return confirm('confirmar edicion')">editar</a></button>
                    <button class="btn btn-outline-secondary" type="button"><a href="?del=<?php echo $row['id'];?>" onclick="return confirm('confirmar eliminacion')">borrar</a></button>
                    </div>
                    
                    
                </td>

            </tr>
            <?php
            }
            ?>
        </table>
        </div>
        <div class="col-3">
        <div class="card card-agregar-usuario">
        <div class="card-header">
            <h6>Su correo de admin es: <?php echo $email?></h6>
        </div>
        <div class="card-body">
        <form method="post">
            
            <table width="%70" cellpadding="15" class="table_form">
                <?php if(isset($_GET['save']) || isset($_GET['edit'])) { ?>
                <tr>
                    <td>
                   
                    <select class="form-select" aria-label="Default select example" name="type" placeholder="Type" value="<?php 
                    if(isset($_GET['edit'])){
                        echo $getROW['type'];
                    }
                    ?>" required>
                        <option value="<?php 
                        if(isset($_GET['edit'])){
                            echo $getROW['type'];
                        }?>">Seleccione el tipo de usuario</option>
                        <option value="admin">Administrador</option>
                        <option value="user">Usuario común</option>
                    </select>
                    </td>
                </tr>
                <tr>
                    <td>
                    <input type="text" class="input-group" name="name" placeholder="Name" value="<?php 
                    if(isset($_GET['edit'])){
                        echo $getROW['name'];
                    }
                    ?>" required minlength="3">
                    </td>
                </tr>
                <tr>
                    <td>
                    <input type="email" class="input-group" name="email" placeholder="Email" value="<?php 
                    if(isset($_GET['edit'])){
                        echo $getROW['email'];
                    }
                    ?>" required>
                    </td>
                </tr>
            <?php if(isset($_GET['save'])){ ?>
                <tr>
                    <td>
                        <input type="password" class="input-group" name="password" placeholder="password" required minlength="4"> 
                    </td>
                </tr>
            <?php }  ?>
                <?php } ?>
                <tr>
                    <td>
                        <?php if (isset($_GET['edit'])){ ?>
                            <button type="submit" name="update">Editar</button>
                            <a href="adminUsers.php">Cancelar</a>
                         <?php } else { ?>
                            <?php if(isset($_GET['save'])){?>
                                <button type="submit" name="save" class="btn btn-dark" >Agregar</button>
                                <button class="btn btn-danger">
                                <a href="adminUsers.php" type="submit" name="cancelar" id="agregar_u">Cancelar</a>
                                </button>
                            <?php } else { ?>
                                <h5>Deseas <button class="btn-agregar"><a href="?save" id="agregar_u">Agregar usuario</a></button> ?</h5>
                            <?php } ?>
                        <?php } ?>
                    </td>
                </tr>
            </table>
        </form>
        </div>
        </div>
        
    
    </div>
   

</div>
<?php include('../includes/footer.php');?>
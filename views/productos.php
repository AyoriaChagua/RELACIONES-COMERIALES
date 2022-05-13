<?php 
    require '../controllers/verify.php';
    include('../includes/header.php');
    include '../controllers/crud.php';
?>
<br>
		<div class="container">
        <section class="row">
		<!-- ///////////// TABLA 1 ///////////////////-->
		    <div class="col-md-4">
				<br><h3 class="text-center text-center-p">Productos Exportados</h3>
                <br>
				<table class="table">
					<thead class="bg-secondary bg-gradient thead-p">
						<th>id</th>
						<th>Pais</th>
						<th>Producto</th>
				    </thead>
				  <?php
				  while($registroExporta  = $queryExportar->fetch_array( MYSQLI_BOTH)) 
				  {
				  echo '<tr style="background-color:#FFF;">
				    	<td>'.$registroExporta['id_exportado'].'</td>
				    	<td>'.$registroExporta['pais_exportado'].'</td>
				    	<td>'.$registroExporta['producto_exportado'].'</td>
				    </tr>';
				   } 
				  ?>
				</table>
			</div>
			<!-- ///////////// TABLA 2 ///////////////////-->
			<div class="col-md-4">
				<br><h3 class="text-center text-center-p">Productos Importados</h3>
                <br>
				<table class="table col-md-6">
					<thead class="bg-secondary bg-gradient thead-p">
						<th>id</th>
						<th>Pais</th>
						<th>Producto</th>
				    </thead >
				  <?php
				  while($registroImporta  = $queryImportar->fetch_array( MYSQLI_BOTH)) 
				  {
				  echo '<tr style="background-color:#FFF;">
				    	<td>'.$registroImporta['id_importado'].'</td>
				    	<td>'.$registroImporta['pais_importado'].'</td>
				    	<td>'.$registroImporta['producto_importado'].'</td>
				    </tr>';
				   }
				  ?>
				</table>
			</div>
			<div class="col-md-4">
			<div class="card">
                    <div class="card-header">
                    <h3 style="padding: .5%;">Exporte o importe un nuevo producto <?php echo $name;?>
                    </h3>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <form method="post"style="padding-bottom: 1%;">
					
                    <div class="form-check m-3">
                        <input class="form-check-input" type="radio" name="exportar" >
                        <label class="form-check-label" for="flexRadioDefault1">
                            Exportar
                        </label>
                        </div>
                        <div class="form-check m-3">
                        <input class="form-check-input" type="radio" name="importar" >
                        <label class="form-check-label" for="flexRadioDefault2">
                            Importar
                        </label>
                    </div>
					<div class="input-group">
                    <input name="pais" type="text" placeholder="País" class="form-control  m-3" required>
                    </div>
                    <div class="input-group">
                    <input name="producto" type="text" placeholder="Producto" class="form-control  m-3" required>
					
                    </div>
                    <div class="input-group">
					<input name="insertar" type="submit" value="Insertar Valores" class="btn btn-dark m-3" >
                    </div>
					
			    	</form>
                    </div>
                    </div>
			</div>
		</section>
        
        </div>
<?php include('../includes/footer.php');?>
<?php

 ///////////////////CONSULTA DE AMBAS TABLAS///////////////////////
$queryExportar= $conn->query("SELECT * FROM exportados order by id_exportado");
$queryImportar=$conn->query("SELECT * FROM importados order by id_importado");
 
if(isset($_POST['insertar']))// SI SE PRESIONA EL BOTÓN INSERTAR OCURRE LO SIGUIENTE:
{
    $pais = $conn->real_escape_string($_POST['pais']);
    $producto = $conn->real_escape_string($_POST['producto']);
    if(isset($_POST['exportar'])){//SI SE SELECCIONÓ LA OPCIÓN DE EXPORTAR SE INSERTARÁ EN LA TABLA DE PRODS EXPORTADOS
        $SQL = $conn->query("INSERT INTO exportados( pais_exportado, producto_exportado)
            VALUES('$pais','$producto')");
    }else if (isset($_POST['importar'])){//SI NO, SE INSERTARÁ EN LA  TABLA DE PRODS IMPORTADOS
        $SQL = $conn->query("INSERT INTO importados( pais_importado, producto_importado)
            VALUES('$pais','$producto')");
    }

    if(!$SQL){
         echo $conn->error;
    }
    header('Location: ../views/productos.php');
}


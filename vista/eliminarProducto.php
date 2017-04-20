<?php
	require("modelo/conexion.php");
	$id=$_GET['id'];
	
	$query="DELETE FROM t_productos WHERE id_producto='$id'";
	$resultado=$mysqli->query($query);
    
/*
        $querySelect="SELECT imagen from t_productos WHERE id_producto = '$id' ";
        $resultadoSelect = query($querySelect);
                    echo "<script type='text/javascript'>alert('".$querySelect."');</script>";
                    if($querySelect){
                        if($row = $resultadoSelect->fetch_assoc()){
                        		$nombreImagen = $row["imagen"];
								$origen="imagenesProductos/".$nombreImagen;
								echo "<script type='text/javascript'>alert('Aqui');</script>";
							if(file_exists($origen)){
								echo "<script type='text/javascript'>alert('Aca');</script>";
								unlink($origen);
								header("Location:?vista=productos&estado=1");
							}
                        }
                    }
*/
?>
	
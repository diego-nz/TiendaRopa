<?php
	require("modelo/conexion.php");
	$id=$_GET['id'];
	
	$query="DELETE FROM t_productos WHERE id_producto='$id'";
	$resultado=$mysqli->query($query);
    
    header("Location:?vista=productos");
?>
	
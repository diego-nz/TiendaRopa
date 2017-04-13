<?php
	require("modelo/conexion.php");
	$id=$_GET['id'];
	
	$query="DELETE FROM t_usuarios WHERE id_usuario='$id'";
	$resultado=$mysqli->query($query);
    
    header("Location:?vista=usuarios");
?>

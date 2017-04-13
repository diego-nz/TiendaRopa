<?php
	require_once("modelo/conexion.php");
	$id=$_GET['id'];
	$query="DELETE FROM t_categorias WHERE id_categoria='$id'";
	$resultado=$mysqli->query($query);

    header("Location:?vista=categoria");
?>

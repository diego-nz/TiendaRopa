<?php
	require("modelo/conexion.php");
	$id=$_GET['id'];
	
	$query="DELETE FROM t_proveedores WHERE id_proveedor='$id'";
	$resultado=$mysqli->query($query);
    
    header("Location:?vista=proveedores&estado=1");
?>
	<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="assets/css/estilosPrincipales.css">
    <link rel="stylesheet" href="assets/css/estilosMovil.css">
    <link rel="stylesheet" href="assets/css/estilosLogin.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
		
			<title>Eliminar un Proveedor</title>
		</head>
		<body>
			<center>
				<?php
				if($resultado>0){
					?>
					<h1>Proveedor eliminado</h1>
				<?php }else{ ?>
				<h1>Error al eliminar proveedores</h1>
				<?php }?>
				
			</center>
		</body>
	</html>
	
<?php
	require_once("../modelo/conexion.php");
	$id=$_GET['id'];

	$query="DELETE FROM t_categorias WHERE id_categoria='$id'";
	$resultado=$mysqli->query($query);

    header("Location:categoria.php");
?>
	<html>
		<head>
			<title>Eliminar un usuario</title>
		</head>
		<body>
			<center>
				<?php
				if($resultado>0){
					?>
					<h1>Usuario eliminado</h1>
				<?php }else{ ?>
				<h1>Error al eliminar Usuario</h1>
				<?php }?>

			</center>
		</body>
	</html>

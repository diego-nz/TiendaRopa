<?php
	require_once("../modelo/conexion.php");
	$query="SELECT id_categoria,categoria FROM t_categorias";
	$resultado=$mysqli ->query($query);
?>

<html>
	<head>
	 <?php include './menu.php'; ?>
		<title>Categorias</title>
		<link href="css/style.css" rel="stylesheet" type="text/css">
	</head>
	<body>

	<center>

	<a href="nueva_categoria.php">
	<img src="../assets/agregar.png" >
	</a>
	 </center>

		<center><h1>Agregar una nueva categoria</h1></center>



	<center>
		<table>
			<thead>
				<tr>
					<td >
						<b>id_Categoria</b>
					</td>
					<td >
						<b>Categoria</b>
					</td>

					<td></td>
					<td> </td>

				</tr>

			</thead>
			<tbody >
					<?php while($row=$resultado->fetch_assoc()){ ?>
					<tr>
					    <td><?php echo $row['id_categoria'];?></td>
						<td><?php echo $row['categoria'];?></td>

						<td>
							<a href="modificar_Categoria.php?id=<?php echo $row["id_categoria"];?>"><img src="edit.png"></a>
						</td>
						<td>
							<a href="eliminar_Categoria.php?id=<?php echo $row["id_categoria"];?>"><img src="eliminar.png"></a>
						</td>
					</tr>
					<?php } ?>
				</tbody>
		</table>
		</center>
   </body>
</html>

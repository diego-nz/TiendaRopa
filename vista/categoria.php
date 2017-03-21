<?php
	require_once("modelo/conexion.php");
	$query="SELECT id_categoria,categoria FROM t_categorias";
	$resultado=$mysqli ->query($query);
?>

<html>
	<head>

		<title>Categorias</title>
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/estilosPrincipales.css">
    <link rel="stylesheet" href="assets/css/estilosMovil.css">
	</head>
	<header>
	    <?php require_once("vista/estaticas/header.html"); ?>
	</header>
	<body>
    <?php require_once("vista/menuSesion.php");?>
	<center>

	<a href="?vista=nueva_categoria">
	<img src="assets/agregar.png" >
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
							<a href="?vista=modificar_Categoria&id=<?php echo $row["id_categoria"];?>"><img src="assets/edit.png"></a>
						</td>
						<td>
							<a href="?vista=eliminar_Categoria&id=<?php echo $row["id_categoria"];?>"><img src="assets/eliminar.png"></a>
						</td>
					</tr>
					<?php } ?>
				</tbody>
		</table>
		</center>
		<footer>
        <?php require_once("vista/estaticas/footer.html"); ?>
    </footer>
   </body>
</html>

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
	    <?php require_once("vista/estaticas/header.php"); ?>
	</header>
	<body>

	<div class="imagenAgregar">		
		<a href="?vista=nueva_categoria">
			<img src="assets/agregar.png" class="">
		</a>
	</div>

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
							<div class="imagenEditarEliminar">
								<a href="?vista=modificar_Categoria&id=<?php echo $row["id_categoria"];?>"><img src="assets/edit.png"></a>
							</div>
						</td>
						<td>
							<div class="imagenEditarEliminar">
								<a href="?vista=eliminar_Categoria&id=<?php echo $row["id_categoria"];?>"><img src="assets/eliminar.png"></a>
							</div>
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

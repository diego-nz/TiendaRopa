<?php
	require_once("../modelo/conexion.php");
	$query="SELECT id_usuario,usuario,pass,nivel FROM t_usuarios";
	$resultado=$mysqli ->query($query);
?>

<html>
	<head>
	<?php include './menu.php'; ?>

		<title>Usuarios</title>

		<link href="css/style.css" rel="stylesheet" type="text/css">
		<script type="text/javascript" src="js/jquery.js"></script>
      <script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
      <link type="text/css" href="js/jquery.dataTables.css" rel="stylesheet"/>

		<script>
         $(document).ready(function() {
            $('#registros').dataTable();
			 DataView:true;
         })

      </script>


	</head>
	<body>


	<center>
	<a href="nuevo_usuario.php">
	<img src="../assets/agregar.png" >
	</a>
	 </center>

		<center><h1>Registro</h1></center>



	<center>
		<table id="registros">
			<thead>
				<tr>
					<td >
						<b>id_Usuario</b>
					</td>
					<td >
						<b>Usuario</b>
					</td>
					<td>
						<b>Pass</b>
					</td>
					<td>
						<b>Nivel</b>
					</td>
					<td></td>
					<td> </td>

				</tr>

			</thead>
			<tbody >
					<?php while($row=$resultado->fetch_assoc()){ ?>
					<tr>
					    <td><?php echo $row['id_usuario'];?></td>
						<td><?php echo $row['usuario'];?></td>
						<td><?php echo $row['pass'];?></td>
						<td><?php echo $row['nivel'];?></td>
						<td>
							<a href="modificar.php?id=<?php echo $row["id_usuario"];?>"><img src="../assets/edit.png"></a>
						</td>
						<td>
							<a href="eliminar.php?id=<?php echo $row["id_usuario"];?>"><img src="../assets/eliminar.png"></a>
						</td>
					</tr>
					<?php } ?>
				</tbody>
		</table>
		</center>
   </body>
</html>

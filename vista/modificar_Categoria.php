<?php
	require_once("modelo/conexion.php");
$id=$_GET['id'];

$query="SELECT categoria FROM t_categorias WHERE id_categoria ='$id'";
$resultado= $mysqli->query($query);

$row=$resultado->fetch_assoc();

if(isset($_POST["txtCategoria"])){
    $id=$_POST['id'];
    $categoria=$_POST['txtCategoria'];


$query="UPDATE t_categorias SET categoria='$categoria' WHERE id_categoria='$id'";

$resultado=$mysqli->query($query);
    header("Location:?vista=categoria");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="assets/css/estilosPrincipales.css">
    <link rel="stylesheet" href="assets/css/estilosMovil.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <title>Categorias</title>
</head>
<body>
    <header>
      <?php require_once("vista/estaticas/header.php"); ?>
  </header>

		<center><h1>Modificar Categoria</h1></center>
		<form name="cambios_Categoria" method="POST" action="#">
		<br>
			<center>
			<table width=50%>
				<tr>
					<input type="hidden" name="id" value="<?php echo $id; ?>">
					<td width="20"><b>Categoria: </b></td>
					<td width="30"><input type="text" name="txtCategoria" size="25" value="<?php echo $row['categoria']; ?>"/></td>
				</tr>

				<tr>
					<td colspan="2"><center><input type="submit" name="Guardar" value="Guardar"/></center></td>
				</tr>
			</table>
			</center>
		</form>
	<footer>
	    <?php require_once("vista/estaticas/footer.html"); ?>
	</footer>
</body>
</html>


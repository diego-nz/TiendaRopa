<?php

if(isset($_POST["txtNCategoria"])){
    require_once("modelo/conexion.php");
    $categoria=$_POST['txtNCategoria'];
    $query="INSERT INTO t_categorias(categoria) VALUES ('$categoria')";
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
    <title>Nueva categoria</title>
</head>
<body>
    <header>
      <?php require_once("vista/estaticas/header.html"); ?>
  </header>
   <?php require_once("vista/menuSesion.php"); ?>
	<center>
		<h1>Nueva Categoria</h1>
		<form name="nueva_categoria" method="POST" action="#">
		<table width="50%">
			<tr>
				<td width="20"><b>Categoria</b></td>
				<td width="30"><input type=text name=txtNCategoria size="25"/></td>
			</tr>
			<tr>
				<td colspan="2"><center><input type=submit name="enviar" value="Registrar"/></center></td>
			</tr>
		</table>

		</form>
	</center>
	<footer>
	    <?php require_once("vista/estaticas/footer.html"); ?>
	</footer>
</body>
</html>

<?php

if(isset($_POST["txtNCategoria"])){
    require_once("../modelo/conexion.php");
    $categoria=$_POST['txtNCategoria'];
    $query="INSERT INTO t_categorias(categoria) VALUES ('$categoria')";
    $resultado=$mysqli->query($query);

header("Location:categoria.php");

}


?>


<html>
<head>
	<title>Agregar un nueva categoria</title>
</head>
<body>
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
</body>

</html>

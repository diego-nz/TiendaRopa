<?php

$mysqli=new mysqli("localhost","root","root","web");
	if(mysqli_connect_errno()){
		echo 'Conexión fallida ',mysqli_connect_error();
		exit();
	}



?>

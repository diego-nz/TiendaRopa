<?php

$mysqli=new mysqli("localhost","root","","web");
	if(mysqli_connect_errno()){
		echo 'Conexión fallida ',mysqli_connect_error();
		exit();
	}



?>

<?php

//session_start();
if(!empty($_SESSION["carrito"])){
	$carro  = $_SESSION["carrito"];
	if(count($carro)==1){ unset($_SESSION["carrito"]); }
	else{
		$newcart = array();
		foreach($carro as $c){
			if($c["id"]!=$_GET["id"]){
				$newcart[] = $c;
			}
		}
		$_SESSION["carrito"] = $newcart;
	}
}
//print "<script>window.location='?view=inicio';</script>";
header("Location: ?vista=mostrarCarrito&estado=5")

?>
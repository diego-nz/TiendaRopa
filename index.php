<?php

    if(isset($_GET['vista'])){
    	$vista=$_GET["vista"];

        if(file_exists('vista/'.strtolower($_GET['vista']).'.php')){
        	#Si la vista es pública.
        	if($vista == "inicio" || $vista == "iniciarSesion" || $vista == "registro" || $vista == "producto"){
        		#incluye la vista
        		include('vista/'.strtolower($_GET['vista']).'.php');	
        	
        	}else{#Si no es publica entonces es privada.
        		#Debe existir una sesion.
        		session_start();
        		if(isset($_SESSION["nombreUsuario"])){
        			#Si existe la sesión incluyela.
        			include('vista/'.strtolower($_GET['vista']).'.php');
        		}else{
        			include('vista/estaticas/error.php');
        		} 
        	}
        }else{
            include('vista/estaticas/error.php');
        }
    }else{
        include ('vista/inicio.php');
    }

?>

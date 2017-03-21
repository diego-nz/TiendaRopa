<?php
    if(isset($_GET['vista'])){
        if(file_exists('vista/'.strtolower($_GET['vista']).'.php')){
                include('vista/'.strtolower($_GET['vista']).'.php');
        }else{
            include('vista/estaticas/error.php');
        }
    }else{
        include ('vista/inicio.php');
    }

?>

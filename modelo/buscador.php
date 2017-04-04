<?php

require_once("../modelo/conexion.php");

$prod = $_POST["producto"];

$mysqli -> real_query("SELECT id_producto,producto,p_venta,imagen FROM t_productos WHERE producto like '%".$prod."%' LIMIT 10");
$query = $mysqli -> store_result();
if($query){

    if($prod == "" ){
        echo 0;

    }else if(mysqli_num_rows($query) < 1 ){
        echo 1;

    }else if($prod != "" and mysqli_num_rows($query)){
        while($row = $query -> fetch_assoc()){
                echo '  <span id="productoBuscador">'; echo $row["producto"]; echo '</span>
                        <span id="precioBuscador">'; echo $row["p_venta"]; echo '</span>
                        <span class="botonCompra"><a href="#" id="">comprar</a></span>';
        }
    }

    }




?>

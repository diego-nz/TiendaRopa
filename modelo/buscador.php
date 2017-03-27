<?php

require_once("../modelo/conexion.php");

$prod = $_POST["producto"];

$mysqli -> real_query("SELECT id_producto,producto,p_venta,imagen FROM t_productos WHERE producto like '%".$prod."%' LIMIT 10");
$query = $mysqli -> store_result();
if($query){
    if(mysqli_num_rows($query)<=0){
         echo 0;
    }else{
        while($row = $query -> fetch_assoc()){
            echo '  <div id="buscadorProductos">
                        <span id="imagenBuscador"><img src="imagenesProductos/'; echo $row["imagen"]; echo '" alt="" /></span>
                        <span id="productoBuscador">'; echo $row["producto"]; echo '</span>
                        <span id="precioBuscador">'; echo $row["p_venta"]; echo '</span>
                        <span id="botonCompra"><a href="#" class="btn" id="">comprar</a></span>
                    </div>';
        }
    }
}



?>

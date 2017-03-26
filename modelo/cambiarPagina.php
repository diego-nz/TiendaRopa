<?php
require_once("../modelo/conexion.php");
//agarrar el json que viene por post
$inicio=$_POST["pagina"];
$mysqli -> real_query("SELECT producto,p_venta,imagen from t_productos limit $inicio, 10 ");
$query = $mysqli -> store_result() or die(mysqli_error($mysqli));

    if($query){
        while($row=$query -> fetch_assoc()){
            echo '<div class="imagenProducto">
                <a href="?vista=producto&pro="><img src="imagenesProductos/'; echo $row["imagen"]; echo ' " alt="" /></a>
                <div class="precioProducto">';
            echo    $row["p_venta"];
            echo '    </div>
                <div class="nombreProducto">';
            echo        $row["producto"];
            echo '   </div>

                <a href="#" class="centrado btn">comprar</a>
            </div>';
        }
    }else{
        echo 0;
    }
?>

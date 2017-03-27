<?php
require_once("../modelo/conexion.php");

    $mysqli->real_query("SELECT id_producto,producto,p_venta,imagen from t_productos limit 0,10");
                $query=$mysqli->store_result();
                if($query){
                    while($row = $query->fetch_assoc()){
                          echo '<div class="imagenProducto">

                                <a href="?vista=producto&pro=" '; echo $row['id_producto']; echo '><img src="imagenesProductos/'; echo $row['imagen']; echo '" alt="" /></a>
                                <div class="precioProducto">';
                                    echo $row["p_venta"];
                                echo '</div>
                                <div class="nombreProducto">';
                                    echo $row["producto"];
                                echo '</div>
                                <a href="#" class="centrado btn">comprar</a>
                            </div>';
                            }
                        }
?>

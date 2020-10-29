<?php

    $conexion = new mysqli('localhost','root','root','listaproductos');
    if($conexion->connect_error){
       die("Error en Conexión:". $conexion->connect_error);
}

?>
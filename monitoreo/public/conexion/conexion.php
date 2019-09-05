<?php
$conexion = mysqli_connect("localhost", "pancaracas", "na4x0069", "pancaracas");
mysqli_query($conexion,"SET NAMES 'utf8'");
/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

?>
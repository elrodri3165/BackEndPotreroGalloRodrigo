<?php

$conexion = mysqli_connect("localhost", "root", "", "tienda_ropa");

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}
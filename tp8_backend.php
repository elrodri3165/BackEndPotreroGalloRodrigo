<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea BackEnd Potrero Digital Gallo Rodrigo Nicolas</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <div class="container">

        <p>Alumno: Gallo Rodrigo Nicolas</p>
        <p>Dni: 31143647</p>

        <h1>Tareas</h1>



        <?php require 'nav.php';?>

        <h2>Base de datos con los nuevos registros</h2>

        <a href="tienda_ropa2.sql">Base de datos nueva</a>
        <br>

        <?php

$conexion = mysqli_connect("localhost", "root", "", "tienda_ropa");

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}


echo '1. ', '<br>';

$sql = "SELECT * FROM ropa";

$resultado = mysqli_query($conexion, $sql);

var_dump($resultado);
//var_dump($conexion);


?>


    </div>
</body>
</html>
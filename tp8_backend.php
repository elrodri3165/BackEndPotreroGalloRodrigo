<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea BackEnd Potrero Digital Gallo Rodrigo Nicolas</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
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
        ?>
        <span class="badge rounded-pill text-bg-success"><h3>A.</h3></span>
        <p>Listar todos los registros</p>
        
        <table class="table table-success table-striped">
            <?php
        $sql = "SELECT * FROM ropa";

        $resultado = mysqli_query($conexion, $sql);

        while ($fila = mysqli_fetch_array($resultado)){ ?>
            <tr>
                <td><?php echo $fila['tipo_de_prenda'];?> </td>
                <td><?php echo $fila['marca'];?> </td>
                <td><?php echo $fila['talle'];?> </td>
                <td><?php echo $fila['precio'];?> </td>
            </tr>
            <?php } ?>
        </table>
        
        <hr class="dropdown-divider">
        
        <span class="badge rounded-pill text-bg-primary"><h3>B.</h3></span>
        <p>Listar todos los registros cuyo tipo de prenda sea ‘buzo’</p>
        
        <table class="table table-primary table-striped">
            <?php
        $sql = "SELECT * FROM ropa WHERE tipo_de_prenda = 'buzo'";

        $resultado = mysqli_query($conexion, $sql);

        while ($fila = mysqli_fetch_array($resultado)){ ?>
            <tr>
                <td><?php echo $fila['tipo_de_prenda'];?> </td>
                <td><?php echo $fila['marca'];?> </td>
                <td><?php echo $fila['talle'];?> </td>
                <td><?php echo $fila['precio'];?> </td>
            </tr>
            <?php } ?>
        </table>
        
        <hr class="dropdown-divider">
        
        <span class="badge rounded-pill text-bg-info"><h3>A.</h3></span>
        <p>Listar todos los registros cuya marca sea ‘nike’</p>
        
        <table class="table table-info table-striped">
            <?php
        $sql = "SELECT * FROM ropa WHERE marca = 'nike'";

        $resultado = mysqli_query($conexion, $sql);

        while ($fila = mysqli_fetch_array($resultado)){ ?>
            <tr>
                <td><?php echo $fila['tipo_de_prenda'];?> </td>
                <td><?php echo $fila['marca'];?> </td>
                <td><?php echo $fila['talle'];?> </td>
                <td><?php echo $fila['precio'];?> </td>
            </tr>
            <?php } ?>
        </table>

        <hr class="dropdown-divider">
        
        <span class="badge rounded-pill text-bg-danger"><h3>A.</h3></span>
        <p>Listar todos los registros cuyo precio sea mayor a ‘500’</p>
        
        <table class="table table-danger table-striped">
            <?php
        $sql = "SELECT * FROM ropa WHERE precio < 500";

        $resultado = mysqli_query($conexion, $sql);

        while ($fila = mysqli_fetch_array($resultado)){ ?>
            <tr>
                <td><?php echo $fila['tipo_de_prenda'];?> </td>
                <td><?php echo $fila['marca'];?> </td>
                <td><?php echo $fila['talle'];?> </td>
                <td><?php echo $fila['precio'];?> </td>
            </tr>
            <?php } ?>
        </table>



    </div>
</body>

</html>

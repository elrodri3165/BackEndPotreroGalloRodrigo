<!DOCTYPE html>
<html lang="es">

<?php require 'templates/head.php';?>

<body>
    <div class="container">

        
        <?php require 'templates/nav.php';?>

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

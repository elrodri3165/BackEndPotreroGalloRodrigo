<?php

if (isset ($_POST['id_ropa'], $_POST['marca'], $_POST['tipo_prenda'], $_POST['precio'], $_POST['talle'])){
    
    $marca = $_POST['marca'];
    $tipo_prenda = $_POST['tipo_prenda'];
    $precio = $_POST['precio'];
    $talle = $_POST['talle'];
    $id_ropa = $_POST['id_ropa'];
    
    if ($_POST['id_ropa'] != null){
        $sql = "UPDATE ropa SET tipo_de_prenda = '$tipo_prenda', marca = '$marca', talle = '$talle', precio = '$precio' WHERE id_ropa = $id_ropa ";
        echo $sql;
    }else{
        $sql = "INSERT INTO ropa (tipo_de_prenda, marca, talle, precio) VALUES ('$tipo_prenda', '$marca', '$talle', '$precio')";
    }
    
    require '../config/conexion.php';

    
    $resultado = mysqli_query($conexion, $sql);
    
    if ($resultado != null){
        header ('Location: ../tp9_crud.php?resultado=ok');
    }else{
        echo 'Ocurrio un error!';
    }
}else{
    header ('Location: ../tp9_crud.php');
}
<?php

if (isset ($_GET['id_ropa'])){
    
    $id_ropa = $_GET['id_ropa'];
    
    require '../config/conexion.php';
    
    
    $sql = "DELETE FROM ropa WHERE id_ropa = $id_ropa";
    
    
    $resultado = mysqli_query($conexion, $sql);
    
    if ($resultado != null){
        header ('Location: ../tp9_crud.php?resultado=borradook');
    }else{
        echo 'Ocurrio un error!';
    } 
}else{
    header ('Location: ../tp9_crud.php');
}
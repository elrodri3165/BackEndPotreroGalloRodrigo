<?php
require 'config/conexion.php';

   if (isset ($_GET['id_ropa'])){
    
    $id_ropa = $_GET['id_ropa'];    
    $sql = "SELECT * FROM ropa WHERE id_ropa = $id_ropa";
    
    $resultado = mysqli_query($conexion, $sql);
    $array = mysqli_fetch_array($resultado);
    
    if ($array != null){
        $tipo_prenda = $array['tipo_de_prenda'];
        $marca = $array['marca'];
        $talle = $array['talle'];
        $precio = $array['precio'];
        $boton = 'Modificar';
    }
}else{
    $id_ropa = null;
    $tipo_prenda = null;
    $marca = null;
    $talle = null;
    $precio = null;
    $boton = 'Agregar';
}
?>
<!DOCTYPE html>
<html lang="es">

<?php require 'templates/head.php';?>

<body>
    <div class="container">

        <?php require 'templates/nav.php';?>

        <a class="btn btn-secondary" href="tp9_crud.php" role="button">Volver</a>

        <main>
            <form method="post" action="crud/agregar.php">
               
               <input name="id_ropa" type="hidden" value="<?php echo $id_ropa ?>">
                
                <div class="mb-3">
                    <label for="tipo_prenda" class="form-label">Tipo de prenda</label>
                    <input name="tipo_prenda" type="text" class="form-control" id="tipo_prenda" aria-describedby="Tipo de prenda" required value="<?php echo $tipo_prenda ?>">
                </div>
                
                <div class="mb-3">
                    <label for="marca" class="form-label">Marca</label>
                    <input name="marca" type="text" class="form-control" id="marca" aria-describedby="Marca" required value="<?php echo $marca ?>">
                </div>
                
                <div class="mb-3">
                    <label for="talle" class="form-label">Talle</label>
                    <input name="talle" type="text" class="form-control" id="talle" aria-describedby="Talle" required value="<?php echo $talle ?>">
                </div>
                
                <div class="mb-3">
                    <label for="precio" class="form-label">Precio</label>
                    <input name="precio" type="text" class="form-control" id="precio" aria-describedby="Precio" required value="<?php echo $precio ?>">
                </div>
                
                <button type="submit" class="btn btn-primary"><?php echo $boton ?></button>
                
            </form>
        </main>


    </div>
</body>

</html>

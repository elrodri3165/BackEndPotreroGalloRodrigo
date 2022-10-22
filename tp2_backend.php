<!DOCTYPE html>
<html lang="es">

<?php require 'templates/head.php';?>

<body>
    <div class="container">

         <?php require 'templates/nav.php';?>
        
        
        <?php
        echo '<br>';
        echo '<br>';
        
        echo '1: ';
        $variable = 15;
        
        if ($variable > 0){
            echo 'es positivo';
        }else{
            echo 'es negativo';
        }
        
        echo '<br>';
        echo '<br>';
        
        echo '2: ';
        $variable = 25;
        
        if ($variable > 1 ){
            echo 'es mayor a 1';
        }
        
        if ($variable < 10 ){
            echo 'es menor a 10';
        }
        
        echo '<br>';
        echo '<br>';
        
        
        echo '3: ';
        $variable = 25;
        
        if ($variable > 10 ){
            echo 'es mayor a 10';
        }
        
        if ($variable < 2 ){
            echo 'es menor a 2';
        }
        
        echo '<br>';
        echo '<br>';
        
        echo '4: numeros: ';
        echo $numero1 = 10;
        echo ',';
        echo $numero2 = 50;
        
        if($numero1 > $numero2){
            echo 'suma: ', $numero1 + $numero2;
            echo '<br>';
            echo 'resta: ', $numero1 - $numero2;
        }
        
        echo '<br>';
        echo '<br>';
        
        if($numero2 > $numero1){
            echo 'multiplicacion: ', $numero1 * $numero2;
            echo '<br>';
            $division = $numero1 / $numero2;
            $resultado = intval($division);
            echo 'division: ', $resultado;
            echo 'resto: ', ($numero1 % $numero2);
        }
        
        echo '<br>';
        echo '<br>';
        
        if($numero2 == $numero1){
            echo 'son iguales';
            echo '<br>';
        }
        
        
        
        ?>

    </div>
</body>
</html>
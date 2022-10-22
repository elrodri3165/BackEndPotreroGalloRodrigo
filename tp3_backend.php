<!DOCTYPE html>
<html lang="es">

<?php require 'templates/head.php';?>

<body>
    <div class="container">

        <?php require 'templates/nav.php';?>

        1. Mostrar los números del 1 al 100.
        2. Mostrar los números del 100 al 1.
        3. Mostrar los números pares del 1 al 100.
        4. Mostrar los números impares del 1 al 100.
        5. Mostrar la suma de los números de 1 a 20.
        6. Mostrar la suma de números pares de 1 a 20.

        <?php
        /*ejercicio1*/
        echo '1.', '<br>';
        $i = 1;
        while ($i <= 100) {
            echo $i++, '<br>';
        }
        
        echo '<br>';
        echo '<br>';
        
        
        /*ejercicio2*/
        echo '2.', '<br>';
        $i = 100;
        while ($i <= 100 && $i >= 1) {
            echo $i--, '<br>';
        }
        
        echo '<br>';
        echo '<br>';
        
        /*ejercicio3*/
        echo '3.', '<br>';
        
        $i = 1;
        while ($i <= 100) {
            
            $resultado = $i / 2;
            $resto = ($i % 2);
            
            if ($resto == 0){
                echo 'Es par el numero: ', $i, '<br>';
            }
            $i++;
        }
        
        echo '<br>';
        echo '<br>';
        
        
        /*ejercicio4*/
        echo '4.', '<br>';
        
        $i = 1;
        while ($i <= 100) {
            
            $resultado = $i / 2;
            $resto = ($i % 2);
            
            if ($resto == 0){
                
            }else{
                echo 'Es inpar el numero: ', $i, '<br>';
            }
            $i++;
        }
        
        echo '<br>';
        echo '<br>';
        
        /*ejercicio5*/
        echo '5.', '<br>';
        
        $i = 1;
        $resultado = 0;
        while ($i <= 20) {
            
            $resultado = $resultado + $i;
            
            $i++;
        }
        
        echo 'La sumatoria de numeros del 1 al 20 da: ', $resultado;
        
        echo '<br>';
        echo '<br>';
    
        
        /*ejercicio5*/
        echo '5.', '<br>';
        
        $i = 1;
        $resultado2=0;
        while ($i <= 20) {
            
            $resultado = $i / 2;
            $resto = ($i % 2);
            
            if ($resto == 0){
                $resultado = $resultado + $i;
                
            }
            $i++;
        }
        
        echo 'La sumatoria de numeros del 1 al 20 da: ', $resultado;
        
        echo '<br>';
        echo '<br>';
        
        
        
        ?>

    </div>
</body>

</html>

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

        1. Mostrar los números del 1 al 100.
        2. Mostrar los números del 100 al 1.
        3. Mostrar los números pares del 1 al 100.
        4. Mostrar los números impares del 1 al 100.
        5. Mostrar la suma de los números de 1 a 20.
        6. Mostrar la suma de números pares de 1 a 20.

        <?php require 'nav.php';?>


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

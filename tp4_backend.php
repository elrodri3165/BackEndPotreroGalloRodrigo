<!DOCTYPE html>
<html lang="es">

<?php require 'templates/head.php';?>

<body>
    <div class="container">

        <?php require 'templates/nav.php';?>
        
        1. Almacenar en un array los 10 primeros números pares y mostrar en pantalla uno debajo del otro.
2. Crear un array e introducir los siguientes valores: Pedro, Ana, 34 y 1, sin asignar el índice de la
matriz. Mostrar el esquema del array con print_r().
3. Crear un array asociativo e introducir los siguientes valores:
Nombre: Pedro
Apellido: Torres
Dirección: Av. Mayor 3703
Teléfono: 1122334455
4. Crear un array introduciendo las ciudades: Madrid, Barcelona, Londres, New York, Los Ángeles y
Chicago, sin asignar índices al array. A continuación, muestra el contenido del array.
Ejemplo: La ciudad con el índice 0 tiene el nombre Madrid.
5. Repite el ejercicio anterior pero ahora se ha de crear índices, MD para Madrid, BCL para Barcelona,
LD para Londres, NY para New York, LA para Los Ángeles y CCG para Chicago.
Ejemplo: El índice de Madrid es MD.

        <?php
            
        echo '1. ', '<br>';
        $array = [
            2, 4, 6, 8, 10, 12, 14, 16, 18, 20
        ];
        
        $cantidad = count($array);
        $i = 0;
            
            while ($cantidad > $i){
                echo $array[$i], '<br>';
                $i++;
            }
        
        
        echo '2. ', '<br>';

        
        $array2 = [
            'Pedro', 'Ana', 34, 1
        ];

        echo '<pre>';
        print_r($array2);
        echo '</pre>';
        /*queda mucho mas lindo con las sentencias <pre></pre>*/
        
        
        echo '3. ', '<br>';
        
        
        $array_asociativo = [
          
            'Nombre:' => 'Pedro',
            
            'Apellido: ' => 'Torres',
            
            'Dirección:' => 'Av. Mayor 3703',
            
            'Teléfono' => '1122334455',
        ];
        
        
        echo '4. ', '<br>';
        
        
        $array_ciudades = [
            
            'Madrid', 'Barcelona', 'Londres', 'New York', 'Los Ángeles', 'Chicago'
            
        ];
        
        $contador = 0;
        foreach ($array_ciudades as $row){
            
            echo 'la ciudad con el índice nº ', $contador, ' tiene el nombre de ', $row, '<br>';
            
            $contador++;
        }
        
        echo '5. ', '<br>';
        
        
        $array_ciudades2 = [
            
            'MD' => 'Madrid', 
            'BCL' => 'Barcelona', 
            'LD' => 'Londres', 
            'NY' => 'New York', 
            'LA' => 'Los Ángeles', 
            'CCG' => 'Chicago'
            
        ];
        
        $contador = 0;
        foreach ($array_ciudades2 as $indice => $ciudad){
            
            echo 'la ciudad con el índice nº ', $indice, ' tiene el nombre de ', $ciudad, '<br>';
            
            $contador++;
        }
        
        
        
        ?>

    </div>
</body>

</html>
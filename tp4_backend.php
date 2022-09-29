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

        <?php require 'nav.php';?>


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
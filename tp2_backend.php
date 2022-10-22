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

         <?php require 'nav.php';?>
        
        
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
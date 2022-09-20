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


        <?php require 'nav.php';?>
        
        Crear una variable n y validar que sea un número positivo.
2. Crear una variable n y validar que sea un número mayor a 1 y menor a 10.
3. Crear una variable n y validar que sea un número mayor a 10 o menor a 2.
4. Crear dos variables, una con nombre numero1 y otra con el nombre de numero2. Si numero1 es
mayor a numero2, mostrar por pantalla, la suma y la resta. Si numero2 es mayor a numero1,
mostrar por pantalla la multiplicación, la división entera y el resto de la división. Si numero1 y
numero2 son iguales, mostrar el siguiente mensaje “Los números ingresados son iguales”.
        
        
        <?php
        
        $variable = 1;
        
        if ($variable > 0){
            echo 'es positivo';
        }else{
            echo 'es negativo';
        }
        
        
        
        ?>
    </div>
</body>
</html>
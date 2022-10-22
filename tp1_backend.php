<!DOCTYPE html>
<html lang="es">

<?php require 'templates/head.php';?>

<body>
    <div class="container">

        <?php require 'templates/nav.php';?>

        <form>
            <h3>Ingrese dos numeros</h3>
            <div class="mb-3">
                <input type="number" name="variable1" class="form-control" id="input1">
            </div>
            <div class="mb-3">
                <input type="number" name="variable2" class="form-control" id="input2">
            </div>

            <button type="submit" class="btn btn-primary">Calcular</button>
        </form>



        <?php echo 'Hola Mundo';


        echo '<br>';
        echo '<br>';

        $variable = 'Hola mundo';
        echo $variable;

        echo '<br>';
        echo '<br>';

        echo 'La variable1 = ', $variable1 = 100;
        echo '<br>';
        echo 'La variable2 = ', $variable2 = 50;
        echo '<br>';
        echo '<br>';

        /*sino llegan por get, tienen un valor por defecto, si llegan toman su valor*/
        if (isset ($_GET['variable1'], $_GET['variable2'])){
            $variable1 = $_GET['variable1'];
            $variable2 = $_GET['variable2'];
        }


        /*suma*/
        echo 'Suma:';
        echo $variable1 + $variable2;

        echo '<br>';

        /*resta*/
        echo 'Resta:';
        echo $variable1 - $variable2;

        echo '<br>';


        /*multiplicacion*/
        echo 'Multiplicacion:';
        echo $variable1 * $variable2;

        echo '<br>';

        /*Division*/
        echo 'Division:';
        echo $resultado = $variable1 / $variable2;
        echo '<br>';

        /*resto*/
        echo 'Resto:';
        echo  $variable1 - ($resultado * $variable2);

        echo '<br>';
        echo '<br>';

        echo '20º celcius a Fahrenheit es :';
        $grados = 20;
        $resultado = $grados * 1.8 + 32;
        echo $resultado;

        echo '<br>';
        echo '<br>';

        echo 'Base: ', $base = 18;
        echo '<br>';
        echo 'Altura: ', $altura = 12;

        echo '<br>';
        echo 'Perímetro: ', ($altura * 2) + ($base * 2);
        
        echo '<br>';
        echo 'Área: ', $altura * $base;
        
        echo '<br>';
        echo '<br>';
        
        echo 'Cálculo sobre un círculo, cuyo radio es ', $radio = 30;
        echo '<br>';
        $pi = 3.141592;
        
        echo 'Perímetro círculo: ', 2 * $pi * $radio;
        echo '<br>';
        echo 'Área: ', $pi * ($radio * $radio);
?>

    </div>
</body>
</html>